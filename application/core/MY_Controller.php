<?php defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}
}

require_once(APPPATH . 'core/Admin_Controller.php');
require_once(APPPATH . 'core/Public_Controller.php');