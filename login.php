<?php


$username = $_POST['username'];
$password = $_POST['password'];
 
if(($username="") || ($pass="")) {
    echo "Please provide your password or username";
}
else {
    $encrypt = hash("SHA512",$password);
    define("HOST","localhost");
    $DB_host = "localhost";
    $DB_user = "root";
    $DB_password = "";
    $DB_name = "trafalgardb";
    $connection = mysqli_connect(HOST,$DB_user,$DB_password,$DB_name);
}


if(!$connection) {
    echo "Connection error";
} else {
    $insertQuery= "INSERT INTO trafa_users(username,password) values('$username','$encrypt')";
    $insert = mysqli_query($connection,$insertQuery) or die("Error occured".mysqli_error($connection));
    if($insert) {
        echo "DATA added Successfully";
    }
}


?>