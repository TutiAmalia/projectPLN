<?php defined('BASEPATH') or exit('No direct script access allowed');

class Presence extends Public_Controller 
{
	private static $path = './excel/';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_presence', 'presence');
		$this->load->helper('form');
		$this->load->library(array('form_validation', 'spreadsheet_excel_reader', 'upload'));
	}

	public function clear($page = '')
	{
		$this->session->unset_userdata('id_periode');
		redirect("presence/{$page}");
	}

	public function index()
	{
		$data['title'] = 'Import File';
		$data['page'] = 'admin/pages/presence/form';
		$data['periode'] = $this->presence->get_all_periode();

		$this->form_validation->set_rules($this->presence->rules());
		if ($this->form_validation->run())
			if ($this->_extract()) 
				redirect('presence/report');
		
		$this->load->view('admin/index', $data);
	}

	public function report()
	{
		$data['title'] = 'Laporan daftar hadir bulanan pegawai';
		$data['page'] = 'admin/pages/presence/table';
		$data['periode'] = $this->presence->get_all_periode();
		$id_periode = $this->presence->get_last_period();
		if (!$this->session->userdata('id_periode')) {
			$this->session->set_userdata('id_periode', $id_periode);
		}
		$data['id_periode'] = $this->session->userdata('id_periode');
		$data['report'] = $this->presence->get_report();
		$this->load->view('admin/index', $data);
	}

	public function select_periode()
	{
		$id_periode = $this->input->post('id_periode');
		$this->session->set_userdata('id_periode', $id_periode);
		redirect('presence/report');
	}

	public function print()
	{
		$id_periode = $this->session->userdata('id_periode');
		$data['periode'] = $this->presence->get_periode($id_periode);
		$data['action'] = 'print';
		$data['report'] = $this->presence->get_report();
		$this->load->view('admin/pages/presence/pdf', $data);
	}

	public function download()
	{
		$id_periode = $this->session->userdata('id_periode');
		$data['periode'] = $this->presence->get_periode($id_periode);
		$data['action'] = 'download';
		$data['report'] = $this->presence->get_report();
		$this->load->view('admin/pages/presence/pdf', $data);
	}

	private function _do_import($id_periode)
	{
		$periode = $this->presence->get_periode($id_periode);
		$file_name = "{$periode->tahun}_{$periode->bulan}_log";

		$this->upload->initialize($this->presence->config($file_name));
		
		if (is_uploaded_file($_FILES['file_excel']['tmp_name'])) {
			if (is_file(self::$path."{$file_name}.xls")) {
				$this->session->set_flashdata('file_excel',  'File sudah pernah diunggah sebelumnya. Pilih periode lain jika hendak mengunggah');
			} else {
				if ($this->upload->do_upload('file_excel')) {
					return true;
				} else {
					$this->session->set_flashdata('file_excel', $this->upload->display_errors());
				}
			}
		} else {
			$this->session->set_flashdata('file_excel',  'Pilih file log terlebih dahulu');
		}

		return false;
	}


	private function _extract()
	{
		$post = $this->input->post();
		$id_periode = $post['id_periode'];
		$periode = $this->presence->get_periode($id_periode);
		$upload_result = $this->_do_import($id_periode);
		$employee = array();
		$log = array();
		$report = array();
		if ($upload_result) {
			$file_name = self::$path."{$periode->tahun}_{$periode->bulan}_log.xls";
			$data = new Spreadsheet_Excel_Reader($file_name);
			$rows = $data->rowcount();
			for ($i=5; $i <= $rows; $i++) {
				if ($i % 2 == 1) {
					if (!empty($data->val($i, 3))) {
						$employee[] = preg_replace('/[\x00-\x1F\x7F]/u', '', $data->val($i, 3));
					}
				}
				$days = cal_days_in_month(CAL_GREGORIAN, $periode->bulan, $periode->tahun);
				for ($j=1; $j <= $days; $j++) { 
					if ($i % 2 == 1) {
						continue;
					}
					if (!empty($data->val($i, $j))) {
						$log_temp['id_pegawai'] = $employee[$i /2 - 3];
						$log_temp['id_periode'] = $id_periode;
						$log_temp['tanggal'] = (int) $j; 
						$log_temp['jam_masuk'] = trim(preg_split('/\r\n|\r|\n/', $data->val($i, $j))[0]);	
						array_push($log, $log_temp);
					}
				}
			}
			if ($this->presence->insert_log($log)) {
				foreach ($employee as $id) {
					$report_temp['id_pegawai'] = $id;
					$report_temp['id_periode'] = $id_periode;
					$report_temp['kehadiran'] = $this->presence->count_presence($id);
					$report_temp['keterlambatan'] = $this->presence->count_delay($id);
					$weekdays = count_weekdays($periode->bulan, $periode->tahun);
					$permits = $this->presence->count_permit($id, $periode->bulan);
					$holidays = $this->presence->count_holiday($periode->bulan);
					$absences = (int) $weekdays - $report_temp['kehadiran'] - $permits - $holidays;
					$report_temp['ketidakhadiran'] = $absences >= 0 ? $absences : 0;
					$stat = $report_temp['kehadiran'] / ($weekdays - $holidays) * 100;
					$report_temp['persentase_kehadiran'] = $stat <= 100 ? $stat : 100;
					array_push($report, $report_temp);
				}
				if ($this->presence->insert_report($report)){
					$this->session->set_userdata('id_periode', $id_periode);
					return true;
				}
			}
		} 
		return false;
	}
}
