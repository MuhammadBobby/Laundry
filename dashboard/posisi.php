<?php if (isset($_GET['insert'])) : ?>
    <script>
        Swal.fire({
            title: "Good job!",
            text: "Data Posisi Berhasil Di Tambah!",
            icon: "success",
        });
    </script>
<?php elseif (isset($_GET['update'])) : ?>
    <script>
        Swal.fire({
            title: "Good job!",
            text: "Data Posisi Berhasil Di Perbarui!",
            icon: "success",
        });
    </script>
<?php elseif (isset($_GET['delete'])) : ?>
    <script>
        Swal.fire({
            title: "Deleted!",
            text: "Data Posisi Berhasil Di Hapus!",
            icon: "success",
        });
    </script>
<?php endif ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Posisi Data</h3>
                <p class="text-subtitle text-muted">Posisi adalah layer jabatan yang dapat mengakses Dashboard.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Human Resource</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Posisi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="?page=function/posisi/addPosisi" class="btn btn-primary">Tambah Data Posisi</a>
                <a href="?page=print_user" class="btn btn-success">Print</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>Level</th>
                                <th>Posisi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $sql = "SELECT * FROM level ORDER BY levelID ASC";
                            $query = mysqli_query($conn, $sql);
                            while ($data = mysqli_fetch_array($query)) :
                            ?>

                                <tr>
                                    <td><?= $data['levelID'] ?></td>
                                    <td style="font-weight: bold;"><?= $data['posisi'] ?></td>
                                    <td>
                                        <a href="function/posisi/deletePosisi.php?id=<?= $data['levelID'] ?>"><i class="fa-solid fa-trash text-danger p-2" onclick="return confirm('Are you sure?')"></i></a>
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