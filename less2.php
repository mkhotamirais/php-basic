<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less2</title>
</head>

<body>
    <h1>Less2</h1>
    <p>Form Post</p>
    <main>
        <form action="less2handler.php" method="post">
            <input type="text" name="name" placeholder="name">
            <label for="pet">Pet</label>
            <select name="pet" id="pet">
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="fish">Fish</option>
            </select>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>

</html>