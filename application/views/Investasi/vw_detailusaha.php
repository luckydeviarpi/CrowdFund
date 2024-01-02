<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <!-- Content -->
        <div class="layout-top-spacing">
            <div class="row">
                <div class="col-lg-6">
                    <div id="style1" class="carousel slide style-custom-1" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#style1" data-slide-to="0" class="active"></li>
                            <li data-target="#style1" data-slide-to="1"></li>
                            <li data-target="#style1" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 slide-image" src="<?= base_url('assets/img/momoyo3.jpg') ?>" alt="First slide">
                                <div class="carousel-caption">
                                    This is the photo description
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 slide-image" src="<?= base_url('assets/img/referensiAnimasi.jpeg') ?>" alt="Second slide">
                                <div class="carousel-caption">
                                    This is the photo description
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 slide-image" src="<?= base_url('assets/img/momoyo3.jpg') ?>" alt="Third slide">
                                <div class="carousel-caption">
                                    This is the photo description
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#style1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#style1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-four">
                        <div class="widget-content">
                            <div class="w-header">
                                <div class="w-info">
                                    <h6 class="value">Judul Usaha</h6>
                                </div>
                            </div>

                            <div class="w-content">



                            </div>

                            <div class="w-progress-stats">
                                <div class="progress">
                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="">
                                    <div class="w-icon">
                                        <p class="text-success">60%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Informasi</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area animated-underline-content">
                            <ul class="nav nav-tabs  mb-3" id="animateLine" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="animated-underline-overview-tab" data-toggle="tab" href="#animated-underline-overview" role="tab" aria-controls="animated-underline-overview" aria-selected="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" y1="8" x2="12" y2="12"></line>
                                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                        </svg> Overview
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="animated-underline-documents-tab" data-toggle="tab" href="#animated-underline-documents" role="tab" aria-controls="animated-underline-documents" aria-selected="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                            <polyline points="13 2 13 9 20 9"></polyline>
                                        </svg> Dokumen
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="animated-underline-hubungi-tab" data-toggle="tab" href="#animated-underline-hubungi" role="tab" aria-controls="animated-underline-hubungi" aria-selected="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                        </svg> Hubungi
                                    </a>
                                </li>
                            </ul>
                            <p class="mb-4">
                            <div class="tab-content" id="animateLineContent-4">
                                <div class="tab-pane fade active show" id="animated-underline-overview" role="tabpanel" aria-labelledby="animated-underline-overview-tab">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <span class=" p-o-percentage mr-6">terkumpul <b>Rp 6.000.000</b> dari <b>Rp 10.000.000</b></span>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <span class=" p-o-percentage mr-6">60%</span>
                                        </div>

                                    </div>
                                    <div class="progress br-30">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>


                                    <p class="dropcap  dc-outline-primary">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="animated-underline-documents" role="tabpanel" aria-labelledby="animated-underline-documents-tab">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                <p class="dropcap  dc-outline-primary">
                                                    Dokumen1.pdf
                                                </p>
                                                </div>
                                                <div class="col-lg-9">
                                                <a href="javascript:void(0);" class="btn btn-success btn-print  action-print">Download</a>
                                                <a href="javascript:void(0);" class="btn btn-primary btn-print  action-print">Print</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="animated-underline-hubungi" role="tabpanel" aria-labelledby="animated-underline-hubungi-tab">
                                    <p class="dropcap  dc-outline-primary">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
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

    <style>
        .carousel-item {
            height: 450px;
            /* Set a fixed height for all carousel items */
        }

        .carousel-item img {
            object-fit: cover;
            height: 100%;
        }
    </style>