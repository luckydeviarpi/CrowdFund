<?php
$active_page = 'berjalan'; // Atur halaman aktif, misalnya 'berjalan' atau 'selesai'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Page</title>

    <style>
        /* Aturan CSS untuk tombol aktif dan tidak aktif */
        .btn.active,
        .btn:active {
            background-color: #ffffff;
            /* Putih untuk tombol aktif */
            color: #000000;
            /* Hitam atau warna lain yang sesuai untuk teks tombol aktif */
        }

        .btn:not(.active) {
            background-color: #808080;
            /* Abu-abu untuk tombol tidak aktif */
            color: #ffffff;
            /* Putih atau warna lain yang sesuai untuk teks tombol tidak aktif */
        }

        /* Aturan CSS tambahan sesuai kebutuhan */
        /* Misalnya, styling untuk tombol */
        .btn {
            padding: 10px 20px;
            border: none;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }
    </style>

</head>

<body>

    <!-- PORTFOLIO BERJALAN -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
            <!-- Add the following lines after the h1 tag -->

            <div class="card">
                <div class="card-body">

                    <!-- Tombol Portofolio Berjalan (Default) -->
                    <a href="<?= base_url('Portofolio/') ?>" class="btn btn-primary mb-3 <?php echo ($active_page === 'berjalan') ? 'active' : ''; ?>">Portofolio Berjalan</a>
                    <!-- Tombol Portofolio Selesai -->
                    <a href="<?= base_url('Portofolio/portofolioselesai') ?>" class="btn btn-success mb-3 <?php echo ($active_page === 'selesai') ? 'active' : ''; ?>">Portofolio Selesai</a>

                    <h2 class="mt-3">Uang: <?= $user_money; ?></h2>

                </div>
            </div>

            <div class="row layout-spacing">
                <?php foreach ($usaha as $us) : ?>
                    <div class="col-xl-6 layout-top-spacing">
                        <a href="<?= base_url('Investasi/detail/') . $us['id_usaha']; ?>" class="card-link">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="<?= base_url('assets/img/' . $us['foto1']); ?>" class="img-fluid rounded-start" alt="<?= $us['nama_usaha']; ?>">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $us['nama_usaha']; ?></h5>
                                            <p class="card-text"><?= $us['deskripsi']; ?></p>
                                            <small class=" p-o-percentage mr-6">Terkumpul <b><?= number_format($us['total_investasi'], 0, ',', '.'); ?></b> dari <b><?= number_format($us['modal_akhir'], 0, ',', '.'); ?></b></small>
                                            <?php
                                            $progress = ($us['modal_akhir'] != 0) ? number_format(($us['total_investasi'] / $us['modal_akhir']) * 100, 2) : '0.00';
                                            ?>
                                            <small class="p-o-percentage"><?= $progress; ?>%</small>
                                            <div class="progress br-30 mt-2">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: <?= $progress; ?>%" aria-valuenow="<?= $progress; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="meta-info mt-2">
                                                <div class="row">
                                                    <div class="col">Jumlah Investor</div>
                                                    <div class="col">Status</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col"><b><?= $us['jumlah_investor']; ?></b> Investor</div>
                                                    <div class="col"><b><?= $us['status']; ?></b></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>