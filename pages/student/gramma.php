<!DOCTYPE html>
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
if (isset($_SESSION['success'])) {
    $message = $_SESSION['success'];
    echo  "<script type='text/javascript'>alert('$message');</script>";

    unset($_SESSION['success']);
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gramma</title>
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
    #pinyin-body {
        background: rgba(255, 255, 255, 0.5);
    }

    #pinyin_lesson {
        margin-bottom: 30px;
    }

    #pinyin-article {
        margin-bottom: 20px;
    }

    #box {
        margin-bottom: 50px;
    }

    #btn-pinyin {
        margin-bottom: 5px;
    }

    .card:hover {
        color: blue;
    }
</style>

<body id="body">
    <!-- navbar -->
    <?php include('../../layout/header.php'); ?>

    <ul class="nav nav-pills mb-3 pt-3 pl-2" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-hsk1" role="tab" aria-controls="pills-home" aria-selected="true">HSK 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-hsk2" role="tab" aria-controls="pills-profile" aria-selected="false">HSK 2</a>
        </li>

    </ul>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active"  id="pills-hsk1" role="tabpanel" aria-labelledby="nav-home-tab">

            <?php include('gramma_1.php');  ?>


        </div>
        <div class="tab-pane fade"  id="pills-hsk2" role="tabpanel" aria-labelledby="nav-profile-tab">

            <?php include('gramma_2.php');  ?>
        </div>
    </div>




    <script src="/Gramma_HSK1.json"></script>
    <!-- <script src="/js/index.js"></script> -->
    <!-- <script src="/js/sound.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>