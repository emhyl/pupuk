<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('login') or $this->session->userdata('member')){
			$this->session->sess_destroy();
		}
		$this->load->model('CForm');
		$this->load->model('db_pupuk');

	}

	public function index()
	{	

		if(isset($_POST['btn_login'])){
			unset($_POST['btn_login']);

			$username = $_POST['username'];
			$pass = $_POST['password'];
			$data = $this->db_pupuk->getById('user',$_POST);
	
			if($data != null){
				if($data->status == 'admin'){
					$this->session->set_userdata('login',$data->username);
					redirect(base_url().'admin/home');
				}elseif ($data->status == 'member') {
					$join = $this->db_pupuk->join2tbl('*',['user','member'],['id','id_user'])[0];
					$this->session->set_userdata('member',$join);
				
					redirect(base_url().'home');
				}
				
			}
		}
		$this->load->view('admin/login');
	}

}
