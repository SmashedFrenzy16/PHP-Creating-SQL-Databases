<?php

$servername = "localhost";
$username = "Martin";
$password = "ILOVESQL";


try {
  
  $con = new PDO("mysql:host=$servername", $username, $password);
  $con->setAttribute(PDO::ATTER_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE firstPDODatabase";
  $con->exec($sql);
  
  echo "Database created successfully!<br>";

} catch(PDOException $e) {
  
  echo $sql . "<br>" . $e->getMessage();

}

$con = null;






?>
