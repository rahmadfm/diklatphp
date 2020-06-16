<html>
	<head>
		<meta charset = "utf-8">
		<title>Hasil TUGAS 3</title>
	</head>
	<body>
		<a href="tugas3.php">Back</a> <br>
	
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
				$nama = $_POST["nama"];
				$jlh = $_POST["jlh"];
			
				for ( $i=0; $i<$jlh; $i++){
					echo 'Saya Cinta '.$nama.'<br>';
				}
			}
		
		?>
	
		<div style="text-align: left;">
			<span style = "color: blue; font-family: arial; font-style: italic; font-size: 10px;">
				<br><br>by: Rahmad Fitra Mukti<br>
			</span>
		</div>
	</body>
</html>