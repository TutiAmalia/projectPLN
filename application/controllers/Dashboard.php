<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_dashboard', 'dashboard');
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['employee_numrows'] = $this->dashboard->get_employee_numrows();
		$data['holiday_numrows'] = $this->dashboard->get_holiday_numrows();
		$data['vacation_employee_numrows'] = $this->dashboard->get_vacation_employee_numrows();
		$data['page'] = 'admin/pages/home';
		$this->load->view('admin/index', $data);
	}
}
