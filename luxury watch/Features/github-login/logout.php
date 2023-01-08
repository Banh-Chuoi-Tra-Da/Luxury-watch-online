<!-- Logout (logout.php)
The logout.php file logs the user out from their Github account.

Unset all the SESSION variables (access_token, state, and userData) in PHP.
Redirect the user to the homepage. -->
<?php
// Start session
if(!session_id()){
    session_start();
}

// Remove access token and state from session
unset($_SESSION['access_token']);
unset($_SESSION['state']);

// Remove user data from session
unset($_SESSION['userData']);

// Redirect to the homepage
header("Location:index.php");
?>