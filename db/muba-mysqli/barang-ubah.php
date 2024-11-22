<?php

include "is-login.php";
include "is-operator-barang.php";

$title = "Ubah Barang";
require "layout/header.php";

$id_barang = (int)$_GET['id_barang'];
$barang = select("SELECT * FROM barang WHERE id_barang = $id_barang")[0];

if (isset($_POST["ubah"])) {
    if (update_barang($_POST) > 0) {
        echo "<script>
            alert('Data barang berhasil diubah');
            document.location.href = 'barang.php';
        </script>";
    } else {
        echo "<script>
            alert('Data barang gagal diubah');
        </script>";
    }
}

?>


<h1><?= $title; ?></h1>
<form action="" method="post">
    <input type="hidden" id="id_barang" name="id_barang" value="<?= $barang['id_barang']; ?>">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama barang" required value="<?= $barang['nama']; ?>">
    </div>
    <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="jumlah barang" required value="<?= $barang['jumlah']; ?>">
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" placeholder="harga barang" required value="<?= $barang['harga']; ?>">
    </div>

    <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
</form>


<?php require "layout/footer.php"; ?>