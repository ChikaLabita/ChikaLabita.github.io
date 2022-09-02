<?php

include "koneksi.php";

$result = mysqli_query($connect, "SELECT * FROM pelanggan ORDER BY id_pelanggan DESC");

?>

<html>

<head>
    <title>Data Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <?php
    session_start();
    if ($_SESSION['status'] == 'login') {
        //echo '<h3> Selamat Datang ' . $_SESSION['username'] . ' </h3><br>';
        //echo '<a href="sessionLogout.php">Logout</a>';
    }

    ?>

    <div class="container">
        <h3><b>Data Anggota | | BADAN OTONOM LEMAHBANG 1</b></h3>
        <hr>
        <a href="formAdd.html" class="btn btn-primary"> + Anggota</a>
        <br /><br />
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nama Anggota</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Jabatan</th>
                <th>Action</th>
            </tr>
            <?php
            include "koneksi.php";
            $sql = "SELECT * FROM anggota";
            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    # code...
                    echo '<tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['nama'] . '</td>
                <td>' . $row['alamat'] . '</td>
                <td>' . $row['no_tlp'] . '</td>
                <td>' . $row['jabatan'] . '</td>
                <td>
                <a button class="btn btn-primary"  href="formEdit.html">Edit</a> |
                <a button class="btn btn-danger" href="delete.php">Delete</a>
                </td>
            </tr>';
                }
            } else {
                echo "0 results";
            }
            ?>;
        </table>
        <a button class="btn btn-danger btn-login text-uppercase fw-bold" type="submit" href="index.html">Log
            Out</button></a>
    </div>

</body>

</html>