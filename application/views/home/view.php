<div class="container">

    <!-- table start -->
    <table class="table table-inverse wow fadeInUp shadow">
        <thead>
            <tr>
                <th>NO</th>
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
                        <a href="" class="btn btn-outline-primary">
                            <i class="bi bi-edit"></i> Ubah
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <!-- table end -->
</div>