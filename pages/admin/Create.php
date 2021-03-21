<?php
session_start();

include('../../database/database.php');
$name_Sh =  $_POST['nameSchool'];
$name =  $_POST['name'];
$Lname =  $_POST['Lname'];
$user =  $_POST['username'];
$passw =  $_POST['password'];
$sh =  $_POST['sh'];




if ($name_Sh) {
    $user_check_query = "SELECT * FROM school WHERE SchoolName = '$name_Sh' ";
    $query_ch = mysqli_query($conn, $user_check_query);
    $result_ch = mysqli_fetch_assoc($query_ch);
    if ($result_ch) {
        $_SESSION['create'] = "มีชื่อโรงเรียน " . $user . " ในฐานระบบแล้ว!";
    } else {

        $sql = "INSERT INTO school  VALUES(NULL,'$name_Sh')";
        $results =   mysqli_query($conn, $sql);
        $_SESSION['create'] = "create school account สำเร็จ!";
    }
} else {
    $user_check_query = "SELECT * FROM teacher WHERE TUsername = '$user' ";
    $query_ch = mysqli_query($conn, $user_check_query);
    $result_ch = mysqli_fetch_assoc($query_ch);

    if ($result_ch) {
        $_SESSION['create'] = "มีผู้ใช้งาน user : " . $user . " แล้ว!";
    } else {

        $sql = "INSERT INTO teacher  VALUES(NULL,'$name','$Lname','$passw','$sh','$user')";
        $results =   mysqli_query($conn, $sql);
        $_SESSION['create'] = "create account สำเร็จ!";
    }
}

header('location:./teacher.php');
