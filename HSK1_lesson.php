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
    <title>บทเรียน HSK1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
        background-color: #fdb9b9;
    }

    nav {
        background: rgb(122, 45, 45);
        color: #fff;
    }

    .wrapper {
        display: flex;
    }
    #header {
        background: rgb(75, 75, 75);
        /* height: 100px; */
        color: #fff;
        
    max-height : 100px;
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
    .jumbotron{
        margin-bottom: 0px !important;
    }

    #lesson-btn img{
        max-width: 25px;
    }
    #lesson-btn:hover{
        color: #fff;
    }
    form{
        margin-bottom: -5px;
    }
    .btn-submit:hover{
        border : 1px solid green;
    }
    @media screen and (max-width: 500px) {  
    
  h1{
      font-size:15pt;
  }
}
@media (min-width: 576px){
.jumbotron {
    padding: 2rem 1rem !important;
}
}
</style>
<body id="body" >

      <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">

    
   
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto " >

    
    <li class="nav-item active nav-link" >
                  <img src="./img/user.png" alt="" style="width: 25px; ">
                  <?php if (isset($_SESSION['username'])) :?>       
                  <?php echo $_SESSION['username']; ?>
                  <?php endif ?>
     </li>

        <li class="nav-item ">
            <a class="nav-link" href="index.php">หน้าแรก </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="profile.php">ข้อมูล </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="gramma.php">ไวยากรณ์ </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="pinin.php">พินอิน </a>
        </li>
        
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  HSK1
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
  <a class="dropdown-item" href="HSK1_menu.php?part=1">ชุดที่1</a>
  <a class="dropdown-item" href="HSK1_menu.php?part=2">ชุดที่2</a>
  <a class="dropdown-item" href="HSK1_menu.php?part=3">ชุดที่3</a>
  <a class="dropdown-item" href="HSK1_menu.php?part=4">ชุดที่4</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">แบบทดสอบหลังเรียน</a>
</div>
</li>
  <!-- ถ้าคะแนน hsk1 post-test ยังไม่ผ่าน จะไม่ปรากฏ hsk2  -->
  <?php                 
                include('./database/database.php');
                $sid = "SID";
                $id = $_SESSION['SID'];
                $check = "SELECT* FROM hsk_exam_score WHERE $sid  = $id " ;
                 $query = mysqli_query($conn , $check);
                 $result = mysqli_fetch_assoc($query);
                
                if ($result['HSK1_Pretest']>=20 || $result['HSK1_Posttest']>=20  ) {
                    echo ' <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      HSK2
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="HSK2_menu.php?part=1">ชุดที่1</a>
                      <a class="dropdown-item" href="HSK2_menu.php?part=2">ชุดที่2</a>
                      <a class="dropdown-item" href="HSK2_menu.php?part=3">ชุดที่3</a>
                      <a class="dropdown-item" href="HSK2_menu.php?part=4">ชุดที่4</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">แบบทดสอบหลังเรียน</a>
                    </div>
                  </li> ';
                }
                ?>
     
      
    </ul>
    <form action="Login.html" class="form-inline my-2 my-lg-0" >
    <button class="btn btn-success " type="button" >
    <a href="index.php?logout='1'" style="color:white">LOGOUT
    <img src="./img/logout.png" alt="" style="width: 20px; ">
    </a>
</button>

    </form>
</div>
</nav>


    <!-- header -->
    <header class="masthead">
        <div class="jumbotron jumbotron-fluid" id="header">
            <h1 class="text-center">
                HSK1 บทเรียน ชุดที่<?php echo $_GET['lesson']  ; ?>
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
                            <img src="./img/snail.png" alt="" height="20">
                        </button>
                        <button class="btn" onclick="pauseAllAudio()" id="lesson-btn">
                            <i class="fa fa-pause" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="row" id="content_lesson">
                <div class="col-sm-8" >
                    <div class="card text-left" id="card_lesson">
                        <div class="card-body text-center">
                        
<?php 
include('./database/database.php');
$less_name = $_SESSION['less_name'];
$sesion = "session";
$ses = $_GET['lesson'] ;
 $query = "SELECT * FROM hsk1_lesson WHERE $sesion = $ses AND pic = '$less_name'";
 $result = mysqli_query($conn , $query);
 
 while($row = mysqli_fetch_assoc($result)){
echo '<img src="./img/บทเรียนHSK1_ชุดที่'.$ses.'/'.$row['pic'].'" alt=""  id="img-lesson">' ;
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


                        <form action="HSK1_lesson_check.php" method="post">
<?php 
include('./database/database.php');
$sesion = "session";
$ses = $_GET['lesson'] ;
 $query = "SELECT * FROM hsk1_lesson WHERE $sesion = $ses ";
 $result = mysqli_query($conn , $query);
 
 while($row = mysqli_fetch_assoc($result)){

echo '<form action="HSK1_lesson_check.php" method="post">
<input type="hidden"  name="lesson_name"  value='.$row['pic'].'>
<input type="hidden"  name="lesson"  value='.$ses.'>
<button type="submit" class="btn-submit list-group-item list-group-item-action text-center"
    aria-current="true" id="listbtn_lesson">'.$row['lesson_name'].'
    </button>
    </form>' ;
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