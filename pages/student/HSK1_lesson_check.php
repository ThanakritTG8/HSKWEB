<?php 
session_start();

unset($_SESSION['less_name']);
$_SESSION['less_name']=$_POST['lesson_name'];

header('location: ./HSK1_lesson.php?lesson='.$_POST['lesson']);



?>
