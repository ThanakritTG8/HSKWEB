<?php
session_start();
include('./database/database.php');

unset($_SESSION['err']);

if (isset($_POST['reg_user'])) {

  $Fname = mysqli_real_escape_string($conn, $_POST['Fname']);
  $Lname = mysqli_real_escape_string($conn, $_POST['Lname']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $sh = mysqli_real_escape_string($conn, $_POST['sh']);

  $user_check_query = "SELECT * FROM Student WHERE SUsername = '$username' OR Semail = '$email'";
  $query = mysqli_query($conn, $user_check_query);
  $result = mysqli_fetch_assoc($query);

  if ($result) {
    if ($result['SUsername'] === $username) {

      $_SESSION['err'] = 'Username มีผู้ใช้งานแล้ว';

      header('location:Regis.php');
    }
    if ($result['Semail'] === $email) {
      $_SESSION['err'] = 'email มีผู้ใช้งานแล้ว';
      header('location:Regis.php');
    }
  }

  if (!$_SESSION['err']) {
    //   $password = md5($password1);
    $sql = "INSERT INTO Student  VALUES(NULL,'$Fname','$Lname','$password','$email','$sh','$username')";
    $results =   mysqli_query($conn, $sql);
    $_SESSION['username'] = $Fname . ' ' . $Lname;

    //หา ID user 
    $check = "SELECT * FROM Student WHERE SUsername = '$username' AND Spassword = '$password' ";
    $query_s = mysqli_query($conn, $check);
    $result_send = mysqli_fetch_assoc($query_s);
    $_SESSION['SID'] = $result_send['SID'];
    $_SESSION['HSK1'] = true;

    header('location:./pages/introTest.php?hsk=1');
  }
}
