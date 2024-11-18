<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less3</title>
</head>

<body>

    <?php
    $str1 = "hello";
    $str2 = "world!";
    $num1 = 5;
    $num2 = 6;
    ?>

    <h4>Operator string (.)</h4>
    <?= $str1 . " " . $str2; ?>
    <?php echo "$str1 $str2"; ?> <!-- string interpolation -->

    <h4>Operator arithmetic (+ - * ** / %)</h4>
    <?= $num2 + $num2; ?>


    <h4>Operator assignment </h4>
    <?= $num1++; ?>
    <?= $num2 += 1; ?>



    <p>Operators, Conditions and control structures, Calculator</p>
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
                case 3:
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
        <li>
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <input type="number" placeholder="input first number" name="num1" placeholder="num1" required>
                <select name="operator" id="operator">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <input type="number" placeholder="input second number" name="num2" placeholder="num2" required>
                <button type="submit">=</button>

                <span>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // grab all inputs
                        // $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
                        // $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
                        $num1 = filter_input(INPUT_POST, "num1", FILTER_VALIDATE_FLOAT);
                        $num2 = filter_input(INPUT_POST, "num2", FILTER_VALIDATE_FLOAT);

                        $op = htmlspecialchars($_POST["operator"]);
                        $result = 0;

                        // error andler
                        $errors = false;
                        if ($num1 === false || $num2 === false || empty($op)) { {
                                $errors = true;
                                echo "Please enter a number";
                            }
                        }
                        if (!is_numeric($num1) || !is_numeric($num2)) {
                            $errors = true;
                            echo "Please enter a number";
                        }
                        // calculate the numbers if no errors
                        if (!$errors) {
                            $result = match ($op) {
                                "+" => $num1 + $num2,
                                "-" => $num1 - $num2,
                                "*" => $num1 * $num2,
                                "/" => ($num2 != 0 ? $num1 / $num2 : "Cannot divide by zero"),
                                default => "Invalid operation"
                            };
                        }
                        echo $result;
                    }
                    ?>
                </span>
            </form>
        </li>
    </ol>

</body>

</html>