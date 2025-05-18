<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: LOGIN_PAGE.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile - DeptCart</title>
  <link rel="stylesheet" href="profile.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <div class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="brand">
        <div class="brand-logo"><i class="fas fa-shopping-cart"></i></div>
        <span class="brand-name">DeptCart</span>
      </div>

      <nav class="nav-menu">
        <a href="profile.php"  class="nav-item"><i class="fas fa-home"></i> <span>Dashboard</span></a>
        <a href="orders.html" class="nav-item"><i class="fas fa-shopping-bag"></i> <span>Orders</span></a>
        <a href="profile.php" class="nav-item active"><i class="fas fa-user"></i> <span>Profile</span></a> 
        <a href="Help.php" class="nav-item"><i class="fas fa-question-circle"></i> <span>Help</span></a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <div class="header">
        <h1 class="page-title">Your Profile</h1>
        <div class="user-menu">
          <div class="brand-logo"><i class="fas fa-user"></i></div>
        </div>
      </div>
      <style>
        .page-title{
            color: white;
        }
      </style>

      <div class="card" style="max-width: 600px;">
        <h2>Account Information</h2>
        <br>
        <p><strong>Username:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
        <br>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email']); ?></p>
        <br>
        <p><strong>Age:</strong> <?php echo htmlspecialchars($_SESSION['age']); ?></p>
        <br>
        <p><strong>Account Created:</strong> <?php echo date('F j, Y');
