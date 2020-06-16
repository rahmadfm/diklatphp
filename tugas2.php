<html>
<head>
	<title>Tugas2 Rahmad FM</title>
</head>
<body>
	<?php
		
		$siswa = [
			'budi' => [
				'matematika' => 70, 'b.indonesia' => 80, 'b.inggris' => 90
			],
			
			'tono' => [
				'matematika' => 60, 'b.indonesia' => 70, 'b.inggris' => 80
			],
			
			'gadis' => [
				'matematika' => 55, 'b.indonesia' => 75, 'b.inggris' => 95
			]
		];
		

		echo '<br>Siswa yang memiliki nilai Matematika >= 60 yaitu : <br>';
		foreach($siswa as $nama => $data){
			foreach($data as $pel => $nilai){
				
				if ($pel == 'matematika' && $nilai >= 60){
					echo 'Siswa bernama '.$nama.' dengan perolehan nilai '.$nilai.'<br>';
				}
			}
		}
	?>
</body>
</html>