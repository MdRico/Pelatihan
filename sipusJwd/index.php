<?php
include 'koneksi.php';
$tgl=date('Y-m-d');
?>
<!doctype html>
<html>
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style = "background-color : #4874f4" >
	<div id="fluid-container" style = "background-color : #201434;">
		<div id="header" style = "background-color : #4874f4;">
			<div id="logo-perpustakaan-container">
				<image id="logo-perpustakaan" src="images/logo-perpustakaan3.png" style="border:0; text-decoration:none; outline:none"> 
			</div>
			<div id="nama-alamat-perpustakaan-container">
				<div class="nama-alamat-perpustakaan" style = "color : white ; text-align : left">
					<h1> PERPUSTAKAAN </h1>
				</div>
				<div class="nama-alamat-perpustakaan" style = "color : white ; text-align : left">
				<h4>Jl. Lembah Abang No 11, Telp: (021)55555555</h4>
				</div>
			</div>
		</div>
		<div id="header2" style = "background-color : #201434; text-align : center">
			<div id="nama-user" style = "text-align : center">Hai Admin !</div>
		</div>
		<div id="sidebar">
			<a href="index.php?p=beranda" style = "color : white">Beranda</a>
			<p class="label-navigasi">Entry Data Dan Transaksi</p>
			<ul>
				<li><a href="index.php?p=anggota" style = "color : white">Data Anggota</a></li>
				<li><a href="index.php?p=buku" style = "color : white">Data Buku</a></li>
				<li><a href="index.php?p=transaksi-peminjaman" style = "color : white">Transaksi Peminjaman</a></li>
			</ul>
		</div>
		<div id="content-container" style = "background-color : #f0f4f4">
			    <div class="container">
		<div class="row"><br/><br/><br/>
			<div class="col-md-10 col-md-offset-1" style="background-image:url('../asanoer-background.jpg')">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-warning login-panel" style="background-color:rgba(255, 255, 255, 0.6);position:relative;">
						
						<div class="panel-footer">
							
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
		<?php
			$pages_dir='pages';
			if(!empty($_GET['p'])){
				$pages=scandir($pages_dir,0);
				unset($pages[0],$pages[1]);
				$p=$_GET['p'];
				if(in_array($p.'.php',$pages)){
					include($pages_dir.'/'.$p.'.php');
				}else{
					echo'Halaman Tidak Ditemukan';
				}
			}else{
				include($pages_dir.'/beranda.php');
			}
		?>
		</div>
		<div id="footer" style = "background-color : #201434"><h3>Sistem Informasi Perpustakaan (sipus) | Praktikum </h3></div>
	</div>
</body>


</html>