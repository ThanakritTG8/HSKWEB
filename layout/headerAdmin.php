<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first!";
    header('location: ../../Login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: ../../Login.php');
}
if (isset($_SESSION['success'])) {
    $message = $_SESSION['success'];
    echo  "<script type='text/javascript'>alert('$message');</script>";

    unset($_SESSION['success']);
}
if (isset($_SESSION['delete'])) {
    $message = $_SESSION['delete'];
    echo  "<script type='text/javascript'>alert('$message');</script>";

    unset($_SESSION['delete']);
}
if (isset($_SESSION['create'])) {
    $message = $_SESSION['create'];
    echo  "<script type='text/javascript'>alert('$message');</script>";

    unset($_SESSION['create']);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">


</head>
<style>
    #body {
        font-family: 'Prompt', sans-serif;
        background-color: #fff0f0;
    }
    .card{
        box-shadow: 0 20px 30px 0 rgba(100, 100, 100);

    }

    nav {
        background: rgb(122, 45, 45);
        color: #fff;
    }
</style>

<body id="body">
    <!-- notification -->

    <!-- navbar -->
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">



        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto ">


                <li class="nav-item active nav-link">
                    <img src="../../img/user.png" alt="" style="width: 25px; ">
                    <?php if (isset($_SESSION['username'])) : ?>
                        <?php echo $_SESSION['username']; ?>
                    <?php endif ?>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="Admin_index.php">หน้าแรก </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="score.php">ดูคะแนน </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="editMenu.php">แก้ไขบทเรียน </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="teacher.php">Account</a>
                </li>


            </ul>
            <form action="Login.html" class="form-inline my-2 my-lg-0">
                <button class="btn btn-success " type="button">
                    <a href="Admin_index.php?logout='1'" style="color:white">LOGOUT
                        <img src="../../img/logout.png" alt="" style="width: 20px; ">
                    </a>
                </button>

            </form>
        </div>
    </nav>