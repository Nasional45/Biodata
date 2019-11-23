<html>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<style>
	*{margin: 0; padding: 0}
 
		.container {
 		 border-bottom: 100px solid #333;
 		 border-top: 100px solid #eee;
 		 display: -webkit-box;
 		 display: -ms-flexbox;
 		 display: flex;
 		 height: 0;
		}
 
		h1 {
		  border: 10px solid #fff;
		  color: #fff;
		  font-size: 100px;
		  margin: auto;
		  mix-blend-mode: difference;
		  padding: 0 50px;
		  text-transform: uppercase;
		  -webkit-transform: translate(0, -50%);
		          transform: translate(0, -50%);
		  -webkit-transition: box-shadow 0.4s;
		  transition: box-shadow 0.4s;
		}
		h1:hover {
		  box-shadow: 0 0 0 30px #555;
		}
		p {width: 900px; margin: auto;}
 
	</style>
<body>
<div class="container">
		<h1>Biodata Diri</h1>
	</div>
            <center><a href="tambah.php" class="btn btn-outline-warning">Tambah</a>
            <table border="1" class="table-dark">
                <tr>
                    <th><center>No</th>
                    <th><center>Nama</th>
                    <th><center>Tanggal Lahir</th>
                    <th><center>Tempat Lahir</th>
                    <th><center>Jenis Kelamin</th>
                    <th><center>agama</th>
                    <th><center>Alamat</th>
                    <th><center>Motivasi Hidup</th>
                    <th><center>Aksi</th>
                </tr>

                <?php
                include 'database.php';
                $biodata = new Biodata();
                $no = 1;
                foreach ($biodata->index() as $data) {
                    ?>
                   
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['tanggal_lahir']; ?></td>
                        <td><?php echo $data['tempat_lahir']; ?></td>
                        <td><?php echo $data['jenis_kelamin']; ?></td>
                        <td><?php echo $data['agama']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['motivasi_hidup']; ?></td>

                        <td><a href="show.php?id=<?php echo $data['id']; ?>"class="btn btn-outline-danger">Tampil</a>
                            <a href="edit.php?id=<?php echo $data['id']; ?>"class="btn btn-outline-warning">Ubah</a>
                            <a href="proses.php?id=<?php echo $data['id']; ?>
                    & aksi=delete" onclick="return confirm('Apakah Anda 
                    Yakin Mau Menghapus Data Ini?')" class="btn btn-outline-success">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
</body>

</html>