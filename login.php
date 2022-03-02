<?php


$username = $_POST['username'];
$password = $_POST['password'];
 
if(($username="") || ($pass="")) {
    echo "Please provide your password or username";
}
else {
    $encrypt = hash("SHA512",$pass);
    define("HOST","localhost");
    $DB_host = "localhost";
    $DB_user = "root";
    $DB_password = "";
    $DB_name = "trafalgardb";
    $connection = mysqli_connect(HOST,$DB_user,$DB_password,$DB_name);
}

?>