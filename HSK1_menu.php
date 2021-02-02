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

include('./database/database.php');
$sesion = "session";
$ses = $_GET['part'];
 $query = "SELECT * FROM hsk1_lesson WHERE $sesion = $ses GROUP BY $sesion";
 $result = mysqli_query($conn , $query);
 $result_send = mysqli_fetch_assoc($result);
$_SESSION['less_name']=$result_send['pic'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSK1</title>
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
<style>
     #btn_menu {
        background-color: #941e1e;
        max-height: 170px;
        border-radius: 20px;
        font-weight: 20px;
        box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.596);
        margin-top: 30px;
    }
    h4{
        color : white ;
    }
    #header {
        background: rgb(75, 75, 75);
        /* height: 100px; */
        color: #fff;
        
    max-height : 100px;
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
<body id="body">
    <!-- navbar -->

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
                HSK1 ชุดที่ <?php echo $_GET['part'] ; ?>
            </h1>

        </div>
    </header>


    <!-- ////////////////// body -->

        <div class="container">

            <!-- menu -->
            <div class="row" >
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <a href="
                    HSK1_Vocab.php?vocab=<?php echo $_GET['part'] ; ?>
                    " class="card btn text-center" id="btn_menu">
                        <div class="card-body underlineHover">
                            <img src="/img/flag-china.png" alt="" style="width: 50px; margin-bottom: 20px;">
                            <h4 class="card-title ">คำศัพท์</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                <a href="
                    HSK1_lesson.php?lesson=<?php echo $_GET['part'] ; ?>
                    " class="card btn text-center" id="btn_menu">
                        <div class="card-body underlineHover">
                            <img src="/img/online-lesson.png" alt="" style="width: 50px; margin-bottom: 20px;">
                            <h4 class="card-title ">บทเรียน</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row" >
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <a href="#" class="card btn text-center" id="btn_menu">
                        <div class="card-body underlineHover">
                            <img src="/img/multimedia.png" alt="" style="width: 50px; margin-bottom: 20px;">
                            <h4 class="card-title ">MOOC</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="card btn text-center" id="btn_menu">
                        <div class="card-body underlineHover">
                            <img src="/img/test.png" alt="" style="width: 50px; margin-bottom: 20px;">
                            <h4 class="card-title ">แบบทดสอบ</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    


    <!-- //////////////////script -->


    <script src="index.js"></script>
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