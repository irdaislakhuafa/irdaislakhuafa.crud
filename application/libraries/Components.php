<?php
class Components
{
    // header
    public function getHead()
    { ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">

            <title>Dashboard - NiceAdmin Bootstrap Template</title>
            <meta content="" name="description">
            <meta content="" name="keywords">

            <!-- Favicons -->
            <link href="<?= base_url() ?>assets/img/favicon.png" rel="icon">
            <link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

            <!-- Google Fonts -->
            <link href="https://fonts.gstatic.com" rel="preconnect">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

            <!-- Vendor CSS Files -->
            <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
            <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
            <link href="<?= base_url() ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
            <link href="<?= base_url() ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
            <link href="<?= base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
            <link href="<?= base_url() ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

            <!-- Template Main CSS File -->
            <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
        </head>

    <?php
    }

    // header
    public function getHeader()
    { ?>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <img src="<?= base_url() ?>assets/img/logo.png" alt="">
                    <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->

            <div class="search-bar">
                <form class="search-form d-flex align-items-center" method="POST" action="#">
                    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                </form>
            </div><!-- End Search Bar -->

            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle " href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li><!-- End Search Icon-->

                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <img src="<?= base_url() ?>assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <!-- username here -->

                            </li>

                            <!-- garis -->
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="bi bi-box-arrow-right"></i>

                                    <span>
                                        <?php
                                        // echo ($this->session->get_userdata("username") ? "Keluar" : "Masuk")
                                        ?>
                                    </span>
                                </a>
                            </li>

                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->

                </ul>
            </nav><!-- End Icons Navigation -->

        </header><!-- End Header -->
    <?php
    }

    // sidebar
    public function getSideBar()
    { ?>
        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                    <a class="nav-link " href="index.html">
                        <i class="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <!-- tambah -->
                        <li class="wow fadeInUp">
                            <a href="<?= base_url() . "crud/tambah" ?>">
                                <i class="bi bi-circle"></i>
                                <span>Tambah Data</span>
                            </a>
                        </li>
                        <!-- lihat -->
                        <li class="wow fadeInUp">
                            <a href="<?= base_url() . "crud/lihat" ?>">
                                <i class="bi bi-circle"></i>
                                <span>Lihat Data</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Components Nav -->
            </ul>

        </aside><!-- End Sidebar-->
    <?php
    }

    // footer
    public function getFooter()
    { ?>
        <footer id="footer" class="footer fixed-bottom">
            <div class="copyright">
                &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </footer><!-- End Footer -->
    <?php
    }

    // js
    public function getJS()
    { ?>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="<?= base_url() ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/chart.js/chart.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/echarts/echarts.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/quill/quill.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="<?= base_url() ?>assets/vendor/tinymce/tinymce.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="<?= base_url() ?>assets/js/main.js"></script>

<?php
    }
}
