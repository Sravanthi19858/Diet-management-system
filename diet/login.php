<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Online Diet Management System</h1>
            <h2>Welcome to Your Health Journey</h2>
            <p>Log in or sign up to start managing your diet and achieving your fitness goals.</p>
        </div>
    </header>
    
 
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="loginreg.php" method="post" id="login-form">

                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <input type="submit" >

            </form>
            <div class="signup-link">
                Don't have an account? <a href="signup.php">Sign up</a>
            </div>
        </div>
    </div>
    
</body>
</html>

