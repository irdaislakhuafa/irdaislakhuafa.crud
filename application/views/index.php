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
        <?= $this->template->content; ?>
    </section>
    <!-- end content -->
</main>

<?php
$this->components->getFooter();
$this->components->getJS();
