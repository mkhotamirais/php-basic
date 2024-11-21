<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krossing PDO</title>
</head>

<body>
    <h1>Krossing PDO</h1>
    <ul>
        <li>DB_NAME: db_krossing_pdo</li>
        <li>hanya bisa berjalan di local</li>
    </ul>

    <a href="signup.php">signup</a>
    <div>
        <h3>Change account</h3>
        <form action="update.php" method="post">
            <input type="text" name="username" placeholder="username">
            <input type="password" name="pwd" placeholder="pwd">
            <input type="email" name="email" placeholder="email">
            <input type="text" name="old_username" placeholder="old-username">
            <button type="submit">Update</button>
        </form>
        <h3>Delete account</h3>
        <form action="delete.php" method="post">
            <input type="text" name="username" placeholder="username">
            <input type="password" name="pwd" placeholder="pwd">
            <button type="submit">Delete</button>
        </form>
        <br>

        <section>
            <form action="search.php" method="post">
                <label for="search">search</label>
                <input type="text" id="search" name="search" placeholder="search..">
                <button type="submit">search</button>
            </form>
        </section>

    </div>
</body>

</html>