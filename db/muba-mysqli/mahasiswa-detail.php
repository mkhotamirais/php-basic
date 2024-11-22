<?php

include "is-login.php";
include "is-operator-mahasiswa.php";

$title = "Detail Mahasiswa";
include "layout/header.php";

$id_mahasiswa = (int)$_GET['id_mahasiswa'];

$mahasiswa = select("SELECT * FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa")[0];
?>

<h1><?= $title; ?> <?= $mahasiswa['nama']; ?></h1>
<hr />

<table class="table table-striped table-bordered mt-3">
    <tr>
        <td>Nama</td>
        <td><?= $mahasiswa['nama']; ?></td>
    </tr>
    <tr>
        <td>Prodi</td>
        <td><?= $mahasiswa['prodi']; ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><?= $mahasiswa['jk']; ?></td>
    </tr>
    <tr>
        <td>Telepon</td>
        <td><?= $mahasiswa['telepon']; ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?= $mahasiswa['email']; ?></td>
    </tr>
    <tr>
        <td>Foto</td>
        <td>
            <a href="assets/img/<?= $mahasiswa['foto']; ?>">
                <img src="assets/img/<?= $mahasiswa['foto']; ?>" alt="foto mahasiswa" width="100" height="100">
            </a>
        </td>
    </tr>
</table>

<a href="mahasiswa.php" class="btn btn-secondary mt-3">Kembali</a></a>



<?php include "layout/footer.php"; ?>