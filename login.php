<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/login.css">
</head>
<body>
<div class="login-container">
        <h2>Login Form</h2>
        <span id="error-message" class="error"></span>
        <form name="loginForm" action="process_login.php" method="post" onsubmit="return validateLoginForm()">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login">
        </form>
    </div>
    <script src="./assets/login.js"></script>
</body>
</html>