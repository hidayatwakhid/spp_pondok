<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Tagihan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_tagihan');
    }

    public function index()
    {
        $data['title'] = 'Tagihan';
        $data['tagihan'] = $this->m_tagihan->get_data('tb_data_tagihan')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_tagihan', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah tagihan';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_tambah_tagihan');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'id_thn' => $this->input->post('id_thn'),
                'id_bln' => $this->input->post('id_bln'),
                'nominal' => $this->input->post('nominal'),
            );

            $this->m_tagihan->insert_data($data, 'tb_data_tagihan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil ditambahkan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('c_tagihan');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_thn', 'Tahun', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('id_bln', 'Bulam', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('nominal', 'Nominal', 'required', array(
            'required' => '%s harus di isi !!'
        ));
    }


    public function edit($id)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id' => $id,
                'id_thn' => $this->input->post('id_thn'),
                'id_bln' => $this->input->post('id_bln'),
                'nominal' => $this->input->post('nominal'),
            );

            $this->m_tagihan->update_data($data, 'tb_data_tagihan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil diubah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('c_tagihan');
        }
    }

    public function delete($id)
    {
        $where = array('id' => $id);

        $this->m_tagihan->delete($where, 'tb_data_tagihan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil didelete.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('c_tagihan');
    }
}

/* End of file Controllername.php */