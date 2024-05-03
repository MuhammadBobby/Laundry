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
                <h3>Pegawai Data</h3>
                <p class="text-subtitle text-muted">Pegawai data adalah seluruh data Pegawai yang ada dalam database.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Human Resource</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pegawai</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="?page=function/pegawai/addPegawai" class="btn btn-primary">Tambah Data Pegawai</a>
                <a href="?page=print_pegawai" class="btn btn-success">Print</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kontak</th>
                                <th>Posisi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 1;

                            $sql = "SELECT * FROM pegawai JOIN level ON pegawai.posisi = level.levelID ORDER BY pegawai.posisi ASC";
                            $query = mysqli_query($conn, $sql);
                            while ($data = mysqli_fetch_array($query)) :
                            ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['no_telp'] ?></td>
                                    <td><?= $data['posisi'] ?></td>
                                    <td>
                                        <a href="?page=function/pegawai/editPegawai&username=<?= $data['username'] ?>"><i class="fa-solid fa-pen text-warning p-2"></i></a>
                                        <a href="function/pegawai/deletePegawai.php?username=<?= $data['username'] ?>"><i class="fa-solid fa-trash text-danger p-2" onclick="return confirm('Are you sure you want to delete this data?')"></i></a>
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