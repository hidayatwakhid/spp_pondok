<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_awal extends CI_Model
{

    public function get_data($table)
    {
        return $this->db->get($table);
    }
}
    
    /* End of file M_awal.php */