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
                <!-- Content -->
                <div class="row layout-top-spacing">
                    <a href="<?= base_url('Test/detail') ?>" class="card-link">
                        <div class="card component-card_9" style="width: 100%; display: flex; flex-direction: row; max-height: fit-content; overflow: hidden;">
                            <div class="col-md-6">
                                <img src="<?= base_url('assets') ?>/img/momoyo.png" class="card-img-top" style="width: 100%; height: 100%; object-fit: cover;" alt="widget-card-2">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Ini Title Usaha</h5>
                                    <p class="card-text">Ini Deskripsi singkat Usahanya.</p>
                                    <div class="meta-info" style="font-size: 18px;">
                                        <div class="row">
                                            <div class="col"><b>Jumlah Dana</b></div>
                                        </div>
                                        <div class="row">
                                            <div class="col"><b>Rp 6.600.000</b></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>