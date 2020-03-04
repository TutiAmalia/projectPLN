<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_employee extends CI_Model 
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function get_all_data()
	{
		return $this->db
			->select()
			->get('pegawai')
			->result();
	}
	
}
