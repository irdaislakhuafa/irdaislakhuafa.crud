<?php
$this->components->getHead();
?>
<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container  fadeInUp wow">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block">UAS CRUD</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4 text-capitalize">masuk ke akun anda</h5>
                                    <p class="text-center small">Masukan username dan password anda untuk login</p>
                                </div>

                                <!-- form start -->
                                <span><?= validation_errors() ?></span>
                                <form action="<?= base_url() . "auth/check_login" ?>" method="POST" class="row g-3 needs-validation">

                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="username" class="form-control" id="yourUsername" required>
                                            <div class="invalid-feedback">Please enter your username.</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Masuk</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Belum punya akun? <a href="<?= base_url() . "auth/create" ?>">Buat akun</a></p>
                                    </div>
                                </form>
                                <!-- form end -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->