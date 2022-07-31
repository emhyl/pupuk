<?php 
// ['dsn']      The full DSN string describe a connection to the database.
// |	['hostname'] The hostname of your database server.
// |	['username'] The username used to connect to the database
// |	['password'] The password used to connect to the database
// |	['database'] The name of the database you want to connect to
// |	['dbdriver'] The database driver. e.g.: mysqli.
// |			Currently supported:
// |				 cubrid, ibase, mssql, mysql, mysqli, oci8,
// |				 odbc, pdo, postgre, sqlite, sqlite3, sqlsrv
// |	['dbprefix'] You can add an optional prefix, which will be added
// |				 to the table name when using the  Query Builder class
// |	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
// |	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
// |	['cache_on'] TRUE/FALSE - Enables/disables query caching
// |	['cachedir'] The path to the folder where cache files should be stored
// |	['char_set'] The character set used in communicating with the database
// |	['dbcollat'] The character collation used in communicating with the database
// |				 NOTE: For MySQL and MySQLi databases, this setting is only used
// | 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
// |				 (and in table creation queries made with DB Forge).
// | 				 There is an incompatibility in PHP with mysql_real_escape_string() which
// | 				 can make your site vulnerable to SQL injection if you are using a
// | 				 multi-byte character set and are running versions lower than these.
// | 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
// |	['swap_pre'] A default table prefix that should be swapped with the dbprefix
// |	['encrypt']  Whether or not to use an encrypted connection.
// |
// |			'mysql' (deprecated), 'sqlsrv' and 'pdo/sqlsrv' drivers accept TRUE/FALSE
// |			'mysqli' and 'pdo/mysql' drivers accept an array with the following options:
// |
// |				'ssl_key'    - Path to the private key file
// |				'ssl_cert'   - Path to the public key certificate file
// |				'ssl_ca'     - Path to the certificate authority file
// |				'ssl_capath' - Path to a directory containing trusted CA certificates in PEM format
// |				'ssl_cipher' - List of *allowed* ciphers to be used for the encryption, separated by colons (':')
// |				'ssl_verify' - TRUE/FALSE; Whether verify the server certificate or not
// |
// |	['compress'] Whether or not to use client compression (MySQL only)
// |	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
// |							- good for ensuring strict SQL while developing
// |	['ssl_options']	Used to set various SSL options that can be used when making SSL connections.
// |	['failover'] array - A array with 0 or more data for connections if the main should fail.
// |	['save_queries'] TRUE/FALSE - Whether to "save" all executed queries.
// | 				NOTE: Disabling this will also effectively disable both
// | 				$this->db->last_query() and profiling of DB queries.
// | 				When you run a query, with this setting set to TRUE (default),
// | 				CodeIgniter will store the SQL statement for debugging purposes.
// | 				However, this may cause high memory usage, especially if you run
// | 				a lot of SQL queries ... disable this to avoid that problem.
// |
// | The $active_group variable lets you choose which connection group to
// | make active.  By default there is only one group (the 'default' group).
// |
// | The $query_builder variables lets you determine whether or not to load
// | the query builder class.
class CForm{
	// public function form_input($data,$id=true,$edit=false,$options = []){
	// 	$input ='';
	// 	$data = $data[0];
	// 	if($id)unset($data['id']);
		
	
	// 	foreach($data as $key => $val){
	// 		$type = "text";
	// 		$plc = $key;
	// 		$lbl = $key;
	// 		$valEdit = "";
	// 		$required = 'required';
	// 		$select = false;

		
	// 		if(!empty($options and in_array($key, array_keys($options)))){
	// 			$row = $options[$key];

	// 			if(isset($row['plc'])){
	// 				$plc = $row['plc'];
	// 			}
	// 			if (isset($row['type'])) {
	// 				$type = $row['type'];
	// 			}
	// 			if (isset($row['label'])) {
	// 				$lbl = $row['label'];
	// 			}
	// 			if (isset($row['req'])) {
	// 				if(!$row['req']){
	// 					$required=null;
	// 				}
	// 			}
	// 			if (isset($row['select'])) {
	// 				if($row['select'] == true){
	// 					$select=true;
	// 				}
	// 			}	
	// 		}

