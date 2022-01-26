<div class="container">
    <div class="card sales-card p-5 shadow col-sm-8 mx-auto">
        <!-- form start -->
        <form action="<?= base_url() . "home/saveAdd" ?>" method="POST" class="">

            <!-- nama -->
            <div class="mb-3">
                <label for="nama" class="form-label text-uppercase">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Ex. Irda Islakhu Afa">
            </div>
            <!-- email -->
            <div class="mb-3">
                <label for="email" class="form-label text-uppercase">email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Ex. irdhaislakhuafa@gmail.com">
            </div>
            <!-- jk -->
            <div class="mb-3">
                <label for="jk" class="form-label text-uppercase">Jenis kelamin</label>
                <select name="jk" id="jk" class="form-control">
                    <option>Pilih Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <!-- telepon -->
            <div class="mb-3">
                <label for="telepon" class="form-label text-uppercase">telepon</label>
                <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Ex. 082231456285">
            </div>
            <!-- buttons -->
            <div>
                <!-- back -->
                <a href="<?= base_url() . "home/lihat" ?>" class="me-3 btn btn-outline-danger">
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