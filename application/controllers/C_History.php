<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_History extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
         if (isset($_SESSION['username'])) {
            
        }else {
            redirect('','refresh');
        }

        $this->load->model('m_history');
    }

    public function index()
    {
        $data['title'] = 'History Transaksi SPP';
        $data['history'] = $this->m_history->get_data('tb_data_transaksi')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_history', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah History';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_tambah_history');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'nama_thn' => $this->input->post('nama_thn'),
                'nominal_tagihan' => $this->input->post('nominal_tagihan'),
            );

            $this->m_history->insert_data($data, 'tb_thn');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil ditambahkan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('c_history');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_thn', 'Nama Tahun', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('nominal_tagihan', 'Nominal Tagihan', 'required', array(
            'required' => '%s harus di isi !!'
        ));
    }

    public function edit($id_thn)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id_thn' => $id_thn,
                'nama_thn' => $this->input->post('nama_thn'),
                'nominal_tagihan' => $this->input->post('nominal_tagihan'),
            );

            $this->m_history->update_data($data, 'tb_thn');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil diubah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('c_history');
        }
    }

    public function delete($id)
    {
        $where = array('id_thn' => $id);

        $this->m_history->delete($where, 'tb_thn');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil didelete.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('c_history');
    }
}

/* End of file Controllername.php */