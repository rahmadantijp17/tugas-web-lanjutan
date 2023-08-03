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
    <h1>Perpustakaan</h1>
    <a href="tambah.php"><button>Tambah</button></a>
    <br>
    <br>
    <table border=1>
        <tr>
            <th>Aksi</th>
            <th>Nama Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Jumlah</th>
        </tr>
        <?php 
            $query = mysqli_query($koneksi,"SELECT * FROM buku");
            if(mysqli_num_rows($query)>0){
                $a = 1;
                while($data = mysqli_fetch_array($query)){
        ?>
                    <tr>
                        <td><a href="edit.php?id=<?php echo $data["id"] ?>"><button>Edit</button></a> <a href="hapus.php?id=<?php echo $data["id"] ?>"><button>Hapus</button></a></td>
                        <td><?php echo $data["nama_buku"];?></td>
                        <td><?php echo $data["penulis"];?></td>
                        <td><?php echo $data["penerbit"];?></td>
                        <td><?php echo $data["jumlah"];?></td>
                    </tr>
        <?php
                    $a++;
                }
            }
        ?>
    </table>
</body>
</html>