<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
         if (isset($_SESSION['username'])) {
            
        }else {
            redirect('','refresh');
        }
        $this->load->model('m_laporan');
        $this->load->model('m_kamar');
        $this->load->model('m_tahun');
    }

    public function index()
    {
        $data['title'] = 'Laporan Keuangan';
        $data['kamar'] = $this->m_kamar->get_data('tb_kmr')->result();
        $data['tahun'] = $this->m_tahun->get_data('tb_thn')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_laporan', $data);
        $this->load->view('templates/footer');
    }

    public function cetak()
    {
        $id = $this->input->post('id_kamar');
        $tahun = $this->input->post('id_tahun');

        $data = [
            'data_santri' => $this->m_laporan->get_data_santri($id),
            'data_januari' => $this->m_laporan->get_januari($id, $tahun),
            'data_februari' => $this->m_laporan->get_februari($id, $tahun),
            'data_maret' => $this->m_laporan->get_maret($id, $tahun),
            'data_april' => $this->m_laporan->get_april($id, $tahun),
            'data_mei' => $this->m_laporan->get_mei($id, $tahun),
            'data_juni' => $this->m_laporan->get_juni($id, $tahun),
            'data_juli' => $this->m_laporan->get_juli($id, $tahun),
            'data_agustus' => $this->m_laporan->get_agustus($id, $tahun),
            'data_september' => $this->m_laporan->get_september($id, $tahun),
            'data_oktober' => $this->m_laporan->get_oktober($id, $tahun),
            'data_november' => $this->m_laporan->get_november($id, $tahun),
            'data_desember' => $this->m_laporan->get_desember($id, $tahun),
            'data_kamar' => $this->m_laporan->get_kamar($id),
            'data_tahun' => $this->m_laporan->get_tahun($tahun),

        ];

        $this->load->view('v_print', $data);
    }
}

/* End of file Controllername.php */