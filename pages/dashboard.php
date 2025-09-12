<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
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
    <div class="dashboard-container">
        <header>
            <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            <nav>
                <a href="dashboard.php">Home</a>
                <a href="profile.php">Profile</a>
                <a href="../process/logout.php">Logout</a>
            </nav>
        </header>

        <main>
            <div class="card">
                <h2>System Overview</h2>
                <p>This is your AquaGuard dashboard. Here you can monitor water quality and system data.</p>
            </div>

            <div class="card">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="reports.php">📊 View Reports</a></li>
                    <li><a href="settings.php">⚙️ Settings</a></li>
                    <li><a href="users.php">👥 Manage Users</a></li>
                </ul>
            </div>
        </main>

        <footer>
            <p>&copy; 2025 AquaGuard | Keeping Water Safe 💧</p>
        </footer>
    </div>
</body>
</html>
