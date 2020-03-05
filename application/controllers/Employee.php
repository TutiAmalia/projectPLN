<?php defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends Admin_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_employee', 'employee');
		$this->load->library('form_validation');
		$this->load->helper('form');
	}

	public function index()
	{
		$data['title'] = 'Daftar Pegawai';
		$data['page'] = 'admin/pages/employee/table';
		$data['employees'] = $this->employee->get_all_data();
		$this->load->view('admin/index', $data);
	}

	public function add(){
		$data['title'] = 'Tambah data';
		$data['page'] = 'admin/pages/employee/form';

		$employee= $this->employee;
		$validation = $this->form_validation;
		$validation->set_rules($employee->rules());

		if ($validation->run())
		{
			$employee->save();
			$this->session->set_flashdata('success','Berhasil disimpan');
			redirect('employee');
		}

		$this->load->view('admin/index', $data);
	}
	
}
