<?php
$this->components->getHead();
$this->components->getHeader();
$this->components->getSideBar();
?>
<main id="main" class="main">
    <!-- page title -->
    <div class="page-title">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <!-- end page title -->

    <!-- start content -->
    <section class="section dashboard">
        <div class="row">

            <!-- Sales Card -->
            <div class="col-sm-3">
                <div class="card info-card sales-card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Sales <span>| Today</span></h5>

                        <div class="d-flex align-items-center">
                            <!-- icon -->
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-plus"></i>
                            </div>

                            <!-- title -->
                            <div class="ps-3">
                                <h6 class="">Tambah Data</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Sales Card -->

        </div>
    </section>
    <!-- end content -->
</main>

<?php
$this->components->getFooter();
$this->components->getJS();
