<?php defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends Public_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('auth');
	}

	public function index()
	{
		if (!$this->auth->is_logged_in()) {
			redirect(site_url());
		}
		
		$logged_in = $this->session->userdata('logged_in');

		if (!empty($logged_in)) {
			$this->session->sess_destroy();
		}

		redirect('login');
	}
	
}
