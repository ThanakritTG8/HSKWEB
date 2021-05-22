<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first!";
    header('location: Login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: Login.php');
}

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
</head>
<style>
    #body {
        font-family: 'Prompt', sans-serif;
        background-color: #fff0f0;
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
        background: rgb(75, 75, 75);
        /* height: 100px; */
        color: #fff;

        max-height: 100px;
    }

    .btn-post {
        width: 100%;
        margin: 40px 0px 30px 0px;
    }

    @media screen and (max-width: 500px) {

        h1 {
            font-size: 15pt;
        }
    }

    @media (min-width: 576px) {
        .jumbotron {
            padding: 2rem 1rem !important;
        }
    }
</style>

<body id="body">

    <!-- <include header> -->
    <?php include('../../layout/header.php'); 
    
    if (isset($_GET['hsk_1'])) {
        $hsk_set = 1 ;
    }elseif (isset($_GET['hsk_2'])) {
        $hsk_set = 2 ;
    }
    ?>


    <!-- header -->
    <header class="masthead">
        <div class="jumbotron jumbotron-fluid" id="header">
            <h1 class="text-center">
                HSK <?php echo  $hsk_set; ?> 
            </h1>
            
        </div>
    </header>


    <!-- body -->

    <div class="container">

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <a href='HSK_menu.php?part=1&&hsk_<?=  $hsk_set ?>' class="card btn text-center" id="btn_menu">
                    <div class="card-body underlineHover">
                        <img src="/img/storytelling.png" alt="" style="width: 50px; margin-bottom: 20px;">
                        <h4 class="card-title">HSK ชุดที่ 1</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="HSK_menu.php?part=2&&hsk_<?=  $hsk_set ?>" class="card btn text-center" id="btn_menu">
                    <div class="card-body underlineHover">
                        <img src="/img/open-book.png" alt="" style="width: 50px; margin-bottom: 20px;">
                        <h4 class="card-title">HSK ชุดที่ 2</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <a href="HSK_menu.php?part=3&&hsk_<?=  $hsk_set ?>" class="card btn text-center" id="btn_menu">
                    <div class="card-body underlineHover">
                        <img src="/img/book.png" alt="" style="width: 50px; margin-bottom: 20px;">
                        <h4 class="card-title">HSK ชุดที่ 3 </h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="HSK_menu.php?part=4&&hsk_<?=  $hsk_set ?>" class="card btn text-center" id="btn_menu">
                    <div class="card-body underlineHover">
                        <img src="/img/books.png" alt="" style="width: 50px; margin-bottom: 20px;">
                        <h4 class="card-title">HSK ชุดที่ 4</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <?php

        include('../../database/database.php');
        $sid = "SID";
        $id = $_SESSION['SID'];

        if ( $hsk_set = 1) {
            $check = "SELECT* FROM HSK1_Exercise_Score WHERE $sid  = $id ";
        } elseif ( $hsk_set = 2) {
            $check = "SELECT* FROM HSK2_Exercise_Score WHERE $sid  = $id ";
        }
        $query = mysqli_query($conn, $check);
        $result = mysqli_fetch_assoc($query);
        if ($result['hsk1_session_4']>=20) :
        ?>
        <div class="text-center row">
            <div class="col-1 col-md-3"></div>
            <div class="col-10 col-md-6">
                <button type="button" class="btn btn-success btn-post">แบบทดสอบหลังเรียน
                    <img src="../../img/posttest.png" alt="" style="width: 30px; ">
                </button>
            </div>
        </div>
        <?php else :?>
        <div class="text-center row">
            <div class="col-1 col-md-3"></div>
            <div class="col-10 col-md-6">
                <button type="button" class="btn btn-secondary btn-post" disabled>แบบทดสอบหลังเรียน
                    <img src="../../img/lock.png" alt="" style="width: 30px; ">
                </button>
            </div>
        </div>
        <?php endif?>
    </div>

    <!-- //////////////////script -->

    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>