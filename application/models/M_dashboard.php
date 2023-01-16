<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_dashboard extends CI_Model
{

    public function get_data($table)
    {
        $this->db->select('*');
        return $this->db->get($table)->result_array();
    }

    public function jumlah_pemasukan()
    {
        $this->db->select_sum('pemasukan');
        return $this->db->get('tb_history_non_spp')->row();
    }

    public function jumlah_pengeluaran()
    {
        $this->db->select_sum('pengeluaran');
        return $this->db->get('tb_history_non_spp')->row();
    }

    public function pemasukan_spp()
    {
        $this->db->select_sum('jumlah_byr');
        return $this->db->get('tb_data_transaksi')->row();
    }
}
    
    /* End of file M_dahboard.php */