<?php
class Upload{
	public function nama(){
		echo "asaas";
	}
	
	public function upl($gambar){
		$gambar = $gambar['gambar'];
		if($gambar['name'] != ''){
		    $extensi = explode('.',$gambar['name']);
		    $newName = random_string('numeric',8).'.'.end($extensi);

		    $config['upload_path'] = './assets';
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
		        redirect(base_url());
		        die;
		    }else{
		        return $this->upload->data('file_name');                  

		    }  
		}
	}
}