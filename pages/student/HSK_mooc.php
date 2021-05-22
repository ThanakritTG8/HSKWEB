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
    <title>MOOC</title>
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>
<style>
    @media screen and (max-width: 500px) {
        .wrapper {
            padding: 0px;
        }

        h1 {
            font-size: 15pt;
        }
    }

    @media (min-width: 576px) {
        .jumbotron {
            padding: 2rem 1rem !important;
        }
    }

    @media (min-width: 750px) {
        .btn-vdo-header {
            display: flex !important;
            align-items: flex-start !important;
        }

        .btn-vdo {
            flex-direction: column !important;
            margin-bottom: 0px !important;
        }

        .container {
            background-color: white;
            padding: 10px 8px 10px 8px !important;
        }
    }

    video {
        width: 100%;
        height: auto;
        max-height: 480px;
    }

    .btn-vdo-header {
        display: grid;
    }

    .btn-vdo {
        margin-bottom: 20px;
    }

    .container {
        background-color: white;
        padding: 10px 8px 40px 8px;
    }

    .nav-pills .nav-link.active {
        background-color: #7a2d2d !important;

    }

    .nav-link {
        color: #7a2d2d ;
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
    ?>
    <!-- header -->
    <header class="masthead">
        <div class="jumbotron jumbotron-fluid" id="header">
            <h1 class="text-center">
                HSK<?php echo $hsk_set; ?> Mooc ชุดที่ <?php echo $_GET['mooc']; ?>
            </h1>
        </div>
    </header>
    <!-- ////////////////// body -->
    <?php
    $path_vdo_Content = '../../mooc/HSK' . $hsk_set . '-' . $_GET['mooc'] . '/HSK ' . $hsk_set . '-Set' . $_GET['mooc'] . '-Content_2021_4_1.mp4';
    $path_vdo_Translation = '../../mooc/HSK' . $hsk_set . '-' . $_GET['mooc'] . '/HSK ' . $hsk_set . '-Set' . $_GET['mooc'] . '-Translation_2021_4_1.mp4';
    ?>
    <div class="container">
        <div class="btn-vdo-header">
            <div class="nav nav-pills btn-vdo me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Content</button>
                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Translation</button>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <video controls>
                        <?php echo  '<source src="' . $path_vdo_Content . '" type="video/mp4">' ?>
                    </video>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <video controls>
                        <?php echo  '<source src="' . $path_vdo_Translation . '" type="video/mp4">' ?>
                    </video>
                </div>
            </div>
        </div>



    </div>
    <!-- //////////////////script -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>