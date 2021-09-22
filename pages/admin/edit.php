<?php
session_start();

include('../../database/database.php');

///////// set ตัวแปลส่วนของหน้า คำศัพท์
if (isset($_GET['set']) && isset($_GET['part']) && isset($_GET['id'])) {

    $id = $_GET['id'];
    $hsk = 'HSK' . $_GET['set'] . '_Vocab';
    $hsk_put = 'HSK' . $_GET['set'] . '_VocabID';

    $type = $_POST['type'];
    $type_word = $_POST['type_word'];
    $vocab_no = $_POST['vocab_no'];
    $ch = $_POST['ch'];
    $pinyin = $_POST['pinyin'];
    $type_ch = $_POST['type_ch'];
    $th = $_POST['th'];

    $set_type = 'type';
    $sql = "UPDATE $hsk SET $set_type='$type',type_word='$type_word',th='$th',vocab_no='$vocab_no',ch='$ch' ,pinyin='$pinyin' ,type_ch='$type_ch' WHERE $hsk_put= $id";

    if (mysqli_query($conn, $sql)) {
    $_SESSION['create'] = "แก้ไข สำเร็จ!";
        header('location:./editVocab.php?set=' . $_GET['set'] . '&&part=' . $_GET['part']);
    } else {
        echo "Error updating record: " . mysqli_error($conn);
        header('Refresh: 3; URL=./editVocab.php?set=' . $_GET['set'] . '&&part=' . $_GET['part']);
    }
}
