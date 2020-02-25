<?php
    require_once('../controller/Controller.php');

    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $provinsi = $_POST['provinsi'];

    $create = $db->create('tabel_alamat', [
    	'kelurahan' => $kelurahan,
    	 'kecamatan' => $kecamatan,
    	 'provinsi' => $provinsi
    	 ]);
    if($create)
    {
    	echo "<script>
                alert('Data berhasil ditambahkan');
                document.location.href = '../view/index.php';
            </script>";
    }
    else {
    	echo "<script>
                alert('Data gagal ditambahkan');
                document.location.href = '../view/index.php';
            </script>";
    }

?>