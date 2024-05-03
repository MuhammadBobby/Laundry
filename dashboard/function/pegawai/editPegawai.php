<?php

$username = $_GET['username'];

$sql = "SELECT * FROM Pegawai JOIN level ON pegawai.posisi = level.levelID WHERE username = '$username'";
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
                        <form class="form form-vertical" action="function/pegawai/updatePegawai.php" method="POST">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="username">Username</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" value="<?= $data['username'] ?>" readonly id="username" name="username">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-pen-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="password">Password</label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control" value="<?= $data['password'] ?>" required id="password" name="password">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-grid-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="nama">Nama</label>
                                            <div class="position-relative">
                                                <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div class="form-group has-icon-left">
                                            <label for="alamat">Alamat</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" value="<?= $data['alamat'] ?>" required id="alamat" name="alamat">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-map"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="kontak">Kontak</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" value="<?= $data['no_telp'] ?>" required id="kontak" name="kontak">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="posisi">Posisi</label>
                                            <div class="position-relative">
                                                <select name="posisi" id="posisi" class="form-control">
                                                    <option selected value="<?= $data['levelID'] ?>"><?= $data['posisi'] ?></option>
                                                    <?php
                                                    $posisi = mysqli_query($conn, "SELECT * FROM level WHERE levelID != $data[levelID]");
                                                    while ($pos = mysqli_fetch_array($posisi)) {
                                                    ?>
                                                        <option value="<?= $pos['levelID'] ?>"><?= $pos['posisi'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-stack"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="gaji">Gaji</label>
                                            <div class="position-relative">
                                                <input type="number" class="form-control" value="<?= $data['gaji'] ?>" required id="gaji" name="gaji">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-coin"></i>
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