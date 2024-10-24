<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less6</title>
</head>

<body>
    <h1>Less6</h1>
    <p>arrays</p>
    <h3>Array type 1</h3>
    <?php
    $fruits = ["apple", "banana", "cherry"];

    echo join(", ", $fruits);
    echo "<br />";

    print_r($fruits);
    echo "<br />";

    echo $fruits[0];
    echo "<br />";

    $fruits[] = "orange";
    echo $fruits[count($fruits) - 1];
    echo "<br />";

    $fruits[0] = "mango";
    echo $fruits[0];
    echo "<br />";

    unset($fruits[0]);
    echo $fruits[0] ?? "fruit 0 unset";
    echo "<br />";

    array_splice($fruits, 0, 1);
    print_r($fruits);
    echo "<br />";

    array_splice($fruits, 1, 1, "avocado");
    print_r($fruits);
    echo "<br />";

    echo $fruits[0];
    echo "<br />";

    array_push($fruits, "pineapple");
    print_r($fruits);
    echo "<br />";
    ?>

    <h3>Array type 2</h3>
    <?php
    $names = [
        "satu" => "ahmad",
        "dua" => "abdul",
        "tiga" => "siti"
    ];
    print_r($names);
    echo "<br />";

    echo $names["satu"];
    echo "<br />";

    $names["empat"] = "ali";
    print_r($names);
    ?>

    <h3>Nsted array</h3>
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
</body>

</html>