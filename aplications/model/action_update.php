<?php
    require_once('../controller/Controller.php');
    $id_alamat = $_GET['id_alamat'];

    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $provinsi = $_POST['provinsi'];

    $update = $db->update('tabel_alamat', [
    	'kelurahan' => $kelurahan,
    	 'kecamatan' => $kecamatan,
    	 'provinsi' => $provinsi
    	 ],
    	 'id_alamat='.$id_alamat);
    if($update)
    {
    	echo "<script>
                alert('Data berhasil diupdate');
                document.location.href = '../view/index.php';
            </script>";
    }
    else {
    	echo "<script>
                alert('Data gagal diupdate');
                document.location.href = '../view/index.php';
            </script>";
    }
?>