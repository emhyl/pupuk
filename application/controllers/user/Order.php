<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	private $diskon = null;
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

	public function index($id=null)
	{	
		if($id != null){
			$data['pupuk'] = $this->db_pupuk->getById('produk',['id'=>$id]);
		}else{
			redirect(base_url().'produk');
		}
		$data['diskon'] = $this->diskon;
		$this->load->view('templates/user/header');
		$this->load->view('user/order',$data);
		$this->load->view('templates/user/footer');
	}
	public function beli($id=null)
	{	
		if($id != null){
			$pupuk = $this->db_pupuk->getById('produk',['id'=>$id]);
			$status = "non member";
			$total = $pupuk->harga * $_POST['stok'];
			if ($this->session->userdata('member')!=null) {
				$status = 'member';
				$diskon = ($pupuk->harga * $this->session->userdata('member')->diskon) /100;
				$total = $pupuk->harga - $diskon;
			}

			date_default_timezone_set('Asia/Makassar');
			$waktu = date('Y-m-d'); 

			$data = [
				"nama" => $_POST['nama'],
				"alamat " => $_POST['alamat'],
				"no_hp" => $_POST['no_hp'],
				"status" => $status,
				"nama_produk" => $pupuk->nm_produk,
				"unit" => $_POST['stok'],
				"total" => $total,
				"tgl" => $waktu,
				"sts_beli" => "proses",
				"metode_bayar" => $_POST['metode_bayar'],
				"gambar" => $pupuk->gambar,
			];

			if($_FILES['gambar']['name'] != ''){
				$data['gambar_bukti'] = $this->upload($_FILES);
			}else{
				$data['gambar_bukti'] = 'none';
			}


			$this->db_pupuk->add('pembeli',$data);

			redirect(base_url().'order/proses');
		}else{
			redirect(base_url().'produk');
		}
		

		$this->load->view('templates/user/header');
		$this->load->view('user/order',$data);
		$this->load->view('templates/user/footer');
	}

	public function proses($method = null){
		$this->load->view('templates/user/header');
		$this->load->view('user/proses',['bayar'=>$method]);
		$this->load->view('templates/user/footer');
	}


	public function upload($data){
	
		$gambar = $data['gambar'];
		if($gambar['name'] != ''){
		    $extensi = explode('.',$gambar['name']);
		    $newName = random_string('numeric',8).'.'.end($extensi);

		    $config['upload_path'] = "./assets/img/bukti_pembayaran";
		    $config['allowed_types'] = 'jpg|jpeg|png';
		    $config['file_name'] = $newName;

		    $this->load->library('upload', $config);
		    if(!$this->upload->do_upload('gambar')){
		        $this->session->set_flashdata('message', '

		        <div class="alert alert-danger alert-dismissible fade show" role="alert">
		            <strong>Gagal</strong> Silahkan pilih file gambar
		            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		            </button>
		        </div>
		        
		        ');
		        // var_dump($this->upload->display_errors());

		        redirect(base_url().'produk');
		        die;
		    }else{
		        return $this->upload->data('file_name');                  

		    }  
		}
	}
}
