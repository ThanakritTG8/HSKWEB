<?php
session_start();
$tid =  $_POST['delete'];
include('../database/database.php');
$query = "DELETE FROM teacher WHERE TID = '$tid' ";
$result = mysqli_query($conn, $query);
$_SESSION['delete']="ลบข้อมูลสำเร็จ";

header('location:./teacher.php');
