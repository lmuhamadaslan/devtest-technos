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
        $query = $this->db->query("SELECT tbl_kategori.id, tbl_kategori.category, COUNT(tbl_data.id) AS Jumlah FROM tbl_data INNER JOIN tbl_kategori ON tbl_data.category_id = tbl_kategori.id GROUP BY tbl_kategori.id;");
        return $query->result_array();
    }
}