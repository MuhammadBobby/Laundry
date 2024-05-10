<?php if (isset($_GET['notFound'])) : ?>
    <script>
        Swal.fire({
            title: "Not Found!",
            text: "Data Transaksi Tidak Ditemukan!",
            icon: "error",
        });
    </script>
<?php endif; ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="order-last col-12 col-md-6 order-md-1">
                <h3>Transaksi Data</h3>
                <p class="text-subtitle text-muted">Transaksi adalah seluruh data transaksi yang telah terjadi di dalam usaha OK laundry.</p>
            </div>
            <div class="order-first col-12 col-md-6 order-md-2">
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
                <button data-modal-target="exportTransaksi" data-modal-toggle="exportTransaksi" class="btn btn-success">Print</button>
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

                            $sql = "SELECT * FROM transaksi JOIN user ON transaksi.user = user.username ORDER BY tanggal DESC";
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
                                        <!-- <a href=""><i class="p-2 fa-solid fa-pen text-warning"></i></a> -->
                                        <a href="funtion/transaksi/deleteTransaksi.php?id=<?= $data['id'] ?>"><i class="p-2 fa-solid fa-trash text-danger"></i></a>
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


<!-- modal -->
<!-- Main modal -->
<div id="exportTransaksi" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full p-4">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5">
                <h3 class="text-lg font-semibold text-gray-900 ">
                    Masukkan Tanggal untuk Laporan
                </h3>
                <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto " data-modal-toggle="exportTransaksi">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" action="function/transaksi/exportTransaksi.php" method="POST">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="col-span-2">
                        <label for="TanggalAwal" class="block mb-2 text-sm font-medium text-gray-900 ">Tanggal Awal</label>
                        <input type="date" name="TanggalAwal" id="TanggalAwal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="TanggalAkhir" class="block mb-2 text-sm font-medium text-gray-900 ">Tanggal Akhir</label>
                        <input type="date" name="TanggalAkhir" id="TanggalAkhir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Generate Laporan
                </button>
            </form>
        </div>
    </div>
</div>