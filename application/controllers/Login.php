<?php 

    defined('BASEPATH') or exit('No Direct Access Script are Allowed');

    class Login extends Public_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('auth');
            // if ($this->auth->is_logged_in()) {
            //     redirect('dashboard');
            // }
        }

        public function index()
        {
            $this->form_validate();
            $this->load->view('public/login');
        }

        public function process()
        {
            if ($this->form_validate()) {   
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                if ($this->auth->logged_in($username, $password)) {
                    redirect('dashboard');
                }
                else{
                    $message = 'Username atau Password Anda tidak valid';
                }
            }
            else{
                $message = 'Username atau Password tidak boleh kosong yahh';
            }
            $this->session->set_flashdata('msg', $message);
            redirect('login');
        }

        private function form_validate(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_error_delimiters('<li>', '</li>');
            return $this->form_validation->run();
        }
    }
    