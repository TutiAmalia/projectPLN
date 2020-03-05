<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_presence extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
	}

	private $_table ="presensi";
	public $id;
	public $id_periode;
	public $tanggal;
	public $keterangan;

	public function rules()
	{
		return [
			['field'=> 'tanggal',
			'label' => 'tanggal',
			'rules' => 'required|trim|numeric'],

			['field'=> 'id_periode',
			'label' => 'periode',
			'rules' => 'required|trim'],

			['field'=> 'keterangan',
			'label' => 'keterangan',
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
}