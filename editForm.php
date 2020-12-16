<html>
	<head>
		<title>Edit Data</title>
	</head>
	<body>
		<?php
			include "koneksi.php";
			$ID=$_GET['id'];
			$query="SELECT *FROM product WHERE id='$ID'";
			$result=mysqli_query($connect, $query);
		?>
		<form  method = "GET" action="prosesEdit.php">
			<?php
				while($row=mysqli_fetch_array($result)){
			?>
				<tr>
					<td> Id </td>
					<td><input type="number" name="id" value="<?php echo
					$row['id'];?>">
				</tr>
				<tr>
					<td> Nama Produk </td>
					<td><input type="text" name="name" value="<?php echo
					$row['product_name'];?>">
				</tr>
				<tr>
					<td> Harga </td>
					<td><input type="number" name="price" value="<?php echo
					$row['harga'];?>">
				</tr>
				<tr>
					<td> Barang </td>
					<td><input type = "file" name = "Gambar"></td>
				</tr>
				<tr>
					<td><input type="submit" name="edit" value="edit data"> </td>
				</tr>
			<?php
				}
				
			?>
			</table>
		</form>
	</body>
</html>
				
				