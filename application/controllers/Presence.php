<?php defined('BASEPATH') or exit('No direct script access allowed');

class Presence extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_presence', 'presence');
		$this->load->helper('form');
	}

	public function index()
	{
		$data['title'] = 'Import File';
		$data['page'] = 'admin/pages/presence/form';
		$data['periode'] = $this->presence->get_periode();

		$this->load->view('admin./index', $data);
	}
}
