<?php
session_start();

require_once 'config.php';
require_once 'functions.php';

// Registration
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = registerUser($username, $email, $password);

    if ($result) {
        echo "Registration successful!";
    } else {
        echo "Registration failed.";
    }
}

// Login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = loginUser($username, $password);

    if ($user) {
        $_SESSION['user'] = $user;
        echo "Login successful!";
    } else {
        echo "Login failed.";
    }
}

// Check if user is logged in
if (isUserLoggedIn()) {
    $currentUser = getCurrentUser();
    echo "Hello, {$currentUser['username']}! <a href='logout.php'>Logout</a>";
} else {
    // Display login/register form
    ?>
    <form method="post" action="index.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit" name="register">Register</button>
        <button type="submit" name="login">Login</button>
    </form>
    <?php
}
?>