<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less2</title>
</head>

<body>
    <h1>Less2</h1>
    <p>Just an introduction, the in-depth discussion will come later</p>
    <ol>
        <li>Superglobal $_SERVER[] <br>
            <?= $_SERVER["DOCUMENT_ROOT"]; ?> <br />
            <?= $_SERVER["PHP_SELF"]; ?> <br />
            <?= $_SERVER["SERVER_NAME"]; ?> <br />
        </li>
        <li>Superglobal $_GET[] <br />
            add `?name=John` at the end of the url like this: <br />
            http://localhost/php-basic/less2.php?name=John <br />
            you can also join with & to add $_GET variable like this: <br />
            http://localhost/php-basic/less2.php?name=John&age=10 <br />
            <?= $_GET["name"] ?? "no name" ?> <br />
            <?= $_GET["age"] ?? "no age" ?> <br />
        </li>
        <li>
            Superglobal $_POST[] can be used in relation to form data <br />
        </li>
        <li>
            Superglobal $_REQUEST[] can be used for both GET and POST (but it's not recommended) <br />
        </li>
        <li>
            Superglobal $_FILES[] can be used to upload files <br />
        </li>
        <li>
            Superglobal $_COOKIES[] can be used to set and get cookies <br />
        </li>
        <li>
            Superglobal $_SESSION[] can be used to set and get session variables <br />
        </li>
        <li>
            Superglobal $_ENV[] can be used to set and get environment variables <br />
        </li>

    </ol>
</body>

</html>