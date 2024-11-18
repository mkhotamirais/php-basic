<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less1</title>
</head>

<body>

    <h1>Less1</h1>


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

    <h4>Form </h4>

</body>

</html>