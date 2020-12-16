<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
		<table>
			<tr>
				<th>ID</th>
				<th>Nama Produk</th>
				<th>Harga</th>
				<th>Gambar </th>
				<th>Aksi</th>
			</tr>
			<?php	
				include "koneksi.php";
				
				$query="SELECT *FROM product";
				$result=mysqli_query($connect, $query);
			
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_array($result)) {
		?>
		<tr>
			<td> <?php echo $row["id"] ?> </td>
			<td> <?php echo $row["product_name"] ?> </td>
			<td> <?php echo $row["harga"] ?> </td>
			<td> <img class = "gambar" src="<?php echo $row["lokasi_foto"]; ?> " width = "150px"></td>
			<td>
				<a href="editForm.php?id=<?php echo $row['id']; ?>">
				Edit &nbsp</a>
				<a href="hapus.php?id=<?php echo $row['id'];?>"> 
				Hapus</a>
			</td>
		</tr>
		<?php
				}
			}
			else{
				echo "0 results";
			}
		?>
	</table>
</body>
</html>