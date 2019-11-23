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
	
	<div class="container">
				<div class="row">
					<div class="col-md-12" style="padding:20px">
						<div class="card">
	<center  class="card-header"><b>SILAHKAN ISI BIODATA !!!</b></center>
    <div class="card-body">
	<form action="proses.php?aksi=tambah" method="post">
	<div class="form-group" >
		<label><b>Nama </b></label>
		<input type="text" name="nama" class="form-control" placeholder="Nama"required>
		</div>
		<div class="form-group">
									<label ><b>Tanggal Lahir</b></label>
									<input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir"required>
								</div>
								<div class="form-group">
									<label ><b>Tempat Lahir</b></label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir"required>
								</div>
								<div class="form-group">
									<label ><b>Jenis Kelamin</b></label><br>
									<input type="radio" name="jenis_kelamin" value="Laki-laki" required>Laki-laki &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan
								</div>
	
								<div class="form-group">
									<label ><b>Agama</b> </label>
									<select name="agama" class="form-control">
										<option value="Islam">Islam</option>
										<option value="Kristen">Kristen</option>
										<option value="Budha">Budha</option>
										<option value="Hindu">Hindu</option>
										<option value="Khatolik">Khatolik</option>
									</select>
								</div>
								<div class="form-group">
									<label ><b>Alamat</b></label><br>
									<textarea name="alamat" class="form-control" placeholder="Alamat" required></textarea>
								</div>
								<div class="form-group">
									<label ><b>Motivasi Hidup</b></label><br>
									<input type="text" name="motivasi_hidup" class="form-control" placeholder="Motivasi Hidup"required>
								</div>
								<div class="form-group">
		<button type="submit" name="simpan" class="btn btn-primary btn-block">Simpan</button>
</div>
	</form>
</body>

</html>