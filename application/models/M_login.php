<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
    public function cek_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // ambil username dan password  dari database
        $query = $this->db->get_where('tb_admin', ['username' => $username, 'password' => $password])->num_rows();

        // cek jika username ada di db/ hasil 1 

        if ($query == 1) {
            $query = $this->db->get_where('tb_admin', ['username' => $username, 'password' => $password])->result();

            foreach ($query as $key => $value) {
                $username_baru = $value->username;
                $password_baru = $value->password;
                $email_baru = $value->email;
            }

            $newdata = array(
                'username'  => $username_baru,
                'email'     => $email_baru,
                'password'     => $password_baru,
            );

            $data = $this->session->set_userdata($newdata);
            redirect('dashboard', $data);
        } else {

            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            NIS atau Password Salah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('c_login');
        }
    }
    public function cek_login_santri()
    {
        $nis = $this->input->post('nis');
        $password = $this->input->post('password');

        // ambil username dan password  dari database
        $query = $this->db->get_where('tb_data_santri', ['nis' => $nis, 'password' => $password])->num_rows();

        // cek jika username ada di db/ hasil 1 

        if ($query == 1) {
            $query = $this->db->get_where('tb_data_santri', ['nis' => $nis, 'password' => $password])->result();

            foreach ($query as $key => $value) {
                $id_baru = $value->id;
                $nis_baru = $value->nis;
                $password_baru = $value->password;
            }

            $newdata = array(
                'id'  => $id_baru,
                'nis'  => $nis_baru,
                'password' => $password_baru,
            );

            $data = $this->session->set_userdata($newdata);
            redirect('dashboard_santri', $data);
        } else {

            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            NIS atau Password Salah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('c_login_santri');
        }
    }
}
    
    /* End of file M_kamar.php */
