<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>

    <h2>Menambahkan Variabel</h2>
    <?php
    $nim = "312110365";
    $nama = 'Heri Anto Simamora';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>
    
    <h1>Predefine Variabel</h1>
    <?php
    echo 'Selamat Datang ' . $_GET['nama'];
    ?>
</body>
</html>