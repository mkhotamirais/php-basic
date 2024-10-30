<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    try {
        require_once "../less12-db-conn.php";
        // require, include, include_once;

        // $query = "INSERT INTO user (username, pwd, email) VALUES ('$username', '$pwd', '$email')";

        // there are two options to execute the query name and no name parameter;

        // option 1: no name parameter
        // $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?)";
        // $stmt = $pdo->prepare($query);
        // $stmt->execute([$username, $pwd, $email]);

        // option 2: name parameter
        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $pwd);
        $stmt->bindParam(':email', $email);
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
