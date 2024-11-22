<?php

include "is-login.php";
include "is-operator-barang.php";

$title = "Tambah Barang";
require "layout/header.php";

if (isset($_POST["tambah"])) {
    if (create_barang($_POST) > 0) {
        echo "<script>
            alert('Data barang berhasil ditambah');
            document.location.href = 'barang.php';
        </script>";
    } else {
        echo "<script>
            alert('Data barang gagal ditambah');
        </script>";
    }
}

?>

<h1><?= $title; ?></h1>
<form action="" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama barang" required>
    </div>
    <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="jumlah barang" required>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" placeholder="harga barang" required>
    </div>

    <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
</form>


<?php require "layout/footer.php"; ?>