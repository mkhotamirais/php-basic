<?php
session_start();

$_SESSION["username"] = "ahmad";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Les13index</title>
</head>

<body>
    <h2>Less13 index</h2>
    <a href="less13-example.php">go to example</a>
    <br>

    <?= $_SESSION["username"]; ?>
</body>

</html>