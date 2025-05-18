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
  <title>Help & Terms - DeptCart</title>
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
        <a href="profile.php" class="nav-item"><i class="fas fa-home"></i> <span>Dashboard</span></a>
        <a href="orders.html" class="nav-item"><i class="fas fa-shopping-bag"></i> <span>Orders</span></a>
        <a href="prof2.php" class="nav-item"><i class="fas fa-user"></i> <span>Profile</span></a>
        <a href="Help.php" class="nav-item active"><i class="fas fa-question-circle"></i> <span>Help</span></a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <div class="header">
        <h1 class="page-title">
            Help & Terms</h1>
      </div>
<style>
    .page-title{
        color: white;
    }
</style>
      <div class="card">
       
        <h2>Terms and Conditions</h2>
        <ul style="line-height: 1.8; color: #444;">
          <li>All orders are subject to acceptance and availability.</li><br>
          <li>Prices are listed in local currency and may include applicable taxes.</li><br>
          <li>Payments must be made using accepted methods (Visa, MasterCard, etc.).</li><br>
          <li>Products may be returned within 7 days in original condition, subject to approval.</li><br>
          <li>We reserve the right to update terms without prior notice.</li><br>
        </ul>
        <br>
        <h2>Need Help?</h2><br>
        <p>If you have any questions or issues, please contact our support team:</p><br>
        <ul>
          <li>Email: <a href="mailto:support@deptcart.com">support@deptcart.com</a></li><br>
          <li>Phone: +20 1127775874</li><br>
          <li>Working Hours: 9 AM – 5 PM (Mon – Fri)</li><br>
        </ul>
      </div>
    </main>
  </div>
</body>
</html>
