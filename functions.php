<?php
function registerUser($username, $email, $password)
{
    global $pdo;

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$username, $email, $hashedPassword]);

    return $stmt->rowCount();
}

function loginUser($username, $password)
{
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        return $user;
    } else {
        return false;
    }
}

function isUserLoggedIn()
{
    return isset($_SESSION['user']);
}

function getCurrentUser()
{
    return $_SESSION['user'] ?? null;
}
?>