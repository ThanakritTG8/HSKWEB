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


if (isset($_GET['vocabId'])) {
    $query = "DELETE FROM $hsk WHERE $HSK_id = '$vocabId' ";
    $result = mysqli_query($conn, $query);
    $_SESSION['delete'] = "ลบคำศัพท์สำเร็จ";
    header('location:./editVocab.php?set=' . $_GET['set'] . '&&part=' . $_GET['part']);
} elseif (isset($_GET['lessId'])) {
    $query = "DELETE FROM $hsk WHERE $HSK_id = '$lessId' ";
    $result = mysqli_query($conn, $query);
    $_SESSION['delete'] = "ลบบทเรียนสำเร็จ";
    header('location:./editLess.php?set=' . $_GET['set'] . '&&part=' . $_GET['part']);
} elseif ($tid) {
    $query = "DELETE FROM Teacher WHERE TID = '$tid' ";
    $result = mysqli_query($conn, $query);
    $_SESSION['delete'] = "ลบข้อมูลสำเร็จ";
    header('location:./teacher.php');
} elseif ($sh_id) {
    $query = "DELETE FROM School WHERE SchoolID = '$sh_id' ";
    $result = mysqli_query($conn, $query);
    $_SESSION['delete'] = "ลบข้อมูลสำเร็จ";
    header('location:./teacher.php');
}
