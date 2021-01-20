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
    <title>Vocab HSK1</title>
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
    @media screen and (max-width: 500px) {  
        .wrapper{
            padding : 0px;
        }
  .table{
    font-size:5pt
  }
  h1{
      font-size:15pt;
  }
}
   
</style>
<body id="body">

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
                คำศัพท์พื้นฐาน ชุดที่ <?php echo $_GET['vocab'] ; ?>
            </h1>
        </div>
    </header>
    <!-- ////////////////// body -->


    <div class="wrapper">
        <div class="container">
  <?php
 include('./database/database.php');

$session = "session";
$ses = $_GET['vocab'] ; 

////หาประเภทคำ type 
$query_type = "SELECT * FROM hsk1_vocab WHERE $session = $ses GROUP BY type  ";
$result_type = mysqli_query($conn , $query_type);

while($row_type = mysqli_fetch_assoc($result_type)){
 $type = $row_type['type'];


////// หาประเภทคำ type_word
$query_type_word = "SELECT * FROM hsk1_vocab WHERE type = '$type' GROUP BY type_word ";
$result_type_word = mysqli_query($conn , $query_type_word);

if ((mysqli_num_rows($result_type_word)>=1 )) {

    while($row_type_word = mysqli_fetch_assoc($result_type_word)){
if (!$row_type_word['type_word']) {
    echo '<h5 class="title" id="subtitle-vocab">'.$type.'</h5>' ;
}else{
echo '<h5 class="title" id="subtitle-vocab">'.$row_type_word['type_word'].'</h5>' ;
}
$type_word = $row_type_word['type_word']; 

////// หาคำศัพท์
$query = "SELECT * FROM hsk1_vocab WHERE type = '$type' AND type_word = '$type_word'  ";
$result = mysqli_query($conn , $query);
  
if ((mysqli_num_rows($result)>=1 )) {
   echo '
   <table class="table" >
       <tbody>';
   while($row = mysqli_fetch_assoc($result)){

       echo '  <tr class="table-light">
                   <td scope="row">'.$row['vocab_no'].'</td>
                   <td>'.$row['ch'].'</td>
                   <td>'.$row['pinyin'].'</td>
                   <td>'.$row['th'].'</td>
                   <td><a href=""><i class="fas fa-volume-up"></i></a></td>
                   
               </tr>
               '
               ;
}
echo '  </tbody>
</table>
';
}else {
    echo "ไม่มี" ;
}
}

    }


}



?>
              
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