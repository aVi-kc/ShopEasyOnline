<?php
include "nav.php";
?>
<link rel="stylesheet" href="./assets/css/login.css">
<div class="mainBody">
<div class="container">
        <form class="login-form" id="resetPassword">
            <h2>Forget Password</h2>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Enter Username" >
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter Password" >
            </div>
            <div class="input-group">
                <label for="password">Confirm Password</label>
                <input type="password" id="repassword" placeholder="Enter Re-enter Password" >
            </div>
            <button type="submit" class="btn-submit">Submit</button>
                <button class="btn-danger" formaction="login.php">Cancel</button>
        </form>
        
    </div>
</div>
<script src="./assets/script.js"></script>
<?php
include "footer.php";
?>