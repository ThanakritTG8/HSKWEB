<?php

include('../database/database.php');
session_start();
$hsk = intval($_GET['hsk']);
$score = intval($_GET['score']);
$SID =$_SESSION['SID'];

///HSK 1
if ($hsk==1) {
$sql = "INSERT INTO HSK_Exam_Score  VALUES( $SID ,$score, '','','','','')";
$results =   mysqli_query($conn , $sql);


$sql_hsk1 = "INSERT INTO HSK1_Exercise_Score  VALUES( $SID ,'', '','','')";
$results_hsk1 =   mysqli_query($conn , $sql_hsk1);


$sql_hsk2 = "INSERT INTO HSK2_Exercise_Score  VALUES( $SID ,'', '','','')";
$results_hsk2  =   mysqli_query($conn , $sql_hsk2 );
}
///HSK 2
if ($hsk==2) {
$sql = "UPDATE HSK_Exam_Score SET HSK2_Pretest=$score WHERE SID=$SID";  
$results =   mysqli_query($conn , $sql);
 
}


?>