<?php if (isset($_GET['exist'])) : ?>
    <script>
        Swal.fire({
            title: "Level Exist!",
            text: "Level Posisi Yang Ingin Di Tambahkan Sudah Ada!",
            icon: "error",
        });
    </script>
<?php endif; ?>


<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Add Posisi Data</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Human Resource</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Posisi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <section class="d-flex justify-content-center mt-5">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Posisi</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="function/posisi/savePosisi.php" method="POST">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="level">Level</label>
                                            <div class="position-relative">
                                                <input type="number" min="1" name="level" class="form-control" placeholder="1" required>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="posisi">Posisi</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Posisi" required id="posisi" name="posisi">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-stack"></i>
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