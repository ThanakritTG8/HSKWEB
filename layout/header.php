<style>
    nav {
        background: rgb(122, 45, 45);
        color: #fff;
    }

    @media (min-width: 576px) {
        .jumbotron {
            padding: 2rem 1rem !important;
        }
    }

    #body {
        font-family: 'Prompt', sans-serif;
    }

    #header {
        background: transparent;
        color: #941e1e;
        max-height: 100px;
    }

    .item-dis {
        cursor: help;
        margin-bottom: 0px !important;
        text-align: center;
        display: block;
        width: 100%;
        padding: .25rem 1.5rem;
        clear: both;
        color: #d0d6db;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }
</style>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" id="navbar">



    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto ">


            <li class="nav-item active nav-link">
                <img src="../../img/user.png" alt="" style="width: 25px; ">
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
                <a class="nav-link" href="pinyin.php">พินอิน </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="character.php">อักษรจีน【汉字 Hànzì 】 </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="HSK.php?hsk_1">HSK 1 </a>
            </li>

            <!-- ถ้าคะแนน hsk1 post-test ยังไม่ผ่าน จะไม่ปรากฏ hsk2  -->
            <?php
            include('../../database/database.php');
            $sid = "SID";
            $id = $_SESSION['SID'];
            $check = "SELECT* FROM HSK_Exam_Score WHERE $sid  = $id ";
            $query = mysqli_query($conn, $check);
            $result = mysqli_fetch_assoc($query);

            if ($result['HSK1_Pretest'] >= 24 || $result['HSK1_Posttest'] >= 36 || $result['HSK1_Posttest_2'] >= 36) {
                echo '  <li class="nav-item ">
                <a class="nav-link" href="HSK.php?hsk_2">HSK 2</a>
            </li>';
            }
            ?>


        </ul>
        <form action="Login.html" class="form-inline my-2 my-lg-0">
            <a href="index.php?logout='1'" style="color:white" class="btn btn-success">LOGOUT
                <img src="../../img/logout.png" alt="" style="width: 20px; ">
            </a>

        </form>
    </div>
</nav>