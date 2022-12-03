<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_login');
    }

    public function index()
    {
        $data['title'] = 'Login';

        $this->load->view('templates/header', $data);
        //$this->load->view('templates/sidebar', $data);
        $this->load->view('v_login');
        //$this->load->view('templates/footer');
    }
}

/* End of file Controllername.php */