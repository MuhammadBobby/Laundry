<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Transaksi Data</h3>
                <p class="text-subtitle text-muted">Transaksi adalah seluruh data transaksi yang telah terjadi di dalam usaha OK laundry.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Master Data</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                <!-- <a href="?page=add_transaksi" class="btn btn-primary">Tambah Data Transaksi</a> -->
                <a href="?page=print_transaksi" class="btn btn-success">Print</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Pelanggan</th>
                                <th>Layanan</th>
                                <th>Harga</th>
                                <th>Berat</th>
                                <th>Tanggal & Waktu</th>
                                <th>Total</th>
                                <th>Catatan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 1;

                            $sql = "SELECT * FROM transaksi JOIN user ON transaksi.user = user.username";
                            $query = mysqli_query($conn, $sql);
                            while ($data = mysqli_fetch_array($query)) :
                            ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td style="font-weight: bold;"><?= $data['nama'] ?></td>
                                    <td><?= $data['name'] ?></td>
                                    <td>Rp <?= number_format($data['price'], 0, ',', '.') ?></td>
                                    <td><?= $data['quantity'] ?></td>
                                    <td><?= $data['tanggal'] ?></td>
                                    <td style="font-weight: bold;">Rp <?= number_format($data['total'], 0, ',', '.') ?></td>
                                    <td><?= $data['catatan'] ?></td>
                                    <td><?= $data['status'] ?></td>
                                    <td>
                                        <!-- <a href=""><i class="fa-solid fa-pen text-warning p-2"></i></a> -->
                                        <a href="funtion/transaksi/deleteTransaksi.php?id=<?= $data['id'] ?>"><i class="fa-solid fa-trash text-danger p-2"></i></a>
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