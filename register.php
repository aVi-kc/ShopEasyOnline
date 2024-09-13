<link rel="stylesheet" href="./assets/register.css">
<body>
    <div class="container">
        <form id="registrationForm">
            <h2>Register</h2>
            <p>Please fill in this form to create an account.</p>
    <hr>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="postal">Postal Code:</label>
                <input type="text" id="postal" name="postal" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="repassword">Re-enter Password:</label>
                <input type="password" id="repassword" name="repassword" required>
            </div>

            <div class="form-group">
            <button type="submit" class="btn-submit">Register</button>
            </div>
        </form>
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
    </div>
</body>