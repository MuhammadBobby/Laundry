<?php
$adm = $_SESSION['user_adm'];
$pimpinan = mysqli_query($conn, "SELECT * FROM pegawai WHERE username = '$adm'");
$dataPimpinan = mysqli_fetch_array($pimpinan);
?>

<div class="page-heading">
    <h3>Ringkasan Utama</h3>
</div>

<h1 class="text-center mt-10">Selamat Datang <?= $dataPimpinan['nama'] ?>,</h1>
<p class="text-center mb-10"> Enjoy Your Day and Happy Work! </p>

<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <?php if ($_SESSION['posisi'] == 1) : ?>
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Transaksi</h6>
                                        <?php
                                        $jmlhPemasukan = mysqli_query($conn, "SELECT SUM(total) AS jmlhPemasukan FROM transaksi");
                                        $Pemasukan = mysqli_fetch_array($jmlhPemasukan);
                                        ?>
                                        <h6 class="font-extrabold mb-0">Rp <?= number_format($Pemasukan['jmlhPemasukan'], 0, ',', '.') ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">User</h6>
                                        <?php
                                        $jmlhUser = mysqli_query($conn, "SELECT COUNT(id) AS jmlhUser FROM user");
                                        $user = mysqli_fetch_array($jmlhUser);
                                        ?>
                                        <h6 class="font-extrabold mb-0"><?= $user['jmlhUser'] ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Pegawai</h6>
                                        <?php
                                        $jmlhPegawai = mysqli_query($conn, "SELECT COUNT(username) AS jmlhPegawai FROM pegawai");
                                        $pegawai = mysqli_fetch_array($jmlhPegawai);
                                        ?>
                                        <h6 class="font-extrabold mb-0"><?= $pegawai['jmlhPegawai'] ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Layanan</h6>
                                        <?php
                                        $jmlhLayanan = mysqli_query($conn, "SELECT COUNT(layananID) AS jmlhLayanan FROM layanan");
                                        $Layanan = mysqli_fetch_array($jmlhLayanan);
                                        ?>
                                        <h6 class="font-extrabold mb-0"><?= $Layanan['jmlhLayanan'] ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-12 col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Review Customer Terbaru</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $review = mysqli_query($conn, "SELECT * FROM review ORDER BY tanggal DESC LIMIT 3 ");
                                        while ($dataReview = mysqli_fetch_array($review)) {
                                        ?>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <p class="font-bold ms-3 mb-0"><?= $dataReview['reviewer'] ?></p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class="mb-0"><?= $dataReview['review'] ?></p>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="./assets/compiled/jpg/1.jpg" alt="Face 1" />
                        </div>

                        <div class="ms-3 name">
                            <h5 class="font-bold"><?= $dataPimpinan['nama'] ?></h5>
                            <h6 class="text-muted mb-0"><?= $dataPimpinan['no_telp'] ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>