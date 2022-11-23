<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_tagihan extends CI_Model
{

    public function get_data()
    {

        $this->db->select('*');

        $this->db->from('tb_data_tagihan');
        $this->db->join('tb_thn', 'tb_data_tagihan.id_thn = tb_thn.id_thn');
        //$this->db->join('tb_thn', 'tb_data_tagihan.id_thn = tb_thn.id_thn');
        $this->db->join('tb_bulan', 'tb_data_tagihan.id_bln = tb_bulan.id_bln');
        $this->db->order_by('nama_thn', 'ASC');
        $this->db->order_by('tb_bulan.id_bln', 'ASC');
        return $this->db->get();
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

    // public function delete($where, $table)
    // {
    //     $this->db->where($where);
    //     $this->db->delete($table);
    // }
}
    
    /* End of file M_tagihan.php */