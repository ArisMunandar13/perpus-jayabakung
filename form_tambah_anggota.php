<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PENDAFTARAN ANGGOTA</title>
	<style type="text/css">
		main  {
			font-size: 15px;
			float: left;
			margin-top: 15px;
			margin-left: 20px;
		}

		main p {
			font-size: 20px;
			padding-bottom: 10px;
		}

		header h2 {
			font-size: 30px;
			margin-top: 50px;
			

			text-align: center;
		}

		.jk {
			width: 50px;
		}


		form input {
			padding: 12px;
			border-radius: 5px;
			border-color: white;
			width: 400px;
		}

		.submit {
			background-color: lightcoral;
			width: 150px;
			color: white;
			font-size: 15px;
			transition: 0.3s;
		}

		.submit:hover {
			background-color: indianred;
			margin-top: -5px;
		}
	</style>
</head>
<body>

	<?php include 'sidebar.php' ?>

<header>
	<h2>DAFTAR ANGGOTA</h2><br>
</header>
	

	<main>
	<form method="POST" action="proses_tambah_anggota.php">
		<p>ID ANGGOTA*: </p>
		<span>contoh: A001</span><br> 
		<input type="text" name="id_anggota" size="50" required="isi cuy"><br><br>

		<p>Nama Lengkap: </p>
		<input type="text" name="nama_lengkap" size="50" required="isi cuy"><br>

		<br><p>Telepon:</p>
		<input type="text" name="telepon" size="50"><br>

		<br><p class="jk">jenis kelamin: </p>
		<input class="jk" type="radio" name="jk" value="L"> laki-laki
		<input class="jk" type="radio" name="jk" value="P"> perempuan
		
		<br><br><p>Alamat:</p>
		<textarea rows="4" cols="55" name="alamat"></textarea><br><br>

		<input class="submit" type="submit" name="submit">
	</form>

	</main>

</body>
</html>