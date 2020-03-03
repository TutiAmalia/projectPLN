<?php defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends Admin_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_employee', 'employee');
	}

	public function index()
	{
		$data['title'] = 'Daftar Pegawai';
		$data['page'] = 'admin/pages/employee/table';

		$data['employees'] = $this->employee->get_all_data();
		$this->load->view('admin/index', $data);
	}
	
}
