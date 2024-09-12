// JavaScript function to validate the register form
function validateRegisterForm() {
  var username = document.forms["registerForm"]["username"].value;
  var email = document.forms["registerForm"]["email"].value;
  var password = document.forms["registerForm"]["password"].value;
  var error = "";

  // Check if username, email, and password fields are empty
  if (username == "") {
    error += "Username is required!<br>";
  }
  if (email == "") {
    error += "Email is required!<br>";
  }
  if (password == "") {
    error += "Password is required!<br>";
  }

  // If there are any errors, display them and prevent form submission
  if (error != "") {
    document.getElementById("error-message").innerHTML = error;
    return false;
  }
  return true; // Allow form submission if no errors
}
