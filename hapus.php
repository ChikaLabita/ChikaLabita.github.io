<?php
	include "koneksi.php";
	
	$id=$_GET['id'];

	$query = "DELETE FROM product WHERE id='$id'";
	$result=mysqli_query($connect, $query);
	
	if($result){
		echo "Database berhasil dihapus";
	?>
		<a href = "homeCRUD.php">Lihat data di tabel</a>
	<?php
	}else{
		echo"Gagal update data".mysql_error($connect);
	}
?>