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
    .btn-post{
        width:100%;
        margin : 40px 0px 30px 0px;
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

<!-- <include header> -->
   <?php  include('../../layout/header.php');?>

    <!-- header -->
    <header class="masthead">
        <div class="jumbotron jumbotron-fluid" id="header">
            <h1 class="text-center">
                HSK1
            </h1>
        </div>
    </header>


    <!-- body -->

        <div class="container">
          

            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <a href='HSK1_menu.php?part=1' class="card btn text-center" id="btn_menu">
                        <div class="card-body underlineHover">
                            <img src="/img/storytelling.png" alt="" style="width: 50px; margin-bottom: 20px;">
                            <h4 class="card-title">HSK ชุดที่ 1</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="HSK1_menu.php?part=2" class="card btn text-center" id="btn_menu">
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
                    <a href="HSK1_menu.php?part=3" class="card btn text-center" id="btn_menu">
                        <div class="card-body underlineHover">
                            <img src="/img/book.png" alt="" style="width: 50px; margin-bottom: 20px;">
                            <h4 class="card-title">HSK ชุดที่ 3 </h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="HSK1_menu.php?part=4" class="card btn text-center" id="btn_menu">
                        <div class="card-body underlineHover">
                            <img src="/img/books.png" alt="" style="width: 50px; margin-bottom: 20px;">
                            <h4 class="card-title">HSK ชุดที่ 4</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="text-center row">
                <div class="col-1 col-md-3" ></div>
                <div class="col-10 col-md-6">
            <button  type="button" class="btn btn-success btn-post">แบบทดสอบ Post test     
                    <img src="./img/right-arrow.png" alt="" style="width: 30px; ">
            </button>
            </div>
            </div>

            <div class="text-center row">
                <div class="col-1 col-md-3" ></div>
                <div class="col-10 col-md-6">
            <button  type="button" class="btn btn-secondary btn-post">แบบทดสอบ Post test     
                    <img src="./img/lock.png" alt="" style="width: 30px; ">
            </button>
            </div>
            </div>

        </div>
   
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
</body>

</html>