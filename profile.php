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
if (isset($_SESSION['success'])) {
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
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
    }

    #header {
        background: rgb(75, 75, 75);
        /* height: 100px; */
        color: #fff;

        max-height: 100px;
    }

    .text-header {
        margin-top: 40px;
    }


    #nav-body a {
        color: black;
    }

    #content_lesson {
        margin-top: 20px;
    }


    #info {
        box-shadow: 0 20px 30px 0 rgba(100, 100, 100, 0.589);
    }

    @media screen and (max-width: 800px) {
        th {
            font-size: 12pt;
        }
    }

    @media screen and (max-width: 600px) {
        .table-buttom {
            margin-top: 10px;
        }

    }

    @media (min-width: 576px) {
        .jumbotron {
            padding: 2rem 1rem !important;
        }
    }
</style>

<body id="body">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">



        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto ">


                <li class="nav-item active nav-link">
                    <img src="./img/user.png" alt="" style="width: 25px; ">
                    <?php if (isset($_SESSION['username'])) : ?>
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
                $check = "SELECT* FROM hsk_exam_score WHERE $sid  = $id ";
                $query = mysqli_query($conn, $check);
                $result = mysqli_fetch_assoc($query);

                if ($result['HSK1_Pretest'] >= 20 || $result['HSK1_Posttest'] >= 20) {
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
            <form action="Login.html" class="form-inline my-2 my-lg-0">
                <button class="btn btn-success " type="button">
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
                Profile
            </h1>
        </div>
    </header>


    <!-- body -->

    <div class="wrapper">
        <div class="container">

            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-sm-2"></div>
                <div class="col-md-9">
                    <div class="card mb-3" id="info">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 text-left">
                                    <h5 class="mb-0">User Information</h5>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Username</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php
                                    include('./database/database.php');
                                    $sid = "SID";
                                    $id =  $_SESSION['SID'];
                                    $check = "SELECT * FROM Student WHERE $sid =  $id";
                                    $query = mysqli_query($conn, $check);
                                    $result = mysqli_fetch_assoc($query);
                                    echo $result['SUsername'];
                                    ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $_SESSION['username']; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php
                                    include('./database/database.php');
                                    $sid = "SID";
                                    $id =  $_SESSION['SID'];
                                    $check = "SELECT * FROM Student WHERE $sid =  $id";
                                    $query = mysqli_query($conn, $check);
                                    $result = mysqli_fetch_assoc($query);
                                    echo $result['Semail'];
                                    ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">School</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php
                                    include('./database/database.php');
                                    $sid = "SID";
                                    $id =  $_SESSION['SID'];
                                    $check = "SELECT * FROM Student WHERE $sid =  $id";
                                    $query = mysqli_query($conn, $check);
                                    $result = mysqli_fetch_assoc($query);
                                    $schoolid =   $result['SchoolID'];


                                    $check_school = "SELECT * FROM school WHERE SchoolID =  $schoolid ";
                                    $query_school = mysqli_query($conn, $check_school);
                                    $result_school = mysqli_fetch_assoc($query_school);
                                    echo   $result_school['SchoolName'];



                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row" style=" margin-bottom: 30px;">
                <div class="col-sm-2"></div>
                <div class="col-sm-5">
                    <div class="card" id="info">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ชุดที่1</th>
                                        <th scope="col">ชุดที่2</th>
                                        <th scope="col">ชุดที่3</th>
                                        <th scope="col">ชุดที่4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">HSK1</th>
                                        <?php
                                        include('./database/database.php');

                                        $sid = "SID";
                                        $id =  $_SESSION['SID'];
                                        $check = "SELECT * FROM hsk1_exercise_score WHERE $sid =  $id";
                                        $query = mysqli_query($conn, $check);
                                        $result = mysqli_fetch_assoc($query);
                                        if ($result['hsk1_session_1'] == 0) {
                                            echo '<td>-</td>';
                                        } else {
                                            echo '<td>' . $result['hsk1_session_1'] . '</td>';
                                        }
                                        if ($result['hsk1_session_2'] == 0) {
                                            echo '<td>-</td>';
                                        } else {
                                            echo '<td>' . $result['hsk1_session_2'] . '</td>';
                                        }
                                        if ($result['hsk1_session_3'] == 0) {
                                            echo '<td>-</td>';
                                        } else {
                                            echo '<td>' . $result['hsk1_session_3'] . '</td>';
                                        }
                                        if ($result['hsk1_session_4'] == 0) {
                                            echo '<td>-</td>';
                                        } else {
                                            echo '<td>' . $result['hsk1_session_4'] . '</td>';
                                        }
                                        ?>

                                    </tr>
                                    <tr>
                                        <th scope="row">HSK2</th>
                                        <?php
                                        include('./database/database.php');
                                        $sid = "SID";
                                        $id =  $_SESSION['SID'];
                                        $check = "SELECT * FROM hsk2_exercise_score WHERE $sid =  $id";
                                        $query = mysqli_query($conn, $check);
                                        $result = mysqli_fetch_assoc($query);
                                        if ($result['hsk2_session_1'] == 0) {
                                            echo '<td>-</td>';
                                        } else {
                                            echo '<td>' . $result['hsk2_session_1'] . '</td>';
                                        }
                                        if ($result['hsk2_session_2'] == 0) {
                                            echo '<td>-</td>';
                                        } else {
                                            echo '<td>' . $result['hsk2_session_2'] . '</td>';
                                        }
                                        if ($result['hsk2_session_3'] == 0) {
                                            echo '<td>-</td>';
                                        } else {
                                            echo '<td>' . $result['hsk2_session_3'] . '</td>';
                                        }
                                        if ($result['hsk2_session_4'] == 0) {
                                            echo '<td>-</td>';
                                        } else {
                                            echo '<td>' . $result['hsk2_session_4'] . '</td>';
                                        }
                                        ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 table-buttom">
                    <div class="card" id="info">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Pre-Test</th>
                                        <th scope="col">Post-Test</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">HSK1</th>
                                        <?php
                                        include('./database/database.php');
                                        $sid = "SID";
                                        $id =  $_SESSION['SID'];
                                        $check = "SELECT * FROM hsk_exam_score WHERE $sid =  $id";
                                        $query = mysqli_query($conn, $check);
                                        $result = mysqli_fetch_assoc($query);
                                        if ($result['HSK1_Pretest'] == 0) {
                                            echo '<td>-</td>';
                                        } else {
                                            echo '<td>' . $result['HSK1_Pretest'] . '</td>';
                                        }
                                        if ($result['HSK1_Posttest'] == 0) {
                                            echo '<td>-</td>';
                                        } else {
                                            echo '<td>' . $result['HSK1_Posttest'] . '</td>';
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th scope="row">HSK2</th>
                                        <?php
                                        include('./database/database.php');
                                        $sid = "SID";
                                        $id =  $_SESSION['SID'];
                                        $check = "SELECT * FROM hsk_exam_score WHERE $sid =  $id";
                                        $query = mysqli_query($conn, $check);
                                        $result = mysqli_fetch_assoc($query);
                                        if ($result['HSK2_Pretest'] == 0) {
                                            echo '<td>-</td>';
                                        } else {
                                            echo '<td>' . $result['HSK2_Pretest'] . '</td>';
                                        }
                                        if ($result['HSK2_Posttest'] == 0) {
                                            echo '<td>-</td>';
                                        } else {
                                            echo '<td>' . $result['HSK2_Posttest'] . '</td>';
                                        }
                                        ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>

    <!-- //////////////////script -->


    <script src="./js/index.js"></script>
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