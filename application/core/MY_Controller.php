<?php 

    defined('BASEPATH') or exit('No Direct Access Script are Allowed');

    //Buat controller awal dari CI_Controller
    class MY_Controller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }
    }


    //pemanggilan kelas turunan admin dan public
    require_once(APPPATH . 'core/Admin_Controller.php');
    require_once(APPPATH . 'core/Public_Controller.php');







