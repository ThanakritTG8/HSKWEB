<?php include('header.php'); ?>

<style>
    @media(max-width:1000px) {
        .container {
            display: grid !important;

            height: auto !important;
        }

        .card {
            margin-top: 10px !important;
            width: 18rem !important;
            height: auto !important;
        }

        .img-card {
            margin-bottom: 20px !important;
        }

        .card-title {
            margin-bottom: .75rem !important;
        }
    }

    .card-title {
        margin-bottom: 2.75rem;
    }

    .card {
        margin: -50px 20px 0px 20px;
        border-radius: 2.5rem;
        width: 350px;
        height: 300px;
        border: 0.5px solid #a3a1a1;
    }

    .img-card {
        margin-bottom: 50px;
        width: 80px;
    }

    .btn {
        width: 100%;
        border-radius: 1.25rem;
        font-size: 20px;
    }

    .btn-success-admin {
        color: #ececec;
        background-color: #549062;
        border-color: #28a745;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin-bottom: 30px;
    }
</style>

<div class="container">
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">ดูคะแนน</h5>
            <img src="../img/personal-information.png" alt="" class="img-card"><br>
            <a href="#" class="btn btn-success-admin btn-success">ดูคะแนน</a>
        </div>
    </div>
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">แก้ไขบทเรียน</h5>
            <img src="../img/personal-information.png" alt="" class="img-card"><br>

            <a href="#" class="btn btn-success-admin btn-success">แก้ไขบทเรียน</a>
        </div>
    </div>
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">Teacher Account </h5>
            <img src="../img/personal-information.png" alt="" class="img-card"><br>

            <a href="teacher.php" class="btn btn-success-admin btn-success">Teacher Account</a>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>