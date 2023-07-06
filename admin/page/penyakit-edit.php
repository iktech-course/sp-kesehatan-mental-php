                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Penyakit Baru</h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Input Penyakit</h6>
                        </div>
                        <div class="card-body">
                            <form action="action/penyakitTambah.php" method="post">
                                <div class="form-group">
                                    <label for="" class="from-label">Kode Penyakit</label>
                                    <input type="text" name=" kode-penyakit" id="" class="form-control" placeholder="Masukan Kode Penyakit">
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Penyakit</label>
                                    <input type="text" name="nama-penyakit" id="" class="form-control" placeholder="Masukan Nama Penyakit">
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Solusi</label>
                                    <input type="text" name="solusi" id="" class="form-control" placeholder="Masukan Solusi">
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </form>
                        </div>
                    </div>