<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	private $diskon = 0;
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('login')){
			$this->session->sess_destroy();
		}
		$this->load->model('CForm');
		$this->load->model('db_pupuk');
		if($this->session->userdata('member')){
			$this->diskon = $this->session->userdata('member')['diskon'];
		}

	}

	public function index()
	{	
		if(isset($_POST['btn_cari'])){
			$key = $_POST['keyword'];
			$data['data'] = $this->db_pupuk->like('nm_produk',$key,'produk');
			$data['type_cari'] = $key;
		}else{
			$data['data'] = $this->db_pupuk->getAll('produk');
			$data['type_cari'] = "Semua";
		}
		$data['diskon'] = $this->diskon;
	
		$this->load->view('templates/user/header');
		$this->load->view('user/home',$data);
		$this->load->view('templates/user/footer');
	}

	public function about()
	{	

		$this->load->view('templates/user/header');
		$this->load->view('user/about');
		$this->load->view('templates/user/footer');
	}

	public function produk()
	{	
		if(isset($_POST['btn_cari'])){
			$key = $_POST['keyword'];
			$data['data'] = $this->db_pupuk->like('nm_produk',$key,'produk');
			$data['type_cari'] = $key;
		}else{
			$data['data'] = $this->db_pupuk->getAll('produk');
			$data['type_cari'] = "Semua";
		}

		$data['diskon'] = $this->diskon;
		
		$this->load->view('templates/user/header');
		$this->load->view('user/produk',$data);
		$this->load->view('templates/user/footer');
	}



}
