<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Santri extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
         if (isset($_SESSION['username'])) {
            
        }else {
            redirect('','refresh');
        }

        $this->load->model('m_santri');
    }


    public function index()
    {
        $data['title'] = 'Santri';
        $data['kamar'] = $this->m_santri->get_kamr()->result();
        $data['kelas'] = $this->m_santri->get_klas()->result();
        $data['santri'] = $this->m_santri->get_data('tb_data_santri')->result();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_santri', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Santri';

        $data['kamar'] = $this->m_santri->get_kamr()->result();
        $data['kelas'] = $this->m_santri->get_klas()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_tambah_santri');
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        //$data['title'] = 'Detail Santri';
        //$data['santri'] = $this->m_santri->get_data_by_id($id);

        $data = [
            'title' => 'Detail Santri ',
            'isi' => 'data_santri/detail',
            'data' => $this->m_santri->get_data_by_id($id),
            'id' => $id,
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_profil', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $random = rand();
        $tahun = date("Y");
        $tahunnya = substr($tahun, -2);
        $jk = $this->input->post('jenis_kelamin');

        // hitung jumlah santri 
        $urut = $this->db->get('tb_data_santri')->num_rows();
        // tambah satu 
        $urutan = $urut + 1;

        $format = '%1$04d ';
        $nis3 = sprintf($format, $urutan);




        if ($jk == 'Perempuan') {
            $jenis_kelamin = '02';
        } else {
            $jenis_kelamin = '01';
        }
        $nisnya = $tahunnya . $jenis_kelamin . $nis3;

            $data = array(
                'nama' => $this->input->post('nama'),
                'nis' => $nisnya,
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'id_kamar' => $this->input->post('id_kamar'),
                'id_kelas' => $this->input->post('id_kelas'),
                'no_hp' => $this->input->post('no_hp'),
                'password' => substr($random, 0, 5),
                'tgl_masuk' => $this->input->post('tgl_masuk'),
                'status' => $this->input->post('status')
            );

            $insert = $this->m_santri->insert_data($data, 'tb_data_santri');
            $tes = $this->m_santri->getMaxId();
            $maxId = $tes->id;

            $insert_tb_transaksi = $this->m_santri->insert_data_transaksi($maxId);
            
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil ditambahkan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('c_santri');
       
    }
    
    public function edit($id)
    {
       
            $data = array(
                'id' => $id,
                'nama' => $this->input->post('nama'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'id_kamar' => $this->input->post('id_kamar'),
                'id_kelas' => $this->input->post('id_kelas'),
                'no_hp' => $this->input->post('no_hp'),
                'tgl_masuk' => $this->input->post('tgl_masuk'),
                'status' => $this->input->post('status'),
                
            );

            $this->m_santri->update_data($data, 'tb_data_santri');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil diubah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('c_santri/');
      
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama Santri', 'required', array(
            'required' => '%s harus di isi !!'
        ));
       
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('id_kamar', 'Kamar', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('id_kelas', 'Kelas', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('status', 'Status', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        // $this->form_validation->set_rules('foto', 'Foto', 'required', array(
        //     'required' => '%s harus di isi !!'
        // ));
    }

    public function delete($id)
    {
        $where = array('id' => $id);

        $this->m_santri->delete($where, 'tb_data_santri');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil didelete.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('c_santri');
    }

    public function kirim($id)
    {
        $this->m_santri->kirim($id);
    }
}

/* End of file Controllername.php */