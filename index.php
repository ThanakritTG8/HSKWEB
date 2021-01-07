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
if(isset($_SESSION['success'])){
    $message = $_SESSION['success'];
  echo  "<script type='text/javascript'>alert('$message');</script>"; 

  unset($_SESSION['success']);
  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

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
* {
    font-family: 'Prompt', sans-serif;
}

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
    margin-top: 40px;
    padding: 20px;
}

#header {
    background: rgb(75, 75, 75);
    /* height: 100px; */
    color: #fff;
}

.text-header {
    margin-top: 60px;
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
    height: 170px;
    border-radius: 20px;
    font-weight: 20px;
    box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.596);
    margin-top: 50px;
}

#Dis_btn_menu {
    background-color: gray;
    height: 170px;
    border-radius: 20px;
    font-weight: 20px;
    box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.596);
    margin-top: 50px;
}

#index_menu {
    margin-top: -20px;
}

#btn_menu:hover {
    background-color: #36b163;
}

#choice {
    height: 140px;
    margin-top: 30px;
    background-color: #941e1e;
    color: #fff;
}

#submit-pretest {
    align-items: center;
    margin-top: 50px;
    padding: 10px 30px;
}

#nav-body a {
    color: black;
}

#content_lesson {
    margin-top: 20px;
}

#card_lesson {
    margin-top: 20px;
    margin-bottom: 20px;
}

#list_lesson {
    margin-top: 20px;
    margin-bottom: 20px;
    height: 500px;
    overflow-y: scroll;
}

#img-lesson {
    max-width: 100%;
    height: auto;
    align-items: center;
}

#lesson-btn {
    background: rgb(94, 177, 255);
}

#lesson-btn img {
    width: 25px;
}

#lesson-btn :hover {
    /* width: 1200px; */
    color: #fff;
}
</style>

<body id="body">
    <!-- notification -->




    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
    <?php if (isset($_SESSION['username'])) :?>
            <h5 class="title">

                <?php echo $_SESSION['username']; ?>

            </h5>
            <?php endif ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">หน้าแรก <span class="sr-only">(current)</span></a>
                </li>
              
            </ul>
            <form action="Login.html" class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0" type="button">
            <a href="index.php?logout='1'">LOG OUT</a>
        </button>

            </form>
        </div>
    </nav>
   

  <!-- header -->
  <header class="masthead">
        <div class="jumbotron jumbotron-fluid" id="header">
            <h1 class="text-center">
                หน้าแรก
            </h1>
        </div>
    </header>


    <!-- content -->
    <div class="wrapper">
        <div class="container">
            <div class="row" id="index_menu">
                <div class="col-sm-4">
                    <div class="card btn text-center" id="btn_menu">
                        <div class="card-body underlineHover">
                            <img src="./img/personal-information.png" alt="" style="width: 50px; margin-bottom: 20px;">
                            <h4 class="card-title">ข้อมูล</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card btn text-center" id="btn_menu">
                        <div class="card-body underlineHover">
                            <img src="./img/china.png" alt="" style="width: 50px; margin-bottom: 20px;">
                            <h4 class="card-title">ไวยากรณ์</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card btn text-center" id="btn_menu">
                        <div class="card-body underlineHover">
                            <img src="./img/yueqin.png" alt="" style="width: 50px; margin-bottom: 20px;">
                            <h4 class="card-title">พินอิน</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="index_menu">
                <div class="col-sm-2"></div>
                <div class="col-sm-4" onclick="btn_hsk1()">
                    <div class="card btn text-center" id="btn_menu">
                        <div class="card-body underlineHover">
                            <img src="./img/open-book.png" alt="" style="width: 50px; margin-bottom: 20px;">
                            <h4 class="card-title">HSK1</h4>
                        </div>
                    </div>
                </div>
                <script>
                function btn_hsk1() {
                    window.location.replace('HSK1.php')
                };
                </script>


                <?php                 
                include('./database/database.php');
                $sid = "SID";
                $id = $_SESSION['SID'];
                $check = "SELECT* FROM hsk_exam_score WHERE $sid  = $id " ;
                 $query = mysqli_query($conn , $check);
                 $result = mysqli_fetch_assoc($query);
                
                if ($result['HSK1_Pretest']>=20 || $result['HSK1_Posttest']>=20  ) {
                    echo '<div class="col-sm-4">
                    <div class="card btn text-center" id="btn_menu">
                        <div class="card-body underlineHover">
                            <img src="./img/storytelling.png" alt="" style="width: 50px; margin-bottom: 20px;">
                            <h4 class="card-title">HSK2</h4>
                        </div>
                    </div>
                </div> ';
                } else {
                    echo '  <div class="col-sm-4">
                    <div class="card btn text-center" id="Dis_btn_menu">
                        <div class="card-body ">
                            <img src="./img/storytelling.png" alt="" style="width: 50px; margin-bottom: 20px;">
                            <h4 class="card-title">HSK2</h4>
                        </div>
                    </div>
                </div>' ;
                }
                

                ?>
                <div class="col-sm-2"></div>
            </div>

        </div>
    </div>

    <style>

    </style>
    <!-- //////////////////script -->


    <script src="./js/index.js"></script>
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
    </div>
</body>

</html>