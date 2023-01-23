<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('login') === null){
			redirect(base_url().'login');
		}
		$this->load->model('CForm');
		$this->load->model('db_pupuk');
	}

	public function index()
	{	
		$field = $this->CForm->table($this->db_pupuk->getAll('pembeli'),false);

		$data['jumlah'] = count($this->db_pupuk->getAll('produk'));
		$data['pembeli'] = count($this->db_pupuk->getAll('pembeli'));
		$data['member'] = count($this->db_pupuk->getAll('member'));
		$data['data'] = $field;

		$this->load->view('templates/admin/header',['jml' => $this->db_pupuk->getJml()]);
		$this->load->view('templates/admin/sidebar',['jml' => $this->db_pupuk->getJml()]);
		$this->load->view('admin/home',$data);
		$this->load->view('templates/admin/footer');
	}

	public function setting(){
		$this->load->view('templates/admin/header',['jml' => $this->db_pupuk->getJml()]);
		$this->load->view('templates/admin/sidebar',['jml' => $this->db_pupuk->getJml()]);
		$this->load->view('admin/setting');
		$this->load->view('templates/admin/footer');
	}


	public function export() {

		$data['laporan'] = $this->db_pupuk->getAll('pembeli');


	    $this->load->library('pdf');
	    $this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = 'laporan.pdf';
	    $this->pdf->load('admin/view_laporan', $data);

	}
	
}
