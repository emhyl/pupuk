<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login')){
			redirect(base_url().'login');
		}
		$this->load->model('CForm');
		$this->load->model('db_pupuk');
	}

	public function index()
	{	
		$data['data'] = $this->db_pupuk->getAll('pembeli');

		$this->load->view('templates/admin/header',['jml' => $this->db_pupuk->getJml()]);
		$this->load->view('templates/admin/sidebar',['jml' => $this->db_pupuk->getJml()]);
		$this->load->view('admin/history',$data);
		$this->load->view('templates/admin/footer');
	}

}
