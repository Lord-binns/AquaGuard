<?php
session_start();
require_once("../DB/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            // Login success
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            header("Location: ../pages/dashboard.php"); // redirect to dashboard
            exit();
        } else {
            $_SESSION['error'] = "Invalid password!";
            header("Location: ../pages/login.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "User not found!";
        header("Location: ../pages/login.php");
        exit();
    }
}
?>
