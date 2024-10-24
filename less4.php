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
        <li>String operator, concat . + <br />
            <?php
            $a = "hello";
            $b = "world";
            $ab = $a . " " . $b;
            $ab = "$a $b"; // strig interpolation
            echo $ab;
            ?> <br />
        </li>
        <li>Arithmetic operator + - * ** / % <br />
            8 + 2 = <?= 8 + 2; ?> <br />
            2 + 3 * 4 = <?= 2 + 3 * 4; ?> <br />
            (2 + 3) * 4 = <?= (2 + 3) * 4; ?> <br />
        </li>
        <li>Assignment operator += -= *= /= %= .=, ++, -- <br />
            <?php
            $c = 3;
            echo $c;
            echo "<br />";
            $c += 2;
            echo $c;
            echo $c++;
            echo $c;
            echo ++$c;
            echo $c;
            ?>
        </li>
        <li>Comparison operator <>, <=>, =, ==, Identity operator !== === <br />
                    <?php
                    $d = 5;
                    $e = 6;
                    if ($d < $e) {
                        echo "d lebih kecil dari e";
                    }
                    ?>
        </li>
        <li>Logic operator: and, &&, or, ||, !</li>
    </ol>

</body>

</html>