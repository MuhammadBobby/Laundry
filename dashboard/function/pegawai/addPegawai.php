<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Add Pegawai Data</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Human Resource</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Pegawai</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <section class="d-flex justify-content-center mt-5">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Pegawai</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="function/user/update.php" method="POST">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="nama">Nama</label>
                                            <div class="position-relative">
                                                <input type="text" name="nama" class="form-control" placeholder="Jhon Doe" required>
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
                                                <input type="text" class="form-control" placeholder="Jl. XXX" required id="alamat" name="alamat">
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
                                                <input type="text" class="form-control" placeholder="08xxxxxxxx" required id="kontak" name="kontak">
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
                                                    <option selected>-- Pilih Posisi --</option>
                                                    <?php
                                                    $posisi = mysqli_query($conn, "SELECT * FROM level");
                                                    while ($data = mysqli_fetch_array($posisi)) {
                                                    ?>
                                                        <option value="<?= $data['levelID'] ?>"><?= $data['posisi'] ?></option>
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
                                            <label for="username">Username</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="JhonDoe123" required id="username" name="username">
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
                                                <input type="text" class="form-control" placeholder="xxxxxxxx" required id="password" name="password">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-grid-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="konfirm-password">Konfirmasi Password</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="xxxxxxxx" required id="konfirm-password" name="konfirm-password">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-grid-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">Submit</button>
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