	// 		if($edit){
	// 			$valEdit = $val;
	// 		}

	// 		if(!$select){
	// 			$input .= ('
	// 				<div class="mb-3">
	// 				  <label for="exampleInput'.$key.'" class="form-label">'.$lbl.'</label>
	// 				  <input type="'.$type.'" class="form-control" '.$required.' name="'.$key.'" value="'.$valEdit.'" placeholder="'.$plc.'" id="exampleInput'.$key.'">
	// 				</div>
	// 			');
	// 		}else{
	// 			$input .= '<div class="mb-3">
	// 				<label for="label'.$key.'" class="form-label">'.$lbl.'</label>
	// 				<select class="form-select" name="'.$key.'" aria-label="Default select example">';

	// 			foreach($options[$key]['data'] as $data){
	// 				if($options[$key]['selected'] == $data){
	// 					$input .= '<option selected value="'.$data.'">'.$data.'</option>';
	// 				}else{
	// 					$input .= '<option value="'.$data.'">'.$data.'</option>';
	// 				}
	// 			}

	// 			$input .= '</select>
	// 			</div>';
	// 		}
	// 	}
	
	// 	return($input);
	// }

	// [
	// 	'method'	=> 'key',
	// 	'field' 	=> [
	// 					'id' 	=> [
	// 						'use'	=> true,
	// 						'label'	=> 'NAMA SAYA',
	// 						'edit'	=> true
	// 					],
	// 					'nim'	=> [
	// 						'type'	=> 'number'
	// 					]
	// 	],
	// 	'tags'		=> [
	// 					'edit' => true
	// 	]
	// ];


