<?php  
//Get Data Provinsi
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "key: ##-API Raja Ongkir-##"
    ),
  ));

?>
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
	
	<form role="form" action="../model/action_create.php" method="post">
      <div class="box-body">
		<a href="index.php" class="btn btn-info"> Back</a>
		<h2>Form tambah data</h2>
        <div class="form-group">
          <label for="kelurahan">kelurahan</label>
          <input type="text" name="kelurahan" class="form-control" id="kelurahan" placeholder="Masukkan kelurahan" required>
        </div>
        <div class="form-group">
          <label for="kecamatan">kecamatan</label>
          <input type="text" name="kecamatan" class="form-control" id="kecamatan" placeholder="Masukkan kecamatan" required>
        </div>
        <!-- <div class="form-group">
          <label for="provinsi">provinsi</label>
          <input type="text" name="provinsi" class="form-control" id="provinsi" placeholder="Masukkan provinsi">
        </div> -->
        <div class="form-group">
          <label>provinsi</label>
          <select name="provinsi" id="provinsi" class="form-control" required>
            <?php 
            $response = curl_exec($curl);
            $err = curl_error($curl); 
            echo "<option>Pilih Provinsi Tujuan</option>";
            $data = json_decode($response, true);
            for ($i=0; $i < count($data['rajaongkir']['results']); $i++) {
              echo "<option value='".$data['rajaongkir']['results'][$i]['province_id']."'>".$data['rajaongkir']['results'][$i]['province']."</option>";
            }
            ?>
          </select>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
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