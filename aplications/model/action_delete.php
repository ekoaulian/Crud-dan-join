<?php
    require_once('../controller/Controller.php');

    $id_alamat = $_GET['id_alamat'];

    $delete = $db->delete('tabel_alamat', 'id_alamat= '. $id_alamat );

    if($delete)
    {
    	echo "<script>
                alert('Data berhasil dihapus');
                document.location.href = '../view/index.php';
            </script>";
    }
    else {
    	echo "<script>
                alert('Data gagal dihapus');
                document.location.href = '../view/index.php';
            </script>";
    }
?>