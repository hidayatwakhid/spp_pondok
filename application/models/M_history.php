<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_history extends CI_Model
{

    public function get_data($table)
    {
        $this->db->order_by('tgl_byr', 'desc');
        $this->db->join('tb_data_tagihan', 'tb_data_transaksi.id_data_tagihan = tb_data_tagihan.id');
        $this->db->join('tb_data_santri', 'tb_data_transaksi.id_data_santri = tb_data_santri.id');
        $this->db->where('tgl_byr !=', '');
        return $this->db->get_where($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
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
}
    
    /* End of file M_history.php */