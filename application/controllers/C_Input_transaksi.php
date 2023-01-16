<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_input_transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_input_transaksi');
        if (isset($_SESSION['username'])) {
            
        }else {
            redirect('','refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'Data Transaksi';
        $data['santri'] = $this->m_input_transaksi->get_san()->result();
        $data['tagihan'] = $this->m_input_transaksi->get_tghn()->result();
        $data['input_transaksi'] = $this->m_input_transaksi->get_data('tb_data_transaksi')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_input_transaksi', $data);
        $this->load->view('templates/footer');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_data_santri', 'Nama', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('id_data_tagihan', 'Besar Tagihan', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('jumlah_byr', 'Julah Bayar', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('sisa', 'Sisa', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('tgl_byr', 'Tanggal Bayar', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('created_by', 'Created By', 'required', array(
            'required' => '%s harus di isi !!'
        ));
    }

    public function update($id_data_transaksi)
    {
        // print_r($id_data_transaksi);
        // die();

        $this->m_input_transaksi->update_data($id_data_transaksi, 'tb_data_transaksi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil diubah.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('c_santri');


        // $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            // $this->index();
        } else {
            // $jumlah_bayar_baru = $this->input->post('keterangan') + 


        }
    }

    public function edit($id_data_transaksi)
    {
        // print_r($id_data_transaksi);
        // die();

        $this->m_input_transaksi->edit_data($id_data_transaksi, 'tb_data_transaksi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil diubah.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('c_santri');


        // $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            // $this->index();
        } else {
            // $jumlah_bayar_baru = $this->input->post('keterangan') + 


        }
    }

    public function next($id_data_transaksi)
    {

        $this->m_input_transaksi->next($id_data_transaksi, 'tb_data_transaksi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil diubah.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('c_santri');
    }
    public function kembali($id_data_transaksi)
    {
        // print_r('ini' . $id_data_transaksi);
        // die();

        $this->m_input_transaksi->kembali($id_data_transaksi, 'tb_data_transaksi');
        // $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        // Data Berhasil diubah.
        // <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        // <span aria-hidden="true">&times;</span>
        // </button></div>');
        redirect('c_santri');
    }

    public function delete($id)
    {
        $where = array('id_data_transaksi' => $id);

        $this->m_input_transaksi->delete($where, 'tb_data_transaksi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil didelete.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('c_input_transaksi');
    }

    public function input_transaksi($id_data_santri)
    {
        $data = [
            'title' => 'Input Transaksi',
            'isi' => 'input_transaksi/input_transaksi',
            'input_transaksi' => $this->m_input_transaksi->get_data_santri_by_id($id_data_santri)->result(),
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_input_transaksi', $data);
        $this->load->view('templates/footer');
    }

    public function tambah($id)
    {
        $jml_bayar = $this->input->post('jml_bayar');
        $this->m_input_transaksi->tambah($id, $jml_bayar);
        redirect('c_santri');
    }

    public function reminder($id_data_transaksi, $id_data_santri)
    {
        $this->m_input_transaksi->reminder($id_data_transaksi, $id_data_santri);
    }
}

/* End of file Controllername.php */