<?php
session_start();

if (!isset($_SESSION['username'])) {
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

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="icon" href="../../img/Logo.png">

</head>
<style>
    #body {
        font-family: 'Prompt', sans-serif;
    }


    .wrapper {
        display: flex;
    }

    #header {
        background: transparent;
        color: #941e1e;
        max-height: 100px;
    }

    #card_lesson {
        height: 500px;
        display: grid;

    }

    #list_lesson {

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

    .btn-submit:hover {
        border: 1px solid green;
    }

    #content_lesson {
        margin: 5px 0px;
    }

    @media screen and (max-width: 500px) {

        h1 {
            font-size: 25pt;
        }
    }


    @media (max-width: 1000px) {
        #list_lesson {
            max-height: 385px;
        }

        #card_lesson {
            height: 385px;

        }
    }

    @media (max-width: 700px) {
        #list_lesson {
            margin-top: 20px;
        }

        #card_lesson {
            height: 320px;

        }
    }

    @media (max-width: 400px) {
        #card_lesson {
            height: 290px;

        }

        .jumbotron {
            padding: 2rem 1rem !important;
        }
    }

    @media (max-width: 350px) {
        #card_lesson {
            height: 240px;

        }
    }

    .err-img {
        height: 80px;
        margin-bottom: 20px;
    }

    .text-err {
        color: gray;
        font-size: 15px;
    }

    .btn-pause {
        color: #ca3131;
    }

    .slow-active {
        background-color: red !important;
    }

    .img-default {
        max-height: 450px !important;
    }
</style>

<body id="body">

    <!-- <include header> -->
    <?php include('../../layout/header.php');
    if (isset($_GET['hsk_1'])) {
        $hsk_set = 1;
    } elseif (isset($_GET['hsk_2'])) {
        $hsk_set = 2;
    }
    $lesson = $_GET['lesson'];
    ?>

    <!-- header -->
    <header class="masthead">
        <div class="jumbotron jumbotron-fluid" id="header">
            <h1 class="text-center">
                HSK<?php echo $hsk_set; ?> บทเรียน ชุดที่<?php echo $lesson; ?>
            </h1>
        </div>
    </header>

    <!-- ////////////////// body -->


    <div class="wrapper">
        <div class="container">

            <audio id="sound_auto" onended="soundEnded_auto()">
            </audio>
            <audio id="sound" onended="soundEnded()">
            </audio>
            <div class="row">
                <div class="col-sm-8">
                    <div class="text-center" style="margin-top:10px;">
                        <button class="btn btn-play-auto" id="lesson-btn">
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </button>
                        <button class="btn btn-pause-auto  btn-pause" id="lesson-btn" onclick="pauseAudio_auto()">
                            <i class="fa fa-pause" aria-hidden="true"></i>
                        </button>
                        <button class="btn btn-slow" id="lesson-btn">
                            <img src="../../img/snail.png" alt="" height="20">
                        </button>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="row" id="content_lesson">
                <div class="col-sm-8">
                    <div class="card text-left">
                        <div class="card-body text-center align-items-center" id="card_lesson">
                            <div class="err"><img src="../../img/settings.png" class="err-img">
                                <p class="text-err"> เกิดข้อผิดพลาดในการใช้งาน auto play </p>
                            </div>

                            <div id="show_img"></div>
                            <div class="text-left text-contant ">
                                <div class="text-center">
                                    <button class="btn btn-pause-in btn-pause" onclick="pauseAudio()" id="lesson-btn">
                                        <i class="fa fa-pause" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn btn-play-in" onclick="playAudio()" id="lesson-btn">
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-left" id="list_lesson">
                        <div class="list-group" id="listgroup">
                            <?php
                            include('../../database/database.php');
                            $sesion = "session";
                            $ses = $lesson;
                            $hsk = $hsk_set;
                            $img = array();
                            $sound = array();
                            $hsk_set = "HSK" . $hsk . "_lesson";
                            $no = "no";
                            $query = "SELECT * FROM $hsk_set WHERE $sesion = $ses ORDER BY $no ASC";
                            $result = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                                array_push($img, $row['pic']);
                                array_push($sound, $row['voice']);
                                echo '
<button type="submit"  class="btn-submit list-group-item list-group-item-action text-center" onclick="clickk(`' . $row['pic'] . '`,`' . $ses . '`,`' . $row['voice'] . '`)"
    aria-current="true" id="listbtn_lesson">' . $row['lesson_name'] . '
    </button>
