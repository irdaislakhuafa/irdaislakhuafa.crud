<div class="container">
    <div class="card sales-card p-5 shadow col-sm-8 mx-auto">
        <!-- form start -->
        <form action="<?= base_url() . "crud/editSave" ?>" method="POST" class="">
            <!-- id -->
            <input type="text" name="id" hidden value="<?= $mahasiswa["id"] ?>" readonly required>

            <!-- nama -->
            <div class="mb-3">
                <label for="nama" class="form-label text-uppercase">Nama</label>
                <input value="<?= $mahasiswa["nama"] ?>" required type="text" name="nama" id="nama" class="form-control" placeholder="Ex. Irda Islakhu Afa">
            </div>
            <!-- npm -->
            <div class="mb-3">
                <label for="npm" class="form-label text-uppercase">npm</label>
                <input disabled value="<?= $mahasiswa["npm"] ?>" required type="text" name="npm" id="npm" class="form-control" placeholder="Ex. 1412190011">
            </div>
            <!-- email -->
            <div class="mb-3">
                <label for="email" class="form-label text-uppercase">email</label>
                <input value="<?= $mahasiswa["email"] ?>" required type="email" name="email" id="email" class="form-control" placeholder="Ex. irdhaislakhuafa@gmail.com">
            </div>

            <!-- telepon -->
            <div class="mb-3">
                <label for="telepon" class="form-label text-uppercase">telepon</label>
                <input value="<?= $mahasiswa["telepon"] ?>" required type="number" name="telepon" id="telepon" class="form-control" placeholder="Ex. 082231456285">
            </div>
            <!-- buttons -->
            <div>
                <!-- back -->
                <a href="<?= base_url() . "crud/lihat" ?>" class="me-3 btn btn-outline-danger">
                    <i class="bi bi-backspace"></i>
                    Kembali
                </a>

                <!-- save -->
                <button type="submit" class="btn btn-outline-primary">
                    <i class="bi bi-send"></i>
                    Simpan</button>
            </div>
        </form>
        <!-- form end -->
    </div>
</div>