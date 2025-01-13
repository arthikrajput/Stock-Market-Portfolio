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
<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $role = $_POST['role'];

    // Check for empty fields
    if (empty($username) || empty($email) || empty($password)) {
        header("Location: register.html?error=empty_fields");
        exit();
    }

    // Email validation: Ensure it contains "@"
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: register.html?error=invalid_email");
        exit();
    }

    // Password validation: Minimum 8 characters, 1 uppercase, 1 lowercase, 1 number, and 1 special character
    $passwordPattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
    if (!preg_match($passwordPattern, $password)) {
        header("Location: register.html?error=weak_password");
        exit();
    }

    // Ensure admin registration is static
    if ($role === 'admin' && $username !== 'admin') {
        header("Location: register.html?error=invalid_admin");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try {
        $stmt = $conn->prepare("INSERT INTO role (username, email, password, role) VALUES (?, ?, ?, ?)");
        $stmt->execute([$username, $email, $hashedPassword, $role]);

        header("Location: login.html?success=registered");
        exit();
    } catch (PDOException $e) {
        header("Location: register.html?error=database_error");
        exit();
    }
}
?>
