<?php defined('BASEPATH') or exit('No direct script access allowed');

class Holiday extends Admin_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_holiday', 'holiday');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Hari Libur';
		$data['page'] = 'admin/pages/holiday/form';
		$data['holiday'] = $this->holiday->get_all_data();
        $this->load->view('admin/index', $data);
	}

	public function add(){
		$holiday= $this->holiday;
		$validation= $this->form_validation;
		$validation->set_rules($holiday->rules());

		if ($validation->run())
		{
			$holiday->save();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$this->load->view(admin/pages/holiday/form);
	}
    
}