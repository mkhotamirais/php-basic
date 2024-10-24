<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less7</title>
</head>

<body>
    <h1>Less7</h1>
    <h3>Built in string function</h3>
    <?php $hi = "Hello world!"; ?>
    <?= $hi; ?><br />
    <?= strlen($hi); ?><br />
    <?= strpos($hi, "l"); ?><br />
    <?= str_replace("world", "Dunia", $hi); ?>
    <?= strtolower($hi); ?><br>
    <?= substr($hi, 1, 5); ?><br />
    <?= substr($hi, 1, -2); ?><br />
    <?php print_r(explode(" ", $hi)); ?><br />

    <h3>Built in math function</h3>
    <?php $num = -5.5; ?>
    <?= abs($num); ?><br />
    <?= round($num); ?><br />
    <?= pow(2, 3); ?><br />
    <?= sqrt(16); ?><br />

    <h3>Built in array function</h3>
    <?php $arr = ["satu", "dua", "tiga", "empat", "lima"]; ?>
    <?= count($arr); ?>

    <h3>Built in date and time function</h3>
    <?= date("l, d-m-y: h:i:sa"); ?><br />
    <?= time(); ?><br />
    <?php $date = "2024-01-01 12:00:00"; ?><br />
    <?= $date; ?><br />
    <?= strtotime($date); ?>

</body>

</html>