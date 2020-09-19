    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mahasiswa</h6>
        </div>
        <div class="card-body">
            <div class="my-2">
                <a href="<?php echo site_url('siswa/') ?>" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-undo"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
            </div>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="ol col-lg-6">

                        <form action="<?php echo site_url('siswa/process') ?>" method="post">
                            <div class="form-group ">
                                <label>NPM *</label>
                                <input type="text" name="npm" value="<?= set_value('npm') ?>" class="form-control " required>
                            </div>
                            <div class="form-group ">
                                <label>Nama *</label>
                                <input type="text" name="nama" value="<?= set_value('nama') ?>" class="form-control " required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="prodi" value="<?= set_value('prodi') ?>" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="<?php echo $page ?>" class="btn btn-success btn-flat">
                                    <i class="fa fa-paper-plane"></i> Save
                                </button>
                                <button type="reset" class="btn btn-flat">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /.container-fluid -->