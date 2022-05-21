<?php
$servername = "localhost";
$usernamedb = "root";
$password = "";
$dbname = "myhotel";

// Create connection
$conn = new mysqli($servername, $usernamedb, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 


?>