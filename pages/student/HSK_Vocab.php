<?php
session_start();

if (!isset($_SESSION['username'])) {
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
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocab</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="icon" href="../../img/Logo.png">

</head>
<style>
    @media screen and (max-width: 500px) {
        .wrapper {
            padding: 0px;
        }

        .table {
            font-size: 5pt
        }

        h1 {
            font-size: 25pt;
        }
    }
    .type {
        background-color: antiquewhite;
    padding: 10px;
    border-radius: 5px;
    }

    @media (min-width: 576px) {
        .jumbotron {
            padding: 2rem 1rem !important;
        }
    }
    .sound{
        cursor: pointer;
        color: blue;
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
                HSK<?php echo $hsk_set; ?> คำศัพท์พื้นฐาน ชุดที่ <?php echo $_GET['vocab']; ?>
            </h1>
        </div>
    </header>
    <!-- ////////////////// body -->


    <div class="wrapper">
        <div class="container">
            <?php
            include('../../database/database.php');

            $session = "session";
            $ses = $_GET['vocab'];
            $hsk = "HSK" . $hsk_set . "_Vocab";
            ////หาประเภทคำ type 
            $query_type = "SELECT * FROM $hsk WHERE $session = $ses GROUP BY type  ";
            $result_type = mysqli_query($conn, $query_type);

            while ($row_type = mysqli_fetch_assoc($result_type)) {
                $type = $row_type['type'];

                ////// หาประเภทคำ type_word
                $query_type_word = "SELECT * FROM $hsk WHERE type = '$type' GROUP BY type_word ";
                $result_type_word = mysqli_query($conn, $query_type_word);

                if ((mysqli_num_rows($result_type_word) >= 1)) {

                    while ($row_type_word = mysqli_fetch_assoc($result_type_word)) {
                        if (!$row_type_word['type_word']) {
                            echo '<h5 class="title type" id="subtitle-vocab">' . $type . '</h5>';
                        } else {
                            echo '<h5 class="title type" id="subtitle-vocab">' . $row_type_word['type_word'] . '</h5>';
                        }
                        $type_word = $row_type_word['type_word'];

                        ////// หาคำศัพท์
                        $query = "SELECT * FROM $hsk WHERE type = '$type' AND type_word = '$type_word' ORDER BY vocab_no ASC ";
                        $result = mysqli_query($conn, $query);


                        if ((mysqli_num_rows($result) >= 1)) {
                            echo '<table class="table" >
                         <tbody>';
                            while ($row = mysqli_fetch_assoc($result)) {

                                echo '  <tr class="table-light">
                   <td scope="row" class="col-3">' . $row['vocab_no'] . '</td>
                   <td class="col-3">' . $row['ch'] . '</td>
                   <td class="col-3">' . $row['pinyin'] . '</td>
                   <td class="col-3">' . $row['th'] . '</td>
                   
                               </tr>
                                   ';
                            }
                            echo '  </tbody>
                                        </table>';
                        } else {
                            echo "ไม่มี";
                        }
                    }
                }
            }



            ?>

        </div>
    </div>

    <!-- //////////////////script -->


    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>