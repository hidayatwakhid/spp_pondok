<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Profil extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Profil';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_profil');
        $this->load->view('templates/footer');
    }
}

/* End of file Controllername.php */