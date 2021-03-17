<?php
session_start();
$sh_id =  $_POST['edit'];
echo $sh_update =  $_POST['text-edit'];

include('../../database/database.php');
$query = "UPDATE school SET SchoolName = '$sh_update' WHERE SchoolID = '$sh_id' ";
$result = mysqli_query($conn, $query);
$_SESSION['delete'] = "แก้ไขข้อมูลสำเร็จ";

header('location:./teacher.php');