	public function form_input($data,$options = []){
		$input ='';
				
		if(isset($options['method'])){
			if($options['method'] == 'key'){

				foreach($data as $key => $value){

					$lbl = $key;
					$type = 'text';
					$required = 'required';
					$plc = null;
					$valEdit = "";
					$use = true;
					$select = false;

					if(isset($options['field'][$key]['use'])){
						if($options['field'][$key]['use'] == true){
							$use = true;
						}elseif($options['field'][$key]['use'] == false){
							$use = false;
						}
					}

					if($use){
						if(!empty($options['field'])){

							if(in_array($key, array_keys($options['field']))){
								$tag = $options['field'][$key];
							
								if(isset($tag['plc'])){
									$plc = $tag['plc'];
								}
								if (isset($tag['type'])) {
									$type = $tag['type'];
								}
								if (isset($tag['label'])) {
									$lbl = $tag['label'];
								}
								if (isset($tag['edit'])) {
									$valEdit = $value;
								}
								if (isset($tag['req'])) {
									if(!$tag['req']){
										$required=null;
									}
								}
								if (isset($tag['tag'])) {
									if($tag['tag']['select'] == true){
										$select=true;
									}elseif($tag['tag']['select'] == false){
										$select = false;
									}
								}	
							}
							
						}

						if(isset($options['tags'])){
							if(isset($options['tags']['edit']) && $options['tags']['edit'] == true){
								$valEdit = $value;
							}
						}

						if(!$select){
							$input .= '
								<div class="mb-3">
								  <label for="exampleInput'.$key.'" class="form-label">'.$lbl.'</label>
								  <input type="'.$type.'" class="form-control" '.$required.' name="'.$key.'" value="'.$valEdit.'" placeholder="'.$plc.'" id="exampleInput'.$key.'">
								</div>
							';
						}else{
							$input .= '<div class="mb-3">
								<label for="label'.$key.'" class="form-label">'.$lbl.'</label>
								<select class="form-select" name="'.$key.'" aria-label="Default select example">';

							$boolSelect = true;	
							foreach($options['field'][$key]['tag']['data'] as $data){

								if(isset($options['field'][$key]['tag']['selected'])){
									if($boolSelect){
										$input .= '<option selected value="'.$options['field'][$key]['tag']['selected'].'">'.$options['field'][$key]['tag']['selected'].'</option>';
										$boolSelect = false;
									}

								}
									$input .= '<option value="'.$data.'">'.$data.'</option>';

							}

							$input .= '</select>
							</div>';
						}
					}//end use
				}
				return $input;
			}elseif($options['method'] == 'num') {

				foreach($data as $value){

					$lbl = $value;
					$type = 'text';
					$required = 'required';
					$plc = $value;
					$use = true;
					$select = false;

					if(isset($options['field'][$value]['use'])){
						if($options['field'][$value]['use']){
							$use = true;
						}elseif($options['field'][$value]['use'] == false){
							$use = false;
						}
					}

					if($use){
						if(!empty($options['field'])){

							if(in_array($value, array_keys($options['field']))){
								$tag = $options['field'][$value];
												
								if(isset($tag['plc'])){
									$plc = $tag['plc'];
								}
								if (isset($tag['type'])) {
									$type = $tag['type'];
								}
								if (isset($tag['label'])) {
									$lbl = $tag['label'];
								}
								if (isset($tag['req'])) {
									if($tag['req'] == false){
										$required=null;
									}
								}
								if (isset($tag['tag'])) {
									if($tag['tag']['select'] == true){
										$select=true;
									}elseif($tag['tag']['select'] == false){
										$select = false;
									}
								}	
							}
							
						}

						if(!$select){
							$input .= '
								<div class="mb-3">
								  <label for="exampleInput'.$value.'" class="form-label">'.$lbl.'</label>
								  <input type="'.$type.'" class="form-control" '.$required.' name="'.$value.'" placeholder="'.$plc.'" id="exampleInput'.$value.'">
								</div>
							';
						}else{
							$input .= '<div class="mb-3">
								<label for="label'.$value.'" class="form-label">'.$lbl.'</label>
								<select class="form-select" name="'.$value.'" aria-label="Default select example">';

							$boolSelect = true;	
							foreach($options['field'][$value]['tag']['data'] as $data){

								if(isset($options['field'][$value]['tag']['selected'])){
									if($boolSelect){
										$input .= '<option selected value="'.$options['field'][$value]['tag']['selected'].'">'.$options['field'][$value]['tag']['selected'].'</option>';
										$boolSelect = false;
									}

								}
									$input .= '<option value="'.$data.'">'.$data.'</option>';

							}

							$input .= '</select>
							</div>';
						}
					}//end use
				}

				return $input;

			}
		}else{
			return 'Error.! masukkan pengaturan input. ';
		}

		// foreach($data as $key => $val){
		// 	$type = "text";
		// 	$plc = $key;
		// 	$lbl = $key;
		// 	$valEdit = "";
		// 	$required = 'required';
		// 	$select = false;

		
		// 	if(!empty($options and in_array($key, array_keys($options)))){
		// 		$row = $options[$key];

		// 		if(isset($row['plc'])){
		// 			$plc = $row['plc'];
		// 		}
		// 		if (isset($row['type'])) {
		// 			$type = $row['type'];
		// 		}
		// 		if (isset($row['label'])) {
		// 			$lbl = $row['label'];
		// 		}
		// 		if (isset($row['req'])) {
		// 			if(!$row['req']){
		// 				$required=null;
		// 			}
		// 		}
		// 		if (isset($row['select'])) {
		// 			if($row['select'] == true){
		// 				$select=true;
		// 			}
		// 		}	
		// 	}

		// 	if($edit){
		// 		$valEdit = $val;
		// 	}

		// 	if(!$select){
		// 		$input .= ('
		// 			<div class="mb-3">
		// 			  <label for="exampleInput'.$key.'" class="form-label">'.$lbl.'</label>
		// 			  <input type="'.$type.'" class="form-control" '.$required.' name="'.$key.'" value="'.$valEdit.'" placeholder="'.$plc.'" id="exampleInput'.$key.'">
		// 			</div>
		// 		');
		// 	}else{
		// 		$input .= '<div class="mb-3">
		// 			<label for="label'.$key.'" class="form-label">'.$lbl.'</label>
		// 			<select class="form-select" name="'.$key.'" aria-label="Default select example">';

		// 		foreach($options[$key]['data'] as $data){
		// 			if($options[$key]['selected'] == $data){
		// 				$input .= '<option selected value="'.$data.'">'.$data.'</option>';
		// 			}else{
		// 				$input .= '<option value="'.$data.'">'.$data.'</option>';
		// 			}
		// 		}

		// 		$input .= '</select>
		// 		</div>';
		// 	}
		// }
	
		// return($input);
	}

