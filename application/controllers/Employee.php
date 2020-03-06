<?php defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends Admin_Controller 
{
	private static $add_form_type = 1;	
	private static $edit_form_type = 2;

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
		$validation->set_rules($employee->rules(self::$add_form_type));

		if ($validation->run())
		{
			$employee->save();
			$this->session->set_flashdata('success','Berhasil disimpan');
			redirect('employee');
		}

		$this->load->view('admin/index', $data);
	}

	public function edit($id = null)
	{
		if(!isset($id)) redirect('employee/edit');
		
		$data['title'] = 'Edit data';
		$data['page'] = 'admin/pages/employee/edit_form';

		$employee = $this->employee;
		$validation = $this->form_validation;
		$validation->set_rules($employee->rules(self::$edit_form_type));

		if($validation->run()){
			if ($employee->update())
				redirect('employee');
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$data['employee'] = $employee->get_employee($id);
		if(!$data['employee']) show_404();

		$this->load->view('admin/index', $data);

	}

	
}
