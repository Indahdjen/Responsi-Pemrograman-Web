<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tugas Akhir Pemrograman Web</title>
	<link rel="stylesheet" type="text/css" href="lihat_sdata.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
	<script>
    	alert("Ini adalah tampilan data peserta Survival #3");
	</script>
<body>
	<header>
		<h1>Data Peserta Survival #3<br>&copy; Indah Nuraini A. M. Djen | 2100018204</h1>
	</header>
	<div class="left" style="float: left">
		<?php 
			$fp = fopen("data.txt","r");
			echo "<table border=0>";

			while ($isi = fgets($fp,80)){
				$pisah = explode("|",$isi);
				echo "<tr><td>NIM </td><td>: $pisah[0]</td></tr>";
				echo "<tr><td>Nama</td><td>: $pisah[1]</td></tr>";
				echo "<tr><td>Kelas </td><td>: $pisah[2]</td></tr>";
				echo "<tr><td>Email </td><td>: $pisah[3]</td></tr>
				<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
			}	
			echo "</table>"; 
		?>
	</div>
	
	<div class="right" style="float: right">
    	<form class="form" name="form2" method="get" action="tampilan.html">
         	<label><input type="submit" name="btn" id="submit-btn4" value="Formulir" align="center"></label>
    	</form>
    	<br>
    	<form class="form" name="form2" method="get" action="home.html">
         	<label><input type="submit" name="btn" id="submit-btn4" value="Back to Home" align="center"></label>
    	</form>
	</div>
</body>
</html>