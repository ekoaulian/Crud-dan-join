<!DOCTYPE html>
<html>
<head>
	<title>Data alamat</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/AdminLTE.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/all-skins.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/morris.js/morris.css">
	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<link rel="stylesheet" href="../assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>
<body>
<?php require_once('Connections.php'); ?>
<div class="container">
	
	<h1>Relations</h1>
	<p>
	Program ini dibuat untuk memenuhi test (Back-End Programmer) secara remote	
	</p><hr>
	<h3>(A) Data dengan nama </h3>
	<div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th style="width: 10px">No</th>
              <th class="text-center">Id</th>
              <th class="text-center">Tanggal</th>
              <th class="text-center">Id Supplier</th>
              <th class="text-center">Nama Supplier</th>
            </tr>
        </thead>
            <?php
				$data_pembelian = query("SELECT pembelian.id,tgl,id_supplier, supplier.nama_supplier FROM pembelian INNER JOIN supplier ON pembelian.id_supplier = supplier.idsupplier");
				$no=1;
				foreach ($data_pembelian as $dm) :
			?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $dm['id']; ?></td>
              <td><?= $dm['tgl']; ?></td>
              <td><?= $dm['id_supplier']; ?></td>
              <td><?= $dm['nama_supplier']; ?></td>
            </tr>
            <?php
              $no++; 
              endforeach;
            ?>
         </table>
	</div><hr>
	<h3>(B) Data digabungkan dan diurutkan berdasarkan tanggal </h3>
	<div class="table-responsive">
      <table id="example3" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th style="width: 10px">No</th>
              <th class="text-center">Id Penjualan</th>
              <th class="text-center">Id Barang</th>
              <th class="text-center">Nama Barang</th>
              <th class="text-center">Qty</th>
              <th class="text-center">Tanggal</th>
            </tr>
        </thead>
            <?php
				$data_penjualan = query("SELECT detailpenjualan.idpenjualan,barang.idbarang,nama_barang,qty,penjualan.tgl FROM ((detailpenjualan INNER JOIN barang ON detailpenjualan.idbarang = barang.idbarang)INNER JOIN penjualan ON detailpenjualan.idpenjualan = penjualan.id) ORDER BY tgl ASC");
				$no=1;
				foreach ($data_penjualan as $dp) :
			?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $dp['idpenjualan']; ?></td>
              <td><?= $dp['idbarang']; ?></td>
              <td><?= $dp['nama_barang']; ?></td>
              <td><?= $dp['qty']; ?></td>
              <td><?= $dp['tgl']; ?></td>
            </tr>
            <?php
              $no++; 
              endforeach;
            ?>
         </table>
	</div>
	<hr>
	<h3>(C) Jumlah data  </h3>
	<div class="table-responsive">
      <table id="example5" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th style="width: 10px">No</th>
              <th class="text-center">Id Barang</th>
              <th class="text-center">Nama Barang</th>
              <th class="text-center">Qty</th>
            </tr>
        </thead>
            <?php
				$data_jumlah = query("SELECT barang.idbarang,nama_barang,detailpenjualan.qty FROM barang INNER JOIN detailpenjualan ON detailpenjualan.idbarang = barang.idbarang ORDER BY idbarang ASC");
				$no=1;
				foreach ($data_jumlah as $dj) :
			?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $dj['idbarang']; ?></td>
              <td><?= $dj['nama_barang']; ?></td>
              <td><?= $dj['qty']; ?></td>
            </tr>
            <?php
              $no++; 
              endforeach;
            ?>
         </table>
	</div>

</div>
<br>

<!-- jQuery 3 -->
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="../assets/js/adminlte.min.js"></script>
<script type="text/javascript" src="../assets/js/demo.js"></script>
<!-- DataTables -->
<script src="../assets/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
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
  $(function () {
    $('#example3').DataTable()
    $('#example4').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  $(function () {
    $('#example5').DataTable()
    $('#example6').DataTable({
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