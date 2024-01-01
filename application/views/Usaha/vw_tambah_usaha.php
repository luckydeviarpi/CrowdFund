<div id="content" class="main-content">
<<<<<<< Updated upstream
     <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
                            Form Tambah Usaha
                        </div>
                        <div class="card-body">
                        <form action="<?= base_url('Usaha/tambah_usaha') ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama_usaha">Nama Usaha</label>
                                    <input type="text" value="<?= set_value('nama_usaha') ?>" class="form-control" id="nama_usaha" name="nama_usaha" placeholder="Nama Usaha">
                                    <?= form_error('nama_usaha', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="modal_butuh">Modal Butuh</label>
                                    <input type="text" value="<?= set_value('modal_butuh') ?>" class="form-control" id="modal_butuh" name="modal_butuh" placeholder="modal_butuh">
                                    <?= form_error('modal_butuh', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_pembuatan">Tanggal Pembuatan</label>
                                    <input type="date" value="<?= set_value('tanggal_pembuatan') ?>" class="form-control" id="tanggal_pembuatan" name="tanggal_pembuatan">
                                    <?= form_error('tanggal_pembuatan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4"><?= set_value('deskripsi') ?></textarea>
                                    <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" class="form-control-file" id="foto" name="foto">
                                    <?= form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="text-center">
                                    <a href="<?= base_url('#') ?>" class="btn btn-danger">Tutup</a>
                                    <button type="submit" name="tambah" class="btn btn-primary">Tambah Usaha</button>
                                </div>
                            </form>
                        </div>
=======
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1 class="h3 mb-4 text-gray-800">
                        Form Tambah Usaha
                        </h1>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Usaha/tambah_usaha') ?>" method="POST" id="formTambahUsaha"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama_usaha">Nama Usaha</label>
                                <input type="text" value="<?= set_value('nama_usaha') ?>" class="form-control"
                                    id="nama_usaha" name="nama_usaha" placeholder="Nama Usaha">
                                <?= form_error('nama_usaha', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi"
                                    rows="4" placeholder="Deskripsi" value="<?= set_value('deskripsi') ?>"></textarea>
                                <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" value="<?= set_value('alamat') ?>" class="form-control" id="alamat"
                                    name="alamat" placeholder="Alamat">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <select class="form-control" id="provinsi" name="provinsi">
                                    <option value="Riau">Riau</option>
                                    <option value="Bali">Bali</option>
                                    <option value="Jambi">Jambi</option>
                                    <option value="Kepulauan Riau">Kepulauan Riau</option>
                                </select>
                                <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="kota">Kota</label>
                                <select class="form-control" id="kota" name="kota">
                                    <option value="Pekanbaru">Pekanbaru</option>
                                    <option value="Dumai">Dumai</option>
                                    <option value="Duri">Duri</option>
                                </select>
                                <?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="modal_akhir">Modal Yang Dibutuhkan</label>
                                <input type="text" value="<?= set_value('modal_akhir') ?>" class="form-control" id="modal_akhir"
                                    name="modal_akhir" placeholder="Modal yang dibutuhkan">
                                <?= form_error('modal_akhir', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="foto1">Foto 1</label>
                                <input type="file" class="form-control-file" id="foto1" name="foto1">
                                <?= form_error('foto1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="foto2">Foto 2</label>
                                <input type="file" class="form-control-file" id="foto2" name="foto2">
                                <?= form_error('foto2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="foto3">Foto 3</label>
                                <input type="file" class="form-control-file" id="foto3" name="foto3">
                                <?= form_error('foto3', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="proposal">Proposal</label>
                                <input type="file" class="form-control-file" id="proposal" name="proposal">
                                <?= form_error('proposal', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="text-center">
                                <a href="<?= base_url('#') ?>" class="btn btn-danger">Tutup</a>
                                <button type="button" name="tambah" class="btn btn-primary" onclick="confirmSubmission()">Tambah Usaha</button>
                            </div>
                        </form>
>>>>>>> Stashed changes
                    </div>
                </div>
            </div>
        </div>
<<<<<<< Updated upstream
    </div>
=======
    </div>
</div>
<script>
    function confirmSubmission() {
        Swal.fire({
            title: 'Apakah datanya sudah benar?',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Iya, Sudah Benar'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("formTambahUsaha").submit(); // Submit the form if user clicks "Yes"
            }
        });
    }
</script>
>>>>>>> Stashed changes
