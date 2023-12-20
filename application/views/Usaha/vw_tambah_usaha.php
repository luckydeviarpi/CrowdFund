<div id="content" class="main-content">
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
                        Form Tambah Usaha
                    </div>
                    <div class="card-body">
                    <form action="<?= base_url('Usaha/tambah_usaha') ?>" method="POST" enctype="multipart/form-data">                            <div class="form-group">
                                <label for="nama_usaha">Nama Usaha</label>
                                <input type="text" value="<?= set_value('nama_usaha') ?>" class="form-control" id="nama_usaha" name="nama_usaha" placeholder="Nama Usaha">
                                <?= form_error('nama_usaha', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="modal_butuh">Modal Butuh</label>
                                <input type="text" value="<?= set_value('modal_butuh') ?>" class="form-control" id="modal_butuh" name="modal_butuh" placeholder="Modal Butuh">
                                <?= form_error('modal_butuh', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="modal_terima">Modal Terima</label>
                                <input type="text" value="<?= set_value('modal_terima') ?>" class="form-control" id="modal_terima" name="modal_terima" placeholder="Modal Terima">
                                <?= form_error('modal_terima', '<small class="text-danger pl-3">', '</small>'); ?>
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
                </div>
            </div>
        </div>
    </div>
</div>
