<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    try {
        require_once "../less12-db-conn.php";

        $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $pwd);
        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../less12-index.php");
        die();
    } catch (PDOException $e) {
        die("Query field: " . $e->getMessage());
    }
} else {
    header("Location: ../less12-index.php");
}
