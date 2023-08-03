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
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr>
                <td>Jenis Barang</td>
                <td>:</td>
                <td>
                    <select name="jenis_barang">
                        <option value="Elektronik">Elektronik</option>
                        <option value="Mebel">Mebel</option>
                        <option value="Alat Keamanan">Alat Keamanan</option>
                        <option value="Komponen Komputer">Komponen Komputer</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>:</td>
                <td>
                    <select name="lokasi">
                        <option value="Lab 1">Lab 1</option>
                        <option value="Lab 2">Lab 2</option>
                        <option value="Lab 3">Lab 3</option>
                        <option value="Lab 4">Lab 4</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <select name="status">
                        <option value="Bagus">Bagus</option>
                        <option value="Rusak">Rusak</option>
                        <option value="Perbaikan">Perbaikan</option>
                    </select>
                </td>
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
        $nama_barang = $_POST['nama_barang'];
        $jenis_barang = $_POST['jenis_barang'];
        $lokasi = $_POST['lokasi'];
        $status = $_POST['status'];

        $sql = mysqli_query($koneksi,"INSERT INTO inventory_lab (nama_barang, jenis_barang, lokasi, status) VALUES ('$nama_barang', '$jenis_barang', '$lokasi', '$status')") or die (mysqli_error($koneksi));
        header("location:index.php");
    }    
?>