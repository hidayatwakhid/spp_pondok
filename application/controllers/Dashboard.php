<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dashboard');
    }

    public function index()
    {
        // cek session 
        if (isset($_SESSION['username'])) {
            $data['title'] = 'Dashboard';
            $data['jumlah_pemasukan'] = $this->m_dashboard->jumlah_pemasukan()->pemasukan;
            $data['jumlah_pengeluaran'] = $this->m_dashboard->jumlah_pengeluaran()->pengeluaran;
            $data['pemasukan_spp'] = $this->m_dashboard->pemasukan_spp()->jumlah_byr;
            // $data['data_transaksi'] = $this->m_data_transaksi->get_data;

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('dashboard', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('');
        }

       
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