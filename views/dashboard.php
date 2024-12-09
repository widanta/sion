<?php

include '../functions/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    oke berhasil. halo <?= $_SESSION['user']['level']; ?> selamat datang di halaman siswa
</body>

</html>