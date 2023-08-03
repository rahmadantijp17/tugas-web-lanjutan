<!-- Pertemuan 10 -->

<?php
    $servername = "localhost:3306"; 
    $username = "root";
    $password = "khadiq123"; 
    $dbname = "program_perpustakaan";

    // Create connection
    $koneksi = mysqli_connect($servername, $username, $password, $dbname); 
    // Check connection
    if (!$koneksi) { 
        die("Connection failed: " . mysqli_connect_error());
    }
?> 