<?php
session_start();
if (!isset($_SESSION['SID'])) {
    header('location: ../Login.php');
}
if (isset($_GET['hsk'])) {
    if ($_GET['hsk'] == 2) {
        include('../../database/database.php');
        $sid = "SID";
        $id = $_SESSION['SID'];
        $checkRedirect = "SELECT* FROM HSK_Exam_Score WHERE $sid  = $id ";
        $queryRedirect = mysqli_query($conn, $checkRedirect);
        $resultRedirect = mysqli_fetch_assoc($queryRedirect);
        if ($resultRedirect['HSK2_Pretest'] !== 0) {
            echo "
            <script type=\"text/javascript\">
            window.location.href = '../pages/student/index.php';
            </script>
        ";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/pretest.css">
    <link rel="icon" href="../img/Logo.png">

</head>
<style>
    .container {
        height: 100vh;
        align-items: center;
        display: grid;
        justify-content: center;
    }

    #send {
        padding: 0 1em !important;
    }

    .card-header {
        font-size: 16px;
        font-weight: 500;
    }

    @media screen and (min-width:1000px) {
        .card-body {
            padding: 2rem 8rem !important;
        }
    }
</style>

<body>
    <?php if (isset($_GET['hsk'])) : ?>
        <div class="container">

            <div class="card text-center">
                <?php $hsk = $_GET['hsk'];
                if ($hsk == 1) : ?>
                    <div class="card-header">
                        <div>HSK（一级）课前自测</div>
                        <div>【แบบทดสอบก่อนเรียน (Pre-test) HSK 1】</div>
                    </div>
                    <div class="card-body text-left">
                        <h6 class="card-title text-center">注意【คำอธิบาย】</h6>
                        <p class="card-text"> 一、HSK（一级）分两部分【HSK 1 แบ่งเป็น 2 ทักษะ】</p>
                        <p class="card-text">1．听力：20 题，13 分钟【การฟัง：20 ข้อ 13 นาที】</p>
                        <p class="card-text">2．阅读：20 题，17 分钟【การอ่าน：20 ข้อ 17 นาที】</p>
                        <p class="card-text">二、全部考试：40 题，30 分钟【การสอบทั้งหมด：40 ข้อ 30 นาที】</p>
                        <p class="card-text">三、满分 40 分 / 24 分为合格【คะแนนเต็ม 40 คะแนน / สอบผ่าน 24 คะแนน】</p>

                    </div>
                <?php else : ?>
                    <div class="card-header">
                        <div>HSK（二级）课前自测</div>
                        <div>【แบบทดสอบก่อนเรียน (Pre-test) HSK 2】</div>
                    </div>
                    <div class="card-body text-left">
                        <h5 class="card-title text-center">注意【คำอธิบาย】</h5>
                        <p class="card-text"> 一、HSK（二级）分两部分【HSK 2 แบ่งเป็น 2 ทักษะ】</p>
                        <p class="card-text">1．听力：35 题，25 分钟【การฟัง：35 ข้อ 25 นาที】</p>
                        <p class="card-text">2．阅读：25 题，25 分钟【การอ่าน：25 ข้อ 25 นาที】</p>
                        <p class="card-text">二、全部考试：60 题，50 分钟【การสอบทั้งหมด：60 ข้อ 50 นาที】</p>
                        <p class="card-text">三、满分 60 分 / 36 分为合格【คะแนนเต็ม 60 คะแนน / สอบผ่าน 36 คะแนน】</p>

                    </div>
                <?php endif ?>
                <div class="card-footer text-muted">
                    <?php $mess_send = "เริ่มทำแบบทดสอบ";
                    include_once('../plugin/sent_button.php')
                    ?>
                </div>
            </div>

        </div>



        <?php include_once('../layout/footerPretest.php') ?>
    <?php endif ?>

    <script>
        $(function() {
            const hsk = <?= $hsk ?>;
            $("#send").click(() => {
                window.location.replace(`../pages/pretest/hsk_${hsk}.php`);

            });

        });
    </script>

</html>