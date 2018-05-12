<?php

	header('content-type: application/json');
	
	$query = $_SERVER['REQUEST_METHOD'];

	if ($query == 'GET') {
		getmethod();
	}
	else if ($query == 'POST') {
		echo '{"name": "post"}';
	}
	else if ($query == 'PUT') {
		echo '{"name": "put"}';
	}
	else if ($query == 'DELETE') {
		echo '{"name": "delete"}';
	}else{
		echo '{"name": "data tidak ditemukan"}';
	}

	function getmethod(){

		include ('db.php');
		$query = mysqli_query($koneksi,("SELECT * FROM tb_siswa"));
		$cek   = mysqli_num_rows($query);

		if($cek > 0){

			$data_json = array();
			foreach ($query as $data) {
				$data_json['query'] [] = $data;
			}

			echo json_encode($data_json);

		}else{
			echo '{"query": "data tidak ditemukan"}';
		}

	}

?>