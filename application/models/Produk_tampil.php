<?php

class Produk_tampil extends CI_Model
{
    public function tampil_data($limit, $start)
    {
        return $this->db->get('produk_paintball', $limit, $start);
    }

    public function find($id)
    {
        $result = $this->db->where('id_produk', $id)->limit(1)->get('produk_paintball');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function detail_produk($id_produk)
    {
        $result = $this->db->where('id_produk', $id_produk)->get('produk_paintball');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
