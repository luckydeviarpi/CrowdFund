<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
            <div class="layout-px-spacing">
                
                <div class="page-header">
                    <div class="page-title">
                        <h3>Halaman Detail Usaha</h3>
                    </div>
                </div>
                <div class="bio layout-spacing">
                    <div class="widget-content widget-content-area">
                        <div class="container col-lg-12" style="display: inline;">
                        <?php
                        $formatModalMasuk = number_format($usaha['modal_masuk'], 0, ',', '.');
                        $formatModalAkhir = number_format($usaha['modal_akhir'], 0, ',', '.');
                        $persentase = round(($usaha['modal_masuk'] / $usaha['modal_akhir']) * 100);
                        ?>
                        <br>
                            <div class="rounded position-relative">
                                <div class="fruite-img">
                                    <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                                        <div class="carousel-inner img-fluid w-100 rounded-top">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" style="width: 100px; height: 400px;"
                                                    src="<?= base_url('assets/img/' . $usaha['foto1']); ?>"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" style="width: 100px; height: 400px;"
                                                    src="<?= base_url('assets/img/' . $usaha['foto1']); ?>"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" style="width: 100px; height: 400px;"
                                                    src="<?= base_url('assets/img/' . $usaha['foto1']); ?>"
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
                                    <h4><?= $usaha['nama_usaha']; ?></h4>
                                    <p>Terkumpul Rp<?= $formatModalMasuk ?> dari Rp<?= $formatModalAkhir ?></p>
                                    <div class="progress br-30">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: <?= $persentase ?>%"
                                            aria-valuenow="<?= $persentase ?>" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-title"><span></span><span><?= $persentase ?>%</span> </div>
                                        </div>
                                    </div>
                                    <p>Alamat : <?= $usaha['alamat']; ?></p>
                                    <p>Provinsi : <?= $usaha['provinsi']; ?></p>
                                    <p>Kota : <?= $usaha['kota']; ?></p>
                                    <p>Deskripsi : <?= $usaha['deskripsi']; ?></p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p style="background-color: <?= getStatusColor($usaha['status']) ?>;
                                        padding: 8px;
                                        border-radius: 10px;
                                        color: #fff;
                                        display: inline-block;
                                        font-weight: bold;">Status: <?= $usaha['status'] ?></p>
                                    </div>
                                    <a href="<?= site_url('Usaha/detailusaha/' . $usaha['id_usaha']) ?>">
                                        <button class="btn btn-info" style="margin-left: 89%; border-radius: 10px;">
                                        Beri Dividen
                                    </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->