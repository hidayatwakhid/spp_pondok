<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Login_tamu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_santri');
    }

    public function index()
    {
        $data['title'] = 'Dashboard Tamu';
        $data['kamar'] = $this->m_santri->get_kamr()->result();
        $data['kelas'] = $this->m_santri->get_klas()->result();
        $data['santri'] = $this->m_santri->get_data('tb_data_santri')->result();

        $this->load->view('templates/header', $data);
        //$this->load->view('templates/sidebar', $data);
        $this->load->view('v_dashboard_tamu', $data);
        //$this->load->view('templates/footer');
    }
}

/* End of file Controllername.php */