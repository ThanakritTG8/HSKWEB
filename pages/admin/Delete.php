<?php
session_start();
$tid =  $_POST['delete'];
$sh_id = $_POST['sh_delete'];



if ($tid) {
    include('../../database/database.php');
    $query = "DELETE FROM teacher WHERE TID = '$tid' ";
    $result = mysqli_query($conn, $query);
    $_SESSION['delete'] = "ลบข้อมูลสำเร็จ";
}

if ($sh_id) {
    include('../../database/database.php');
    $query = "DELETE FROM school WHERE SchoolID = '$sh_id' ";
    $result = mysqli_query($conn, $query);
    $_SESSION['delete'] = "ลบข้อมูลสำเร็จ";
}
header('location:./teacher.php');
