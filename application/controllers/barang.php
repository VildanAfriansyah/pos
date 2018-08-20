<?php
class barang extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_barang');
    }
    
    function index(){
        $data['record']= $this->model_barang->tampilkan_data()->result();
        $this->load->view('barang/lihat_data',$data);
    }
    
     function post()
    {
        if(isset($_POST['submit'])){
          $nama_barang = $this->input->post('nama_barang');
          $kategori = $this->input->post('kategori');
          $harga = $this->input->post('harga');
          $data = array('nama_barang'=>$nama_barang,'kategori_id'=>$kategori,'harga'=>$harga);
          
          $this->model_barang->post($data);
          redirect('barang');
        }
        else{
            $this->load->model('model_kategori');
            $data['kategori']= $this->model_kategori->tampilkan_data()->result();
            $this->load->view('barang/input_barang',$data);
        }
    }
}