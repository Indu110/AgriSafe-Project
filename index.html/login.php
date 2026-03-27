<?php
session_start();
include 'db.php'; // database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get input safely
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Prepare statement to avoid SQL injection
    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    // Get result
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Verify password
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['fullname']; // or use $user['email']
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid login. <a href='index.php'>Try again</a>";
    }
} else {
    echo "You must submit the form. <a href='index.php'>Go back</a>";
}
?>


