<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login')){
			redirect(base_url().'login');
		}
		$this->load->model('db_pupuk');
	}

	public function index()
	{	
		$data['data'] = $this->db_pupuk->getOne('pembeli', ['sts_beli' => 'proses']);
		$data['jml'] = count($data['data']);
		
		$this->load->view('templates/admin/header',['jml' => $this->db_pupuk->getJml()]);
		$this->load->view('templates/admin/sidebar',['jml' => $this->db_pupuk->getJml()]);
		$this->load->view('admin/order',$data);
		$this->load->view('templates/admin/footer');
	}

	public function terima($id = null)
	{	
		if($id != null){
			$dataPembeli = $this->db_pupuk->getById('pembeli',['id'=>$id]);
			$jml_order = $dataPembeli->unit;

			$dataProduk = $this->db_pupuk->getById('produk',['nm_produk'=>$dataPembeli->nama_produk]);
			$kalkuasi = $dataProduk->stok - $jml_order;
		
			if($kalkuasi <= 0){
				$this->db_pupuk->delete('produk',['id'=>$dataProduk->id]);
			}else{
				$this->db_pupuk->edit('produk',['stok'=>$kalkuasi],['id'=>$dataProduk->id]);
			}
			$this->db_pupuk->edit('pembeli', ['sts_beli' => 'sukses'], ['id'=>$id]);
			redirect(base_url().'admin/order');
		}
	}
}
