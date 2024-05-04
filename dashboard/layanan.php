<?php if (isset($_GET['insert'])) : ?>
    <script>
        Swal.fire({
            title: "Good job!",
            text: "Data Pegawai Berhasil Di Tambah!",
            icon: "success",
        });
    </script>
<?php elseif (isset($_GET['update'])) : ?>
    <script>
        Swal.fire({
            title: "Good job!",
            text: "Data Pegawai Berhasil Di Update!",
            icon: "success",
        });
    </script>
<?php elseif (isset($_GET['delete'])) : ?>
    <script>
        Swal.fire({
            title: "Good job!",
            text: "Data Pegawai Berhasil Di Hapus!",
            icon: "success",
        });
    </script>
<?php endif; ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Layanan Data</h3>
                <p class="text-subtitle text-muted">Layanan adalah seluruh data layanan yang tersedia di dalam usaha OK Laundry.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Produk</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Layanan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <?php if ($_SESSION['posisi'] == 1 || $_SESSION['posisi'] == 2) : ?>
                <div class="card-header">
                    <a href="?page=function/layanan/addLayanan" class="btn btn-primary">Tambah Data Layanan</a>
                    <a href="?page=print_layanan" class="btn btn-success">Print</a>
                </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Layanan</th>
                                <th>Harga</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 1;

                            $sql = "SELECT * FROM layanan";
                            $query = mysqli_query($conn, $sql);
                            while ($data = mysqli_fetch_array($query)) :
                            ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td style="font-weight: bold;"><?= $data['layanan'] ?></td>
                                    <td>Rp <?= number_format($data['harga'], 0, ',', '.') ?></td>
                                    <td><?= $data['ket'] ?></td>
                                    <td>
                                        <a href="?page=function/layanan/editLayanan&id=<?= $data['layananID'] ?>"><i class="fa-solid fa-pen text-warning p-2"></i></a>
                                        <a href="function/layanan/deleteLayanan.php?id=<?= $data['layananID'] ?>"><i class="fa-solid fa-trash text-danger p-2" onclick="return confirm('Are you sure?')"></i></a>
                                    </td>
                                </tr>

                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->
</div>