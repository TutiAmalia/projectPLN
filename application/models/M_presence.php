<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_presence extends CI_Model 
{
	private $_table ="log_presensi";
	public $id;
	public $id_periode;
	public $tanggal;
	public $keterangan;

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all_periode()
	{
		return $this->db->get('periode')->result();
	}

	public function get_periode($id)
	{
		return $this->db
			->select()
			->where('id', $id)
			->get('periode')
			->row();
	}

	public function get_last_period()
	{
		return $this->db
			->select('id')
			->order_by('id', 'DESC')
			->limit(1)
			->get('periode')
			->row()
			->id;
	}

	public function get_report()
	{
		$id_periode = $this->session->userdata('id_periode');
		return $this->db
			->select('a.id, a.nama, a.jenis, b.*')
			->where('a.id = b.id_pegawai')
			->where('b.id_periode', $id_periode)
			->from('pegawai a, presensi b')
			->get()
			->result();
	}
	
	public function get_daily_report($id_pegawai, $id_periode)
	{
		return $this->db
			->select()
			->where('id_pegawai', $id_pegawai)
			->where('id_periode', $id_periode)
			->get($this->_table)
			->result_array();
	}

	public function rules()
	{
		return [
			['field'=> 'id_periode',
			'label' => 'periode',
			'rules' => 'required|trim'],
		];
	}

	public function config($file_name)
	{
		$config['upload_path'] = './excel';
		$config['allowed_types'] = 'xls';
		$config['max_size'] = '2048';
		$config['file_name'] = $file_name;

		return $config;
	}

	public function is_employee($id)
	{
		return $this->db
			->select('id')
			->where('id', $id)
			->get('pegawai')
			->num_rows();
	}

	public function get_employee($id_pegawai)
	{
		return $this->db
			->select()
			->where('id', $id_pegawai)
			->get('pegawai')
			->row();
	}

	private function _get_date_log($id_pegawai, $id_periode)
	{
		return $this->db
		->select('tanggal')
		->where('id_pegawai', $id_pegawai)
		->where('id_periode', $id_periode)
		->get($this->_table)
		->result_array();
	}

	public function count_presence($id_pegawai, $id_periode)
	{
		return $this->db
			->select('id')
			->where('id_pegawai', $id_pegawai)
			->where('id_periode', $id_periode)
			->get($this->_table)
			->num_rows();
	}

	public function count_delay($id_pegawai, $id_periode)
	{
		$periode = $this->get_periode($id_periode);
		$log = $this->_get_date_log($id_pegawai, $id_periode);
		$dates = array_column($log, 'tanggal');
		$count = 0;
		foreach ($dates as $date) {
			$this->db->select('id');
			$this->db->where('id_pegawai', $id_pegawai);
			$this->db->where('id_periode', $id_periode);
			$this->db->where('tanggal', $date);
			if (is_friday($date, $periode->bulan, $periode->tahun)) {
				$this->db->where('jam_masuk >', '07:30:00');
			} else {
				$this->db->where('jam_masuk >', '08:00:00');
			}
			$result = $this->db->get($this->_table);
			$result = $result->num_rows();
			$count += $result; 
		}
		return $count;
	}

	public function count_permit($id_pegawai, $id_periode)
	{
		return $this->db
			->select('id')
			->where('id_pegawai', $id_pegawai)
			->where('id_periode', $id_periode)
			->get('perizinan')
			->num_rows();
	}

	public function count_holiday($periode)
	{
		return $this->db
			->select('id')
			->where('id_periode', $periode)
			->get('hari_libur')
			->num_rows();
	}

	public function insert_report($data)
	{
		return $this->db->insert_batch('presensi', $data);
	}

	public function insert_log($data)
	{
		return $this->db->insert_batch($this->_table, $data);
	}
}