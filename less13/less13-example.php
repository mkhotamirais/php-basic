<?php
session_start();

// session username is declared in less13-index.php so it can be called in this page
// but if you unset session, you cannot use session username in this page

// unset($_SESSION["username"])

// session_unset(); // to unset all session data;
// session_destroy(); // to destroy session

// session_unset(): Menghapus variabel dalam sesi, tetapi sesi masih aktif.
// session_destroy(): Mengakhiri sesi dan menghapus data sesi secara keseluruhan, namun tidak menghapus variabel dalam $_SESSION secara otomatis.
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less13example</title>
</head>

<body>
    <h2>Less13 example</h2>
    <?= $_SESSION['username'] ?? "session username unset"; ?>
</body>

</html>