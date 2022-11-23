<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_tahun extends CI_Model
{

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($data, $table)
    {
        $this->db->where('id_thn', $data['id_thn']);
        $this->db->update($table, $data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
    
    /* End of file M_tahun.php */