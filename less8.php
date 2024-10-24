<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less8</title>
</head>

<body>
    <h1>Less8</h1>

    <h3>user-defined function</h3>

    <?php
    function sayHello()
    {
        return "hello world";
    }
    $hello = sayHello();

    echo $hello;
    ?>

    <h3>user-defined with param</h3>

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