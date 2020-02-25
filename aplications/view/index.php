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
	<link rel="stylesheet" href="../../assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>
<body>
<div class="container">
	
	<h1>Data Alamat</h1>
	<p>
	Program ini dibuat untuk memenuhi test (Back-End Programmer) secara remote	
	</p>
	<a href="create.php" class="btn btn-success-sm"><i class="fa fa-plus-square-o"></i> Create</a>
	<div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th style="width: 10px">No</th>
              <th class="text-center">Kelurahan</th>
              <th class="text-center">Kecamatan</th>
              <th class="text-center">Provinsi</th>
              <th style="width:60px">Aksi</th>
            </tr>
        </thead>
            <?php
				require_once('../controller/Controller.php');
				$no=1;
				foreach ($db->get('tabel_alamat') as $data) :
			?>
            <tr>
              <td><?= $no; ?></td>
              <?php $data['id_alamat']; ?>
              <td><?= $data['kelurahan']; ?></td>
              <td><?= $data['kecamatan']; ?></td>
              <td><?= $data['provinsi']; ?></td>
              <td>
              	<a href="update.php?id_alamat=<?= $data['id_alamat'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
              	<a href="../model/action_delete.php?id_alamat=<?= $data['id_alamat']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus')"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <?php
              $no++; 
              endforeach; 
            ?>
          </table>
          </div>

</div>

<!-- jQuery 3 -->
<script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../assets/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="../../assets/js/adminlte.min.js"></script>
<script type="text/javascript" src="../../assets/js/demo.js"></script>
<!-- DataTables -->
<script src="../../assets/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>