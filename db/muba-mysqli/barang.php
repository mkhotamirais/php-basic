<?php

include "is-login.php";
include "is-operator-barang.php";

$title = "Data Barang";
require "layout/header.php";

?>

<h1><?= $title; ?></h1>
<hr />
<a href="barang-tambah.php" class="btn btn-primary mb-1">
    <i class="fa-solid fa-circle-plus"></i> Tambah
</a>
<table class="table table-striped mt-3 display" id="example">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Harga</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data_barang as $barang) : ?>
            <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $barang['nama']; ?></td>
                <td><?= $barang['jumlah']; ?></td>
                <td>Rp<?= number_format($barang['harga'], 0, ',', '.') ?></td>
                <td><?= date('d/m/Y | H:i:s', strtotime($barang['tanggal'])); ?></td>
                <td>
                    <a href="barang-ubah.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i> Ubah</a>
                    <a href="barang-hapus.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin?');"><i class="fa-solid fa-trash"></i> Hapus</a>

                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>

<?php require "layout/footer.php"; ?>