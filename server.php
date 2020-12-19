<?php

$servername = "ns122.hostinglotus.net";
$username = "chinyhot_HSK13";
$password = "hsk13";
$db_name = 'chinyhot_HSK';

// Create connection
$conn = new mysqli($servername, $username, $password ,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "connect";

?>