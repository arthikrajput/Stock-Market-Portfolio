<?php
include 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        header("Location: login.html?error=empty_fields");
        exit();
    }

    $stmt = $conn->prepare("SELECT * FROM role WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $user['role'];
        header("Location: home.php");
        exit();
    } else {
        header("Location: login.html?error=invalid_credentials");
        exit();
    }
}
?>
