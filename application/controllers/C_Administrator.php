<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Administrator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
         if (isset($_SESSION['username'])) {
            
        }else {
            redirect('','refresh');
        }
        $this->load->model('M_administrator');
    }

    public function index()
    {
        $data['title'] = 'Administrotor';
        $data['admin'] = $this->M_administrator->get_data('tb_admin')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_administrator', $data);
        $this->load->view('templates/footer');
    }


    public function tambah()
    {
        $data['title'] = 'Tambah Administrator';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_tambah_administrator', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );

        $this->M_administrator->insert_data($data, 'tb_admin');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil ditambahkan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('c_administrator');
    }

    public function delete($id)
    {
        $where = array('id_admin' => $id);

        $this->M_administrator->delete($where, 'tb_admin');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil didelete.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('c_administrator');
    }

    public function edit($id_admin)
    {

        $data = array(
            'id_admin' => $id_admin,
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );

        $this->M_administrator->update_data($data, 'tb_admin');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil diubah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('c_administrator');
    }

}

// testing 
/* End of file Controllername.php */