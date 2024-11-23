<?php

include "is-login.php";
include "is-operator-mahasiswa.php";

$title = "Data Mahasiswa";
include "layout/header.php";

$data_mahasiswa = select("SELECT * FROM mahasiswa ORDER BY id_mahasiswa DESC");
?>

<h1><?= $title; ?></h1>
<hr />
<a href="mahasiswa-tambah.php" class="btn btn-primary mb-1">Tambah</a>
<a href="download-excel-mahasiswa.php" class="btn btn-success mb-1">Download Excel</a>
<a href="download-pdf-mahasiswa.php" class="btn btn-danger mb-1">Download pdf</a>
<table class="table table-striped mt-3 display" id="example">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Prodi</th>
            <th scope="col">L/P</th>
            <th scope="col">Telepon</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data_mahasiswa as $mahasiswa) : ?>
            <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $mahasiswa['nama']; ?></td>
                <td><?= $mahasiswa['prodi']; ?></td>
                <td><?= $mahasiswa['jk']; ?></td>
                <td><?= $mahasiswa['telepon']; ?></td>
                <td>
                    <a href="mahasiswa-detail.php?id_mahasiswa=<?= $mahasiswa['id_mahasiswa']; ?>" class="btn btn-secondary btn-sm">Detail</a>
                    <a href="mahasiswa-ubah.php?id_mahasiswa=<?= $mahasiswa['id_mahasiswa']; ?>" class="btn btn-success btn-sm">Ubah</a>
                    <a href="mahasiswa-hapus.php?id_mahasiswa=<?= $mahasiswa['id_mahasiswa']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin?');">Hapus</a>

                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>


<?php include "layout/footer.php"; ?>