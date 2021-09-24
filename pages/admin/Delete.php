<?php
session_start();
include('../../database/database.php');
$tid =  '';
$sh_id = '';
$hsk = '';
$vocabId = '';
///////// set ตัวแปลส่วนของหน้า คำศัพท์
if (isset($_GET['vocabId'])) {
    $hsk = 'HSK' . $_GET['set'] . '_Vocab';
    $vocabId = $_GET['vocabId'];
    $HSK_id = 'HSK' . $_GET['set'] . '_VocabID';
}
///////// set ตัวแปลส่วนของหน้า บทเรียน 
elseif (isset($_GET['lessId'])) {
    $hsk = 'HSK' . $_GET['set'] . '_lesson';
    $lessId = $_GET['lessId'];
    $HSK_id = 'HSK' . $_GET['set'] . '_LID';
} else {
    ///////// set ตัวแปลส่วนของหน้า techer
    $tid =  $_POST['delete'];
    $sh_id = $_POST['sh_delete'];
}

///////// set ตัวแปลส่วนของหน้า คำศัพท์
if (isset($_GET['vocabId'])) {
    $query = "DELETE FROM $hsk WHERE $HSK_id = '$vocabId' ";
    $result = mysqli_query($conn, $query);
    $_SESSION['delete'] = "ลบคำศัพท์สำเร็จ";
    header('location:./editVocab.php?set=' . $_GET['set'] . '&&part=' . $_GET['part']);
}
///////// set ตัวแปลส่วนของหน้า บทเรียน 
elseif (isset($_GET['lessId'])) {
    $name_img = $_GET['name_img'];
    $name_sound = $_GET['name_sound'];

    $locate_img = '../../img/บทเรียนHSK' . $_GET['set'] . '_ชุดที่' . $_GET['part'] . '/';
    $locate_sound = '../../sound/HSK' . $_GET['set'] . '_' . $_GET['part'] . '/';

    $file_img = $locate_img . $name_img;
    $file_sound = $locate_sound . $name_sound;

    if (unlink($file_img) && unlink($file_sound)) {
        $query = "DELETE FROM $hsk WHERE $HSK_id = '$lessId' ";
        if (mysqli_query($conn, $query)) {
            $_SESSION['delete'] = "ลบบทเรียนสำเร็จ";
        } else {
            $_SESSION['delete'] = "ลบบทเรียนไม่สำเร็จ !";
            echo "Error updating record: " . mysqli_error($conn);

        }
        header('location:./editLess.php?set=' . $_GET['set'] . '&&part=' . $_GET['part']);
    } else {
        $_SESSION['delete'] = "ลบบทเรียนไม่สำเร็จ !";
        header('location:./editLess.php?set=' . $_GET['set'] . '&&part=' . $_GET['part']);
    }
}
///////// set ตัวแปลส่วนของหน้า techer
elseif ($tid) {
    $query = "DELETE FROM Teacher WHERE TID = '$tid' ";
    $result = mysqli_query($conn, $query);
    $_SESSION['delete'] = "ลบข้อมูลสำเร็จ";
    header('location:./teacher.php');
}
///////// set ตัวแปลส่วนของหน้าโรงเรียน
elseif ($sh_id) {
    $query = "DELETE FROM School WHERE SchoolID = '$sh_id' ";
    $result = mysqli_query($conn, $query);
    $_SESSION['delete'] = "ลบข้อมูลสำเร็จ";
    header('location:./teacher.php');
}
