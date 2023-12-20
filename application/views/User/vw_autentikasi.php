<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-spacing">
            <div class="container mt-5 widget-content widget-content-area">
                <h2>User Registration</h2>
                <form action="<?php echo base_url('user/edit'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="foto_asli">Foto Asli:</label>
                        <input type="file" class="form-control-file" id="foto_asli" name="foto_asli" accept="image/*" required>
                    </div>
                    <div class="form-group">
                        <label for="provinsi">Provinsi:</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" required>
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota:</label>
                        <input type="text" class="form-control" id="kota" name="kota" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telepon">Nomor Telepon:</label>
                        <input type="tel" class="form-control" id="no_telepon" name="no_telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="foto_ktp">Foto KTP:</label>
                        <input type="file" class="form-control-file" id="foto_ktp" name="foto_ktp" accept="image/*" required>
                    </div>
                    <div class="form-group">
                        <label for="foto_npwp">Foto NPWP:</label>
                        <input type="file" class="form-control-file" id="foto_npwp" name="foto_npwp" accept="image/*" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block py-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>