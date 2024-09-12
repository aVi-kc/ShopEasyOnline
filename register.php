<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="./assets/register.css">
</head>
<body>
<div class="register-container">
        <h2>Register Form</h2>
        <span id="error-message" class="error"></span>
        <!-- Form submission triggers the validateRegisterForm function -->
        <form name="registerForm" action="process_register.php" method="post" onsubmit="return validateRegisterForm()">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Register">
        </form>
    </div>
    <script src="./assets/register.js"></script>
</body>
</html>