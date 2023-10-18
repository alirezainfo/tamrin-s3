<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alirezasql";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT message_sender, message_content, message_id, recepient FROM messages";
$result = $conn->query($sql);


$conn->close();
?> 