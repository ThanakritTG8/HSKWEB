<?php
include('../database/database.php');
session_start();
$hsk = intval($_GET['hsk']);
$score = intval($_GET['score']);
$set = intval($_GET['set']);
$SID = $_SESSION['SID'];


$hsk_session = 'hsk' . $hsk . '_session_' . $set;
$nameTable = 'HSK'.$hsk.'_Exercise_Score';
$sql = "UPDATE $nameTable SET $hsk_session=$score WHERE SID=$SID";
$results = mysqli_query($conn, $sql);
