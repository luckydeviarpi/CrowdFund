<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="layout-px-spacing">
            <div class="row layout-spacing">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-9 filtered-list-search mx-auto">
                <form class="form-inline my-2 my-lg-0 justify-content-center">
                    <div class="w-100">
                        <input type="text" class="w-100 form-control product-search br-30" id="input-search" placeholder="Cari di WiraFund...">
                        <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg></button>
                    </div>
            </div>
        </div>
        <div class="row layout-spacing">
            <!-- Content -->
            <?php foreach ($usaha as $us) : ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 layout-top-spacing">
                    <a href="<?= base_url('Investasi/detail/') . $us['id_usaha']; ?>" class="card-link">
                        <div class="card component-card_9">
                            <img src="<?= base_url('assets') ?>/img/momoyo.png" class="card-img-top" style="max-height: 300px;" alt="widget-card-2">
                            <div class="card-body">
                                <h5 class="card-title"><?= $us['nama_usaha']; ?></h5>
                                <p class="card-text"><?= $us['deskripsi']; ?></p>
                                <div class="row">
                                    <div class="col-md-9 small-text-left">
                                        <small class=" p-o-percentage mr-6">terkumpul <b><?= number_format($us['total_investasi'], 0, ',', '.'); ?></b> dari <b><?= number_format($us['modal_akhir'], 0, ',', '.'); ?></b></small>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <?php
                                        $progress = ($us['modal_akhir'] != 0) ? number_format(($us['total_investasi'] / $us['modal_akhir']) * 100, 2) : '0.00';
                                        ?>
                                        <small class="p-o-percentage mr-6"><?= $progress; ?>%</small>
                                    </div>
                                </div>
                                <div class="progress br-30">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: <?= $progress; ?>%" aria-valuenow="<?= $progress; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="meta-info">
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
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        </form>


    </div>
</div>
<!--  END CONTENT AREA  -->
</div>
<!-- END MAIN CONTAINER -->