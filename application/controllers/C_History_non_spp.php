<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_history_non_spp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
         if (isset($_SESSION['username'])) {
            
        }else {
            redirect('','refresh');
        }

        $this->load->model('m_history_non_spp');
    }

    public function index()
    {
        $data['title'] = 'History Transaksi Non SPP';
        $data['jurnal'] = $this->m_history_non_spp->get_data('tb_history_non_spp')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_history_non_spp', $data);
        $this->load->view('templates/footer');
    }

    public function tambah($jenis)
    {

        $data['title'] = 'Tambah Data';
        $data['jenis'] = $jenis;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_tambah_non_spp', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $foto = $_FILES['bukti'];
            if ($foto = '') {
            } else {
                $config = [
                    'upload_path' => './assets/template/foto/bukti',
                    'allowed_types' => 'jpg|jpeg|png|JPG',
                    'max_size' => '10000',
                    'max_width' => '10000',
                    'max_height' => '10000',
                ];
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('bukti')) {
                    // echo 'Gagal Upload Foto';
                } else {
                    $foto = $this->upload->data();
                    $foto = $this->upload->data('file_name');
                }
            }
            
        $username = $this->session->userdata('username');
        $data = array(
            'tgl_history_non_spp' => $this->input->post('tgl_history_non_spp'),
            'pemasukan' => $this->input->post('pemasukan'),
            'pengeluaran' => $this->input->post('pengeluaran'),
            'keterangan' => $this->input->post('keterangan'),
            'created_by' => $username,
            'bukti' => $foto,
        );

        $this->m_history_non_spp->insert_data($data, 'tb_history_non_spp');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil ditambahkan.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('c_history_non_spp');
       
    }

    public function _rules()
    {
        $this->form_validation->set_rules('pemasukan', 'Pemasukan', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('pengeluaran', 'Pengeluaran', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('tgl_history_non_spp', 'Tanggal jurnal', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('created_by', 'Keterangan', 'required', array(
            'required' => '%s harus di isi !!'
        ));
    }

    public function edit($id_history_non_spp)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id_history_non_spp' => $id_history_non_spp,
                'pemasukan' => $this->input->post('pemasukan'),
                'pengeluaran' => $this->input->post('pengeluaran'),
                'tgl_history_non_spp' => $this->input->post('tgl_history_non_spp'),
                'keterangan' => $this->input->post('keterangan'),
                'created_by' => $this->input->post('created_by'),
            );

            $this->m_history_non_spp->update_data($data, 'tb_history_non_spp');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil diubah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('c_history_non_spp');
        }
    }

    public function delete($id)
    {
        $where = array('id_history_non_spp' => $id);

        $this->m_history_non_spp->delete($where, 'tb_history_non_spp');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil didelete.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('c_history_non_spp');
    }
}

/* End of file Controllername.php */