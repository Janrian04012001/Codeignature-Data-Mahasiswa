<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

	<center><h2>Tambah Data Mahasiswa</h2></center>
	<div class="container" style="margin-top: 50px; margin-bottom: 80px" >

	<div class="form-group">
	&nbsp;&nbsp;
	<button onclick="goBack()" class="btn btn-primary left-block">Kembali</button>
	<script>
   		function goBack() {
        window.history.back();
    	}
	</script>
	</div>

		<div class="col-md-12">
			<?php echo form_open('data/simpan') ?>

			<div class="form-group">
			    <label for="text">NIM</label>
			    <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" required>
			  </div>

			  <div class="form-group">
			    <label for="text">Nama</label>
			    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
			  </div>

			  <div class="form-group">
			    <label for="jk">Jenis Kelamin</label><br>
			    <input type="radio" id="jk" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
			    <input type="radio" id="jk" name="jenis_kelamin" value="Perempuan" required > Perempuan
			  </div>

			  <div class="form-group">
			    <label for="text">Alamat</label>
			    <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required>
			  </div>

			  <button type="submit" class="btn btn-md btn-success">Simpan</button>
			  <button type="reset" class="btn btn-md btn-warning">Reset</button>
			<?php echo form_close() ?>
		</div>
	</div>

<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script> -->
<!-- <script>
	$('#table').DataTable( {
    autoFill: true
} );
</script> -->
</body>
</html>			

