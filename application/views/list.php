<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

	<center><h2>Data Mahasiswa</h2></center>
	<div class="container" style="margin-top: 30px">
		<?php echo $this->session->flashdata('notif') ?>
		<a href="<?php echo base_url() ?>data/tambah/" class="btn btn-md btn-success">Tambah Data</a>
		<hr>
		<!-- table -->
		<div class="table-responsive">
			<table id="table" class="table table-bordered table-hover">
			    <thead class="thead-dark">
			      <tr>
			      	<th>No.</th>
			        <th>NIM</th>
			        <th>Nama</th>
			        <th>Jenis Kelamin</th>
			        <th>Alamat</th>
			        <th>Options</th>
			      </tr>
			    </thead>
			    <tbody class="table-info">

			    <?php
			        $no = 1; 
			    	foreach($mahasiswa as $hasil){ 
			    ?>

			    <tr>
			        <td><?php echo $no++ ?></td>
			        <td><?php echo $hasil->nim ?></td>
			        <td><?php echo $hasil->nama ?></td>
			        <td><?php echo $hasil->jenis_kelamin ?></td>
			        <td><?php echo $hasil->alamat ?></td>
			     <td>
			     	<a href="<?php echo base_url() ?>Data/edit/<?php echo $hasil->id_mh ?>" class="btn btn-sm btn-success"></i>Edit</a>
			  		<a href="<?php echo base_url() ?>Data/hapus/<?php echo $hasil->id_mh ?>" class="btn btn-sm btn-danger">Hapus</a>
			        </td>
			      </tr>

			     <?php } ?>

			    </tbody>
			  </table>
		</div>

	</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>	
<script>
	$('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>