<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "de";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';  // Get email from form
    $pass = $_POST['password'] ?? '';
    $confirm_pass = $_POST['confirm_password'] ?? '';
    $age = $_POST['age'] ?? '';

    // Basic validation
    if (!$user || !$email || !$pass || !$confirm_pass || !$age) {
        echo "<script>alert('All fields are required.'); window.history.back();</script>";
        exit();
    }

    if ($pass !== $confirm_pass) {
        echo "<script>alert('Passwords do not match.'); window.history.back();</script>";
        exit();
    }

    // Check if username or email already exists (optional, for extra safety)
    $check_stmt = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $check_stmt->bind_param("ss", $user, $email);
    $check_stmt->execute();
    $result = $check_stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Username or email already exists. Please login instead.'); window.location.href='LOGIN_PAGE.html';</script>";
        $check_stmt->close();
        $conn->close();
        exit();
    }
    $check_stmt->close();

    // Hash the password
    $hashed_pass = password_hash($pass, PASSWORD_BCRYPT);

    // Insert into database (include email)
    $stmt = $conn->prepare("INSERT INTO users (username, email, password, age) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $user, $email, $hashed_pass, $age);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!'); window.location.href='LOGIN_PAGE.html';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "<script>alert('Please submit the form.'); window.location.href='REG_PAGE.html';</script>";
}

$conn->close();
?>
