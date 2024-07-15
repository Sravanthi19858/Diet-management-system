<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Online Diet Management System</h1>
            <h2>Welcome to Your Health Journey</h2>
            <p>Log in or sign up to start managing your diet and achieving your fitness goals.</p>
        </div>
    </header>
    <div class="signup-container">
        <div class="signup-box">
            <h2>Sign Up</h2>
            <form action="signupreg.php" method="post" class = "formm">
                <input type="text" class = "formm" placeholder="Full Name" name="name" required><br>
                <input type="email" class = "formm" placeholder="Email" name="email" required><br>
                <input type="text" class = "formm" placeholder="Username" name="username" required><br>
                <input type="password" class = "formm" placeholder="Password" name="password" required><br>
                <button type="submit" class = "formm" class="btn">Sign Up</button>
            </form>
            <p>Already have an account? <a href="login.php">Log in</a></p>
        </div>
    </div>
</body>
</html>
