<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
</head> 
<body>
<div class="dashboard">
    <!-- Hamburger Button -->
    <button class="hamburger" id="hamburgerBtn">☰</button>

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="logo">
            <img src="../Resources/logo.png" alt="Logo">
            <h2>AquaGuard</h2>
        </div>
        <nav>
            <a href="dashboard.php" class="active">🏠 Dashboard</a>
            <a href="reports.php">📊 Reports</a>
            <a href="settings.php">⚙️ Settings</a>
            <a href="users.php">👥 Users</a>
            <a href="../process/logout.php">🚪 Logout</a>
        </nav>
    </aside>

        <!-- Main Content -->
        <main class="main-content">
            <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            <div class="cards">
                <div class="card">
                    <h2>System Overview</h2>
                    <p>Monitor water quality and sensor data here.</p>
                </div>
                <div class="card">
                    <h2>Quick Links</h2>
                    <ul>
                        
                    </ul>
                </div>
            </div>
        </main>
    </div>

<script>
const hamburgerBtn = document.getElementById("hamburgerBtn");
const sidebar = document.getElementById("sidebar");

hamburgerBtn.addEventListener("click", () => {
    sidebar.classList.toggle("active");
});
</script>

        <footer>
            <p>&copy; 2025 AquaGuard | Created by Quadcore IOT Caps-2 💧</p>
        </footer>
    </div>
</body>
</html>
