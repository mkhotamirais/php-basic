<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>less1</h1>
    <ol>
        <li>
            Opening, closing tag and echo and don't forget (;) <br>
            &lt;?php echo 'hello, world!'; ?&gt; <br>
            <?php echo "hello world"; ?>
        </li>
        <li>All syntax between the PHP opening and closing tags is PHP code, so PHP can be mixed with HTML anywhere and can be inserted even if it's just a single variable.</li>
        <li>
            Variable: <br>
            &lt;?php $name = "ahmad"; ?&gt; <br>
            <?php $name = "ahmad"; ?>
            hello <?php echo $name; ?>
        </li>
        <li>
            DataTypes: (from now, view the source code to learn the PHP syntax)
            <?php
            // Scalar types (contains only one value)
            $string = "ahmad";
            $int = 10;
            $float = 10.99;
            $bool = true;

            // Array types
            $array1 = array("ahmad", "ahmad", "ahmad");
            $array2 = ["ahmad", "ahmad", "ahmad"];

            // Object types (we will discuss later)
            // $person = new Person();


            // If you don't assign a value to a variable, 
            /*
            $string; like this (but don't do this)
            */
            // it's default value will be as follows
            $string = "";
            $int = 0;
            $float = 0;
            $bool = false;
            $array = [];
            $object = null;
            ?>
        </li>
    </ol>
</body>

</html>