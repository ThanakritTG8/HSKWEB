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
    $no = 0;
    if (isset($_POST['no'])) {
        $no = $_POST['no'];
    }
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
    $locate_sound = '../../sound/HSK' . $set . '_' . $part . '/';

    //เช็ค type of file 
    $img_type = strrchr($_FILES['pic']['type'], "/");
    $sound_type = strrchr($_FILES['sound']['type'], "/");
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
    /////คำศัพท์
    $part = $_GET['part'];
    $set = $_GET['set'];
    $sql = "INSERT INTO  $hsk VALUES(NULL,'$type','$type_word',' $vocab_no',' $ch','$pinyin','$type_ch','$th','$sound',' $part')";
    $results =   mysqli_query($conn, $sql);
    $_SESSION['create'] = "เพิ่มคำศัพท์ สำเร็จ!";
    header('location:./editVocab.php?set=' . $set . '&&part=' . $part);
} elseif (isset($_GET['less'])) {
    /////บทเรียน
    if ($img_type !== '/png' &&  $img_type !== '/jpeg' && $sound_type !== '/mpeg') {
        $_SESSION['create'] = "กรุณาตรวจประเภทของไฟล์รูปภาพและคลิปเสียง !";
        header('location:./editLess.php?set=' . $set . '&&part=' . $part);
    } else {
        move_uploaded_file($tmp_name_pic, $locate_img . $pic);
        move_uploaded_file($tmp_name_sound, $locate_sound . $sound);
        $sql = "INSERT INTO  $hsk VALUES(NULL,'$pic','$sound','$part',' $less_name',$no)";
        $results =   mysqli_query($conn, $sql);

        $_SESSION['create'] = "เพิ่มบทเรียนสำเร็จ!";
        header('location:./editLess.php?set=' . $set . '&&part=' . $part);
    }
} elseif ($name_Sh) {
    /////แอคเคาท์โรงเรียน
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
    /////แอคเคาท์ครู
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
