<!-- Login & Fetch GitHub Profile Data (index.php)
If the user already logged in with the GitHub account, the profile information (account ID, name, username, email, location, profile picture, and profile link) will display, otherwise, GitHub login button will appear.

If the access token already exists in the SESSION, the following happens:
The user profile data is retrieved from Github using getAuthenticatedUser() function of Github_OAuth_Client class.
Pass profile data in the checkUser() function to insert or update user data in the database.
Store the user account data in the SESSION.
Show Github profile data to the user.
If code parameter exists in the query string of the URL, the following happens:
Verify the state to check whether it matches the stored state.
Get access token using getAccessToken() function of Github_OAuth_Client class.
Store access token in the SESSION.
Otherwise:
Generate an unguessable random string and store it in the SESSION.
Get the OAuth URL using the getAuthorizeURL() function of Github_OAuth_Client class.
Render a Github login button on the web page. -->
<?php 
// Include configuration file 
require_once 'config.php'; 
 
// Include and initialize user class 
require_once 'User_class.php'; 
$user = new User(); 
 
if(isset($accessToken)){ 
    // Get the user profile data from Github 
    $gitUser = $gitClient->getAuthenticatedUser($accessToken); 
     
    if(!empty($gitUser)){ 
        // Getting user profile details 
        $gitUserData = array(); 
        $gitUserData['oauth_uid'] = !empty($gitUser->id)?$gitUser->id:''; 
        $gitUserData['name'] = !empty($gitUser->name)?$gitUser->name:''; 
        $gitUserData['username'] = !empty($gitUser->login)?$gitUser->login:''; 
        $gitUserData['email'] = !empty($gitUser->email)?$gitUser->email:''; 
        $gitUserData['location'] = !empty($gitUser->location)?$gitUser->location:''; 
        $gitUserData['picture'] = !empty($gitUser->avatar_url)?$gitUser->avatar_url:''; 
        $gitUserData['link'] = !empty($gitUser->html_url)?$gitUser->html_url:''; 
         
        // Insert or update user data to the database 
        $gitUserData['oauth_provider'] = 'github'; 
        $userData = $user->checkUser($gitUserData); 
 
        // Storing user data in the session 
        $_SESSION['userData'] = $userData; 
 
        // // Render Github profile data 
        // $output     = '<h2>GitHub Account Details</h2>'; 
        // $output .= '<div class="ac-data">'; 
        // $output .= '<img src="'.$userData['picture'].'">'; 
        // $output .= '<p><b>ID:</b> '.$userData['oauth_uid'].'</p>'; 
        // $output .= '<p><b>Name:</b> '.$userData['name'].'</p>'; 
        // $output .= '<p><b>Login Username:</b> '.$userData['username'].'</p>'; 
        // $output .= '<p><b>Email:</b> '.$userData['email'].'</p>'; 
        // $output .= '<p><b>Location:</b> '.$userData['location'].'</p>'; 
        // $output .= '<p><b>Profile Link:</b> <a href="'.$userData['link'].'" target="_blank">Click to visit GitHub page</a></p>'; 
        // $output .= '<p>Logout from <a href="logout.php">GitHub</a></p>'; 
        // $output .= '</div>'; 
        $_SESSION['ten_dang_nhap'] = $userData['username'];
        echo "<script>alert(\"Đăng nhập thành công\")</script>";
        echo "<script> window.location.replace(\"../../index.php\")</script>";

    }else{ 
        $output = '<h3 style="color:red">Something went wrong, please try again!</h3>'; 
    }  
}elseif(isset($_GET['code'])){ 
    // Verify the state matches the stored state 
    if(!$_GET['state'] || $_SESSION['state'] != $_GET['state']) { 
        header("Location: ".$_SERVER['PHP_SELF']); 
    } 
     
    // Exchange the auth code for a token 
    $accessToken = $gitClient->getAccessToken($_GET['state'], $_GET['code']); 
   
    $_SESSION['access_token'] = $accessToken; 
        echo "<script>alert(".$accessToken.")</script>"; 
   
    header('Location: ./'); 
}else{ 
    // Generate a random hash and store in the session for security 
    $_SESSION['state'] = hash('sha256', microtime(TRUE) . rand() . $_SERVER['REMOTE_ADDR']); 
     
    // Remove access token from the session 
    unset($_SESSION['access_token']); 
   
    // Get the URL to authorize 
    $authUrl = $gitClient->getAuthorizeURL($_SESSION['state']); 
     
    // Render Github login button 
    // $output = '<a href="'.htmlspecialchars($authUrl).'"><img src="images/github-login.jpg"></a>';
    $output = htmlspecialchars($authUrl);
    header('location:'.$output.'');
} 
?>