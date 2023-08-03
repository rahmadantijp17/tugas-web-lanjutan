<!-- Pertemuan 10 -->

<?php
	include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama Buku</td>
                <td>:</td>
                <td><input type="text" name="nama_buku"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td>:</td>
                <td><input type="text" name="penulis"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>:</td>
                <td><input type="text" name="penerbit"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
        </table>
        <br>
        <button name="simpan">Save</button>
        <br>
    </form>
</body>
</html>

<?php    
    if(isset($_POST['simpan'])) { 
        $nama_buku = $_POST['nama_buku'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $jumlah = $_POST['jumlah'];

        $sql = mysqli_query($koneksi,"INSERT INTO buku (nama_buku, penulis, penerbit, jumlah) VALUES ('$nama_buku', '$penulis', '$penerbit', '$jumlah')") or die (mysqli_error($koneksi));
        header("location:index.php");
    }    
?>