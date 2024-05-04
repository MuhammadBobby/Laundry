<?php if (isset($_GET['update'])) : ?>
    <script>
        Swal.fire({
            title: "Good job!",
            text: "Data User Berhasil Di Perbarui!",
            icon: "success",
        });
    </script>
<?php elseif (isset($_GET['delete'])) : ?>
    <script>
        Swal.fire({
            title: "Deleted!",
            text: "Data User Berhasil Di Hapus!",
            icon: "success",
        });
    </script>
<?php endif ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>User Data</h3>
                <p class="text-subtitle text-muted">User data adalah seluruh data user yang ada dalam database.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Human Resource</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User</li>
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
                    <!-- <a href="?page=function/user/add_user" class="btn btn-primary">Tambah Data User</a> -->
                    <a href="?page=print_user" class="btn btn-success">Print</a>
                </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kontak</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 1;

                            $sql = "SELECT * FROM user ORDER BY nama ASC";
                            $query = mysqli_query($conn, $sql);
                            while ($data = mysqli_fetch_array($query)) :
                            ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['kontak'] ?></td>
                                    <td>
                                        <a href="?page=function/user/editUser&id=<?= $data['id'] ?>"><i class="fa-solid fa-pen text-warning p-2"></i></a>
                                        <a href="function/user/deleteUser.php?id=<?= $data['id'] ?>"><i class="fa-solid fa-trash text-danger p-2" onclick="return confirm('Are you sure?')"></i></a>
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