<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_presence extends CI_Model 
{
	private $_table ="presensi";
	public $id;
	public $id_periode;
	public $tanggal;
	public $keterangan;

	public function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
	}

	public function rules()
	{
		return [
			['field'=> 'id_periode',
			'label' => 'periode',
			'rules' => 'required|trim'],

			['field'=> 'file_excel',
			'label' => 'file log',
			'rules' => 'required|trim']
		];
	}

	public function get_periode()
	{
		return $this->db
			->select()
			->get('periode')
			->result();
	}

	private function _config($file_name)
	{
		$config['upload_path'] = './excel';
		$config['allowed_types'] = 'xls|xlsx';
		$config['max_size'] = '2048';
		$config['file_name'] = $file_name;

		return $config;
	}

	public function do_import()
	{
		$file_uploaded = $this->upload->data();
		$file_name = date('Y') .'_'. $file_uploaded['file_name'];

		$this->upload->initialize($this->_config($file_name));

		$output = array();

		if ($this->upload->do_upload('file_excel')) {
			$output = ['success' => true, 'file' => $file_uploaded, 'error' => null];
		} else {
			$output = ['success' => false, 'file' => '', 'error' => $this->upload->display_errors()];
		}

		return $output;
	}
}