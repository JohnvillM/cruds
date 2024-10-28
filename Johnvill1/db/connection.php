<?php
//establish connection to the database

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "Johnvilldb";


//combine all variables to connect the database

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


?>