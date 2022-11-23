<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Tahun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_tahun');
    }

    public function index()
    {
        $data['title'] = 'Tahun';
        $data['tahun'] = $this->m_tahun->get_data('tb_thn')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_tahun', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Tahun';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_tambah_tahun');
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

            $this->m_tahun->insert_data($data, 'tb_thn');

            // ambil id tahun paling besar = ambil data tahun terakhir
            $id_thn = $this->db->query('SELECT * FROM `tb_thn` WHERE id_thn IN (SELECT MAX(id_thn) FROM `tb_thn`)')->row();

            // ambil id semua bulan 
            $id_bln_tghn = $this->db->query('SELECT id_bln FROM `tb_bulan` ')->result();


            foreach ($id_bln_tghn as $bul) {
                $this->db->insert('tb_data_tagihan', ['id_thn' => $id_thn->id_thn, 'id_bln' => $bul->id_bln, 'nominal' => $id_thn->nominal_tagihan]);
            }


            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil ditambahkan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('c_tahun');
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

            $this->m_tahun->update_data($data, 'tb_thn');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil diubah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('c_tahun');
        }
    }

    public function delete($id)
    {
        $where = array('id_thn' => $id);

        $this->m_tahun->delete($where, 'tb_thn');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil didelete.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('c_tahun');
    }
}

/* End of file Controllername.php */