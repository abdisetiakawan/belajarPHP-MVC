<div class="container my-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <ul></ul>
                    <li><?= $mhs['nrp']; ?></li>
                    <li><?= $mhs['nama']; ?></li>
                    <li><?= $mhs['email']; ?></li>
                    <li><?= $mhs['jurusan']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>