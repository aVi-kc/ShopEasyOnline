<?php
include "nav.php";
?>
<style>
    /* General styling for the body to ensure everything is properly aligned */
body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  box-sizing: border-box;
}

/* Container for the form */
.container {
  max-width: 600px; /* Center the form and limit its width */
  margin: 100px auto; /* Adds space from the top and centers horizontally */
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Form styling */
form {
  display: flex;
  flex-direction: column; /* Make inputs stack vertically */
}

/* Spacing between form fields */
.form-group {
  margin-bottom: 20px;
}

/* Label and input styles */
label {
  margin-bottom: 8px;
  font-weight: bold;
}

input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  width: 100%; /* Make the input take full width */
}

/* Button styling */
.btn-submit {
  padding: 10px 15px;
  background-color: #28a745;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

.btn-submit:hover {
  background-color: #218838;
}

/* Style for the "Already have an account" part */
p {
  margin-top: 20px;
  text-align: center;
}

</style>

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
                <input type="number" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="postal">Postal Code:</label>
                <input type="number" id="postal" name="postal" required>
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
    <script src="./assets/register.js"></script>


<?php
include "footer.php";
?>
