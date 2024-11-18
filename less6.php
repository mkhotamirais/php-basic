<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less9</title>
</head>

<body>
    <h1>Less9</h1>
    <p>Scope, constants and loop</p>
    <h3>Scope</h3>
    <?php
    // 1. GLOBAL scope: $a is global scope
    $a = "ayu";
    echo $a;
    echo "<br />";

    function callAyu()
    {
        // you can access 
        global $a;
        // or you can do this (but rarely used)
        $b = $GLOBALS["a"];

        // 2. LOCAL scope: $b is local scope;
        $c = "budi";
        return "$a, $b, $c";
    }
    // echo $b; // error
    echo callAyu();
    echo "<br />";

    // 3. STATIC scope
    // perhatikan fungsi berkut;
    function callNum()
    {
        $d = 1;
        $d++;
        return $d;
    }
    echo callNum();
    echo callNum();
    echo callNum();
    echo "<br />";
    function incNum()
    {
        static $e = 1;
        $e++;
        return $e;
    }
    echo incNum();
    echo incNum();
    echo incNum();

    // 4. CLASS scope (we'll talk about this later)
    class MyClass
    {
        public $f = "fani";
        public function callFani()
        {
            return $this->f;
        }
    }

    ?>
    <h3>Constants</h3>
    <?php
    /*
jika menulis variable seperti berikut:
$name = "ahmad";
*/
    // berikut ini cara menulis constants
    // constants tidak bisa dihapus
    // secara konvensi constans ditulis dengan huruf kapital

    define("NAME", "ahmad");
    const AGE = 20;
    echo NAME . "<br />";
    echo AGE . "<br />";
    $name = "abdul";

    function callName()
    {
        return NAME;
    }

    echo callName();

    ?>


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