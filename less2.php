<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less2</title>
</head>

<body>
    <h1>PHP Less2</h1>

    <!-- arrays -->
    <h2>Arrays</h2>
    <h4>Array type 1 (indexed array)</h4>
    <?php $nomor = ["empat", "lima", "enam"] ?>

    <?php var_dump($nomor) ?><br />
    <?php print_r($nomor) ?><br />
    <?= join(", ", $nomor); ?><br />
    <?= $nomor[1]; ?><br />

    <?php $nomor[] = "tujuh"; ?>
    <?php array_push($nomor, "delapan"); ?>
    <?php unset($nomor[0]); ?>
    <?= $nomor[0] ?? "nomor 0 unset"; ?><br />
    <?php print_r($nomor) ?><br />

    <?php array_splice($nomor, 0, 1); ?>
    <?php print_r($nomor) ?><br />

    <?php array_splice($nomor, 0, 1, "enam updated"); ?>
    <?php print_r($nomor) ?><br />

    <h4>Array type 2 (associative array)</h4>
    <?php $dataku = ["nama" => "ahmad", "umur" => 20, "asal" => "indonesia"]; ?>
    <?= print_r($dataku); ?><br />
    <?= $dataku["nama"]; ?>
    <?php $dataku["nama"] = "abdul"; ?>
    <?= $dataku["nama"]; ?>

    <h4>Nested array</h4>
    <?php
    $nested = ["parent1", "parent2", ["child1", "child2"]];
    $nested2 = [
        "satu" => "ahmad",
        "dua" => "abdul",
        "tiga" => [
            "empat" => "ali",
            "lima" => "siti"
        ]
    ];
    echo $nested[2][1];
    echo "<br />";
    echo $nested2["tiga"]["empat"];
    ?>

    <h2>Functions</h2>
    <p>Built-in function and user defined function</p>
    <p>Mostly used Built-in function: <b>string</b> strlen(), strcmp(), explode(), htmlspecialchars(); <b>utility</b> var_dump(), isset(), empty(), die(), sleep()</p>

    <h4>Built in string function</h4>
    <?php $hi = "Hello world!"; ?>
    <?= $hi; ?><br />
    <?= strlen($hi); ?><br />
    <?= strpos($hi, "l"); ?><br />
    <?= str_replace("world", "Dunia", $hi); ?>
    <?= strtolower($hi); ?><br>
    <?= substr($hi, 1, 5); ?><br />
    <?= substr($hi, 1, -2); ?><br />
    <?php print_r(explode(" ", $hi)); ?><br />

    <h4>Built in math function</h4>
    <?php $num = -5.5; ?>
    <?= abs($num); ?><br />
    <?= round($num); ?><br />
    <?= pow(2, 3); ?><br />
    <?= sqrt(16); ?><br />

    <h4>Built in array function</h4>
    <?php $arr = ["satu", "dua", "tiga", "empat", "lima"]; ?>
    <?= count($arr); ?>

    <h4>Built in date and time function</h4>
    <?php
    // EPOCH time (asal mula waktu di dunia IT) = 1 Jan 1970 00:00:00
    // mktime(jam, menit, detik, bulan, tanggal, tahun)
    echo mktime(0, 0, 0, 0, 0, 0);
    echo "<br />";
    ?>
    <?= date("l, d-m-y: h:i:sa"); ?><br />
    <?= time(); ?><br />
    <?php $date = "2024-01-01 12:00:00"; ?><br />
    <?= $date; ?><br />
    <?= strtotime($date); ?><br />
    <?php
    $birthday = mktime(0, 0, 0, 5, 22, 1998);
    $birthday2 = strtotime("22 May 1998");
    echo date('l', $birthday) . "<br/>";

    ?>


    <h4>user-defined function</h4>

    <?php
    function sayHello()
    {
        return "hello world";
    }
    $hello = sayHello();

    echo $hello;
    ?>

    <h4>user-defined with param</h4>

    <?php
    $name2 = "abdul";
    function sayHello2(string $name, int $age)
    {
        global $name2;
        return "hello $name and $name2, your age is $age";
    }
    $hello2 = sayHello2("ahmad", 20);
    echo $hello2
    ?>
</body>

</html>