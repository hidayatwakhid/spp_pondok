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
}
    
    /* End of file M_santri.php */