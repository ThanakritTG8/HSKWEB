<?php
session_start();

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


    .wrapper {
        display: flex;
    }

    #header {
        background: transparent;
        color: #941e1e;
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


    <!-- <include header> -->
    <?php include('../../layout/header.php'); ?>

    <!-- body -->
    <br><br>
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
                                    include('../../database/database.php');
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
                                    include('../../database/database.php');
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
                                    include('../../database/database.php');
                                    $sid = "SID";
                                    $id =  $_SESSION['SID'];
                                    $check = "SELECT * FROM Student WHERE $sid =  $id";
                                    $query = mysqli_query($conn, $check);
                                    $result = mysqli_fetch_assoc($query);
                                    $schoolid =   $result['SchoolID'];


                                    $check_school = "SELECT * FROM School WHERE SchoolID =  $schoolid ";
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
                <div class="col-sm-6">
                    <div class="card" id="info">
                        <div class="card-body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th rowspan="2" class="align-middle" scope="col">#</th>
                                        <th colspan="4" class="text-center" scope="col">แบบทดสอบ</th>
                                    </tr>
                                    <tr>
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
                                        include('../../database/database.php');

                                        $sid = "SID";
                                        $id =  $_SESSION['SID'];
                                        $check = "SELECT * FROM HSK1_Exercise_Score WHERE $sid =  $id";
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
                                        include('../../database/database.php');
                                        $sid = "SID";
                                        $id =  $_SESSION['SID'];
                                        $check = "SELECT * FROM HSK2_Exercise_Score WHERE $sid =  $id";
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
                <div class="col-md-6 table-buttom">
                    <div class="card" id="info">
                        <div class="card-body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th rowspan="2" class="align-middle" scope="col" class="">#</th>
                                        <th rowspan="2" class="align-middle" scope="col">Pre-Test</th>
                                        <th colspan="2" class="text-center" scope="col">Post-Test</th>

                                    </tr>
                                    <tr>
                                        <th scope="col">ชุดที่1</th>
                                        <th scope="col">ชุดที่2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">HSK1</th>
                                        <?php
                                        include('../../database/database.php');
                                        $sid = "SID";
                                        $id =  $_SESSION['SID'];
                                        $check = "SELECT * FROM HSK_Exam_Score WHERE $sid =  $id";
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
                                        if ($result['HSK1_Posttest_2'] == 0) {
                                            echo '<td>-</td>';
                                        } else {
                                            echo '<td>' . $result['HSK1_Posttest_2'] . '</td>';
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th scope="row">HSK2</th>
                                        <?php
                                        include('../../database/database.php');
                                        $sid = "SID";
                                        $id =  $_SESSION['SID'];
                                        $check = "SELECT * FROM HSK_Exam_Score WHERE $sid =  $id";
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
                                        if ($result['HSK2_Posttest_2'] == 0) {
                                            echo '<td>-</td>';
                                        } else {
                                            echo '<td>' . $result['HSK2_Posttest_2'] . '</td>';
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


    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>