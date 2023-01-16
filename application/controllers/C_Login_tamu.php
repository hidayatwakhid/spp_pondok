<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Login_tamu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_santri');
        $this->load->model('m_input_transaksi');
    }

    public function index()
    {
        $data['title'] = 'Dashboard Tamu';
        $data['kamar'] = $this->m_santri->get_kamr()->result();
        $data['kelas'] = $this->m_santri->get_klas()->result();
        $data['santri'] = $this->m_santri->get_data('tb_data_santri')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('v_dashboard_tamu', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        // $this->session_destroy;
        redirect('');
    }

    public function lihat($id_data_santri)
    {
        $data = [
            'title' => 'Input Transaksi',
            // 'isi' => 'tamu/v_tamu_detail',
            'input_transaksi' => $this->m_input_transaksi->get_data_santri_by_id($id_data_santri)->result(),
        ];


        $this->load->view('templates/header', $data);
        $this->load->view('v_tamu_detail', $data);
    }
}

/* End of file Controllername.php */