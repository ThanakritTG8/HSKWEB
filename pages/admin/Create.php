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

///////// set ตัวแปลส่วนของหน้า คำศัพท์
if (isset($_GET['vocab'])) {
    $ch = $_POST['ch'];
    $hsk = 'Hsk' . $_GET['set'] . '_vocab';
    $type = $_POST['type'];
    $type_word = $_POST['type_word'];
    $vocab_no = $_POST['vocab_no'];
    $ch = $_POST['ch'];
    $pinyin = $_POST['pinyin'];
    $type_ch = $_POST['type_ch'];
    $th = $_POST['th'];
    $sound = $_POST['sound'];
    $HSK_id = 'HSK'. $_GET['set'] .'_VocabID';
} else {
    ///////// set ตัวแปลส่วนของหน้า techer
    $name_Sh =  $_POST['nameSchool'];
    $name =  $_POST['name'];
    $Lname =  $_POST['Lname'];
    $user =  $_POST['username'];
    $passw =  $_POST['password'];
    $sh =  $_POST['sh'];
}

if (isset($_GET['set'])) {
    echo $_GET['set'] ;
    $part = $_GET['part'];
    $set = $_GET['set'];
    $sql = "INSERT INTO  $hsk VALUES(NULL,'$type','$type_word',' $vocab_no',' $ch','$pinyin','$type_ch','$th','$sound',' $part')";
    $results =   mysqli_query($conn, $sql);
    $_SESSION['create'] = "create account สำเร็จ!";
    header('location:./editVocab.php?set=' . $set . '&&part=' . $part);
} elseif ($name_Sh) {
    $user_check_query = "SELECT * FROM School WHERE SchoolName = '$name_Sh' ";
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
    $user_check_query = "SELECT * FROM Teacher WHERE TUsername = '$user' ";
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
