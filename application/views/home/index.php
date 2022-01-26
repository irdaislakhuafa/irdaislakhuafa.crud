<div class="row">

    <?php foreach ($card as $my_card) : ?>
        <!-- Sales Card -->
        <a href="<?= base_url() . $my_card["uri"] ?>" class="col-sm-3">
            <div class="card info-card sales-card shadow pt-4">
                <div class="card-body">

                    <div class="d-flex align-items-center">
                        <!-- icon -->
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-plus"></i>
                        </div>

                        <!-- title -->
                        <div class="ps-3">
                            <h6 class=""><?= $my_card["title"] ?></h6>
                        </div>
                    </div>
                </div>

            </div>
        </a>
        <!-- End Sales Card -->
    <?php endforeach ?>

</div>