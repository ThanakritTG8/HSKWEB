<?php
session_start();

include('../database/database.php');

if (isset($_POST['skip'])) {

    if ($_SESSION['topic_num']<$_POST['skip']) {  /// เมื่อหมดเวลาทำข้อสอบ จะให้ข้าม part และ รีเซตเวลาเป็น 20 นาที 
    $_SESSION['topic_num'] =  $_POST['skip'];
    unset($_SESSION['timeend']);
  
    header('location: ./Pretest.php');
    }else {
        $_SESSION['All_score'] = $_SESSION['score'] ;
        $score =  $_SESSION['All_score'] ; 
        $SID =$_SESSION['SID'];
        $sql = "INSERT INTO hsk_exam_score  VALUES( $SID ,$score,  '','','','','','','')";
        $results =   mysqli_query($conn , $sql);
     
    header('location: ./Show_score.php');
    }

}
else {

$_SESSION['score'] = $_SESSION['score'] + $_POST['select_ans'];
$_SESSION['topic_num'] = $_SESSION['topic_num']+1;

if ($_SESSION['topic_num']==3) {
    unset($_SESSION['timeend']);   //เมื่อทำข้อสอบมาถึงข้อ.. ให้รีเซตค่าเวลา เป็น 20 นาที 
}

header('location: ./Pretest.php');

if ($_SESSION['topic_num'] >4) {
    $_SESSION['All_score'] = $_SESSION['score'] ;
$score =  $_SESSION['All_score'] ; 
$SID =$_SESSION['SID'];
    $sql = "INSERT INTO hsk_exam_score  VALUES( $SID ,$score,  '','','','','','','')";
    $results =   mysqli_query($conn , $sql);

    header('location: ./Show_score.php');

}

}

?>