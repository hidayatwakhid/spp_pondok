<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard';
        // $data['data_transaksi'] = $this->m_data_transaksi->get_data;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
    }

    /* public function __construct()
    {
        parent::__construct();

        $this->load->model('m_jurnal');
    }

    public function index()
    {
        //$data['title'] = 'Dashboard';
        $data['title'] = 'Dashboard';
        $data['jurnal'] = $this->m_jurnal->get_data('tb_jurnal')->result();
        $data['pemasukan'] = $this->m_jurnal->pemasukan();
        $data['transaksi2'] = $this->m_jurnal->pemasukan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    } */
}
    
    /* End of file Dashboard.php */