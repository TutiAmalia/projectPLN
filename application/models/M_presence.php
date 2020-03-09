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
			->select('a.id, a.nama, b.*')
			->where('a.id = b.id_pegawai')
			->where('b.id_periode', $id_periode)
			->from('pegawai a, presensi b')
			->get()
			->result();
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


	public function count_presence($id)
	{
		return $this->db
			->select('id')
			->where('id_pegawai', $id)
			->get($this->_table)
			->num_rows();
	}

	public function count_delay($id)
	{
		return $this->db
			->select('id')
			->where('id_pegawai', $id)
			->where('jam_masuk >', '08:00:00')
			->get($this->_table)
			->num_rows();
	}

	public function count_permit($id, $periode)
	{
		return $this->db
			->select('id')
			->where('id_pegawai', $id)
			->where('id_periode', $periode)
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