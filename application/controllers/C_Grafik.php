<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Grafik extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Grafik';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_grafik');
        $this->load->view('templates/footer');
    }
}

/* End of file Controllername.php */