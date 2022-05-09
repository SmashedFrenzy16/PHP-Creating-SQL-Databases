<?php

$servername = "localhost";
$username = "Martin";
$password = "ILOVESQL";

  
// Creating a new connection
  
$con = new msqli($servername, $username, $password);

if ($con->connect_error) {
  
  die("Error! Unable to connect to database!: " . $con->connect_error);

}


?>
