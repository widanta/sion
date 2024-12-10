<?php

include '../../../functions/fakultas.php';
$fakultas = new Fakultas();
$data = $fakultas->getAllData();
?>



<?php include '../../templates/header.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- <?php include '../../templates/navbaar.php'; ?> -->
        <?php include '../../templates/sidebar.php'; ?>
        <!-- =========== Header =========== -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/petugas">Home</a></li>
                                <li class="breadcrumb-item active"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- =========== main =========== -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body table-responsive">
                                    <table id="data-table" class="table text-nowrap table-bordered table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th>Kode</th>
                                                <th>Fakultas</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($data as $row) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $row['kode_fakultas'] ?></td>
                                                    <td><?= $row['nama'] ?></td>
                                                    <td>
                                                        <a class="btn btn-warning" href="edit.php?kode_fakultas=<?= $row['kode_fakultas'] ?>">Edit</a> ||
                                                        <a class="btn btn-danger" href="hapus.php?kode_fakultas=<?= $row['kode_fakultas'] ?>">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </section>
        </div>
    </div>



    <!-- =========== footer =========== -->
    <footer class="main-footer">
        <p class="m-0 text-center">&copy; 2022 <a href="" class="text-bold text-secondary">SilihNah</a> | All Rights Reserved</p>
    </footer>


    <?php include '../../templates/footer.php'; ?>