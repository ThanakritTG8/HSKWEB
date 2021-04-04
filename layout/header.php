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
        background-color: #fff0f0;
    }
    #header {
        background: rgb(75, 75, 75);
        /* height: 100px; */
        color: #fff;

        max-height: 100px;
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
                <a class="nav-link" href="pinin.php">พินอิน </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    HSK1
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="HSK_menu.php?part=1&&set=1">ชุดที่1</a>
                    <a class="dropdown-item" href="HSK_menu.php?part=2&&set=1">ชุดที่2</a>
                    <a class="dropdown-item" href="HSK_menu.php?part=3&&set=1">ชุดที่3</a>
                    <a class="dropdown-item" href="HSK_menu.php?part=4&&set=1">ชุดที่4</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="hsk1_post.php">แบบทดสอบหลังเรียน</a>
                </div>
            </li>

            <!-- ถ้าคะแนน hsk1 post-test ยังไม่ผ่าน จะไม่ปรากฏ hsk2  -->
            <?php
            include('../../database/database.php');
            $sid = "SID";
            $id = $_SESSION['SID'];
            $check = "SELECT* FROM HSK_Exam_Score WHERE $sid  = $id ";
            $query = mysqli_query($conn, $check);
            $result = mysqli_fetch_assoc($query);

            if ($result['HSK1_Pretest'] >= 20 || $result['HSK1_Posttest'] >= 20) {
                echo ' <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      HSK2
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="HSK_menu.php?part=1&&set=2">ชุดที่1</a>
                      <a class="dropdown-item" href="HSK_menu.php?part=2&&set=2">ชุดที่2</a>
                      <a class="dropdown-item" href="HSK_menu.php?part=3&&set=2">ชุดที่3</a>
                      <a class="dropdown-item" href="HSK_menu.php?part=4&&set=2">ชุดที่4</a>
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
                    <img src="../../img/logout.png" alt="" style="width: 20px; ">
                </a>
            </button>

        </form>
    </div>
</nav>