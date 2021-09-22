<?php
session_start();
if (isset($_GET['hsk_1'])) {
    $hsk_set = 1;
} elseif (isset($_GET['hsk_2'])) {
    $hsk_set = 2;
}
if (!isset($_SESSION['username'])) {
    header('location: Login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: Login.php');
}

include('../../database/database.php');
$sesion = "session";
$ses = $_GET['part'];
$hsk = 'HSK' .  $hsk_set . '_lesson';
$query = "SELECT * FROM $hsk WHERE $sesion = $ses GROUP BY $sesion";
$result = mysqli_query($conn, $query);
$result_send = mysqli_fetch_assoc($result);
$_SESSION['less_name'] = $result_send['pic'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSK</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="icon" href="../../img/Logo.png">

</head>
<style>
    #body {
        font-family: 'Prompt', sans-serif;
    }

    @media (min-width: 576px) {
        .jumbotron {
            padding: 2rem 1rem !important;
            margin-bottom: 1rem !important;
        }
    }

    .jumbotron {
        margin-bottom: 0px;
    }

    .container {
        margin-bottom: 30px;
    }

    #btn_menu:hover {
        background-color: #36b163;
        cursor: pointer;
    }

    .underlineHover:after {
        display: block;
        left: 50%;
        bottom: -10px;
        width: 0;
        height: 2px;
        background-color: white;
        content: "";
        transition: width 0.3s ease 0s, left 0.3s ease 0s;
    }

    .underlineHover:hover {
        color: white;
    }

    .underlineHover:hover:after {
        width: 100%;
    }

    #btn_menu {
        background-color: #941e1e;
        max-height: 170px;
        border-radius: 20px;
        font-weight: 20px;
        box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.596);
        margin-top: 30px;
    }

    h4 {
        color: white;
    }

    #header {
        background: transparent;
        color: #941e1e;
        max-height: 100px;
    }

    @media screen and (max-width: 500px) {

        h1 {
            font-size: 25pt;
        }
    }

    @media (min-width: 576px) {
        .jumbotron {
            padding: 2rem 1rem !important;
        }
    }
</style>

<body id="body">
    <!-- navbar -->

    <!-- <include header> -->
    <?php include('../../layout/header.php'); ?>



    <!-- header -->
    <header class="masthead">
        <div class="jumbotron jumbotron-fluid" id="header">
            <h1 class="text-center">
                HSK<?= $hsk_set;  ?> ชุดที่ <?= $_GET['part']; ?>
            </h1>

        </div>
    </header>
    <!-- ////////////////// body -->

    <div class="container">

        <!-- menu -->
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <a href="
                    HSK_Vocab.php?vocab=<?= $_GET['part']; ?>&&hsk_<?= $hsk_set; ?>
                    " class="card btn text-center" id="btn_menu">
                    <div class="card-body underlineHover">
                        <img src="../../img/flag-china.png" alt="" style="width: 50px; margin-bottom: 20px;">
                        <h4 class="card-title ">คำศัพท์</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="
                    HSK_lesson.php?lesson=<?= $_GET['part']; ?>&&hsk_<?= $hsk_set; ?>
                    " class="card btn text-center" id="btn_menu">
                    <div class="card-body underlineHover">
                        <img src="../../img/online-lesson.png" alt="" style="width: 50px; margin-bottom: 20px;">
                        <h4 class="card-title ">บทเรียน</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <a href="
                    HSK_mooc.php?mooc=<?= $_GET['part']; ?>&&hsk_<?= $hsk_set; ?>
                    " class="card btn text-center" id="btn_menu">
                    <div class="card-body underlineHover">
                        <img src="../../img/multimedia.png" alt="" style="width: 50px; margin-bottom: 20px;">
                        <h4 class="card-title ">MOOC</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="../exercise/hsk.php?part=<?= $_GET['part']; ?>&&hsk_<?= $hsk_set; ?>" class="card btn text-center" id="btn_menu">
                    <div class="card-body underlineHover">
                        <img src="../../img/test.png" alt="" style="width: 50px; margin-bottom: 20px;">
                        <h4 class="card-title ">แบบทดสอบ</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>



    <!-- //////////////////script -->


    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>