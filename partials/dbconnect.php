<?php
$server = "localhost";
$username = "root";
$password = "" ;
$database = "users";
$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn){
    die("Can't connect to the right now Please try after some time".mysqli_connect_error());
}
?>