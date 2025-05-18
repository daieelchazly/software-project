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
  <title>DeptCart - User Dashboard</title>
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
        <a href="profile.php" class="nav-item "> <i class="fas fa-home" ></i> <span>Dashboard</span></a>
        <a href="orders.html" onclick="window.location.href='orders.html'" class="nav-item"><i class="fas fa-shopping-bag"></i> <span>Orders</span></a>
        <a href="prof2.php" onclick="window.location.href='prof2.html'" class="nav-item"><i class="fas fa-user"></i> <span>Profile</span></a>
        <a href="Help.php"  onclick="window.location.href='Help.php'" class="nav-item"><i class="fas fa-question-circle"></i> <span>Help</span></a>
      </nav>
    </aside>

</style>
    <!-- Main Content -->
    <main class="main-content">
      <div class="header">
        <h1 class="page-title"  style="color: white;" >Dashboard</h1>
        <div class="user-menu">
         <div class="brand-logo"><i class="fas fa-shopping-cart"></i></div>
        </div>
      </div>

      <div class="dashboard-grid">
        <div class="card welcome-card">
          <div class="welcome-text">
            <h2>Welcome back, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
            <p>Here's what's happening with your DeptCart account today.</p>
          </div>
          <div class="welcome-image">
            <i class="fas fa-shopping-bag" style="font-size: 5rem; opacity: 0.2;"></i>
          </div>
        </div>

        <div class="card stats-card">
          <div class="stat-item">
            <div class="stat-label"><i class="fas fa-star">

            </i><span >Terms</span><br></div><br><br>
             <div class="stat-value" style="font-weight: normal;"><br>
      1- All orders are subject to acceptance and availability.
      <br><br>
      2- Prices are listed in [local currency] and may include applicable taxes.
      <br><br>
      3- Payments must be made using our accepted payment methods.
    </div>
          </div>
         
        </div>

        <div class="card quick-actions">
          <div class="card-header">
            <h3 class="card-title">Quick Actions</h3>
          </div>
          <div class="action-buttons">
            <button class="action-btn"><i class="fas fa-plus"></i><span class="action-label">New Order</span></button>
           
          </div>
        </div>
      </div>
    </main>
  </div>

  <script src="profile.js"></script>
</body>
</html>
