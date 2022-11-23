<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Jurnal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_jurnal');
    }

    public function index()
    {
        $data['title'] = 'Jurnal';
        $data['jurnal'] = $this->m_jurnal->get_data('tb_jurnal')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_jurnal', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Jurnal';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_tambah_jurnal');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'pemasukan' => $this->input->post('pemasukan'),
                'pengeluaran' => $this->input->post('pengeluaran'),
                'tgl_jurnal' => $this->input->post('tgl_jurnal'),
                'keterangan' => $this->input->post('keterangan'),
                'created_by' => $this->input->post('created_by'),

            );

            $this->m_jurnal->insert_data($data, 'tb_jurnal');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil ditambahkan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('c_jurnal');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('pemasukan', 'Pemasukan', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('pengeluaran', 'Pengeluaran', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('tgl_jurnal', 'Tanggal jurnal', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('created_by', 'Keterangan', 'required', array(
            'required' => '%s harus di isi !!'
        ));
    }

    public function edit($id_jurnal_umum)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id_jurnal_umum' => $id_jurnal_umum,
                'pemasukan' => $this->input->post('pemasukan'),
                'pengeluaran' => $this->input->post('pengeluaran'),
                'tgl_jurnal' => $this->input->post('tgl_jurnal'),
                'keterangan' => $this->input->post('keterangan'),
                'created_by' => $this->input->post('created_by'),
            );

            $this->m_jurnal->update_data($data, 'tb_jurnal');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil diubah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('c_jurnal');
        }
    }

    public function delete($id)
    {
        $where = array('id_jurnal_umum' => $id);

        $this->m_jurnal->delete($where, 'tb_jurnal');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil didelete.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('c_jurnal');
    }
}

/* End of file Controllername.php */