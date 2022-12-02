<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Awal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_awal');
    }

    public function index()
    {
        $data['title'] = 'Login';

        //$this->load->view('templates/header', $data);
        //$this->load->view('templates/sidebar', $data);
        $this->load->view('v_awal');
        //$this->load->view('templates/footer');
    }
}

/* End of file Controllername.php */