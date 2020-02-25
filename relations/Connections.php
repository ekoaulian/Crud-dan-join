<?php

	//variable koneksi = (host, username, pasword, nama database)
	$koneksi = mysqli_connect("localhost","root","","data_produk");

	//cek koneksi
	if (mysqli_connect_errno()) {
		echo "koneksi database gagal " . mysqli_connect_error();
	}

	function query($query) {
		global $koneksi;
		$result 	= mysqli_query($koneksi, $query);
		$rows		= [];
		while( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}
?>