';
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>
<script>
    $(document).ready(function() {
        const lesson = '<?= $lesson ?>';
        const hsk = '<?= $hsk ?>';
        const pic = 'HSK' + hsk + '_' + lesson + '.JPG';
        const auto_img = <?= json_encode($img) ?>;
        const auto_sound = <?= json_encode($sound) ?>;
        $('#show_img').html('<img src="../../img/บทเรียนHSK' + hsk + '_ชุดที่' + lesson + '/' + pic + '"  id="img-lesson">');
        $('.err').hide();
        $('.btn-play-in').hide();
        $('.btn-pause-auto').hide();
        $('#img-lesson').addClass('img-default');
        $('.btn-pause-in').hide();
        $('.btn-play-in').click(() => {
            $('.btn-pause-in').show();
            $('.btn-play-in').hide();
        });
        if (typeof(Storage) == "undefined") {
            $('.btn-slow').hide();
        }
        localStorage.removeItem("sound");
        localStorage.setItem("voice", false);

        let count = localStorage.getItem("count")
        if (count) {
            localStorage.removeItem("count");
        } else localStorage.setItem("count", 1);
        const sound = document.getElementById("sound");
        const sound_auto = document.getElementById("sound_auto");
        $('.btn-play-auto').click(() => {
            $('.btn-play-in').hide();
            $('.btn-pause-in').hide();
            let count = localStorage.getItem("count")
            $('.btn-pause-auto').show();
            $('.btn-play-auto').hide();
            sound_auto.src = '../../sound/HSK' + hsk + '_' + lesson + '/' + auto_sound[count];
            sound.src = '../../sound/HSK' + hsk + '_' + lesson + '/' + auto_sound[count];
            let slow = localStorage.getItem("sound")
            sound_auto.playbackRate = slow ? 0.5 : 1;

            const playPromise = sound_auto.play();
            if (playPromise !== undefined) {
                playPromise.then(function() {
                    sound_auto.play();
                }).catch(function(error) {
                    $('.btn-pause-auto').hide();
                    $('.btn-play-auto').hide();
                    $('#show_img').hide();
                    $('.text-contant').hide();
                    $('.err').show();
                });
            }

            $('#show_img').html('<img src="../../img/บทเรียนHSK' + hsk + '_ชุดที่' + lesson + '/' + auto_img[count] + '"  id="img-lesson">');
        });
    })
    $('.btn-slow').click(() => {
        this.pauseAudio_auto();
        let voice = localStorage.getItem("voice");
        if (voice != 'false') {
            this.pauseAudio();

        }
        let sound = localStorage.getItem("sound");
        if (sound) {
            localStorage.removeItem("sound");
            $('.btn-slow').removeClass('slow-active')
        } else {
            localStorage.setItem("sound", true);
            $('.btn-slow').addClass('slow-active')
        }
    });
    const hsk = '<?= $hsk ?>';
    const lesson = '<?= $lesson ?>';
    const auto_img = <?= json_encode($img) ?>;
    const auto_sound = <?= json_encode($sound) ?>;
    const sound = document.getElementById("sound");

    function playAudio() {
        let slow = localStorage.getItem("sound")
        sound.playbackRate = slow ? 0.5 : 1;
        sound.play();
    }

    function soundEnded() {
        $('.btn-pause-in').hide();
        $('.btn-play-in').show();
    }
    const sound_auto = document.getElementById("sound_auto");
    let next_sound = 1;
    const count_sound = auto_sound.length;

    function soundEnded_auto() {
        if (next_sound < count_sound) {
            next_sound += 1
            sound.src = '../../sound/HSK' + hsk + '_' + lesson + '/' + auto_sound[next_sound];
            sound_auto.src = '../../sound/HSK' + hsk + '_' + lesson + '/' + auto_sound[next_sound];
            sound_auto.play();
            $('#show_img').html('<img src="../../img/บทเรียนHSK' + hsk + '_ชุดที่' + lesson + '/' + auto_img[next_sound] + '"  id="img-lesson">');
            localStorage.setItem("count", next_sound)
        }

    }

    function pauseAudio() {
        $('.btn-pause-in').hide();
        $('.btn-play-in').show();
        sound.pause();
    }

    function pauseAudio_auto() {
        $('.btn-pause-auto').hide();
        $('.btn-play-auto').show();
        sound_auto.pause();
    }


    function clickk(pic, ses, voice) {
        this.pauseAudio_auto();
        $('.btn-pause-in').hide();
        $('.btn-play-in').show();
        $('.err').hide();
        $('#show_img').show();
        $('.text-contant').show();
        if (!voice) {
            $('.btn-play-in').hide();
            $('#img-lesson').addClass('img-default');
            localStorage.setItem("voice", false);
        } else {
            $('#img-lesson').removeClass('img-default');
            localStorage.setItem("voice", true);
        }
        sound.src = '../../sound/HSK' + hsk + '_' + ses + '/' + voice;
        $('#show_img').html('<img src="../../img/บทเรียนHSK' + hsk + '_ชุดที่' + ses + '/' + pic + '"  id="img-lesson">');

    }
</script>

</html>