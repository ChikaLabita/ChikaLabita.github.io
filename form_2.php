<html>
<head>
<style>
	.error {
		color:#FF0000;
	}
</style>
	<title></title>
</head>
<body>
	<?php 
	//Ambil nilai Var error
	if (isset($_GET['error'])) {
		$error=$_GET['error'];
	}
	else{
		$error="";
	}

	//siapkan pesan kesalahan
	$pesan="";
	if ($error=="Variabel_belum_diset") {
		$pesan="Anda haris mengakses halaman ini dari form_2.php";
	}
	else if($error=="Nama kosong"){
		$pesan="Nama harus diisi";
	}
	else if($error=="Email kosong"){
	$pesan="Email harus diisi";
}
	//sadasdasd

	if (isset($_GET['nama'])AND isset($_GET['email'])AND isset($_GET['komentar'])) {
		$nama=$_GET['nama'];
		$email=$_GET['email'];
		$komentar=$_GET['komentar'];
	}
	else{
		$nama="";
		$email="";
		$komentar="";
	}
	?>
	<span class="error"><?php echo $pesan; ?></span>

	<table>
		<form method="get" action="prosesForm_2.php">
			<tr>
				<td>Nama : </td>
				<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="email" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr>
				<td>Komentar : </td>
				<td><textarea name="komentar" rows="5" cols="40" value="<?php echo $komentar; ?>"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="Kirim" value="Kirim"></td>
				
			</tr>
			

		</form>
	</table>
</body>

</html>