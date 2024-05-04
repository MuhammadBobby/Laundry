<?php if (isset($_GET['notFound'])) : ?>
    <script>
        Swal.fire({
            title: "Not Found!",
            text: "Data Review Tidak Ditemukan!",
            icon: "error",
        });
    </script>
<?php endif; ?>


<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Review Data</h3>
                <p class="text-subtitle text-muted">Review manjadi bagian penting dalam perusahaan, sebagai feedback dari pelanggan kepada usaha.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Produk</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Review</li>
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
                    <a href="function/layanan/exportReview.php" class="btn btn-success">Print</a>
                </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Reviewer</th>
                                <th>Rating</th>
                                <th>Tanggal</th>
                                <th>Review</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 1;

                            $sql = "SELECT * FROM review";
                            $query = mysqli_query($conn, $sql);
                            while ($data = mysqli_fetch_array($query)) :
                            ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['reviewer'] ?></td>
                                    <td>
                                        <?php for ($i = 0; $i < $data['bintang']; $i++) { ?>
                                            <i class="fa-solid fa-star text-warning"></i>
                                        <?php } ?>
                                    </td>
                                    <td><?= $data['tanggal'] ?></td>
                                    <td style="font-weight: bold;"><?= $data['review'] ?></td>
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