<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('login') === null){
			redirect(base_url().'login');
		}
		$this->load->model('CForm');
		$this->load->model('db_pupuk');
	}

	public function index($tbl_name)
	{	
		$tabel = $this->db_pupuk->getAll($tbl_name);
		if(count($tabel) > 0){
			$action = [
				'hapus/'.$tbl_name,
				'edit/'.$tbl_name
			];
			$tbl = $this->CForm->table($tabel,false,$action);
		}else{
			$tbl = '
				<div class="alert alert-warning mt-3" role="alert">
				  Produk kosong, Silahkan tambahkan data
				</div>
			';
		}

		$option = [];

		switch ($tbl_name) {
			case 'member':
				$option = [
					'method' => 'num',
					'field' => [
						'id' => [
							'use' => false
						]
					]
				
				];
				break;

			case 'produk':
				$option = [
					'method' => 'num',
					'field' => [
						'id' => [
							'use' => false
						],
						'gambar' => [
							'type' => 'file'
						]
					]
				
				];
				break;
			case 'pembeli':
				$option = [
					'method' => 'num',
					'field' => [
						'id' => [
							'use' => false
						],
						'gambar' => [
							'type' => 'file',
						],
						'tgl' => [
							'type' => 'date'
						]
					]
				
				];
				break;
			case 'user':
				$option = [
					'method' => 'num',
					'field' => [
						'id' => [
							'use' => false
						],
						'id_member' => [
							'tag' => [
								'select' => true,
								'selected' => 'pilih Id member',
								'data' => $this->CForm->ascToNum($this->db_pupuk->getAll('member'),'id')
							]
						],
						'status' => [
							'tag' => [
								'select' => true,
								'selected' => 'pilih status',
								'data' => ['admin','member']
							]
						]
					]
				
				];
				break;
			default:
				// code...
				break;
		}

		$data['tbl_name'] = $tbl_name;
		$data['tbl'] = $tbl;
		$data['input'] = $this->CForm->form_input($this->db_pupuk->getField($tbl_name),$option);

		$this->load->view('templates/admin/header',['jml' => $this->db_pupuk->getJml()]);
		$this->load->view('templates/admin/sidebar',['jml' => $this->db_pupuk->getJml()]);
		$this->load->view('admin/tabel/tabel', $data);
		$this->load->view('templates/admin/footer');
	}

	public function tbl_tambah($tbl_name){
		if(isset($_POST['btn_add'])){
			unset($_POST['btn_add']);
			$data_post = $_POST;
			
			if(isset($_FILES['gambar']) && $_FILES['gambar']['name'] != ''){
				$data_post['gambar'] = $this->upload($_FILES, 'produk');
			}
			$this->db_pupuk->add($tbl_name,$data_post);
			redirect(base_url().'admin/data/'.$tbl_name);
		}
	}


	public function tbl_edit($tbl, $id=''){
		if(isset($_POST['btn_edit'])){
			unset($_POST['btn_edit']);
			$data_post = $_POST;
			
			if(isset($_FILES['gambar']) && $_FILES['gambar']['name'] != ''){
				$data_post['gambar'] = $this->upload($_FILES,'produk');
				$gambar= $this->db_pupuk->getById($tbl,['id'=>$id])->gambar;
				unlink('./assets/img/produk/'.$gambar);
			}
			$this->db_pupuk->edit($tbl,$data_post,['id'=>$id]);
			redirect(base_url().'admin/data/'.$tbl);
		}

		$option = [];

		switch ($tbl) {
			case 'member':
				$option = [
					'method' => 'key',
					'field' => [
						'id' => [
							'use' => false,
							'edit' => true
						]
					]
				
				];
				break;

			case 'produk':
				$option = [
					'method' => 'key',
					'field' => [
						'id' => [
							'use' => false
						],
						'gambar' => [
							'type' => 'file',
							'req' => false
						]
					]
				
				];
				break;
			case 'pembeli':
				$option = [
					'method' => 'key',
					'field' => [
						'id' => [
							'use' => false
						],
						'gambar' => [
							'type' => 'file',
						],
						'tgl' => [
							'type' => 'date'
						]
					]
				
				];
				break;
			case 'user':
				$option = [
					'method' => 'key',
					'field' => [
						'id' => [
							'use' => false
						],
						'id_member' => [
							'tag' => [
								'select' => true,
								'selected' => 'pilih Id member',
								'data' => $this->CForm->ascToNum($this->db_pupuk->getAll('member'),'id')
							]
						],
						'status' => [
							'tag' => [
								'select' => true,
								'selected' => 'pilih status',
								'data' => ['admin','member']
							]
						]
					]
				
				];
				break;
			default:
				// code...
				break;
		}	

		$option['tags'] =[
				'edit' => true
		];


		$data['form'] = $this->CForm->form_input($this->db_pupuk->getById($tbl,['id'=>$id]),$option);
		$data['tbl_name'] = $tbl;
		$data['id'] = $id;


		$this->load->view('templates/admin/header',['jml' => $this->db_pupuk->getJml()]);
		$this->load->view('templates/admin/sidebar',['jml' => $this->db_pupuk->getJml()]);
		$this->load->view('admin/tabel/tabel_edit',$data);
		$this->load->view('templates/admin/footer');
	}


	public function tbl_hapus($tbl, $id){
		if($tbl == "produk"){
			$gambar = $this->db_pupuk->getById($tbl,['id'=>$id])->gambar;
			unlink('./assets/img/produk/'.$gambar);
		}
		$this->db_pupuk->delete($tbl,['id'=>$id]);
		redirect(base_url().'admin/data/'.$tbl);
	}





	public function upload($data,$path=''){
	
		$gambar = $data['gambar'];
		if($gambar['name'] != ''){
		    $extensi = explode('.',$gambar['name']);
		    $newName = random_string('numeric',8).'.'.end($extensi);

		    $config['upload_path'] = "./assets/img/$path";
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
		        redirect(base_url().'admin/home');
		        die;
		    }else{
		        return $this->upload->data('file_name');                  

		    }  
		}
	}

}