	public function ascToNum($data,$field){
		$ret = [];
		foreach($data as $row){
			$ret[] = $row[$field];
		}

		return $ret;
	}

	public function waktu(){
		date_default_timezone_set('Asia/Makassar');
		$waktuAwal = strtotime('17:00:00');
		$waktuAkhir = strtotime('18:00:00');
		$waktu = strtotime('+2 hour');
		var_dump(date('Y-m-d H:i:s', $waktu));
		if($waktu>=$waktuAwal and $waktu <= $waktuAkhir){
			echo "waktu anda habis";
		}else{
			echo "waktu belum habis";
		}
	}


	// ===========================================================================================


	public function form_input_add($data,$id=true,$options = []){
		$input = '';
		if($id)unset($data[0]);

		// |				'ssl_verify' - TRUE/FALSE; Whether verify the server certificate or not
		// |
		// |	['compress'] Whether or not to use client compression (MySQL only)
		// |	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
		// |							- good for ensuring strict SQL while developing
		// |	['ssl_options']	Used to set various SSL options that can be used when making SSL connections.
		// |	['failover'] array - A array with 0 or more data for connections if the main should fail.
		// |	['save_queries'] TRUE/FALSE - Whether to "save" all executed queries.
		// | 				NOTE: Disabling this will also effectively disable both
		// | 				$this->db->last_query() and profiling of DB queries.
		// | 				When you run a query, with this setting set to TRUE (default),
		// | 				CodeIgniter will store the SQL statement for debugging purposes.
		// | 				However, this may cause high memory usage, especially if you run
		// | 				a lot of SQL queries ... disable this to avoid that problem.
		// |
		// | The $active_group variable lets you choose which connection group to
		// | make active.  By default there is only one group (the 'default' group).
		// |
		// | The $query_builder variables lets you determine whether or not to load
		// | the query builder class.

		foreach($data as $val){
			$type = "text";
			$plc = $val;
			$lbl = $val;
			$required = 'required';

			$select = false;

			if(!empty($options and in_array($val, array_keys($options)))){
				$row = $options[$val];
		
				if(isset($row['plc'])){
					$plc = $row['plc'];
				}
				if (isset($row['type'])) {
					$type = $row['type'];
				}
				if (isset($row['label'])) {
					$lbl = $row['label'];
				}
				if (isset($row['req'])) {
					if(!$row['req']){
						$required=null;
					}
				}
				if (isset($row['select'])) {
					if($row['select'] == true){
						$select=true;
					}
				}	
						
			}

			// |				'ssl_verify' - TRUE/FALSE; Whether verify the server certificate or not
			// |
			// |	['compress'] Whether or not to use client compression (MySQL only)
			// |	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
			// |							- good for ensuring strict SQL while developing
			// |	['ssl_options']	Used to set various SSL options that can be used when making SSL connections.
			// |	['failover'] array - A array with 0 or more data for connections if the main should fail.
			// |	['save_queries'] TRUE/FALSE - Whether to "save" all executed queries.
			// | 				NOTE: Disabling this will also effectively disable both
			// | 				$this->db->last_query() and profiling of DB queries.
			// | 				When you run a query, with this setting set to TRUE (default),
			// | 				CodeIgniter will store the SQL statement for debugging purposes.
			// | 				However, this may cause high memory usage, especially if you run
			// | 				a lot of SQL queries ... disable this to avoid that problem.
			// |
			// | The $active_group variable lets you choose which connection group to
			// | make active.  By default there is only one group (the 'default' group).
			// |
			// | The $query_builder variables lets you determine whether or not to load
			// | the query builder class.

			if(!$select){
				$input .= ('
					<div class="mb-3">
					  <label for="label'.$val.'" class="form-label">'.$lbl.'</label>
					  <input type="'.$type.'" class="form-control" '.$required.' name="'.$val.'" placeholder="'.$plc.'" id="label'.$val.'">
					</div>
				');
			}else{
				$input .= '<div class="mb-3">
					<label for="label'.$val.'" class="form-label">'.$lbl.'</label>
					<select class="form-select" name="'.$val.'" aria-label="Default select example">';

				$input .= '	<option selected>'.$options[$val]['selected'].'</option>';

				foreach($options[$val]['data'] as $data){
					$input .= '<option value="'.$data.'">'.$data.'</option>';
				}

				$input .= '</select>
				</div>';
					  
			}

		}
		return $input;
	}

	public function table($data,$id=true,$action = []){
		if(count($data)>0){
			$input = '';
			$th = '';
			$tr = '';

			if($action != null){
				$th .= "<th scope='col'>Action</th>";
			}

			foreach(array_keys($data[0]) as $row){
				if($id == false && $row == 'id'){

				}else{
					$th .= ('
								<th scope="col">'.$row.'</th>');
				}
			}

			// |				'ssl_verify' - TRUE/FALSE; Whether verify the server certificate or not
			// |
			// |	['compress'] Whether or not to use client compression (MySQL only)
			// |	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
			// |							- good for ensuring strict SQL while developing
			// |	['ssl_options']	Used to set various SSL options that can be used when making SSL connections.
			// |	['failover'] array - A array with 0 or more data for connections if the main should fail.
			// |	['save_queries'] TRUE/FALSE - Whether to "save" all executed queries.
			// | 				NOTE: Disabling this will also effectively disable both
			// | 				$this->db->last_query() and profiling of DB queries.
			// | 				When you run a query, with this setting set to TRUE (default),
			// | 				CodeIgniter will store the SQL statement for debugging purposes.
			// | 				However, this may cause high memory usage, especially if you run
			// | 				a lot of SQL queries ... disable this to avoid that problem.
			// |
			// | The $active_group variable lets you choose which connection group to
			// | make active.  By default there is only one group (the 'default' group).
			// |
			// | The $query_builder variables lets you determine whether or not to load
			// | the query builder class.

			foreach($data as $row){
				$td = '';
				$tdBool = true;
				foreach($row as $key => $rowTd){
					
					if(!empty($action) && $tdBool == true){
						$td .= '<td><a href="'.$action[0].'/'.$rowTd.'">hapus</a> | <a href="'.$action[1].'/'.$rowTd.'">Edit</a></td>';
						$tdBool = false;
					}

					if($id == false && $key == 'id'){

					}else{
						$td .= ('
								<td>'.$rowTd.'</td>
							');
					}
				}

				$tr .= ('
						<tr>
						  '.$td.'
						</tr>
						');
			}

			// |				'ssl_verify' - TRUE/FALSE; Whether verify the server certificate or not
			// |
			// |	['compress'] Whether or not to use client compression (MySQL only)
			// |	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
			// |							- good for ensuring strict SQL while developing
			// |	['ssl_options']	Used to set various SSL options that can be used when making SSL connections.
			// |	['failover'] array - A array with 0 or more data for connections if the main should fail.
			// |	['save_queries'] TRUE/FALSE - Whether to "save" all executed queries.
			// | 				NOTE: Disabling this will also effectively disable both
			// | 				$this->db->last_query() and profiling of DB queries.
			// | 				When you run a query, with this setting set to TRUE (default),
			// | 				CodeIgniter will store the SQL statement for debugging purposes.
			// | 				However, this may cause high memory usage, especially if you run
			// | 				a lot of SQL queries ... disable this to avoid that problem.
			// |
			// | The $active_group variable lets you choose which connection group to
			// | make active.  By default there is only one group (the 'default' group).
			// |
			// | The $query_builder variables lets you determine whether or not to load
			// | the query builder class.

			// table-borderless datatable
			$tbl ='
				<div class="table-responsive">
					<table class="table">
					  <thead>
					    <tr>
					     '.$th.'
					    </tr>
					  </thead>
					  <tbody>
					    '.$tr.'
					  </tbody>
					</table>
				</div>
				';

			return $tbl;
		}else{
			return '
				<div class="alert alert-warning" role="alert">
					<li class="notification-item">
					  <i class="bi bi-exclamation-circle text-warning"></i>
					  Kosong.!!
					</li>
				  
				</div>

			';
		}

	}
	// |				'ssl_verify' - TRUE/FALSE; Whether verify the server certificate or not
	// |
	// |	['compress'] Whether or not to use client compression (MySQL only)
	// |	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
	// |							- good for ensuring strict SQL while developing
	// |	['ssl_options']	Used to set various SSL options that can be used when making SSL connections.
	// |	['failover'] array - A array with 0 or more data for connections if the main should fail.
	// |	['save_queries'] TRUE/FALSE - Whether to "save" all executed queries.
	// | 				NOTE: Disabling this will also effectively disable both
	// | 				$this->db->last_query() and profiling of DB queries.
	// | 				When you run a query, with this setting set to TRUE (default),
	// | 				CodeIgniter will store the SQL statement for debugging purposes.
	// | 				However, this may cause high memory usage, especially if you run
	// | 				a lot of SQL queries ... disable this to avoid that problem.
	// |
	// | The $active_group variable lets you choose which connection group to
	// | make active.  By default there is only one group (the 'default' group).
	// |
	// | The $query_builder variables lets you determine whether or not to load
	// | the query builder class.

	public function upl($gambar='',$url=''){
		// form_open_multipart()
		//form_close()

		// |				'ssl_verify' - TRUE/FALSE; Whether verify the server certificate or not
		// |
		// |	['compress'] Whether or not to use client compression (MySQL only)
		// |	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
		// |							- good for ensuring strict SQL while developing
		// |	['ssl_options']	Used to set various SSL options that can be used when making SSL connections.
		// |	['failover'] array - A array with 0 or more data for connections if the main should fail.
		// |	['save_queries'] TRUE/FALSE - Whether to "save" all executed queries.
		// | 				NOTE: Disabling this will also effectively disable both
		// | 				$this->db->last_query() and profiling of DB queries.
		// | 				When you run a query, with this setting set to TRUE (default),
		// | 				CodeIgniter will store the SQL statement for debugging purposes.
		// | 				However, this may cause high memory usage, especially if you run
		// | 				a lot of SQL queries ... disable this to avoid that problem.
		// |
		// | The $active_group variable lets you choose which connection group to
		// | make active.  By default there is only one group (the 'default' group).
		// |
		// | The $query_builder variables lets you determine whether or not to load
		// | the query builder class.


		$gambar = $gambar['gambar'];
		if($gambar['name'] != ''){
		    $extensi = explode('.',$gambar['name']);
		    $newName = random_string('numeric',8).'.'.end($extensi);

		    $config['upload_path'] = './assets/img/produk';
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
		        redirect(base_url().$url);
		        die;
		    }else{
		        return $this->upload->data('file_name');                  

		    } 
		    // |				'ssl_verify' - TRUE/FALSE; Whether verify the server certificate or not
		    // |
		    // |	['compress'] Whether or not to use client compression (MySQL only)
		    // |	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
		    // |							- good for ensuring strict SQL while developing
		    // |	['ssl_options']	Used to set various SSL options that can be used when making SSL connections.
		    // |	['failover'] array - A array with 0 or more data for connections if the main should fail.
		    // |	['save_queries'] TRUE/FALSE - Whether to "save" all executed queries.
		    // | 				NOTE: Disabling this will also effectively disable both
		    // | 				$this->db->last_query() and profiling of DB queries.
		    // | 				When you run a query, with this setting set to TRUE (default),
		    // | 				CodeIgniter will store the SQL statement for debugging purposes.
		    // | 				However, this may cause high memory usage, especially if you run
		    // | 				a lot of SQL queries ... disable this to avoid that problem.
		    // |
		    // | The $active_group variable lets you choose which connection group to
		    // | make active.  By default there is only one group (the 'default' group).
		    // |
		    // | The $query_builder variables lets you determine whether or not to load
		    // | the query builder class. 
		}
	}
}
