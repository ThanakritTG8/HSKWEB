<?php 
session_start();

unset($_SESSION['less_name']);
$_SESSION['less_name']=$_POST['lesson_name'];

header('location: ./HSK_lesson.php?lesson='.$_POST['lesson'].'&&set='.$_GET['set']);



?>
