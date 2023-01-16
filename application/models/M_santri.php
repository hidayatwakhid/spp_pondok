<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_santri extends CI_Model
{

    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('tb_data_santri');
        $this->db->join('tb_kmr', 'tb_data_santri.id_kamar = tb_kmr.id_kmr');
        $this->db->join('tb_kls', 'tb_data_santri.id_kelas = tb_kls.id_kls');
        return $this->db->get();
    }

    public function get_kamr()
    {
        return $this->db->get('tb_kmr');
    }
    public function get_klas()
    {
        return $this->db->get('tb_kls');
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($data, $table)
    {
        $this->db->where('id', $data['id']);
        $this->db->update($table, $data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_data_by_id($id)
    {
        $this->db->join('tb_kmr', 'tb_kmr.id_kmr = tb_data_santri.id_kamar');
        $this->db->join('tb_kls', 'tb_kls.id_kls = tb_data_santri.id_kelas');

        return $this->db->get_where('tb_data_santri', ['id' => $id])->row();
    }

    public function getMaxId()
    {
        $this->db->select_max('id');
        return $this->db->get('tb_data_santri')->row();
    }
    public function insert_data_transaksi($idSantri)
    {
        $id_tagihan = $this->db->get('tb_data_tagihan')->result();
        foreach ($id_tagihan as $key => $value) {
            $data = [
                'id_data_santri' => $idSantri,
                'id_data_tagihan' => $value->id,
            ];
            $this->db->insert('tb_data_transaksi', $data);
        }
    }

    /* public function kam()
    {

        $this->db->select('*');
        $this->db->from('tb_data_santri');
        $this->db->join('tb_kmr', 'tb_data_santri.id_kamar = tb_kmr.id_kmr', 'left');
        return $this->db->get();
    } */

    public function kirim($id)
    {
        $data = $this->get_data_by_id($id);
        $no_hp = $data->no_hp;
        $nis = $data->nis;
        $password = $data->password;
        // echo $no_hp;
        if (substr(trim($no_hp), 0, 1) == '0') {
            $hp = '62' . substr(trim($no_hp), 1);
        } else {
            $hp = $no_hp;
        }
        // echo '<br>';
        // echo $hp;
        // die();
        $nama = $data->nama;
        $enter = '%0A';
        $text = 'Assalamualaikum kang ' . $nama . '' . $enter . $enter . 'Kami dari bendahara ingin memberitahukan bahwa akan diadakan *Sistem Pembayaran SPP Berbasis Website*' . $enter . $enter . 'Maka dari itu silakan kang ' . $nama . ' bisa login ke link berikut ' . base_url() . ' pada login via santri kemudian memasukkan :' . $enter . 'NIS : ' . $nis . $enter . 'Password : ' . $password . $enter . $enter . 'Mohon jaga baik-baik NIS dan Password tersebut.' . $enter . $enter . 'Apabila orantua atau wali ingin mengetahui history pembayaran spp bisa menggunakan login via Tamu.' . $enter . $enter . $enter . 'Terimakasih' . $enter . 'Ttd' . $enter . $enter . '*Bendahara*';

        $url = prep_url('https://api.whatsapp.com/send?phone=' . $hp . '&text=' . $text);
        redirect($url);
    }
}
    
    /* End of file M_santri.php */