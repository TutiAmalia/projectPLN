<?php defined('BASEPATH') or exit('No direct script access allowed');

class Holiday extends Admin_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Hari Libur';
		$data['page'] = 'admin/pages/holiday/form';
		$data['periode'] = $this->periode->get_all_data();
        $this->load->view('admin/index', $data);
	}
    
    public function tambah(){
        $this->load->view('admin/v_tampil');
    }
}