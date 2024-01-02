<!--  BEGIN CONTENT AREA  -->
<style>
    .profile-image {
        width: 100px;
        /* Sesuaikan dengan ukuran yang diinginkan */
        height: 100px;
        /* Sesuaikan dengan ukuran yang diinginkan */
        overflow: hidden;
        border-radius: 15%;
        /* Mengatur bentuk lingkaran */
        margin: 0 auto;
        /* Menengahkan foto */
        border: 2px solid #ccc;
    }

    .profile-image img {
        width: 100%;
        height: 100%;
    }
</style>
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-spacing">
            <!-- Content -->
            <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">
                <div class="user-profile layout-spacing">
                    <div class="widget-content widget-content-area">
                        <div class="d-flex justify-content-between">
                            <h3 class="">Profile</h3>
                            <a href="<?= base_url(); ?>User/halamaneditprofil" class="mt-2 edit-profile"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-edit-3">
                                    <path d="M12 20h9"></path>
                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                </svg></a>
                        </div>
                        <div class="text-center user-info">
                            <div class="profile-image">
                                <img src="<?= base_url('assets/img/' . $user['foto_asli']); ?>" alt="avatar"
                                    class="img-fluid mr-2">
                            </div>
                            <p class="">
                                <?= $user['nama']; ?>
                            </p>
                        </div>
                        <div class="user-info-list">

                            <div class="text-center">
                                <ul class="contacts-block list-unstyled ">
                                    <li class="contacts-block__item py-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <?= $user['email']; ?></a>
                                        <?php
                                        if ($user['status_autentikasi'] == 'Belum Autentikasi') { ?>
                                            <br>
                                            <br>
                                            <a href="<?= site_url('User/halamanedit') ?>" type="button"
                                                class="btn btn-danger">Autentikasi Sekarang</a>
                                        <?php } else {
                                            ?>
                                        <li class="contacts-block__item py-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-map-pin">
                                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                <circle cx="12" cy="10" r="3"></circle>
                                            </svg>
                                            <?= $user['provinsi']; ?>,
                                            <?= $user['kota']; ?>
                                        </li>
                                        </li>
                                        <li class="contacts-block__item py-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-phone">
                                                <path
                                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                                </path>
                                            </svg>
                                            <?= $user['no_telepon']; ?>
                                        </li>
                                        <br>
                                        <button type="button" class="btn btn-success">Sudah Autentikasi</button>
                                        <?php
                                        } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
                <div class="skills layout-spacing ">
                    <div class="widget-content widget-content-area">
                        <h3 class="">Modal</h3>
                        <?php
                        $formattedModal = number_format($total_modal, 0, ',', '.');
                        ?>
                        <h1 style="background-color: #1ABC9C;
                        padding: 8px;
                        border-radius: 10px;
                        color: #fff;
                        display: inline-block;
                        font-weight: bold;">Rp
                            <?= $formattedModal ?>
                        </h1>
                    </div>
                </div>

                <div class="bio layout-spacing">
                    <div class="widget-content widget-content-area">
                        <div>
                            <h3 style="display: inline; margin-right: 69%;" class="">Usaha</h3>
                            <a href="<?= site_url('Usaha/halamantambahusaha') ?>"><button style="display: inline"
                                    type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#tambahUsahaModal">
                                    Tambah Usaha (+)
                                </button></a>
                        </div>
                        <div class="container col-lg-12" style="display: inline;">
                        <?php foreach ($usaha as $item): ?>
                        <?php
                        $formatModalMasuk = number_format($item['modal_masuk'], 0, ',', '.');
                        $formatModalAkhir = number_format($item['modal_akhir'], 0, ',', '.');
                        $persentase = round(($item['modal_masuk'] / $item['modal_akhir']) * 100);
                        ?>
                        <br>
                            <div class="rounded position-relative">
                                <div class="fruite-img">
                                    <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                                        <div class="carousel-inner img-fluid w-100 rounded-top">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" style="width: 100px; height: 400px;"
                                                    src="<?= base_url('assets/img/' . $item['foto1']); ?>"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" style="width: 100px; height: 400px;"
                                                    src="<?= base_url('assets/img/' . $item['foto2']); ?>"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" style="width: 100px; height: 400px;"
                                                    src="<?= base_url('assets/img/' . $item['foto3']); ?>"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                <?php
                                    if (!function_exists('getStatusColor')) {
                                        function getStatusColor($status)
                                        {
                                            switch ($status) {
                                                case 'Diajukan':
                                                    return '#ff0059';
                                                case 'Berjalan':
                                                    return '#0091ff';
                                                case 'Selesai':
                                                    return '#1ABC9C';
                                                default:
                                                    return '#ccc';
                                            }
                                        }
                                    }
                                    ?>
                                    <h4><?= $item['nama_usaha'] ?></h4>
                                    <p>Terkumpul Rp<?= $formatModalMasuk ?> dari Rp<?= $formatModalAkhir ?></p>
                                    <div class="progress br-30">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: <?= $persentase ?>%"
                                            aria-valuenow="<?= $persentase ?>" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-title"><span></span><span><?= $persentase ?>%</span> </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p style="background-color: <?= getStatusColor($item['status']) ?>;
                                        padding: 8px;
                                        border-radius: 10px;
                                        color: #fff;
                                        display: inline-block;
                                        font-weight: bold;">Status: <?= $item['status'] ?></p>
                                    </div>
                                    <a href="<?= site_url('Usaha/detailusaha/' . $item['id_usaha']) ?>">
                                        <button class="btn btn-outline-info" style="margin-left: 67%; border-radius: 10px;">
                                        Detail Usaha
                                    </button>
                                </a>
                                <a href="<?= site_url('Usaha/halamaneditusaha/' . $item['id_usaha']) ?>">
                                        <button class="btn btn-primary" style="margin-left: 5px; border-radius: 10px;">
                                        Edit Usaha
                                    </button>
                                </a>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!--  END CONTENT AREA  -->
    </div>
</div>
<!--  END CONTENT AREA  -->
</div>