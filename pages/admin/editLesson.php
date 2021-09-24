<?php
session_start();

include('../../database/database.php');

///////// set ตัวแปลส่วนของหน้า คำศัพท์
if (isset($_GET['set']) && isset($_GET['part']) && isset($_GET['id'])) {

    $id = $_GET['id'];
    $hsk = 'HSK' . $_GET['set'] . '_Lesson';
    $hsk_put = 'HSK' . $_GET['set'] . '_LID';
    $name = $_POST['name'];
    $no = 0;
    $newImg = $_FILES['newImg']['name'];
    $tmp_name_pic =  $_FILES['newImg']['tmp_name'];
    $newSound = $_FILES['newSound']['name'];
    $tmp_name_sound =  $_FILES['newSound']['tmp_name'];
    $img = '';
    $sound = '';
    $no_set = 'no';
    if (isset($_GET['img'])) {
        $img = $_GET['img'];
    }
    if (isset($_GET['sound'])) {
        $sound = $_GET['sound'];
    }
    if (isset($_POST['no'])) {
        $no = $_POST['no'];
    }

    //เช็ค type of file 
    $img_type = strrchr($_FILES['newImg']['type'], "/");
    $sound_type = strrchr($_FILES['newSound']['type'], "/");

    ////// โฟลเดอ
    $locate_img = '../../img/บทเรียนHSK' . $_GET['set'] . '_ชุดที่' . $_GET['part'] . '/';
    $locate_sound = '../../sound/HSK' . $_GET['set'] . '_' . $_GET['part'] . '/';

    $file_img = $locate_img . $img;
    $file_sound = $locate_sound . $sound;
 
    if ($img_type !== '/png' && $img_type !== '/jpeg' &&  $sound_type !== '/mpeg') {
        $_SESSION['create'] = "กรุณาตรวจประเภทของไฟล์รูปภาพและคลิปเสียง !";
        header('location:./editLess.php?set=' . $_GET['set'] . '&&part=' . $_GET['part']);
    } else {
        move_uploaded_file($tmp_name_pic, $locate_img . $newImg);
        move_uploaded_file($tmp_name_sound, $locate_sound . $newSound);
        $sql = "UPDATE $hsk SET pic='$newImg' ,voice='$newSound',lesson_name='$name',$no_set='$no' WHERE $hsk_put= '$id'";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['create'] = "แก้ไข สำเร็จ!";
            unlink($file_img);
            unlink($file_sound);
            header('location:./editLess.php?set=' . $_GET['set'] . '&&part=' . $_GET['part']);
        } else {
            echo "Error updating record: " . mysqli_error($conn);
            // header('Refresh: 3; URL=./editLess.php?set=' . $_GET['set'] . '&&part=' . $_GET['part']);
        }
    }
}
