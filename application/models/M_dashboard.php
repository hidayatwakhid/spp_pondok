<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_dashboard extends CI_Model
{

    public function get_data($table)
    {
        $this->db->select('*');
        return $this->db->get($table)->result_array();
    }

    /*  public function pemasukan()
    {
        $this->db->select_sum('pemasukan');
        return $this->db->get('tb_jurnal')->row();
    }


    public function jumlah_pemasukan()
    {
        $this->db->select_sum('pemasukan');
        $this->db->get('tb_jurnal');
    } */

    // public function get_sum()
    // {
    //     $sql = "select sum(pemasukan) as pemasukan from tb_jurnal";
    //     $result = $this->db->query($sql);
    //     return $result->row()->pemasukan;
    // }

    // public function insert_data($data, $table)
    // {
    //     $this->db->insert($table, $data);
    // }



    /* public function update_data($data, $table)
    {
        $this->db->where('id_jurnal_umum', $data['id_jurnal_umum']);
        $this->db->update($table, $data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    } */
}
    
    /* End of file M_dahboard.php */