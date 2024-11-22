<?php

include "is-login.php";
include "is-operator-barang.php";

include "config/app.php";

$id_barang = (int)$_GET['id_barang'];

if (delete_barang($id_barang) > 0) {
    echo "<script>
        alert('Data barang berhasil dihapus');
        document.location.href = 'barang.php';
    </script>";
} else {
    echo "<script>
        alert('Data barang gagal dihapus');
    </script>";
}
