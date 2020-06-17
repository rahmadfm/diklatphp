<html>
<head>
	<title>LOOPING</title>
</head>
<body>
	<?php
		$host = "localhost"; //Nama hostnya
		$username = "root"; //Username
		$password = "R4f1k1d3s4"; //Password (Isi jika menggunakan password)
		$database = "phpfundamental"; //Nama databasenya
	
		$connect = mysqli_connect($host, $username, $password, $database); //Koneksi ke MySQL
	
		if (!$connect){
			die("Gagal terhubung dengan database: ".mysqli_connect_error());
		}else{
			echo 'koneksi berhasil';
		}
	?>
</body>
</html>