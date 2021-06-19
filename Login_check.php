<?php
session_start();
include('./database/database.php');
unset($_SESSION['time']);
unset($_SESSION['err']);
if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $admin = "Admin";
    // check username password
    $query = "SELECT * FROM Student WHERE SUsername = '$username' AND Spassword = '$password' ";
    $result = mysqli_query($conn, $query);

    $query_t = "SELECT * FROM Teacher WHERE TUsername = '$username' AND TPassword = '$password'";
    $result_t = mysqli_query($conn, $query_t);

    $query_a = "SELECT * FROM $admin WHERE AUsername = '$username' AND Apassword = '$password' ";
    $result_a = mysqli_query($conn, $query_a);



    // send Session first and lastname
    $check = "SELECT * FROM Student WHERE SUsername = '$username' AND Spassword = '$password' ";
    $query_s = mysqli_query($conn, $check);
    $result_send = mysqli_fetch_assoc($query_s);

    $check_t = "SELECT * FROM Teacher WHERE TUsername = '$username' AND TPassword = '$password'";
    $query_tt = mysqli_query($conn, $check_t);
    $result_send_t = mysqli_fetch_assoc($query_tt);


    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $result_send['Sname'] . ' ' . $result_send['SLname'];
            $SID = "SID";
        $sid = $result_send[$SID];
        $check_score = "SELECT * FROM HSK_Exam_Score WHERE $SID ='$sid'";
        $result_score = mysqli_query($conn, $check_score);


        if (mysqli_num_rows($result_score) < 1) {
            header('location:./hsk1/Pretest.php');
            $_SESSION['SID'] = $sid;
            $_SESSION['topic_num'] = '1';
            unset($_SESSION['timeend']);
        } else {
            header('location:./pages/student/index.php');
            $_SESSION['SID'] = $sid;
        }
    } else if (mysqli_num_rows($result_t) == 1) {
        $_SESSION['username'] = $result_send_t['Tname'] . ' ' . $result_send_t['TLname'];
        $_SESSION['TID'] =  $result_send_t['TID'];

        header('location:./pages/teacher/teacher_index.php');
    } else if (mysqli_num_rows($result_a) == 1) {
        $_SESSION['username'] = $username;

        header('location:./pages/admin/Admin_index.php');
    } else {
        $_SESSION['err'] = 'กรุณาตรวจสอบ username และ password';
        header('location:Login.php');
    }
}
