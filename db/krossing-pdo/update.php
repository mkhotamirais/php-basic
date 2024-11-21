<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];
    $old_username = $_POST['old_username'];

    try {
        require_once "db-conn.php";

        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE username = :old_username";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $pwd);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':old_username', $old_username);
        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: index.php");
        die();
    } catch (PDOException $e) {
        die("Query field: " . $e->getMessage());
    }
} else {
    header("Location: index.php");
}
