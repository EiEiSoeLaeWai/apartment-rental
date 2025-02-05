<?php
session_start();
include('../../backend/connect.php');

// Get user input
$email = $_POST['email'];
$password = $_POST['password'];

// Check for admin login
$sql = "SELECT * FROM admin WHERE admin_username = :email AND admin_password = :password";
$query = $dbConn->prepare($sql);
$query->bindParam(':email', $email);
$query->bindParam(':password', $password);
$query->execute();
$result = $query->fetchAll();

if (count($result)) {
    // Store admin session details
    $_SESSION['email'] = $result[0]['admin_username'];
    $_SESSION['role'] = 'admin'; // Set role to admin
    header('Location: ../tenants/index.php');
    exit();
} else {
    // Check for user login
    $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
    $query = $dbConn->prepare($sql);
    $query->bindParam(':email', $email);
    $query->bindParam(':password', $password);
    $query->execute();
    $result = $query->fetchAll();

    if (count($result)) {
        // Store user session details
        $_SESSION['email'] = $result[0]['email'];
        $_SESSION['role'] = 'user'; // Set role to user
        header('Location: ../../index.php');
        exit();
    } else {
        // Handle login attempts
        if (!isset($_SESSION['attempt'])) {
            $_SESSION['attempt'] = 0;
        }
        
        $_SESSION['attempt'] += 1;

        if ($_SESSION['attempt'] === 3) {
            $_SESSION['msg'] = "3 Times Login Failed! Your login is disabled. Wait 10 minutes.";
            $_SESSION['check'] = 1;
            $_SESSION['attempt_again'] = time() + (10 * 60); // Lockout for 10 minutes
        } else {
            $_SESSION['msg'] = "Invalid Username and Password!";
        }

        header('Location: signin.php');
        exit();
    }
}
?>
