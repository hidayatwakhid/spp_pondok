<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_login');

        if ($this->session->userdata()) {
            
        }else {
            redirect('','refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'Login';

        $this->load->view('templates/header', $data);
        $this->load->view('v_login');
    }

    public function login()
    {
        $this->M_login->cek_login();
    }

    public function logout()
    {
        // $array_items = array('username', 'email', 'password');
        // $this->session->unset_userdata($array_items);

        $this->session->sess_destroy();

        $data['title'] = 'Login';

        $this->load->view('templates/header', $data);
        redirect('');
    }
}

/* End of file Controllername.php */