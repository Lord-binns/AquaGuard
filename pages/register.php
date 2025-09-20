<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
    <!-- Header -->
    <header>
        <h1>🌊 AquaGuard</h1>
        <div class="nav-buttons">
            <a href="../pages/login.php" class="nav-btn"></a>
        </div>
    </header>

    <!-- Container -->
    <div class="login-container">
        <div class="image-container">
            <img src="../Resources/logo.png" alt="Library Image">
        </div>
        <div class="form-container" style="padding:20px; max-height:500px;">
            <h2 style="margin-bottom:15px;">Create an Account</h2>
            <form action="../process/register_process.php" method="POST" id="registerForm">
                
                <!-- First + Last name side by side -->
                <div style="display:flex; gap:15px; margin-bottom:10px;">
                    <div class="input-group" style="flex:1;">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" required placeholder="Enter your first name" style="width:80%;">
                    </div>
                    <div class="input-group" style="flex:1;">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" required placeholder="Enter your last name" style="width:80%;">
                    </div>
                </div>

                <div class="input-group" style="margin-bottom:10px;">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required placeholder="Choose a username" style="width:250px;">
                </div>
                <div class="input-group" style="margin-bottom:15px;">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Choose a password" style="width:250px;">
                </div>
                <div class="input-group">
                    <button type="submit" style="padding:8px 16px;">Register</button>
                </div>
            </form>
            <div class="register-link" style="margin-top:10px;">
                <p>Already have an account? <a href="login.php">Sign in here</a></p>
            </div>
        </div>
    </div>

</body>
</html>
