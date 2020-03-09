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
		$month = date('n');
		$year = date('Y');
		$id_periode = $this->dashboard->get_periode_id($month, $year);
		$data['employee_numrows'] = $this->dashboard->get_employee_numrows();
		$data['holiday_numrows'] = $this->dashboard->get_holiday_numrows($id_periode);
		$data['vacation_employee_numrows'] = $this->dashboard->get_vacation_employee_numrows($id_periode);
		$data['top_10_employees'] = $this->dashboard->get_top_10($id_periode - 1);
		$data['title'] = 'Dashboard';
		$data['page'] = 'admin/pages/home';
		$this->load->view('admin/index', $data);
	}
}
