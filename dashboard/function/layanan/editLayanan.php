<?php

$id = $_GET['id'];

$sql = "SELECT * FROM layanan WHERE layananID = '$id'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);

?>


<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>edit Pegawai Data</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Human Resource</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Pegawai</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <section class="d-flex justify-content-center mt-5">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Pegawai</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="function/layanan/updatelayanan.php" method="POST">
                            <input type="hidden" name="layananID" id="layananID" value="<?= $data['layananID'] ?>">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="layanan">Nama Layanan</label>
                                            <div class="position-relative">
                                                <input type="text" name="layanan" class="form-control" value="<?= $data['layanan'] ?>" required>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div class="form-group has-icon-left">
                                            <label for="harga">Harga</label>
                                            <div class="position-relative">
                                                <input type="number" class="form-control" value="<?= $data['harga'] ?>" required id="harga" name="harga">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-coin"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="ket">Keterangan</label>
                                            <div class="position-relative">
                                                <textarea type="text" class="form-control" required id="ket" name="ket"><?= $data['ket'] ?></textarea>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-pen"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" name="update" class="btn btn-primary me-1 mb-1">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>