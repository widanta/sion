<?php
include '../../../functions/fakultas.php';
$fakultas = new Fakultas();
$data = $fakultas->getDataById($_GET['kode_fakultas']);

if (isset($_POST['submit'])) {
    $fakultas->edit($_POST);
    if ($fakultas) {
        echo "<script>
                alert('Data berhasil diubah');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal diubah');
                document.location.href = 'index.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakultas - Edit Data</title>
</head>

<body>

    <h2>edit data</h2>

    <form method="post">
        <label for="kode">Kode Fakultas</label>
        <input type="text" name="kode_fakultas" value="<?= $data['kode_fakultas']; ?>" readonly>
        <br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?= $data['nama']; ?>">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>

</body>

</html>