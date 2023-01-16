<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_laporan extends CI_Model
{
    public function get_all_data()
    {
        // $this->db->group_by("username");
        $this->db->order_by('id_kmr', 'ASC');
        return $this->db->get('tb_kmr')->result();
    }

    public function count_search_data()
    {
        // $keyword = $this->input->post('keyword');
        // $this->db->like('username', $keyword);
        return $this->db->get('tb_kmr')->num_rows();
    }

    public function get_data_santri($id)
    {
        $this->db->select('*');
        // $this->db->join('tb_kmr', 'tb_kmr.id_kmr = tb_data_santri.id_kmr');
        // $this->db->order_by('id_data_santri', 'ASC');
        return $this->db->get_where('tb_data_santri', ['id_kamar' => $id])->result();
    }

    public function get_januari($id, $tahun)
    {
        $this->db->select('tgl_byr, keterangan');
        $this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
        $this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
        $this->db->join('tb_thn', 'tb_data_tagihan.id_thn = tb_thn.id_thn');
        return $this->db->get_where('tb_data_transaksi', ['tb_data_tagihan.id_thn' => $tahun, 'id_bln' => '1', 'id_kamar' => $id])->result();
    }

    public function get_februari($id, $tahun)
    {
        $this->db->select('tgl_byr, keterangan');
        $this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
        $this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
        $this->db->join('tb_thn', 'tb_data_tagihan.id_thn = tb_thn.id_thn');
        return $this->db->get_where('tb_data_transaksi', ['tb_data_tagihan.id_thn' => $tahun, 'id_bln' => '2', 'id_kamar' => $id])->result();
    }

    public function get_maret($id, $tahun)
    {
        $this->db->select('tgl_byr, keterangan');
        $this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
        $this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
        $this->db->join('tb_thn', 'tb_data_tagihan.id_thn = tb_thn.id_thn');
        return $this->db->get_where('tb_data_transaksi', ['tb_data_tagihan.id_thn' => $tahun, 'id_bln' => '3', 'id_kamar' => $id])->result();
    }

    public function get_april($id, $tahun)
    {
        $this->db->select('tgl_byr, keterangan');
        $this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
        $this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
        $this->db->join('tb_thn', 'tb_data_tagihan.id_thn = tb_thn.id_thn');
        return $this->db->get_where('tb_data_transaksi', ['tb_data_tagihan.id_thn' => $tahun, 'id_bln' => '4', 'id_kamar' => $id])->result();
    }

    public function get_mei($id, $tahun)
    {
        $this->db->select('tgl_byr, keterangan');
        $this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
        $this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
        $this->db->join('tb_thn', 'tb_data_tagihan.id_thn = tb_thn.id_thn');
        return $this->db->get_where('tb_data_transaksi', ['tb_data_tagihan.id_thn' => $tahun, 'id_bln' => '5', 'id_kamar' => $id])->result();
    }

    public function get_juni($id, $tahun)
    {
        $this->db->select('tgl_byr, keterangan');
        $this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
        $this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
        $this->db->join('tb_thn', 'tb_data_tagihan.id_thn = tb_thn.id_thn');
        return $this->db->get_where('tb_data_transaksi', ['tb_data_tagihan.id_thn' => $tahun, 'id_bln' => '6', 'id_kamar' => $id])->result();
    }

    public function get_juli($id, $tahun)
    {
        $this->db->select('tgl_byr, keterangan');
        $this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
        $this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
        $this->db->join('tb_thn', 'tb_data_tagihan.id_thn = tb_thn.id_thn');
        return $this->db->get_where('tb_data_transaksi', ['tb_data_tagihan.id_thn' => $tahun, 'id_bln' => '7', 'id_kamar' => $id])->result();
    }

    public function get_agustus($id, $tahun)
    {
        $this->db->select('tgl_byr, keterangan');
        $this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
        $this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
        $this->db->join('tb_thn', 'tb_data_tagihan.id_thn = tb_thn.id_thn');
        return $this->db->get_where('tb_data_transaksi', ['tb_data_tagihan.id_thn' => $tahun, 'id_bln' => '8', 'id_kamar' => $id])->result();
    }

    public function get_september($id, $tahun)
    {
        $this->db->select('tgl_byr, keterangan');
        $this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
        $this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
        $this->db->join('tb_thn', 'tb_data_tagihan.id_thn = tb_thn.id_thn');
        return $this->db->get_where('tb_data_transaksi', ['tb_data_tagihan.id_thn' => $tahun, 'id_bln' => '9', 'id_kamar' => $id])->result();
    }

    public function get_oktober($id, $tahun)
    {
        $this->db->select('tgl_byr, keterangan');
        $this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
        $this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
        $this->db->join('tb_thn', 'tb_data_tagihan.id_thn = tb_thn.id_thn');
        return $this->db->get_where('tb_data_transaksi', ['tb_data_tagihan.id_thn' => $tahun, 'id_bln' => '10', 'id_kamar' => $id])->result();
    }

    public function get_november($id, $tahun)
    {
        $this->db->select('tgl_byr, keterangan');
        $this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
        $this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
        $this->db->join('tb_thn', 'tb_data_tagihan.id_thn = tb_thn.id_thn');
        return $this->db->get_where('tb_data_transaksi', ['tb_data_tagihan.id_thn' => $tahun, 'id_bln' => '11', 'id_kamar' => $id])->result();
    }

    public function get_desember($id, $tahun)
    {
        $this->db->select('tgl_byr, keterangan');
        $this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
        $this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
        $this->db->join('tb_thn', 'tb_data_tagihan.id_thn = tb_thn.id_thn');
        return $this->db->get_where('tb_data_transaksi', ['tb_data_tagihan.id_thn' => $tahun, 'id_bln' => '12', 'id_kamar' => $id])->result();
    }

    public function get_kamar($id)
    {
        return $this->db->get_where('tb_kmr', ['id_kmr' => $id])->row();
    }

    public function get_all_tahun()
    {
        return $this->db->get_where('tb_thn')->result();
    }

    public function get_tahun($tahun)
    {
        return $this->db->get_where('tb_thn', ['id_thn' => $tahun])->result();
    }
}


// simpan lab
