<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pinjam buku</title>
	<style type="text/css">

		main  {
			font-size: 15px;
			float: left;
			margin-top: 15px;
			margin-left: 20px;
		}
		
		header h2 {
			font-size: 30px;
			margin-top: 50px;
			text-align: center;
		}

		form input {
			padding: 12px;
			border-radius: 5px;
			border-color: white;
			width: 400px;
			margin-bottom: 20px;
		}

		main a {
			text-decoration: none;
			color: indianred;
		}

		main span {
			font-size: 15px;
		}

		main p {
			font-size: 20px;
			padding-bottom: 10px;
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
		<h2>PINJAM BUKU</h2><br>
	</header>
	<main>
	<form method="post" action="proses_pinjam.php">

		<p>id anggota anda: </p>
		<input type="text" name="id_anggota" size="50" required="isi cuy">

		<p>kode buku: </p>
		<span>buka <a href="tampil_buku.php">daftar buku</a> untuk melihat kode buku</span><br>
		<input type="text" name="id_buku" value="" size="50" required="isi cuy">
		
		<p>tanggal pinjam:</p>
		<input type="date" name="tgl_pinjam" size="50" required="isi cuy"><br><br>

		<input class="submit" type="submit" name="submit">
	</form>
	</main>

</body>
</html>