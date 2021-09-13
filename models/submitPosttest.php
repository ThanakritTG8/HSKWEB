<?php

include('../database/database.php');
session_start();
$hsk = intval($_GET['hsk']);
$score = intval($_GET['score']);
$set = intval($_GET['set']);
$SID =$_SESSION['SID'];

///HSK 1
if ($hsk==1) {
    if ($set==1) {
    $sql = "UPDATE HSK_Exam_Score SET HSK1_Posttest=$score WHERE SID=$SID";  
    $results = mysqli_query($conn , $sql);
    }
    if ($set==2) {
    $sql = "UPDATE HSK_Exam_Score SET HSK1_Posttest_2=$score WHERE SID=$SID";  
    $results = mysqli_query($conn , $sql);
    }
  
    }
///HSK 2
if ($hsk==2) {
        if ($set==1) {
        $sql = "UPDATE HSK_Exam_Score SET HSK2_Posttest=$score WHERE SID=$SID";  
        $results = mysqli_query($conn , $sql);
        }
        if ($set==2) {
        $sql = "UPDATE HSK_Exam_Score SET HSK2_Posttest_2=$score WHERE SID=$SID";  
        $results = mysqli_query($conn , $sql);
        }
 
}
