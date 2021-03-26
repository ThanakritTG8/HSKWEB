<?php
session_start();

include('../../database/database.php');

$name = '';
$Lname = '';
$passw = '';
$sh = '';
$type = '';
$type_word = '';
$vocab_no = '';
$ch = '';
$pinyin = '';
$type_ch = '';
$th = '';
$sound = '';


if (isset($_GET['vocab'])) {
    $ch = $_POST['ch'];
    $hsk = 'Hsk' . $_GET['set'] . '_vocab';
    if (isset($_POST['type'])) {
        $type = $_POST['type'];
        echo $type ; 
    } else {
        $type = '';
    }
    if (isset($_POST['type_word'])) {
        $type_word = $_POST['type_word'];
        echo $type_word ; 
    } else {
        $type_word = '';
    }
    if (isset($_POST['vocab_no'])) {
        $vocab_no = $_POST['vocab_no'];
    } else {
        $vocab_no = '';
    }
    if (isset($_POST['ch'])) {
        $ch = $_POST['ch'];
    } else {
        $ch = '';
    }
    if (isset($_POST['pinyin'])) {
        $pinyin = $_POST['pinyin'];
    } else {
        $pinyin = '';
    }
    if (isset($_POST['type_ch'])) {
        $type_ch = $_POST['type_ch'];
    } else {
        $type_ch = '';
    }
    if (isset($_POST['th'])) {
        $th = $_POST['th'];
        echo 'test    :'.$th;
    } else {
        $th = '';
    }
    if (isset($_POST['sound'])) {
        $sound = $_POST['sound'];
    } else {
        $sound = '';
    }
    $name_Sh = '';
    $user = '';
} else {
    $name_Sh =  $_POST['nameSchool'];
    $name =  $_POST['name'];
    $Lname =  $_POST['Lname'];
    $user =  $_POST['username'];
    $passw =  $_POST['password'];
    $sh =  $_POST['sh'];
}

if (isset($_GET['set'])) {
    $part = $_GET['part'];
    $set = $_GET['set'];
    $sql = "INSERT INTO  hsk1_vocab VALUES(NULL,'$type','$type_word',' $vocab_no',' $ch','$pinyin','$type_ch','$th','$sound','$set')";
    $results =   mysqli_query($conn, $sql);
    $_SESSION['create'] = "create account สำเร็จ!";
    // header('location:./editVocab.php?set=' . $set . '&&part=' . $part);
} elseif ($name_Sh) {
    $user_check_query = "SELECT * FROM school WHERE SchoolName = '$name_Sh' ";
    $query_ch = mysqli_query($conn, $user_check_query);
    $result_ch = mysqli_fetch_assoc($query_ch);
    if ($result_ch) {
        $_SESSION['create'] = "มีชื่อโรงเรียน " . $user . " ในฐานระบบแล้ว!";
    } else {

        $sql = "INSERT INTO school  VALUES(NULL,'$name_Sh')";
        $results =   mysqli_query($conn, $sql);
        $_SESSION['create'] = "create school account สำเร็จ!";

        header('location:./teacher.php');
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

        header('location:./teacher.php');
    }
}
