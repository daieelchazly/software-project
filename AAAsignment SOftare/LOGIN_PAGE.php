<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// DB credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "de";

// DB connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve input
$user = $_POST['username'] ?? '';
$pass = $_POST['password'] ?? '';

if (!$user || !$pass) {
    echo "<script>alert('All fields are required.'); window.history.back();</script>";
    exit();
}

// Prepare SQL
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    // Check password
    if (password_verify($pass, $row['password'])) {
        // Set session
        $_SESSION['username'] = $row['username'];
        $_SESSION['age'] = $row['age'];
        $_SESSION['email'] = $row['email'];

        // ✅ Redirect to profile page
        header("Location: profile.php");
        exit();
    } else {
        echo "<script>alert('Invalid password.'); window.history.back();</script>";
        exit();
    }
} else {
    echo "<script>alert('User not found.click ok and try again'); window.history.back();</script>";
    exit();
}

$stmt->close();
$conn->close();
?>
