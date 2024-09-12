// JavaScript function to validate the login form
function validateLoginForm() {
  var username = document.forms["loginForm"]["username"].value;
  var password = document.forms["loginForm"]["password"].value;

  // Check if username and password fields are empty
  if (username == "" || password == "") {
    document.getElementById("error-message").innerHTML =
      "Both fields are required!";
    return false; // Prevent form submission
  }
  return true; // Allow form submission
}
