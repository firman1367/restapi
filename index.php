<?php

	$host 	= "localhost";
	$user 	= "root";
	$pass 	= "";
	$db		= "db_api";

	$koneksi 	= mysqli_connect($host,$user,$pass);
	$select_db 	= mysqli_select_db($koneksi,$db);

	/*if ($koneksi) {
		echo "sukses";
	}else{
		echo "gagal";
	}*/

?>