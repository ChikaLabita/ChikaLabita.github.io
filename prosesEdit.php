<?php
	include "koneksi.php";
	
	$target_path = "img/";
	$id=$_POST['id'];
	$nama=$_POST['name'];
	$harga=$_POST['price'];
	
	if(!file_exists($target_path)) {
    	mkdir($target_path, 0755, true);
    	echo "The directory was created ";
    }
	 $target_path = $target_path . basename(
        $_FILES['Gambar']['name']);
        $tmp_name = $_FILES['Gambar']['tmp_name'];

	$query = "UPDATE product SET product_name='$nama', harga='$harga', lokasi_foto = '$target_path' WHERE id='$id'";
	$result=mysqli_query($connect, $query);
	
	if($result){
		echo "Berhasil update data";
		if (move_uploaded_file($_FILES['Gambar']['tmp_name'], $target_path)) {
            echo "The file " . basename($_FILES['Gambar']['name'] . " has been uploaded<br>");
        }else{
            echo "There was an error uploading the file, please try again";
        }
	?>
		<a href = "homeCRUD.php">Lihat data</a>
	<?php
	}else{
		echo"Gagal update data".mysql_error($connect);
	}
?>