<?php

class ProdukModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getProduk()
    {
        // TO DO CODE
        $query = $this->db->query("SELECT kategori, COUNT(*) AS Jumlah FROM tbl_data GROUP BY kategori");
        return $query->result_array();
    }
}