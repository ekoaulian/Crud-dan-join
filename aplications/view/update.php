<!DOCTYPE html>
<html>
<head>
	<title>Data alamat</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/AdminLTE.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/all-skins.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/morris.js/morris.css">
	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<div class="container">
	
	<h1>Data Alamat</h1>
	<?php
        require_once('../controller/Controller.php');
        $id_alamat = $_GET['id_alamat'];
        $data = $db->first('tabel_alamat', 'where id_alamat ='.$id_alamat);
	?>
	<form role="form" action="../model/action_update.php?id_alamat=<?= $data['id_alamat'] ?>" method="post">
      <div class="box-body">
		<a href="index.php" class="btn btn-info"> Back</a>
		<h2>Form update data</h2>
        <div class="form-group">
          <label for="kelurahan">kelurahan</label>
          <input type="text" name="kelurahan" class="form-control" id="kelurahan" value="<?= $data['kelurahan'] ?>" placeholder="Masukkan kelurahan">
        </div>
        <div class="form-group">
          <label for="kecamatan">kecamatan</label>
          <input type="text" name="kecamatan" class="form-control" id="kecamatan" value="<?= $data['kecamatan'] ?>" placeholder="Masukkan kecamatan">
        </div>
        <div class="form-group">
          <label for="provinsi">provinsi</label>
          <input type="text" name="provinsi" class="form-control" id="provinsi" value="<?= $data['provinsi'] ?>" placeholder="Masukkan provinsi">
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
      </div>
    </form>

</div>

<!-- jQuery 3 -->
<script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../assets/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="../../assets/js/adminlte.min.js"></script>
<script type="text/javascript" src="../../assets/js/demo.js"></script>
</body>
</html>