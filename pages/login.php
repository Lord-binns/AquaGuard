
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
    <div class="login-container">
        <div class="image-container">
            <img src="../Resources/logo.png" alt="Library Image">
        </div>
        <div class="form-container">
            <h2>Welcome back</h2>
            <form action="../process/login_process.php" method="POST" id="loginForm">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required placeholder="Enter your username">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Enter your password">
                </div>
                <div class="input-group">
                    <button type="submit">Sign In</button>
                </div>
            </form>
            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Create one now</a></p>
            </div>
        </div>
    </div>

</body>
</html>