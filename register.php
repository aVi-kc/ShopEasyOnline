
<?php
include "nav.php";
?>
<link rel="stylesheet" href="./assets/css/register.css">
    <div class="container">
        <form id="registrationForm">
            <h2>Register</h2>
            <p>Please fill in this form to create an account.</p>
    <hr>
             <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" required>
            </div>

            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" required>
            </div>
            
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
    <p>Already have an account?<a href="login.php">Sign in</a>.</p>
    </div>


<?php
include "footer.php";
?>