<?php
session_start();
require_once("../DB/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = trim($_POST['first_name']);
    $last_name  = trim($_POST['last_name']);
    $username   = trim($_POST['username']);
    $password   = trim($_POST['password']);

    // Check if username already exists
    $checkUser = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $checkUser->bind_param("s", $username);
    $checkUser->execute();
    $result = $checkUser->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Username already taken!";
        header("Location: ../pages/register.php");
        exit();
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert into DB
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, username, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $first_name, $last_name, $username, $hashedPassword);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Account created! Please login.";
        header("Location: ../pages/login.php");
    } else {
        $_SESSION['error'] = "Error creating account.";
        header("Location: ../pages/register.php");
    }
}
?>
