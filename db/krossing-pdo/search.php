<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $search = $_POST['search'];
    $searchParam = "%$search%";

    try {
        require_once "db-conn.php";

        $query = "SELECT * FROM users WHERE username LIKE :search";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':search', $searchParam);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Query field: " . $e->getMessage());
    }
} else {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search results</title>
</head>

<body>
    <h3>Search results</h3>
    <?php if (empty($results)) : ?>
        <p>There were no results!</p>
    <?php else: ?>
        <?php foreach ($results as $row) : ?>
            <ul>
                <li><?= $row["username"]; ?></li>
            </ul>
        <?php endforeach; ?>
    <?php endif; ?>
</body>

</html>