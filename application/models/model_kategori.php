<?php
class Model_kategori extends CI_Model{
    
    function tampilkan_data(){
        return $this->db->get('kategori_barang');
    }
    
    function post(){
        $data=array('nama_kategori'=>$this->input->post('kategori'));
        $this->db->insert('kategori_barang',$data);
    }
    
    function get_one($id)
    {
        $param = array('kategori_id'=>$id);
        return $this->db->get_where('kategori_barang',$param);
    }
}
