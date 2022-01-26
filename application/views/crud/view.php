<div class="container">

    <!-- table start -->
    <table class="table table-inverse wow fadeInUp shadow">
        <thead>
            <tr>
                <th>NO</th>
                <th>NPM</th>
                <th>NAMA</th>
                <th>JK</th>
                <th>EMAIL</th>
                <th>TELEPON</th>
                <th>AKSI</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($list_mahasiswa as $no => $mahasiswa) : ?>
                <tr>
                    <!-- no -->
                    <td><?= ($no + 1) ?></td>
                    <!-- npm -->
                    <td><?= $mahasiswa["npm"] ?></td>
                    <!-- nama -->
                    <td><?= $mahasiswa["nama"] ?></td>
                    <!-- jk -->
                    <td><?= $mahasiswa["jk"] ?></td>
                    <!-- email -->
                    <td><?= $mahasiswa["email"] ?></td>
                    <!-- telepon -->
                    <td><?= $mahasiswa["telepon"] ?></td>
                    <!-- aksi -->
                    <td>

                        <!-- delete -->
                        <form action="<?= base_url() . "crud/delete" ?>" method="POST">
                            <!-- edit -->
                            <a href="<?= base_url() . "crud/edit/" . $mahasiswa["id"] ?>" class="btn btn-outline-primary">
                                <i class="bi bi-pencil"></i> Ubah
                            </a>
                            <input type="text" name="id" value="<?= $mahasiswa["id"] ?>" required hidden>
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="bi bi-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <!-- table end -->
</div>