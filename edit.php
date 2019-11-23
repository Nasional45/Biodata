<html>

<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
	  <a class="navbar-brand" href="#">Tambah</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="#">Biodata Murid<span class="sr-only"></span></a>
		  </li>
	
	
		</ul>
		
	  </div>
	</nav>
	<?php
	include 'database.php';
	$biodata = new Biodata();
	foreach ($biodata->edit($_GET['id']) as $data) {
		$id2 = $data['id'];
		$nama2 = $data['nama'];
		$tanggal_lahir2 = $data['tanggal_lahir'];
		$tempat_lahir2 = $data['tempat_lahir'];
        $jenis_kelamin2 = $data['jenis_kelamin'];
        $agama2 = $data['agama'];
        $alamat2 = $data['alamat'];
        $motivasi_hidup2 = $data['motivasi_hidup'];

	}
	?>
<div class="container">
				<div class="row">
					<div class="col-md-12" style="padding:20px">
						<div class="card">
	<center><b>SILAHKAN UBAH BIODATA !!!</b></center>
	<div class="card-body">
	<form action="proses.php?aksi=update" method="post">

		<input type="hidden" name="id" value="<?php echo $id2 ?>">

		<label><b>Nama </b></label>
		<input type="text" name="nama" class="form-control" value="<?php echo $nama2 ?>">
		<br><br>

		<label><b>Tanggal Lahir</b></label>
		<input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $tanggal_lahir2 ?>">
		<br><br>

		<label><b>Tempat Lahir</b></label>
		<input type="text" name="tempat_lahir" class="form-control" value="<?php echo $tempat_lahir2 ?>">
		<br><br>

	    <label ><b>Jenis Kelamin</b></label>
		<input type="radio" name="jenis_kelamin" class="form-control" value="Laki-laki" required>Laki-laki &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="jenis_kelamin" class="form-control" value="Perempuan" required>Perempuan
		<br><br>
         
		 
	    <label ><b>Agama</b></label>
		<select name="agama" class="form-control">
		<option value="Islam">Islam</option>
		<option value="Kristen">Kristen</option>
		<option value="Budha">Budha</option>
		<option value="Hindu">Hindu</option>
		<option value="Khatolik">Khatolik</option>
		</select>
		<br><br>

		<label><b>Alamat</b></label>
		<input type="text" name="alamat" class="form-control" value="<?php echo $alamat2 ?>">
		<br><br>

		<label><b>Motivasi Hidup</b></label>
		<input type="text" name="motivasi_hidup" class="form-control" value="<?php echo $motivasi_hidup2 ?>">
		<br><br>
						

		<button type="submit" name="simpan" class="btn btn-primary btn-block">Simpan</button>

	</form>

</body>

</html>