<?php

if ($_SESSION['level'] != 1 or $_SESSION['level'] != 2) {
    echo "<script>
            alert('Akses hanya untuk admin dan operator barang!');
            document.location.href = 'login.php';
        </script>";
    exit;
}
