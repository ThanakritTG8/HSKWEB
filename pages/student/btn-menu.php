<style>
    #Dis_btn_menu {
        background-color: gray;
        max-height: 170px;
        border-radius: 20px;
        font-weight: 20px;
        box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.596);
        margin-top: 30px;
    }
</style>
<?php
include('../../database/database.php');
$sid = "SID";
$id = $_SESSION['SID'];
$HSK = "HSK" . $hsk_set . "_Exercise_Score";
$checkExercise = "SELECT* FROM $HSK WHERE $sid  = $id ";
$queryExercise = mysqli_query($conn, $checkExercise);
$resultExercise = mysqli_fetch_assoc($queryExercise);
?>
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
        <a href='HSK_menu.php?part=1&&hsk_<?= $hsk_set ?>' class="card btn text-center" id="btn_menu">
            <div class="card-body underlineHover">
                <img src="../..//img/storytelling.png" alt="" style="width: 50px; margin-bottom: 20px;">
                <h4 class="card-title">HSK ชุดที่ 1</h4>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <?php if ($resultExercise['hsk' . $hsk_set . '_session_1'] >= 36) : ?>
            <a href="HSK_menu.php?part=2&&hsk_<?= $hsk_set ?>" class="card btn text-center" id="btn_menu">
                <div class="card-body underlineHover">
                    <img src="../..//img/open-book.png" alt="" style="width: 50px; margin-bottom: 20px;">
                    <h4 class="card-title">HSK ชุดที่ 2</h4>
                </div>
            </a>
        <?php else : ?>
            <div class="card btn text-center" id="Dis_btn_menu">
                <div class="card-body">
                    <img src="../..//img/open-book.png" alt="" style="width: 50px; margin-bottom: 20px;">
                    <h4 class="card-title">HSK ชุดที่ 2</h4>

                    <span class="description">จำเป็นต้องผ่านแบบทดสอบ ชุดที่1 </span>

                </div>
            </div>
        <?php endif ?>
    </div>
    <div class="col-sm-2"></div>
</div>
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
        <?php if ($resultExercise['hsk' . $hsk_set . '_session_2'] >= 18) : ?>

            <a href="HSK_menu.php?part=3&&hsk_<?= $hsk_set ?>" class="card btn text-center" id="btn_menu">
                <div class="card-body underlineHover">
                    <img src="../..//img/book.png" alt="" style="width: 50px; margin-bottom: 20px;">
                    <h4 class="card-title">HSK ชุดที่ 3 </h4>
                </div>
            </a>
        <?php else : ?>
            <div class="card btn text-center" id="Dis_btn_menu">
                <div class="card-body">
                    <img src="../..//img/book.png" alt="" style="width: 50px; margin-bottom: 20px;">
                    <h4 class="card-title">HSK ชุดที่ 3</h4>

                    <span class="description">จำเป็นต้องผ่านแบบทดสอบ ชุดที่2 </span>

                </div>
            </div>
        <?php endif ?>
    </div>
    <div class="col-sm-4">
        <?php if ($resultExercise['hsk' . $hsk_set . '_session_3'] >= 18) : ?>

            <a href="HSK_menu.php?part=4&&hsk_<?= $hsk_set ?>" class="card btn text-center" id="btn_menu">
                <div class="card-body underlineHover">
                    <img src="../..//img/books.png" alt="" style="width: 50px; margin-bottom: 20px;">
                    <h4 class="card-title">HSK ชุดที่ 4</h4>
                </div>
            </a>
        <?php else : ?>
            <div class="card btn text-center" id="Dis_btn_menu">
                <div class="card-body">
                    <img src="../..//img/books.png" alt="" style="width: 50px; margin-bottom: 20px;">
                    <h4 class="card-title">HSK ชุดที่ 4</h4>

                    <span class="description">จำเป็นต้องผ่านแบบทดสอบ ชุดที่3 </span>

                </div>
            </div>
        <?php endif ?>
    </div>
    <div class="col-sm-2"></div>
</div>