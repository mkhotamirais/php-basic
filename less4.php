<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less4</title>
</head>

<body>
    <h1>Less4</h1>
    <ol>
        <li>String operator <br />
            <?php
            $a = "hello";
            $b = "world";
            $ab = $a . " " . $b;
            $ab = "$a $b"; // strig interpolation
            echo $ab;
            ?> <br />
        </li>
        <li>Aritmethic operator <br />
            8 + 2 = <?= 8 + 2; ?> <br />
            <?= 4 ** 2; ?>
            2 + 3 * 4 = <?= 2 + 3 * 4; ?> <br />
            (2 + 3) * 4 = <?= (2 + 3) * 4; ?> <br />
        </li>
    </ol>

</body>

</html>