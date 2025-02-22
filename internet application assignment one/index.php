<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Web App</title>
    <link rel="stylesheets" href="style.css">
</head>
<body>
    <div id="container">
        <h1>Welcome</h1>

        <div id="auth-forms">
            <div id="login-form">
                <h2>Login</h2>
                <form id="loginForm" action="login.php" method="post">
                    <input type="text" name="username" placeholder="Username" required><br>
                    <input type="password" name="password" placeholder="Password" required><br>
                    <button type="submit">Login</button>
                </form>
                <a href="#" oclick="showRegistrationForm()">Register</a>
            </div>

            <div id="registration-form" style="display:none;">
                <h2>Register</h2>
                <form id="regForm" action="register.php" method="post" submit="return validateRegistration()">
                    <input type="text" name="username" placeholder="Username" required><br>
                    <input type="password" name="password" placeholder="Password" required><br>
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
                    <button type="submit">Register</button>
                </form>
                <a href="#" oclick="showLoginForm()">Login</a>
            </div>
        </div>

        <div id="form-submission" style="display:none;"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>