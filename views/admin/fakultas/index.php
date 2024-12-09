<?php

include '../../../functions/fakultas.php';
$fakultas = new Fakultas();
$data = $fakultas->getAllData();
?>

<table class="table" style="border: 1px solid black;" id="dataTable">
    <tr>
        <th><a href="tambah.php" style="text-decoration: none; color: yello; font-weight:bold;">+</a></th>
        <th>Kelas</th>
        <th>Kompetensi Keahlian</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    ?>
    <?php foreach ($data as $row) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['kode_fakultas'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td>
                <a href="edit.php?kode_fakultas=<?= $row['kode_fakultas'] ?>">Edit</a> ||
                <a href="hapus.php?kode_fakultas=<?= $row['kode_fakultas'] ?>">Hapus</a>
            </td>
        <?php endforeach; ?>
</table>