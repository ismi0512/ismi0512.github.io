<!DOCTYPE html>
<html>
<head>
	<title>Data admin | kelompok : Eka Wulandari dan Ismi Diani Azizah</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul">STMIK WIDYA UTAMA</h1>
		<h3 class="deskripsi">Dibuat oleh Eka Wulandari dan Ismi Diani Azizah</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=Registrasi">REGISTRASI</a></li>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=tentang">KONTAK</a></li>
			<li><a href="index.php?page=tutorial">INFO</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'Registrasi':
				include "halaman/Registrasi.php";
				break;
			case 'home':
				include "halaman/home.php";
				break;
			case 'tentang':
				include "halaman/tentang.php";
				break;
			case 'tutorial':
				include "halaman/tutorial.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
	 ?>
 
	</div>
</div>
</body>
</html>