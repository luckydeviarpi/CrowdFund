<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-spacing">
            <div class="container mt-5 widget-content widget-content-area">
                <h2>User Registration</h2>
                <form action="<?php echo base_url('user/editprofil'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="foto_asli">Foto Asli:</label>
                        <input type="file" class="form-control-file" id="foto_asli" name="foto_asli" accept="image/*"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="tel" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telepon">Nomor Telepon:</label>
                        <input type="tel" class="form-control" id="no_telepon" name="no_telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="provinsi">Provinsi:</label>
                        <select class="form-control" id="provinsi" name="provinsi">
                            <option value="">Pilih Provinsi</option>
                            <option value="Riau">Riau</option>
                            <option value="Bali">Bali</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota:</label>
                        <select class="form-control" id="kota" name="kota">
                            <option value="">Pilih Kota</option>
                            <option value="Pekanbaru">Pekanbaru</option>
                            <option value="Dumai">Dumai</option>
                            <option value="Duri">Duri</option>
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block py-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>