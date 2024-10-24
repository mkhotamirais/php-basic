<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less5</title>
</head>

<body>
    <h1>Less5</h1>
    <p>Conditions and control structures</p>
    <ol>
        <li>If else if <br />
            <?php
            $a = 1;

            if ($a == 1) {
                echo "benar";
            } else if ($a == 2) {
                echo "lebih satu";
            } else {
                echo "salah";
            }
            ?>
        </li>
        <li>Ternary <br />
            <?php
            echo $a == 1 ?  "benar" : ($a == 2 ? "lebih satu" :  "salah");
            ?>
        </li>
        <li>Switch case <br />
            <?php
            switch ($a) {
                case 1:
                    echo "benar";
                    break;
                case 2:
                case 3;
                    echo "lebih satu dan lebih dua";
                    break;

                default:
                    echo "salah";
                    break;
            }
            ?>
        </li>
        <li>Match <br />
            <?php
            $result = match ($a) {
                1 => "benar",
                2, 3 => "lebih satu dan lebih dua",
                default => "salah"
            };
            echo $result;
            ?>
        </li>
    </ol>
</body>

</html>