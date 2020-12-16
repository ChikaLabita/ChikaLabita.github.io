<?php
	$namaHost = "localhost";
	$username = "root";
	$password = "";
	$database = "prakwebdb";
	
	$connect = mysqli_connect($namaHost, $username, $password, $database);
	
	if($connect){
		echo "Koneksi dengan MYSQL berhasil <br>";
	}
	else{
		echo "Koneksi dengan MYSQL gagal".mysqli_connect_error();
	}
	
	$sql = "INSERT INTO product(id,product_name,harga)
			VALUES ('2','Buku',3000), ('3','Bulpoin',3500), ('4','Penggaris',6000)";
			
	if (mysqli_query($connect, $sql)){
		echo "Data berhasil ditambahkan";
	}
	else{
		echo "Data gagal ditambahkan <br>".mysqli_error($connect);
	}
	
	mysqli_close($connect);
		
?>
