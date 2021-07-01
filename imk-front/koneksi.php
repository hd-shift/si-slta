<?php
	$koneksi = new mysqli("localhost", "root", "", "imk");
	if(!$koneksi){
		mysqli_error($koneksi);
		echo "Koneksi Gagal";
	}else{
	}
	

?>