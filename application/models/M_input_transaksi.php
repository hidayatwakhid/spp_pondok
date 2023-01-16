<?php

defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class M_input_transaksi extends CI_Model
{
    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('tb_data_transaksi');
        $this->db->join('tb_data_santri', 'tb_data_transaksi.id_data_santri = tb_data_santri.id');
        $this->db->join('tb_data_tagihan', 'tb_data_transaksi.id_data_santri = tb_data_tagihan.id');
        return $this->db->get();
    }

    public function tambah($id, $jml_bayar)
    {
        $this->db->set('jumlah_byr', $jml_bayar);
        $this->db->where('id_data_transaksi', $id);
        $this->db->update('tb_data_transaksi');

        $this->db->join('tb_data_tagihan', 'tb_data_transaksi.id_data_tagihan = tb_data_tagihan.id');
        $tagihan = $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id])->row()->nominal;
        $jumlah_byr = $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id])->row()->jumlah_byr;
        $sisa = $jumlah_byr - $tagihan;
        if ($sisa >= '0') {
            $keterangan = 1;
        } else {
            $keterangan = 0;
        }

        $today = date("Y-m-d H:i:s");

        $username = $this->session->userdata('username');
        $data = [
            'sisa' => $sisa,
            'keterangan' => $keterangan,
            'tgl_byr' => $today,
            'created_by' =>  $username,
        ];

        $this->db->where('id_data_transaksi', $id);
        $this->db->update('tb_data_transaksi', $data);
    }

    public function get_san()
    {
        return $this->db->get('tb_data_santri');
    }

    public function get_tghn()
    {
        return $this->db->get('tb_data_tagihan');
    }

    public function update_data($id_data_transaksi, $table)
    {

        $this->db->join('tb_data_tagihan', 'tb_data_transaksi.id_data_tagihan = tb_data_tagihan.id');
        $tagihan = $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id_data_transaksi])->row()->nominal;

        $get_jumlah_bayar = $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id_data_transaksi])->row()->jumlah_byr;
        $jml_bayar_baru = $get_jumlah_bayar + $this->input->post('jumlah_byr');
        $sisa = $jml_bayar_baru - $tagihan;
        if ($sisa >= '0') {
            $keterangan = 1;
        } else {
            $keterangan = 0;
        }
        // print_r($sisa);
        // die();
        $data = array(

            'jumlah_byr' => $jml_bayar_baru,
            'sisa' => $sisa,
            'keterangan' => $keterangan,
            // 'tgl_byr' => $this->input->post('tgl_byr'),
            // 'created_by' => $this->input->post('created_by'),
        );

        $this->db->where('id_data_transaksi', $id_data_transaksi);
        $this->db->update($table, $data);
    }
    public function edit_data($id_data_transaksi, $table)
    {

        $this->db->join('tb_data_tagihan', 'tb_data_transaksi.id_data_tagihan = tb_data_tagihan.id');
        $tagihan = $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id_data_transaksi])->row()->nominal;

        $get_jumlah_bayar = $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id_data_transaksi])->row()->jumlah_byr;
        $jml_bayar_baru = $this->input->post('jumlah_byr');
        $sisa = $jml_bayar_baru - $tagihan;
        if ($sisa >= '0') {
            $keterangan = 1;
        } else {
            $keterangan = 0;
        }
        // print_r($sisa);
        // die();
        $data = array(

            'jumlah_byr' => $jml_bayar_baru,
            'sisa' => $sisa,
            'keterangan' => $keterangan,
            // 'tgl_byr' => $this->input->post('tgl_byr'),
            // 'created_by' => $this->input->post('created_by'),
        );

        $this->db->where('id_data_transaksi', $id_data_transaksi);
        $this->db->update($table, $data);
    }

    public function next($id_data_transaksi, $table)
    {

        $this->db->join('tb_data_tagihan', 'tb_data_transaksi.id_data_tagihan = tb_data_tagihan.id');
        $tagihan = $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id_data_transaksi])->row()->nominal;
        $sisanya = $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id_data_transaksi])->row()->sisa;

        $get_jumlah_bayar = $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id_data_transaksi])->row()->jumlah_byr;
        $jml_bayar_baru = $get_jumlah_bayar - $sisanya;

        // buat id selanjutnya (id + 1) 
        $id_next = $id_data_transaksi + 1;
        $today = date("Y-m-d H:i:s");

        // print_r($id_next);
        // die();


        $username = $this->session->userdata('username');
        $data = array(

            'jumlah_byr' => $jml_bayar_baru,
            'sisa' => '0',
            'keterangan' => '1',
            'created_by' => $username,
        );

        $this->db->where('id_data_transaksi', $id_data_transaksi);
        $this->db->update($table, $data);

        $sisa_baru = $sisanya - $tagihan;
        if ($sisa_baru >= '0') {
            $keterangan = 1;
        } else {
            $keterangan = 0;
        }

        $data2 = array(

            'jumlah_byr' => $sisanya,
            'sisa' => $sisa_baru,
            'keterangan' => $keterangan,
            'tgl_byr' => $today,
            // 'tgl_byr' => $this->input->post('tgl_byr'),
            'created_by' => $username,
        );

        $this->db->where('id_data_transaksi', $id_next);
        $this->db->update($table, $data2);
    }
    public function kembali($id_data_transaksi, $table)
    {

        $this->db->join('tb_data_tagihan', 'tb_data_transaksi.id_data_tagihan = tb_data_tagihan.id');
        $tagihan = $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id_data_transaksi])->row()->nominal;

        $sisa = $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id_data_transaksi])->row()->sisa;


        $get_jumlah_bayar = $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id_data_transaksi])->row()->jumlah_byr;
        $jml_bayar_baru = $get_jumlah_bayar - $sisa;

        if ($sisa >= '0') {
            $keterangan = 1;
        } else {
            $keterangan = 0;
        }

        $data = array(

            'jumlah_byr' => $jml_bayar_baru,
            'sisa' => '0',
            'keterangan' => $keterangan,
            // 'tgl_byr' => $this->input->post('tgl_byr'),
            // 'created_by' => $this->input->post('created_by'),
        );

        $this->db->where('id_data_transaksi', $id_data_transaksi);
        $this->db->update($table, $data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // public function get_data_by_id($id)
    // {
    //     //$this->db->join('tb_data_santri', 'tb_data_santri.id_data_santri = tb_data_transaksi.id_data_santri');
    //     //$this->db->join('tb_data_tagihan', 'tb_data_transaksi.id_data_santri = tb_data_tagihan.id');

    //     //$this->db->join('tb_kmr', 'tb_kmr.id_kmr = tb_data_santri.id_kamar');
    //     //$this->db->join('tb_kls', 'tb_kls.id_kls = tb_data_santri.id_kelas');

    //     return $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id])->row();
    // }
    public function get_data_santri_by_id($id_data_santri)
    {
        $this->db->select('*');
        $this->db->join('tb_data_santri', 'tb_data_transaksi.id_data_santri = tb_data_santri.id');
        $this->db->join('tb_data_tagihan', 'tb_data_transaksi.id_data_tagihan = tb_data_tagihan.id');
        $this->db->join('tb_thn', 'tb_thn.id_thn = tb_data_tagihan.id_thn');
        $this->db->join('tb_bulan', 'tb_bulan.id_bln = tb_data_tagihan.id_bln');
        $this->db->order_by('tb_thn.id_thn');
        $this->db->order_by('tb_bulan.id_bln');
        // $this->db->join('tb_data_tagihan', 'tb_data_transaksi.id_data_santri = tb_data_tagihan.id');
        return $this->db->get_where('tb_data_transaksi', ['id_data_santri' => $id_data_santri]);
    }

    public function get_data_transaksi_by_id($id_data_transaksi)
    {
        $this->db->select('*');
        $this->db->join('tb_data_santri', 'tb_data_transaksi.id_data_santri = tb_data_santri.id');
        $this->db->join('tb_data_tagihan', 'tb_data_transaksi.id_data_tagihan = tb_data_tagihan.id');
        $this->db->join('tb_thn', 'tb_thn.id_thn = tb_data_tagihan.id_thn');
        $this->db->join('tb_bulan', 'tb_bulan.id_bln = tb_data_tagihan.id_bln');
        $this->db->order_by('tb_thn.id_thn');
        $this->db->order_by('tb_bulan.id_bln');
        // $this->db->join('tb_data_tagihan', 'tb_data_transaksi.id_data_santri = tb_data_tagihan.id');
        return $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id_data_transaksi]);
    }

     public function get_input_transaksi_by_id($id_data_transaksi)
    {
        $this->db->select('*');
        $this->db->join('tb_data_santri', 'tb_data_transaksi.id_data_santri = tb_data_santri.id');
        $this->db->join('tb_data_tagihan', 'tb_data_transaksi.id_data_santri = tb_data_tagihan.id');
        return $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id_data_transaksi]);
    }

    public function reminder($id_data_transaksi, $id_data_santri)
    {
        
        $data = $this->get_data_santri_by_id($id_data_santri)->row();
        $data_transaksi = $this->get_data_transaksi_by_id($id_data_transaksi)->row();

        // print_r($data->no_hp);
        // print_r($data_transaksi->nama_bln);
        // die();

        $no_hp = $data->no_hp;
        $nominal = $data_transaksi->nominal;
        // echo $no_hp;

        if (substr(trim($no_hp), 0, 1) == '0') {
            $hp = '62' . substr(trim($no_hp), 1);
        } else {
            $hp = $no_hp;
        }
        echo '<br>';
        // echo $hp;
        // die();
        $bln = $data_transaksi->nama_bln;
        $nama = $data->nama;
        $enter = '%0A';
        $text = 'Assalamualaikum kang ' . $nama . '' . $enter . $enter . 'Kami dari bendahara ingin memberitahukan bahwa sudah waktunya membayar Syahriah ' . $enter . $enter . 'bulan ' . $bln . ' sebesar' . $enter . $nominal . ' untuk datanya bisa diakses di '. base_url() . $enter . 'Terimakasih' . $enter . 'Ttd' . $enter . $enter . '*Bendahara*';

        $url = prep_url('https://api.whatsapp.com/send?phone=' . $hp . '&text=' . $text);
        redirect($url);
    }
}
    
    /* End of file M_input_transaksi.php */