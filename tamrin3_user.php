<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alirezasql";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT user_name, first_name, last_name, mail, password FROM users";
$result = $conn->query($sql);


$conn->close();
?> 