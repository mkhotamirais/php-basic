<?php

if ($_SESSION['level'] != 1 and $_SESSION['level'] != 3) {
    echo "<script>
            alert('Akses hanya untuk admin dan operator mahasiswa!');
            document.location.href = 'login.php';
        </script>";
    exit;
}
