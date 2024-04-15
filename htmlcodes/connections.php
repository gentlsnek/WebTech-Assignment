<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "admin";
$dbname = "tigersecurity_db";
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$con){
    
    echo("failed to connect");
}

?>