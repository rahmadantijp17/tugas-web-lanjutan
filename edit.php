<!-- Pertemuan 11 -->

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
    <h1>Edit Data</h1>
    <?php 
        $id = $_GET["id"];
        $query = mysqli_query($koneksi,"SELECT * FROM buku WHERE id = " . $id);
        if(mysqli_num_rows($query)>0){
            $a = 1;
            while($data = mysqli_fetch_array($query)){
    ?>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Nama Buku</td>
                    <td>:</td>
                    <td><input type="text" name="nama_buku" value="<?php echo $data["nama_buku"];?>"></td>
                </tr>
                <tr>
                    <td>Penulis</td>
                    <td>:</td>
                    <td><input type="text" name="penulis" value="<?php echo $data["penulis"];?>"></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td>:</td>
                    <td><input type="text" name="penerbit" value="<?php echo $data["penerbit"];?>"></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td><input type="text" name="jumlah" value="<?php echo $data["jumlah"];?>"></td>
                </tr>
            </table>
            <br>
            <button name="edit">Update</button>
            <br>
        </form>
    <?php
                $a++;
            }
        }
    ?>
</body>
</html>

<?php    
    if(isset($_POST['edit'])) { 
        $nama_buku = $_POST['nama_buku'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $jumlah = $_POST['jumlah'];

        $sql = mysqli_query($koneksi, "UPDATE buku SET nama_buku = '$nama_buku', penulis = '$penulis', penerbit = '$penerbit', jumlah = $jumlah WHERE id = $id") or die (mysqli_error($koneksi));
        header("location:index.php");
    }    
?>