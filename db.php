<?php
  
$servername = "localhost";
$username = "bsides";
$password = "bsides2022";
$conn = new mysqli($servername,  $username, $password);
  
if ($conn->connect_error) {
    die("Connection failure: " . $conn->connect_error);
} 

$conn -> select_db("bsides");

?>
