<!-- Pertemuan 11 -->

<?php
	include "koneksi.php";

    $id = $_GET["id"];
    $sql = mysqli_query($koneksi, "DELETE FROM inventory_lab WHERE id = $id") or die (mysqli_error($koneksi));
    echo "Data berhail di hapus <br><br>";
    echo "<a href='index.php'><button>Kembali</button></a>";
    echo "<script>window.setTimeout(function() {window.location = 'index.php';}, 3000);</script>";
?>
