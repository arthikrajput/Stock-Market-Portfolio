<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $role = $_POST['role'];

    if (empty($username) || empty($email) || empty($password)) {
        header("Location: register.html?error=empty_fields");
        exit();
    }

    // Ensure admin registration is static
    if ($role === 'admin' && $username !== 'admin') {
        header("Location: register.html?error=invalid_admin");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO role (username, email, password, role) VALUES (?, ?, ?, ?)");
    $stmt->execute([$username, $email, $hashedPassword, $role]);

    header("Location: login.html?success=registered");
    exit();
}
?>
