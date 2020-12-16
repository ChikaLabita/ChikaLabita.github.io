<?php
	include "koneksi.php";
	
	$target_path = "img/";
	$id=$_POST['id'];
	$nama=$_POST['name'];
	$harga=$_POST['price'];
	
	$target_path = $target_path . basename {
		$_FILES['Gambar']['name']);
		$tmp_name = $_FILES['Gambar']['tmp_name'];
	
	$sql="INSERT INTO product (id, product_name, harga, lokasi_foto)
		VALUES('$id','$nama','$harga', '$target_path)";
		
	if (mysqli_query($connect, $sql)){
		echo "Data berhasil ditambahkan";
	}
	else{
		echo "Data gagal ditambahkan <br>".mysqli_error($connect);
	}
	
	mysqli_close($connect);
		
?>