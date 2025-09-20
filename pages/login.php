<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>AquaGuard | Login</title>
  <link rel="stylesheet" href="../CSS/login.css">

</head>
<body>
<header>
  <h1>
    <img src="../Resources/logo.png" alt="Logo" style="height:40px;border-radius:50%;"> 
    AquaGuard
  </h1>
  <div class="nav-buttons">
    <a href="../index.php" class="nav-btn">⬅ Return</a>
  </div>
</header>

  <div class="login-container">
    <div class="image-container">
      <img src="../Resources/logo.png" alt="Library Image">
    </div>
    <div class="form-container">
      <h2>Welcome Back</h2>
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
