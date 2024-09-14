<link rel="stylesheet" href="./assets/css/login.css">

<div class="mainBody">
<div class="message">
</div>
<div class="container">
        <form class="login-form">
            <h2>Login</h2>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Enter Username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter Password" required>
            </div>
            <button type="submit" class="btn-submit">Login</button>
            <button type="button" class="btn-danger">Cancel</button>
            <div class="remember-me">
               <label>
                    <input type="checkbox"> Remember me
                </label>
                <span class="psw">Forgot <a href="forgetPassword.php">password?</a></span>
            </div>
        </form>
        <span class="psw" text-align="center">New Member? <a href="register.php">Register </a>here.</span>
    </div>
</div>
    <script src="./assets/login.js"></script>
