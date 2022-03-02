<?php


$username = $_POST['username'];
$pass = $_POST['password'];
 
if(($username="") || ($pass="")) {
    echo "Please provide your password or username";
}
else {
    $encrypt = hash("SHA512",$pass);
    define("HOST","localhost");
    $DB_host = "localhost";
    $DB_user = "root";
}

?>