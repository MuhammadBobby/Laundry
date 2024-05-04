<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Add Layanan Data</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Produk</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Layanan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <section class="d-flex justify-content-center mt-5">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Layanan</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="function/layanan/savelayanan.php" method="POST">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="layanan">Nama Layanan</label>
                                            <div class="position-relative">
                                                <input type="text" name="layanan" class="form-control" placeholder="Layanan" required>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div class="form-group has-icon-left">
                                            <label for="harga">Harga</label>
                                            <div class="position-relative">
                                                <input type="number" class="form-control" placeholder="Rp. XXX" required id="harga" name="harga">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-coin"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="ket">Keterangan</label>
                                            <div class="position-relative">
                                                <textarea type="text" class="form-control" placeholder="Keterangan..." required id="ket" name="ket"></textarea>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-pen"></i>
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