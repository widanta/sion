<?php
include '../../../functions/fakultas.php';
$fakultas = new Fakultas();

if (isset($_GET['kode_fakultas'])) {
    if ($fakultas->delete($_GET) > 0) {
        echo "<script>
                alert('Data berhasil dihapus');
                document.location.href = 'index.php';
            </script>";
        exit;
    }
}
