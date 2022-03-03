<?php

<<<<<<< HEAD
if(isset($_POST['submit'])) {
=======
if(isset($_POST['formsubmit'])) {
>>>>>>> 2f19935e28f80bd099ead3f1abfc32fe78c3410c


$username = $_POST['username'];
$password = $_POST['password'];
$remember = $_POST['remember'];
 
<<<<<<< HEAD
if(($username=="") || ($password=="")) {
=======
if(($username="") || ($password="")) {
>>>>>>> 2f19935e28f80bd099ead3f1abfc32fe78c3410c
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
    $insertQuery= "INSERT INTO trafa_users(username,password,remember) values('$username','$encrypt','$remember')";
    $insert = mysqli_query($connection,$insertQuery) or die("Error occured".mysqli_error($connection));
    if($insert) {
        echo "DATA added Successfully";
    }
}
}


?>