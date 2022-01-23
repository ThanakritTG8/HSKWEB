<?php
session_start();
unset($_SESSION['HSK1']);
if (!isset($_SESSION['username'])) {

    header('location: ../../Login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: ../../Login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character</title>

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
    * {
        font-family: 'Prompt', sans-serif;
    }
 

    .container {
        margin-bottom: 30px;
    }

    .text-header {
        margin-top: 40px;
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
        background-color: #7a2d2d;
        max-height: 170px;
        border-radius: 20px;
        font-weight: 20px;
        box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.596);
        margin-top: 30px;
    }

    h6 {
        color: white;
    }

    a{
        text-decoration: unset !important;
    }

    #Dis_btn_menu {
        background-color: gray;
        max-height: 170px;
        border-radius: 20px;
        font-weight: 20px;
        box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.596);
        margin-top: 30px;
    }


    .description {
        color: #d5d3d3;
        font-size: 14px;
    }

    #btn_menu:hover {
        background-color: #36b163;
        cursor: pointer;
    }



    #nav-body a {
        color: black;
    }
</style>

<body id="body">

    <!-- <include header> -->
    <?php include('../../layout/header.php'); ?>

    <!-- header -->
    <header class="masthead">
        <div class="jumbotron jumbotron-fluid" id="header">
            <h1 class="text-center">
                อักษรจีน
            </h1>
            <h1 class="text-center">
                【汉字 Hànzì 】
            </h1>
        </div>
    </header>

    <!-- content -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <a href="../../document/เส้นขีดพื้นฐานอักษรจีน.pdf" download>
                    <div class=" text-center" id="btn_menu">
                        <div class="card-body underlineHover">
                            <img src="../../img/cloud-computing.png" alt="" style="width: 50px; margin-bottom: 20px;">
                            <h6 class="card-title"> เส้นขีดพื้นฐานอักษรจีน</h6>
                            <h6 class="card-title">【汉字基本笔画 Hànzì jīběn bǐhuà】</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6">
                <a href="../../document/ลำดับขีดการเขียนอักษรจีน.pdf" download>
                    <div class=" text-center" id="btn_menu" id="btn_menu">
                        <div class="card-body underlineHover">
                            <img src="../../img/cloud-computing.png" alt="" style="width: 50px; margin-bottom: 20px;">
                            <h6 class="card-title"> ลำดับขีดการเขียนอักษรจีน</h6>
                            <h6 class="card-title">【汉字笔顺 Hànzì bǐshùn】</h6>

                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a href="../../document/ลำดับขีดการเขียนอักษรจีน【汉字笔顺 Hànzì bǐshùn】HSK 1.pdf" download>
                    <div class=" text-center" id="btn_menu">
                        <div class="card-body underlineHover">
                            <img src="../../img/cloud-computing.png" alt="" style="width: 50px; margin-bottom: 20px;">

                            <h6 class="card-title"> ลำดับขีดการเขียนอักษรจีน</h6>
                            <h6 class="card-title">【汉字笔顺 Hànzì bǐshùn】HSK 1</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="../../document/แบบฝึกคัดอักษรจีน【汉字练习 Hànzì liànxí】HSK 1.pdf" download>
                    <div class=" text-center" id="btn_menu">
                        <div class="card-body underlineHover">
                            <img src="../../img/cloud-computing.png" alt="" style="width: 50px; margin-bottom: 20px;">

                            <h6 class="card-title">แบบฝึกคัดอักษรจีน</h6>
                            <h6 class="card-title">【汉字练习 Hànzì liànxí】HSK 1</h6>
                        </div>
                    </div>
                </a>

            </div>

        </div>
        <div class="row">
            <div class="col-sm-6">
                <a href="../../document/ลำดับขีดการเขียนอักษรจีน【汉字笔顺 Hànzì bǐshùn】HSK 2.pdf" download>
                    <div class=" text-center" id="btn_menu" id="btn_menu">
                        <div class="card-body underlineHover">
                            <img src="../../img/cloud-computing.png" alt="" style="width: 50px; margin-bottom: 20px;">

                            <h6 class="card-title">ลำดับขีดการเขียนอักษรจีน</h6>
                            <h6 class="card-title">【汉字笔顺 Hànzì bǐshùn】HSK 2</h6>

                        </div>
                    </div>
                </a>

            </div>
            <div class="col-sm-6">
                <a href="../../document/แบบฝึกคัดอักษรจีน【汉字练习 Hànzì liànxí】HSK 2.pdf" download>
                    <div class=" text-center" id="btn_menu">
                        <div class="card-body underlineHover">
                            <img src="../../img/cloud-computing.png" alt="" style="width: 50px; margin-bottom: 20px;">

                            <h6 class="card-title"> แบบฝึกคัดอักษรจีน</h6>
                            <h6 class="card-title">【汉字练习 Hànzì liànxí】HSK 2</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- //////////////////script -->


    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </div>
</body>

</html>