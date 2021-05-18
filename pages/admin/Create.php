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
    $hsk = 'HSK' . $_GET['set'] . '_Vocab';
    $type = $_POST['type'];
    $type_word = $_POST['type_word'];
    $vocab_no = $_POST['vocab_no'];
    $ch = $_POST['ch'];
    $pinyin = $_POST['pinyin'];
    $type_ch = $_POST['type_ch'];
    $th = $_POST['th'];
    $sound = $_POST['sound'];
}

///////// set ตัวแปลส่วนของหน้า บทเรียน
elseif (isset($_GET['less'])) {
    $hsk = 'HSK' . $_GET['set'] . '_lesson';
    $part = $_GET['part'];
    $set = $_GET['set'];
    $less_name = $_POST['less_name'];
    $sound = $_FILES['sound']['name'];
    $tmp_name_sound =  $_FILES['sound']['tmp_name'];
    $pic = $_FILES['pic']['name'];
    $tmp_name_pic =  $_FILES['pic']['tmp_name'];
    ////// โฟลเดอ img ที่จะ upload
    $locate_img = '../../img/บทเรียนHSK' . $set . '_ชุดที่' . $part . '/';
    move_uploaded_file($tmp_name_pic, $locate_img . $pic);
} else {
    ///////// set ตัวแปลส่วนของหน้า techer
    $name_Sh =  $_POST['nameSchool'];
    $name =  $_POST['name'];
    $Lname =  $_POST['Lname'];
    $user =  $_POST['username'];
    $passw =  $_POST['password'];
    $sh =  $_POST['sh'];
}

if (isset($_GET['vocab'])) {
    $part = $_GET['part'];
    $set = $_GET['set'];
    $sql = "INSERT INTO  $hsk VALUES(NULL,'$type','$type_word',' $vocab_no',' $ch','$pinyin','$type_ch','$th','$sound',' $part')";
    $results =   mysqli_query($conn, $sql);
    $_SESSION['create'] = "เพิ่มคำศัพท์ สำเร็จ!";
    header('location:./editVocab.php?set=' . $set . '&&part=' . $part);
} elseif (isset($_GET['less'])) {

    $part = $_GET['part'];
    $set = $_GET['set'];
    echo  'hsk ' . $hsk . 'pic' . $pic . 'sound' . $sound . 'part' . $part . 'less_name' . $less_name;
    $sql = "INSERT INTO  $hsk VALUES(NULL,'$pic','$sound','$part',' $less_name')";
    $results =   mysqli_query($conn, $sql);
    $_SESSION['create'] = "เพิ่มบทเรียนสำเร็จ!";
    header('location:./editLess.php?set=' . $set . '&&part=' . $part);
} elseif ($name_Sh) {
    $user_check_query = "SELECT * FROM School WHERE SchoolName = '$name_Sh' ";
    $query_ch = mysqli_query($conn, $user_check_query);
    $result_ch = mysqli_fetch_assoc($query_ch);
    if ($result_ch) {
        $_SESSION['create'] = "มีชื่อโรงเรียน " . $user . " ในฐานระบบแล้ว!";
    } else {

        $sql = "INSERT INTO School  VALUES(NULL,'$name_Sh')";
        $results =   mysqli_query($conn, $sql);
        $_SESSION['create'] = "เพิ่ม school account สำเร็จ!";

        header('location:./teacher.php');
    }
} else {
    $user_check_query = "SELECT * FROM Teacher WHERE TUsername = '$user' ";
    $query_ch = mysqli_query($conn, $user_check_query);
    $result_ch = mysqli_fetch_assoc($query_ch);

    if ($result_ch) {
        $_SESSION['create'] = "มีผู้ใช้งาน user : " . $user . " แล้ว!";
    } else {

        $sql = "INSERT INTO Teacher  VALUES(NULL,'$name','$Lname','$passw','$sh','$user')";
        $results =   mysqli_query($conn, $sql);
        $_SESSION['create'] = "เพิ่ม account สำเร็จ!";

        header('location:./teacher.php');
    }
}
