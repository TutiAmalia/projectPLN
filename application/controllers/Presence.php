<?php defined('BASEPATH') or exit('No direct script access allowed');

class Presence extends Public_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_presence', 'presence');
		$this->load->helper('form');
		$this->load->library(array('form_validation', 'spreadsheet_excel_reader'));
	}

	public function index()
	{
		$data['title'] = 'Import File';
		$data['page'] = 'admin/pages/presence/form';
		$data['periode'] = $this->presence->get_periode();

		$validation = $this->form_validation;
		$validation->set_rules($this->presence->rules());
		if ($validation->run())
			$data['data'] = $this->_extract();
		else
			$data['data'] = null;
		
		$this->load->view('admin/index', $data);
	}

	// public function import()
	// {
	// 	$data['title'] = 'halah';
	// 	$data['page'] = 'admin/pages/presence/temp';
		
		
	// 	$this->load->view('admin/index', $data);
	// }

	public function extract()
	{
		// $post = $this->input->post();
		// $periode = $post['id_periode'];
		// $upload_result = $this->presence->do_import();
		$employee = array();
		$log = array();
		$temp = array();
		// $output = false;
		// var_dump($upload_result);
		// if ($upload_result['success']) {
			$data = new Spreadsheet_Excel_Reader('./excel/02Log.xls');
			$rows = $data->rowcount(0);
			for ($i=5; $i <= $rows; $i++) {
				if ($i % 2 == 1) {
					if (!empty($data->val($i, 3))) {
						$employee[] = trim($data->val($i, 3));	
					}
				}
				$date = cal_days_in_month(CAL_GREGORIAN, date('n'), date('Y'));
				for ($j=1; $j <= $date; $j++) { 
					if ($i % 2 == 1) {
						continue;
					}
					if (!empty($data->val($i, $j))) {
						$temp['id_pegawai'] = trim(preg_replace('~[\r\n]+~', '', $employee[($i / 2) - 3]));
						$temp['id_periode'] = (int) 2;
						$temp['tanggal'] = (int) $j; 
						$temp['jam_masuk'] = trim(preg_split('/\r\n|\r|\n/', $data->val($i, $j))[0]);	
						array_push($log, $temp);
					}
				}
			}
			// print_r($log);
			echo json_encode($log, JSON_PRETTY_PRINT);
		// } else {
		// 	echo 'error rekkkkk';
		// }
		// return $upload_result;
	}
}
