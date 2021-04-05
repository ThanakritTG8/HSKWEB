<?php
// $servername = "localhost";
// $username = "chinyhot_HSK13";
// $password = "hsk13";
// $db_name = 'chinyhot_HSK';

$servername = "localhost";
$username = "root";
$password = "";
$db_name = 'chinyhot_HSK';


// Create connection
$conn = new mysqli($servername, $username, $password ,$db_name);
mysqli_set_charset($conn , 'utf8');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>