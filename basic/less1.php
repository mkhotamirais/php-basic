<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less1</title>
</head>

<body>

    <h1>PHP Less1</h1>

    <!-- data types and variables -->
    <h2>Data Types and Variables</h2>
    <h4>PHP Syntax and standard output (php is between opening and closing php tag, and it can be mixed with html code)</h4>
    <?php echo "Hello World!" ?>
    <?php echo "hello world"; ?> <br />
    <?php print "hello world"; ?> <br />
    <?php print_r("hello world"); ?> <br />
    <?php echo "hari jum'at"; ?> <br />
    <?php var_dump("hello world"); ?> <br />
    <?= "hello php!"; ?>

    <h4>Data Types: scalar types (string, int, float, bool, object), array types ()</h4>
    <?php
    $string = "ahmad";
    $arr = ['abdul', 'siti', 'ayu'];
    $arr2 = array('satu', 'dua', 'tiga');
    ?>

    <h4>Superglobal $_SERVER[], $_GET[], $_POST[], $_REQUEST[], $_FILES[], $_COOKIES[], $_SESSION[], $_ENV[]</h4>
    <p>
        Nama server: <?= $_SERVER["SERVER_NAME"]; ?>, sekarang coba tambahkan di ujung url saat ini: <b>?name=ahmad&age=10</b>, nama saya <?= $_GET['name'] ?? "get name"; ?> umur saya <?= $_GET['age'] ?? "get age"; ?>
    </p>

    <h4>Form $_POST[]</h4>
    <form action="less1PostHandler.php" method="post">
        <input type="text" name="name" id="name" placeholder="name">
        <input type="number" name="age" id="age" placeholder="age">
        <button type="submit">submit</button>
    </form>

    <?php
    $str1 = "hello";
    $str2 = "world!";
    $num1 = 5;
    $num2 = 6;
    $num3 = 10;
    $num4 = "10";
    ?>

    <!-- operators and logic -->
    <h2>Operators and Logic</h2>

    <h4>Operator string (.)</h4>
    <?= $str1 . " " . $str2; ?>
    <?php echo "$str1 $str2"; ?> <!-- string interpolation -->

    <h4>Operator arithmetic (+ - * ** / %)</h4>
    <?php echo "$num1 + $num2 = " . $num2 + $num2; ?>

    <h4>Operator assignment </h4>
    <?= $num1++; ?>
    <?= $num1 += 2; ?>

    <h4>Operator comparison <>, <=>, =, ==, Identity operator !== ===</h4>
    <?php
    if ($num3 > $num2) {
        echo "benar";
    } else {
        echo "salah";
    }
    ?>
    <?= $num4 == $num3 ? "benar" : "salah"; ?>
    <?= $num4 === $num3 ? "benar" : "salah"; ?>

    <h4>Logic if, else if, AND && OR || !, Ternary (varsi singkat if else ? :), Switch Case, Match (versi singkat switch case)</h4>
    <?= $num3 > $num2 ? "benar" : "salah" ?>
    <!-- switch case -->
    <?php
    switch ($num3) {
        case 10:
            echo "benar";
            break;
        case 11:
        case 12:
            echo "lebih satu dan lebih dua";
            break;

        default:
            echo "salah";
            break;
    }
    ?>
    <!-- Match (versi singkat switch case) -->
    <?php
    $result = match ($num3) {
        10 => "benar",
        11, 12 => "lebih satu dan lebih dua",
        default => "salah"
    };
    echo $result;
    ?>

    <h4>Calculator</h4>
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

</body>

</html>