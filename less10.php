<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less10</title>
</head>

<body>
    <h1>Less10</h1>

    <h3>loop basic</h3>
    <?php

    for ($i = 0; $i < 3; $i++) {
        echo "for $i <br/>";
    }

    $j = 0;
    while ($j < 3) {
        echo "while $j<br />";
        $j++;
    }

    $k = 0;
    do {
        echo "do while $k<br />";
        $k++;
    } while ($k < 3);

    $l = 5;
    do {
        echo "do while2 $l<br />";
        $l++;
    } while ($l < 3)
    ?>

    <h3>loop array</h3>
    <?php
    $fruits = ["apple", "banana", "cherry"];
    foreach ($fruits as $fruit) {
        echo "$fruit <br />";
    }

    $fruitsColor = ["apple" => "green", "banana" => "yellow", "cherry" => "red"];
    foreach ($fruitsColor as $fruitName => $fruitColor) { // $fruitName => $fruitName) {
        echo "$fruitName color is $fruitColor<br />";
    }
    ?>

    <h3>others</h3>
    <li><span>tabel1</span>
        <table border="1" cellpadding="10" cellspacing="0">
            <?php
            for ($m = 1; $m < 5; $m++) {
                echo "<tr>";
                for ($n = 1; $n < 5; $n++) {
                    echo "<td>$m$n</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </li>
    <li><span>tabel2</span>
        <table border="1" cellpadding="10" cellspacing="0">
            <?php for ($o = 1; $o < 5; $o++) { ?>
                <tr>
                    <?php for ($p = 1; $p < 5; $p++) { ?>
                        <td><?= $o, $p; ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </li>
    <li><span>table3</span>
        <table border="1" cellpadding="10" cellspacing="0">
            <?php for ($q = 1; $q < 5; $q++) : ?>
                <tr>
                    <?php for ($r = 1; $r < 5; $r++) { ?>
                        <td><?= $q, $r; ?></td>
                    <?php } ?>
                </tr>
            <?php endfor; ?>
        </table>
    </li>

</body>

</html>