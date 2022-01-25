<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Biodata</h1>

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Pemasukan dana <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Biodata Viewer</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>

                    </thead>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="metod" value="<?= @$biodata['id'] ? 'post' : 'update' ?>">
                            <div class="form-group">
                                <label for="tgl_masuk">Posisi</label>
                                <input type="text" name="posisi" class="form-control" id="bidang" value="<?= @$biodata['posisi'] ?>">
                                <small class="form-text text-danger"><?= form_error('tgl_masuk'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="bidang">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" value="<?= @$biodata['nama'] ?>">
                                <small class="form-text text-danger"><?= form_error('bidang'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">NO Ktp</label>
                                <input type="text" name="no_ktp" class="form-control" id="jumlah" value="<?= @$biodata['no_ktp'] ?>">
                                <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="jumlah" value="<?= @$biodata['tempat_lahir'] ?>">
                                <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jenis Kelamin</label>
                                <select class="custom-select" name="jenis_kelamin">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="LAKI-LAKI">LAKI-LAKI</option>
                                    <option value="PEREMPUAN">PEREMPUAN</option>
                                </select>
                                <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Agama</label>
                                <select class="custom-select" name="agama">
                                    <option selected>Pilih Agama</option>
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="KRISTEN">KRISTEN</option>
                                    <option value="HINDU">HINDU</option>
                                    <option value="BUDHA">BUDHA</option>
                                </select>
                                <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Golongan Darah</label>
                                <select class="custom-select" name="golongan_darah">
                                    <option selected>Pilih Golongan Darah</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                                <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Status</label>
                                <input type="text" name="status" class="form-control" id="jumlah" value="<?= @$biodata['status'] ?>">
                                <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Alamat KTP</label>
                                <input type="text" name="alamat_ktp" class="form-control" id="jumlah" value="<?= @$biodata['alamat_ktp'] ?>">
                                <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Alamat Tinggal</label>
                                <input type="text" name="alamat_tinggal" class="form-control" id="jumlah" value="<?= @$biodata['alamat_tinggal'] ?>">
                                <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Email</label>
                                <input type="text" name="email" class="form-control" id="jumlah" value="<?= @$biodata['email'] ?>">
                                <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">No Telepon</label>
                                <input type="text" name="no_telp" class="form-control" id="jumlah" value="<?= @$biodata['no_telp'] ?>">
                                <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Orang Terdekat yang dapat dihubungi</label>
                                <input type="text" name="orang_terdekat" class="form-control" id="jumlah" value="<?= @$biodata['orang_terdekat'] ?>">
                                <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="jumlah" value="<?= @$biodata['tanggal_lahir'] ?>">
                                <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Skill</label>
                                <input type="text" name="skill" class="form-control" id="jumlah" value="<?= @$biodata['skill'] ?>">
                                <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Bersedia ditempatkan di seluruh kantor perusahaan</label>
                                <select class="custom-select" name="bersedia">
                                    <option selected>Pilih option</option>
                                    <option value="YA">YA</option>
                                    <option value="TIDAK">TIDAK</option>
                                </select>
                                <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Penghasilan yang diharapkan</label>
                                <input type="text" name="penghasilan" class="form-control" id="jumlah" value="<?= @$biodata['penghasilan'] ?>">
                                <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                            </div>

                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </form>

                    </div>
                    <tfoot>

                    </tfoot>
                </table>
            </div>

        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->