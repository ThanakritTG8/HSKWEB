<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บทเรียน HSK1</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>

<body id="body">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <h5 class="navbar-brand title">
            Karin Pimloy
        </h5>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">หน้าแรก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        HSK1
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">HSK ชุดที่1</a>
                        <a class="dropdown-item" href="#">HSK ชุดที่2</a>
                        <a class="dropdown-item" href="#">HSK ชุดที่3</a>
                        <a class="dropdown-item" href="#">HSK ชุดที่4</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">แบบทดสอบ</a>
                </li>
            </ul>
            <form action="Login.html" class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LOG OUT</button>
            </form>
        </div>
    </nav>

    <!-- header -->
    <header class="masthead">
        <div class="jumbotron jumbotron-fluid" id="header">
            <h1 class="text-center">
                บทเรียน HSK1
            </h1>
        </div>
    </header>

    <!-- ////////////////// body -->


    <div class="wrapper">
        <div class="container">
            <div class="row" id="nav-body">
                <div class="col">
                    <h6><a href="index.html">หน้าหลัก</a> >
                        <a href="HSK1_menu.html">HSK ชุดที่1</a>
                        > บทเรียน
                    </h6>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8">
                    <div class="text-center" style="margin-top:70px;">
                        <button class="btn" onclick="playAllAudio()" id="lesson-btn">
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </button>
                        <button class="btn" onclick="slowAllAudio()" id="lesson-btn">
                            <img src="/img/snail.png" alt="">
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
                            <!-- <img src="/img/บทเรียน/example.PNG" alt="" id="img-lesson"> -->
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
                            <button type="button" class="list-group-item list-group-item-action active"
                                aria-current="true" id="listbtn_lesson">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- //////////////////script -->


    <script src="./js/index.js"></script>
    <script src="./js/sound.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>