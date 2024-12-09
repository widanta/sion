<?php
include '../../../functions/fakultas.php';
$fakultas = new Fakultas();

if (isset($_POST['submit'])) {
    $fakultas->create($_POST);

    if ($fakultas) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'tambah.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakultas - tambah data</title>
</head>

<body>

    <h2>tambah data</h2>

    <form method="post">
        <label for="kode">kode_fakultas</label>
        <input type="text" name="kode">
        <br>
        <label for="nama">nama</label>
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">kirim</button>
    </form>


</body>

</html>