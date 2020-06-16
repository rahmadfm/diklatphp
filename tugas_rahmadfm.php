<html>
<head>
	<title>TUGAS RAHMAD FM</title>
</head>
<body>
	<?php
		$grade = 54;
		echo 'Nilai Anda = '.$grade. '<br>';
		echo 'Sehingga Anda : ';
		/*
		Persyaratannya :
		A = 80 sd 100
		B = 70 sd 79
		C = 60 sd 69
		Tidak Lulus = < 60
		*/
		
		if($grade >= 80 && $grade <=100) {
			echo 'LULUS dg Predikat A';
		} else if($grade >=70 && $grade <=79) {
			echo 'LULUS dg Predikat B';
		} else if($grade >=60 && $grade <=69) {
			echo 'LULUS dg Predikat C';
		} else {
			echo 'TIDAK LULUS';
		}
		
	?>
</body>
</html>