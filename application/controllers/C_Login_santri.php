<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Login_santri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_santri');
    }

    public function index()
    {
        $data['title'] = 'Login Santri';

        $this->load->view('templates/header', $data);
        //$this->load->view('templates/sidebar', $data);
        $this->load->view('v_login_santri');
        //$this->load->view('templates/footer');
    }
}

/* End of file Controllername.php */