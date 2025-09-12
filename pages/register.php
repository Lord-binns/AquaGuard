
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
   <div class="register-container">
    <div class="form-container">
        <h2>Create an Account</h2>
        <form action="../process/register_process.php" method="POST" id="registerForm">
            <div class="input-group">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" required placeholder="Enter your first name">
            </div>
            <div class="input-group">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" required placeholder="Enter your last name">
            </div>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required placeholder="Choose a username">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Choose a password">
            </div>
            <div class="input-group">
                <button type="submit">Register</button>
            </div>
        </form>
        <div class="login-link">
            <p>Already have an account? <a href="login.php">Sign in here</a></p>
        </div>
    </div>
</div>


</body>
</html>