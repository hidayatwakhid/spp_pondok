<?php

defined('BASEPATH') or exit('No direct script access allowed');

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

    // public function get_data($table)
    // {
    //     return $this->db->get($table);
    // }

    public function get_san()
    {
        return $this->db->get('tb_data_santri');
    }

    public function get_tghn()
    {
        return $this->db->get('tb_data_tagihan');
    }

    public function update_data($data, $table)
    {
        $this->db->where('id_data_transaksi', $data['id_data_transaksi']);
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
        // $this->db->join('tb_data_tagihan', 'tb_data_transaksi.id_data_santri = tb_data_tagihan.id');
        return $this->db->get_where('tb_data_transaksi', ['id_data_santri' => $id_data_santri])->result();
    }
}
    
    /* End of file M_input_transaksi.php */