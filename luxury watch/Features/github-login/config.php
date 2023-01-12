<!-- Database and API Configuration (config.php)
In the config.php file, database settings and Github OAuth API configuration constant variables are defined.

Database constants:

DB_HOST – Specify the database host.
DB_USERNAME – Specify the database username.
DB_PASSWORD – Specify the database password.
DB_NAME – Specify the database name.
DB_USER_TBL – Specify the table name where the user’s account data will be stored.
GitHub API constants:

CLIENT_ID – Specify the GitHub App Client ID.
CLIENT_SECRET – Specify the GitHub App Client Secret.
REDIRECT_URL – Specify the Authorization callback URL.
Call GitHub API:

The Github OAuth PHP Client library is used to connect with Github API and working with OAuth client.
Initialize Github_OAuth_Client class and pass Client ID, Secret, and Callback URL to connect with Github API and work with SDK. -->
<?php 
// Database configuration 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'luxury_watch_online_final'); 
define('DB_USER_TBL', 'tbl_user_oauth'); 
 
// GitHub API configuration 
define('CLIENT_ID', '2c0c89beb83ce3397199'); 
define('CLIENT_SECRET', '0b5d468e561418a843408c42329ecc936e785801'); 
define('REDIRECT_URL', 'http://localhost/exs/Luxury-watch-online/luxury watch/Features/github-login'); 
 
// Start session 
if(!session_id()){ 
    session_start(); 
} 
 
// Include Github client library 
require_once 'src/Github_OAuth_Client.php'; 
 
// Initialize Github OAuth client class 
$gitClient = new Github_OAuth_Client(array( 
    'client_id' => CLIENT_ID, 
    'client_secret' => CLIENT_SECRET, 
    'redirect_uri' => REDIRECT_URL 
)); 
 
// Try to get the access token 
if(isset($_SESSION['access_token'])){ 
    $accessToken = $_SESSION['access_token']; 
}