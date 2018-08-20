<?php
class Model_barang extends CI_Model{
    
    function tampilkan_data(){
        $query = "SELECT b.barang_id,b.nama_barang,b.harga,kb.nama_kategori
FROM `barang` as b,kategori_barang as kb
WHERE b.kategori_id=kb.kategori_id";
        return $this->db->query($query);
    }
    
    function post($data)
    {
        $this->db->insert('barang',$data);
    }
    
}
