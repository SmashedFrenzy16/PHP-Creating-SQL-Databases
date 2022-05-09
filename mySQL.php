<?php

$servername = "localhost";
$username = "Martin";
$password = "ILOVESQL";

  
// Creating a new connection
  
$con = new msqli($servername, $username, $password);

if ($con->connect_error) {
  
  die("Error! Unable to connect to database!: " . $con->connect_error);

}

// Creating database

$sql = "CREATE DATABASE firstDatabase";

if ($con->query($sql) === TRUE) {
  
  echo "Database was successfully created!";

} else {
  
  echo "Error creating your Database!: " . $con->error;

}

$con->close();

?>
