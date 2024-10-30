<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less12 index</title>
</head>

<body>
    <h1>Less12 index</h1>
    <h3>Change account</h3>
    <form action="includes/less12-update.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="pwd" placeholder="pwd">
        <input type="email" name="email" placeholder="email">
        <button type="submit">Update</button>
    </form>
    <h3>Delete account</h3>
    <form action="includes/less12-delete.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="pwd" placeholder="pwd">
        <button type="submit">Delete</button>
    </form>
    <br>

    <section>
        <form action="less12-search.php" method="post">
            <label for="search">search</label>
            <input type="text" id="search" name="search" placeholder="search..">
            <button type="submit">search</button>
        </form>
    </section>
</body>

</html>