<?php

include "is-login.php";
include "is-operator-mahasiswa.php";

include "config/app.php";

$id_mahasiswa = (int)$_GET['id_mahasiswa'];

if (delete_mahasiswa($id_mahasiswa) > 0) {
    echo "<script>
        alert('Data mahasiswa berhasil dihapus');
        document.location.href = 'mahasiswa.php';
    </script>";
} else {
    echo "<script>
        alert('Data mahasiswa gagal dihapus');
    </script>";
}
