<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less5calculator</title>
</head>

<body>
    <h1>Less5calculator</h1>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
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
                $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
                $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
                $op = htmlspecialchars($_POST["operator"]);
                $result = 0;

                // error andler
                $errors = false;
                if (empty($num1) || empty($num2) || empty($op)) { {
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
                        "/" => $num1 / $num2,
                        default => "Invalid operation"
                    };
                }
                echo $result;
            }
            ?>
        </span>
    </form>
</body>

</html>