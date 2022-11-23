<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Kamar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_kamar');
    }

    public function index()
    {
        $data['title'] = 'Kamar';
        $data['kamar'] = $this->m_kamar->get_data('tb_kmr')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_kamar', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Kamar';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_tambah_kamar');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'nama_kmr' => $this->input->post('nama_kmr'),
            );

            $this->m_kamar->insert_data($data, 'tb_kmr');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil ditambahkan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('c_kamar');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_kmr', 'Nama Kamar', 'required', array(
            'required' => '%s harus di isi !!'
        ));
    }


    public function edit($id_kmr)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id_kmr' => $id_kmr,
                'nama_kmr' => $this->input->post('nama_kmr'),
            );

            $this->m_kamar->update_data($data, 'tb_kmr');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil diubah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('c_kamar');
        }
    }

    public function delete($id)
    {
        $where = array('id_kmr' => $id);

        $this->m_kamar->delete($where, 'tb_kmr');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil didelete.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('c_kamar');
    }
}

/* End of file Controllername.php */