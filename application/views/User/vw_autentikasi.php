<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-spacing">
            <div class="container mt-5 widget-content widget-content-area">
                <h2>User Registration</h2>
                <form action="<?php echo base_url('user/edit'); ?>" method="post" id="formAutentikasi" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="foto_asli">Foto Asli:</label>
                        <input type="file" class="form-control-file" id="foto_asli" name="foto_asli" accept="image/*"
                            required>
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
                    <div class="form-group">
                        <label for="no_telepon">Nomor Telepon:</label>
                        <input type="tel" class="form-control" id="no_telepon" name="no_telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="foto_ktp">Foto KTP:</label>
                        <input type="file" class="form-control-file" id="foto_ktp" name="foto_ktp" accept="image/*"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="foto_npwp">Foto NPWP:</label>
                        <input type="file" class="form-control-file" id="foto_npwp" name="foto_npwp" accept="image/*"
                            required>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary btn-block py-2" onclick="confirmSubmission()">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function confirmSubmission() {
        Swal.fire({
            title: 'Kamu Yakin Data Kamu Sudah Benar?',
            text: "Kamu tidak akan bisa mengubah data lagi",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sudah Benar'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("formAutentikasi").submit(); // Submit the form if user clicks "Yes"
            }
        });
    }
</script>