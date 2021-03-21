<?php include('../../layout/headerAdmin.php'); ?>
<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .col-12 {
        margin-top: 15px;
    }

    .card-title {
        margin-bottom: 15px;
    }

    .btn-lesson {
        width: 100%;
    }

    .btn-test {
        color: white;
        background-color: #17a6a7;
    }

    .btn-vocab {
        color: white;
        background-color: #0d8671;
    }

    .btn-les {
        color: white;
        background-color: #a75700;
    }

    .btn-posttest {
        color: white;
        background-color: #b80707;
    }

    .col-4 {
        padding: 5px !important;
    }

    @media(min-width:1000px) {
        .edit-menu-card {
            min-width: 1000px;
        }
    }

    @media(max-width:400px) {
        .btn-lesson {
            font-size: 13px !important;
        }
    }
</style>

<div class="container">
    <div class="row edit-menu-card">
        <div class="col-12  col-lg-6">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">HSK 1</h5>
                    <div class="d-flex justify-content-between align-items-center">

                        <span class="card-text">ข้อสอบ Pre-test</span>
                        <a href="#" class="btn btn-test">แก้ไข</a>
                    </div>

                    <hr>
                    <div class="d-flex justify-content-between align-items-center">

                        <span class="card-text">ข้อสอบ Post-test</span>
                        <a href="#" class="btn btn-test">แก้ไข</a>
                    </div>
                    <hr>
                    <p class="card-text">ชุดที่1</p>
                    <div class="row">
                        <div class="col-4"><a href="editVocab.php?part=1&set=1" class="btn btn-vocab  btn-lesson">คำศัพท์</a></div>
                        <div class="col-4"><a href="#" class="btn btn-les btn-lesson">บทเรียน</a></div>
                        <div class="col-4"><a href="#" class="btn  btn-posttest btn-lesson">แบบทดสอบ</a></div>
                    </div>
                    <hr>
                    <p class="card-text">ชุดที่2</p>
                    <div class="row">
                        <div class="col-4"><a href="editVocab.php?part=2&set=1" class="btn btn-vocab btn-lesson">คำศัพท์</a></div>
                        <div class="col-4"><a href="#" class="btn btn-les btn-lesson">บทเรียน</a></div>
                        <div class="col-4"><a href="#" class="btn  btn-posttest btn-lesson">แบบทดสอบ</a></div>
                    </div>
                    <hr>
                    <p class="card-text">ชุดที่3</p>
                    <div class="row">
                        <div class="col-4"><a href="editVocab.php?part=3&set=1" class="btn btn-vocab btn-lesson">คำศัพท์</a></div>
                        <div class="col-4"><a href="#" class="btn btn-les btn-lesson">บทเรียน</a></div>
                        <div class="col-4"><a href="#" class="btn  btn-posttest btn-lesson">แบบทดสอบ</a></div>
                    </div>
                    <hr>
                    <p class="card-text">ชุดที่4</p>
                    <div class="row">
                        <div class="col-4"><a href="editVocab.php?part=4&set=1" class="btn btn-vocab btn-lesson">คำศัพท์</a></div>
                        <div class="col-4"><a href="#" class="btn btn-les btn-lesson">บทเรียน</a></div>
                        <div class="col-4"><a href="#" class="btn  btn-posttest btn-lesson">แบบทดสอบ</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12  col-lg-6">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">HSK 2</h5>
                    <div class="d-flex justify-content-between align-items-center">

                        <p class="card-text">ข้อสอบ Pre-test</p>
                        <a href="#" class="btn btn-test">แก้ไข</a>
                    </div>

                    <hr>
                    <div class="d-flex justify-content-between align-items-center">

                        <p class="card-text">ข้อสอบ Post-test</p>
                        <a href="#" class="btn btn-test">แก้ไข</a>
                    </div>
                    <hr>
                    <p class="card-text">ชุดที่1</p>
                    <div class="row">
                        <div class="col-4"><a href="editVocab.php?part=1&set=2" class="btn btn-vocab btn-lesson">คำศัพท์</a></div>
                        <div class="col-4"><a href="#" class="btn btn-les btn-lesson">บทเรียน</a></div>
                        <div class="col-4"><a href="#" class="btn  btn-posttest btn-lesson">แบบทดสอบ</a></div>
                    </div>
                    <hr>
                    <p class="card-text">ชุดที่2</p>
                    <div class="row">
                        <div class="col-4"><a href="editVocab.php?part=2&set=2" class="btn btn-vocab btn-lesson">คำศัพท์</a></div>
                        <div class="col-4"><a href="#" class="btn btn-les btn-lesson">บทเรียน</a></div>
                        <div class="col-4"><a href="#" class="btn  btn-posttest btn-lesson">แบบทดสอบ</a></div>
                    </div>
                    <hr>
                    <p class="card-text">ชุดที่3</p>
                    <div class="row">
                        <div class="col-4"><a href="editVocab.php?part=3&set=2" class="btn btn-vocab btn-lesson">คำศัพท์</a></div>
                        <div class="col-4"><a href="#" class="btn btn-les btn-lesson">บทเรียน</a></div>
                        <div class="col-4"><a href="#" class="btn  btn-posttest btn-lesson">แบบทดสอบ</a></div>
                    </div>
                    <hr>
                    <p class="card-text">ชุดที่4</p>
                    <div class="row">
                        <div class="col-4"><a href="editVocab.php?part=4&set=2" class="btn btn-vocab btn-lesson">คำศัพท์</a></div>
                        <div class="col-4"><a href="#" class="btn btn-les btn-lesson">บทเรียน</a></div>
                        <div class="col-4"><a href="#" class="btn btn-posttest btn-lesson">แบบทดสอบ</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include('../../layout/footerAdmin.php'); ?>