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
<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บทเรียน</title>
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


    .wrapper {
        display: flex;
    }

    #header {
        background: rgb(75, 75, 75);
        /* height: 100px; */
        color: #fff;

        max-height: 100px;
    }

    #card_lesson {
        margin-top: 20px;
        margin-bottom: 10px;
    }

    #list_lesson {
        margin-top: 20px;
        margin-bottom: 20px;
        max-height: 500px;
        overflow-y: scroll;
    }

    #img-lesson {
        max-width: 100%;
        max-height: 400px;
        align-items: center;
    }

    #lesson-btn {
        background: rgb(94, 177, 255);
        max-height: 30px;
    }

    .jumbotron {
        margin-bottom: 0px !important;
    }

    #lesson-btn img {
        max-width: 25px;
    }

    #lesson-btn:hover {
        color: #fff;
    }

    form {
        margin-bottom: -5px;
    }

    .btn-submit:hover {
        border: 1px solid green;
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
    <?php include('../../layout/header.php'); ?>

    <!-- header -->
    <header class="masthead">
        <div class="jumbotron jumbotron-fluid" id="header">
            <h1 class="text-center">
                HSK<?php echo $_GET['set']; ?> บทเรียน ชุดที่<?php echo $_GET['lesson']; ?>
            </h1>
        </div>
    </header>

    <!-- ////////////////// body -->


    <div class="wrapper">
        <div class="container">


            <div class="row">
                <div class="col-sm-8">
                    <div class="text-center" style="margin-top:20px;">
                        <button class="btn" onclick="playAllAudio()" id="lesson-btn">
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </button>
                        <button class="btn" onclick="slowAllAudio()" id="lesson-btn">
                            <img src="../../img/snail.png" alt="" height="20">
                        </button>
                        <button class="btn" onclick="pauseAllAudio()" id="lesson-btn">
                            <i class="fa fa-pause" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="row" id="content_lesson">
                <div class="col-sm-8">
                    <div class="card text-left" id="card_lesson">
                        <div class="card-body text-center">

                            <?php
                            include('../../database/database.php');
                            $less_name = $_SESSION['less_name'];
                            $sesion = "session";
                            $ses = $_GET['lesson'];
                            $set = $_GET['set'];
                            $query = "SELECT * FROM HSK" . $set . "_lesson WHERE $sesion = $ses AND pic = '$less_name'";
                            $result = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<img src="../../img/บทเรียนHSK' . $set . '_ชุดที่' . $ses . '/' . $row['pic'] . '" alt=""  id="img-lesson">';
                            }
                            ?>


                            <div id="textshow"></div>
                            <div class="text-left" id="card_lesson">
                                <div class="text-center">
                                    <button class="btn" onclick="playAudio()" id="lesson-btn">
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn" onclick="nextAudio()" id="lesson-btn">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    </button>
                                    <audio id="sound">
                                        <source src="/sound/20th Century Recorder Edition.mp3" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-left" id="list_lesson">
                        <div class="list-group" id="listgroup">
                            <!-- <audio src="/sound/20th Century Recorder Edition.mp3" id="sound"></audio> -->


                            <form action="HSK_lesson_check.php?set=<?= $set ?>" method="post">
                                <?php
                                include('../../database/database.php');
                                $sesion = "session";
                                $ses = $_GET['lesson'];
                                $query = "SELECT * FROM HSK" . $set . "_lesson WHERE $sesion = $ses ";
                                $result = mysqli_query($conn, $query);

                                while ($row = mysqli_fetch_assoc($result)) {

                                    echo '<form action="HSK_lesson_check.php?set=' . $set . '" method="post">
<input type="hidden"  name="lesson_name"  value=' . $row['pic'] . '>
<input type="hidden"  name="lesson"  value=' . $ses . '>
<button type="submit" class="btn-submit list-group-item list-group-item-action text-center"
    aria-current="true" id="listbtn_lesson">' . $row['lesson_name'] . '
    </button>
    </form>';
                                }
                                ?>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php


    ?>
    <!-- //////////////////script -->
    <script>
        function playAudio() {
            s.playbackRate = 1;
            s.play();
        }

        function pauseAudio() {
            // s.playbackRate = 1;
            s.pause();
        }

        function slowAudio() {
            s.playbackRate = 0.5;
            s.play();
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>