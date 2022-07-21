<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tugas Akhir Pemrograman Web</title>
	<link rel="stylesheet" type="text/css" href="data.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
	<script>
    	alert("Jika akan mengisi formulir lagi silakan klik Formulir. Untuk melihat daftar peserta lomba, silakan klik Lihat Data Peserta. Jika ingin kembali ke tampilan awal klik Back to Home");
	</script>
<body>
	<?php
		$nim		= $_POST["nim"];
		$nama		= $_POST["nama"];
		$kelas		= $_POST["kelas"];
		$email		= $_POST["email"];

		$fp = fopen("data.txt", "a+");
		fputs($fp,"$nim|$nama|$kelas|$email\n"); 
		fclose($fp);
	?>

	<header>
		<h1>Pendataan Peserta Lomba<br>&copy; Indah Nuraini A. M. Djen | 2100018204</h1>
	</header>
	<div class="container-data">
		<div class="konten-menu" align="center">
        	<h2>Pilih Menu</h2>   
     	</div>
		<table class="table3" align="center">
			<form class="form" name="form2" method="get" action="tampilan.html">
         		<label><input type="submit" name="btn" id="submit-btn3" value="Formulir" align="center"></label>
    		</form>
    		<br>
    		<br>
    		<form class="form" name="form2" method="get" action="lihat-data.php">
        	 	<label><input type="submit" name="btn" id="submit-btn3" value="Lihat Data Peserta" align="center"></label>
    		</form>
    		<br>
    		<br>
    		<form class="form" name="form2" method="get" action="index.html">
        		 <label><input type="submit" name="btn" id="submit-btn3" value="Back to Home" align="center"></label>
    		</form>
		</table>
	</div>
</body>
</html>