<?php

session_start();

if (!isset($_SESSION['login'])) {
    echo "<script>
            alert('Silahkan login terlebih dahulu!');
            document.location.href = 'login.php';
        </script>";
    exit;
}
