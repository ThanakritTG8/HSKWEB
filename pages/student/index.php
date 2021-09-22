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
    <title>Home Page</title>

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



    @media (min-width: 576px) {
        .jumbotron {
            padding: 2rem 1rem !important;
            margin-bottom: 0px;
        }
    }

    .jumbotron {
        margin-bottom: 0px;
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
                หน้าแรก
            </h1>
        </div>
    </header>

    <!-- content -->

    <div class="container">
        <div class="row">
            <div class="col-sm-4" onclick="btn_profile()">
                <div class=" text-center" id="btn_menu">
                    <div class="card-body underlineHover">
                        <img src="../../img/personal-information.png" alt="" style="width: 50px; margin-bottom: 20px;">
                        <h4 class="card-title">ข้อมูล</h4>
                    </div>
                </div>
            </div>
            <script>
                function btn_profile() {
                    window.location.href ="profile.php"

                };
            </script>
            <div class="col-sm-4">
                <div class=" text-center" id="btn_menu" id="btn_menu" onclick="gramma()">
                    <div class="card-body underlineHover">
                        <img src="../../img/china.png" alt="" style="width: 50px; margin-bottom: 20px;">
                        <h4 class="card-title">ไวยากรณ์</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class=" text-center" id="btn_menu" onclick="pinyin()">
                    <div class="card-body underlineHover">
                        <img src="../../img/yueqin.png" alt="" style="width: 50px; margin-bottom: 20px;">
                        <h4 class="card-title">พินอิน</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4" onclick="btn_hsk1()">
                <div class=" text-center" id="btn_menu">
                    <div class="card-body underlineHover">
                        <img src="../../img/open-book.png" alt="" style="width: 50px; margin-bottom: 20px;">
                        <h4 class="card-title">HSK1</h4>
                    </div>
                </div>
            </div>
            <script>
                function gramma() {
                    window.location.href ="gramma.php"

                };

                function pinyin() {
                    window.location.href ="pinyin.php"

                };

                function btn_hsk1() {
                    window.location.href ="HSK.php?hsk_1"

                };

                function btn_hsk2() {
                    window.location.href ="HSK.php?hsk_2"
                };
            </script>


            <!-- ถ้าคะแนน hsk1 post-test ยังไม่ผ่าน จะไม่ปรากฏ hsk2  -->
            <?php
            include('../../database/database.php');
            $sid = "SID";
            $id = $_SESSION['SID'];
            $check = "SELECT* FROM HSK_Exam_Score WHERE $sid  = $id ";
            $query = mysqli_query($conn, $check);
            $result = mysqli_fetch_assoc($query);

            if ($result['HSK1_Pretest'] >= 24 || $result['HSK1_Posttest'] >= 36 || $result['HSK1_Posttest_2'] >= 36) {
                echo '<div class="col-sm-4">
                    <div class=" text-center" id="btn_menu"  onclick="btn_hsk2()">
                        <div class="card-body underlineHover">
                            <img src="../../img/storytelling.png" alt="" style="width: 50px; margin-bottom: 20px;">
                            <h4 class="card-title">HSK2</h4>
                        </div>
                    </div>
                </div> ';
            } else {
                echo '  <div class="col-sm-4">
                    <div class=" text-center" id="Dis_btn_menu">
                        <div class="card-body ">
                            <img src="../../img/lock.png" alt="" style="width: 50px; margin-bottom: 10px;">
                            <h4 class="card-title" style="color:#D3D3D3; margin-bottom: 0px;">HSK2</h4>
                            <span class="description">จำเป็นต้องผ่านแบบทดสอบหลังเรียน HSK1 </span>

                        </div>
                    </div>
                </div>';
            }


            ?>
            <div class="col-sm-2"></div>
        </div>

    </div>

    <!-- //////////////////script -->


    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </div>
</body>

</html>