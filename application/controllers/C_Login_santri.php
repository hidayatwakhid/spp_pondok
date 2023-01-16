<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Login_santri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        

        $this->load->model('m_santri');
        $this->load->model('m_login');
        $this->load->model('m_input_transaksi');

    }


    public function index()
    {
        $data['title'] = 'Login Santri';
        $data['kamar'] = $this->m_santri->get_kamr()->result();
        $data['kelas'] = $this->m_santri->get_klas()->result();
        $data['santri'] = $this->m_santri->get_data('tb_data_santri')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('v_login_santri', $data);
    }
    public function dashboard()
    {
        $data['title'] = 'Login Santri';
        $data['kamar'] = $this->m_santri->get_kamr()->result();
        $data['kelas'] = $this->m_santri->get_klas()->result();
        $data['santri'] = $this->m_santri->get_data('tb_data_santri')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('v_dashboard_santri', $data);
    }

    public function login()
    {
        $this->m_login->cek_login_santri();
    }

    public function lihat($id_data_santri)
    {
        $data = [
            'title' => 'Input Transaksi',
            // 'isi' => 'tamu/v_tamu_detail',
            'input_transaksi' => $this->m_input_transaksi->get_data_santri_by_id($id_data_santri)->result(),
        ];


        $this->load->view('templates/header', $data);
        $this->load->view('v_santri_detail', $data);
    }
    public function profil($id_data_santri)
    {

        $data = [
            'title' => 'Input Transaksi',
            'input_transaksi' => $this->m_input_transaksi->get_data_santri_by_id($id_data_santri),
            'data' => $this->m_santri->get_data_by_id($id_data_santri),
            'kamar' => $this->m_santri->get_kamr()->result(),
            'kelas' => $this->m_santri->get_klas()->result(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('v_santri_profil', $data);
    }

    public function edit($id)
    {
            $foto = $_FILES['foto'];
            if ($foto = '') {
            } else {
                $config = [
                    'upload_path' => './assets/template/foto',
                    'allowed_types' => 'jpg|jpeg|png|JPG',
                    'max_size' => '10000',
                    'max_width' => '10000',
                    'max_height' => '10000',
                ];
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    // echo 'Gagal Upload Foto';
                } else {
                    $foto = $this->upload->data();
                    $foto = $this->upload->data('file_name');
                }
            }
       
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
                'foto' => $foto
            );

            $this->m_santri->update_data($data, 'tb_data_santri');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil diubah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('c_login_santri/profil/' . $id);
      
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama Santri', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('nis', 'NIS', 'required', array(
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
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('status', 'Status', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('foto', 'Foto', 'required', array(
            'required' => '%s harus di isi !!'
        ));
    }


    public function logout()
    {
        $array_items = array('nis', 'password');
        $this->session->unset_userdata($array_items);

        $data['title'] = 'Login';

        $this->load->view('templates/header', $data);
        redirect('');
    }
}

/* End of file Controllername.php */