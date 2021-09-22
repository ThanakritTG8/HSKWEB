<!DOCTYPE html>
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

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pinyin</title>
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
    #pinyin-body {
        background: rgba(255, 255, 255, 0.5);
    }

    #pinyin_lesson {
        margin-bottom: 30px;
    }

    #pinyin-article {
        margin-bottom: 20px;
    }

    #box {
        margin-bottom: 50px;
    }

    #btn-pinyin {
        margin-bottom: 5px;
    }
    #header {
        max-height: none !important;
    }
    .jumbotron{
        margin-bottom: 0px !important;
    }
</style>

<body id="body">
    <!-- <include header> -->
    <?php include('../../layout/header.php'); ?>




    <!-- ////////////////// body -->

     <!-- header -->
            <header class="masthead">
                <div class="jumbotron jumbotron-fluid" id="header">
                    <h3 class="text-center m-3">汉语拼音</h3>
                    <h3 class="text-center m-3">Hànyǔ Pīnyīn</h3>
                    <h3 class="text-center m-3">การสะกดเสียงภาษาจีน (พินอิน)</h3>

                </div>
            </header>

    <div class="container">

        <!-- พยัญชนะ -->
        <div id="pinyin_lesson">
       
        
            <h4 class="header" >
                1. 声母 Shēngmǔ พยัญชนะ
            </h4>
            <div class="card text-left" id="pinyin-body">
                <div class="card-body">
                    <div class="" id="box">
                        <h5 class="card-title" id="pinyin-article">
                            <li>เสียงริมฝีปาก (ยกเว้น f (โฟ) เป็นเสียงริมฝีปากล่าง-ฟันบน)</li>
                        </h5>
                        <button type="button" id="btn-pinyin" onclick="play('b')" class="btn btn-danger">
                            b (โป)</button>
                        <audio id="b" src="../../sound/pinyin1/b.mp3"></audio>
                        <button type="button" id="btn-pinyin" onclick="play('p')" class="btn btn-light">
                            p (โพ)</button>
                        <audio id="p" src="../../sound/pinyin1/p.mp3"></audio>
                        <button type="button" id="btn-pinyin" onclick="play('m')" class="btn btn-light">
                            m (โม)</button>
                        <audio id="m" src="../../sound/pinyin1/m.mp3"></audio>
                        <button type="button" id="btn-pinyin" onclick="play('f')" class="btn btn-light">
                            f (โฟ)</button>
                        <audio id="f" src="../../sound/pinyin1/f.mp3"></audio>
                    </div>
                    <div class="" id="box">
                        <h5 class="card-title" id="pinyin-article">
                            <li>เสียงปลายลิ้น-ปุ่มเหงือก</li>
                        </h5>
                        <button type="button" id="btn-pinyin" onclick="play('d')" class="btn btn-danger">
                            d (เตอ)</button>
                        <audio id="d" src="../../sound/pinyin1/d.mp3"></audio>
                        <button type="button" id="btn-pinyin" onclick="play('t')" class="btn btn-light">
                            t (เทอ)</button>
                        <audio id="t" src="../../sound/pinyin1/t.mp3"></audio>
                        <button type="button" id="btn-pinyin" onclick="play('n')" class="btn btn-light">
                            n (เนอ)</button>
                        <audio id="n" src="../../sound/pinyin1/n.mp3"></audio>
                        <button type="button" id="btn-pinyin" onclick="play('l')" class="btn btn-light">
                            l (เลอ)</button>
                        <audio id="l" src="../../sound/pinyin1/l.mp3"></audio>
                    </div>
                    <div class="" id="box">
                        <h5 class="card-title" id="pinyin-article">
                            <li>เพดานอ่อน</li>
                        </h5>
                        <button type="button" id="btn-pinyin" onclick="play('g')" class="btn btn-light">
                            g (เกอ)</button>
                        <audio id="g" src="../../sound/pinyin1/g.mp3"></audio>
                        <button type="button" id="btn-pinyin" onclick="play('k')" class="btn btn-light">
                            k (เคอ)</button>
                        <audio id="k" src="../../sound/pinyin1/k.mp3"></audio>
                        <button type="button" id="btn-pinyin" onclick="play('h')" class="btn btn-light">
                            h (เฮอ)</button>
                        <audio id="h" src="../../sound/pinyin1/h.mp3"></audio>
                    </div>
                    <div class="" id="box">
                        <h5 class="card-title" id="pinyin-article">
                            <li>เสียงผิวลิ้น-เพดานแข็ง</li>
                        </h5>
                        <button type="button" id="btn-pinyin" onclick="play('j')" class="btn btn-primary">
                            j (จี) *</button>
                        <audio id="j" src="../../sound/pinyin1/j.mp3"></audio>
                        <button type="button" id="btn-pinyin" onclick="play('q')" class="btn btn-primary">
                            q (ชี) *</button>
                        <audio id="q" src="../../sound/pinyin1/q.mp3"></audio>
                        <button type="button" id="btn-pinyin" onclick="play('x')" class="btn btn-primary">
                            x (ซี)</button>
                        <audio id="x" src="../../sound/pinyin1/x.mp3"></audio>
                    </div>

                    <div class="" id="box">
                        <h5 class="card-title" id="pinyin-article">
                            <li>เสียงหน้าปลายลิ้น-หลังฟันบน</li>
                        </h5>
                        <button onclick="play('z')" type="button" id="btn-pinyin" class="btn" style="background: rgb(233, 124, 0);">z
                            (จือ)</button>
                        <audio id="z" src="../../sound//pinyin1/z.mp3"></audio>
                        <button onclick="play('c')" type="button" id="btn-pinyin" class="btn" style="background: rgb(233, 124, 0);">c
                            (ชือ)</button>
                        <audio id="c" src="../../sound//pinyin1/c.mp3"></audio>
                        <button onclick="play('s')" type="button" id="btn-pinyin" class="btn" style="background: rgb(233, 124, 0);">s
                            (ซือ) *</button>
                        <audio id="s" src="../../sound//pinyin1/s.mp3"></audio>
                    </div>

                    <div class="" id="box">
                        <h5 class="card-title" id="pinyin-article">
                            <li>เสียงหลังปลายลิ้น-เพดานแข็งส่วนหน้า (เสียงม้วนลิ้น)</li>
                        </h5>
                        <button onclick="play('zh')" type="button" id="btn-pinyin" class="btn" style="background: rgb(222, 115, 255);">zh
                            (จรือ)</button>
                        <audio id="zh" src="../../sound/pinyin1/zh.mp3"></audio>
                        <button onclick="play('ch')" type="button" id="btn-pinyin" class="btn" style="background: rgb(222, 115, 255);">ch
                            (ชรือ)</button>
                        <audio id="ch" src="../../sound/pinyin1/ch.mp3"></audio>
                        <button onclick="play('sh')" type="button" id="btn-pinyin" class="btn" style="background: rgb(222, 115, 255);">sh
                            (ซรือ)</button>
                        <audio id="sh" src="../../sound/pinyin1/sh.mp3"></audio>
                        <button onclick="play('r')" type="button" id="btn-pinyin" class="btn" style="background: rgb(222, 115, 255);">r
                            (รือ)</button>
                        <audio id="r" src="../../sound/pinyin1/r.mp3"></audio>
                    </div>

                    <div class="" id="box">
                        <div class="card text-left" style="background: rgb(255, 205, 205);">
                            <div class="card-body">
                                <h5 class="card-title" id="pinyin-article">
                                    เคล็ดลับการออกเสียง
                                </h5>

                                <p class="card-text"><b class="text-danger">1) สีแดง </b>ออกเสียงต่างจากภาษาอังกฤษ
                                    คือ <b class="text-danger">b</b>
                                    ออกเสียง <b class="text-danger">โป</b> ไม่ใช่ โบ และ <b class="text-danger">d</b> ออกเสียง <b class="text-danger">เตอ</b> ไม่ใช่ เดอ
                                </p>
                                <p class="card-text"><b class="text-primary">2) สีน้ำเงิน
                                    </b>ให้ยึดอวัยวะการออกเสียง <b class="text-primary">j (จี) *</b> และ
                                    <b class="text-primary">q (ชี) *</b> เป็นหลักในการออกเสียง
                                    <b class="text-primary">x (ซี)</b>
                                </p>
                                <p class="card-text"><b style="color: rgb(233, 124, 0);">3) สีส้ม
                                    </b>ให้ยึดอวัยวะการออกเสียง
                                    <b style="color: rgb(233, 124, 0);">s (ซือ) *</b> เป็นหลักในการออกเสียง
                                    <b style="color: rgb(233, 124, 0);">z (จือ)</b> และ
                                    <b style="color: rgb(233, 124, 0);">c (ชือ)</b>
                                </p>
                                <p class="card-text"><b style="color:rgb(222, 115, 255);">4) สีม่วง
                                    </b>ให้ม้วนลิ้นขึ้นและใช้หลังปลายลิ้นกับเพดานแข็งส่วนหน้าออกเสียง
                                    <b style="color:rgb(222, 115, 255);">zh (จรือ) ch (ชรือ) sh (ซรือ) r (รือ)</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end พยัญชนะ -->

        <!-- สระ -->
        <div id="pinyin_lesson">
            <h4 class="header">
                2. 韵母 Yùnmǔ สระ
            </h4>
            <div class="card text-left" id="pinyin-body">
                <div class="card-body">

                    <div style="background: none; width: 100%; overflow-x: scroll;">
                        <!-- สระเดี่ยว -->
                        <div class="row" id="box">
                            <h5 class="card-title" id="pinyin-article">
                                <li>สระเดี่ยว</li>
                            </h5>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>
                                            <button onclick="play('a')" type="button" id="btn-pinyin" class="btn btn-light">
                                                <b class="text-danger">a</b>
                                                (<b class="text-danger">อา</b>)
                                            </button>
                                            <audio id="a" src="../../sound/pinyin2/a.mp3"></audio>
                                        </td>
                                        <td>
                                            <button onclick="play('o')" type="button" id="btn-pinyin" class="btn btn-light">
                                                <b class="text-danger">o</b>
                                                (<b class="text-danger">โอ</b>)
                                            </button>
                                            <audio id="o" src="../../sound/pinyin2/o.mp3"></audio>
                                        </td>
                                        <td>
                                            <button onclick="play('e')" type="button" id="btn-pinyin" class="btn btn-light">
                                                <b class="text-danger">e</b>
                                                (<b class="text-danger">เออ</b>) /
                                                <b style="color: rgb(36, 18, 197);"> -e (เอ)</b>
                                            </button>
                                            <audio id="e" src="../../sound/pinyin2/e.mp3"></audio>
                                        </td>
                                        <td>
                                            <button onclick="play('i')" type="button" id="btn-pinyin" class="btn btn-light">
                                                <b class="text-danger">i</b>
                                                (<b class="text-danger">อี</b>ย) /
                                                <b style="color: rgb(89, 0, 128);">(อือ)</b>
                                            </button>
                                            <audio id="i" src="../../sound/pinyin2/i.mp3"></audio>
                                        </td>
                                        <td>
                                            <button onclick="play('u')" type="button" id="btn-pinyin" class="btn btn-light">
                                                <b class="text-danger">u</b>
                                                (<b class="text-danger">อู</b>ว)
                                            </button>
                                            <audio id="u" src="../../sound/pinyin2/u.mp3"></audio>
                                        </td>
                                        <td>
                                            <button onclick="play('ü')" type="button" id="btn-pinyin" class="btn btn-light">
                                                <b class="text-danger">ü</b>
                                                (<b class="text-danger">อวี</b>)
                                            </button>
                                            <audio id="ü" src="../../sound/pinyin2/ü.mp3"></audio>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- สระผสม -->
                        <div class="" id="box">
                            <h5 class="card-title" id="pinyin-article">
                                <li>สระผสม</li>
                            </h5>

                            <div class="row" id="box">
                                <table class="table">
                                    <tbody>
                                        <!-- 1st row -->
                                        <tr>
                                            <td>
                                                <button onclick="play('ai')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">a</b>i
                                                    (<b class="text-danger">อา</b>อี=อาย)
                                                </button>
                                                <audio id="ai" src="../../sound/pinyin2/ai.mp3"></audio>
                                            </td>
                                            <td>
                                                <button onclick="play('ou')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">o</b>u
                                                    (<b class="text-danger">โอ</b>อู=โอว)
                                                </button>
                                                <audio id="ou" src="../../sound/pinyin2/ou.mp3"></audio>
                                            </td>
                                            <td>
                                                <button onclick="play('ei')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">e</b>i
                                                    (<b class="text-danger">เออ</b>)/<b class="text-danger">e</b>i
                                                    (<b class="text-danger">เออ</b>อี=เอย)
                                                </button>
                                                <audio id="ei" src="../../sound/pinyin2/ei.mp3"></audio>
                                            </td>
                                            <td>
                                                <button onclick="play('ia')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">i</b>a

                                                    (<b class="text-danger">อี</b>ยา)
                                                </button>
                                                <audio id="ia" src="../../sound/pinyin2/ia.mp3"></audio>
                                            </td>
                                            <td>
                                                <button onclick="play('ua')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">u</b>a
                                                    (<b class="text-danger">อู</b>วา)
                                                </button>
                                                <audio id="ua" src="../../sound/pinyin2/ua.mp3"></audio>
                                            </td>
                                            <td>
                                                <button onclick="play('üe')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">ü</b><b style="color: rgb(36, 18, 197);">e</b>
                                                    (<b class="text-danger">อวี</b><b style="color: rgb(36, 18, 197);">เอ</b>)
                                                </button>
                                                <audio id="üe" src="../../sound/pinyin2/üe.mp3"></audio>
                                            </td>
                                        </tr>

                                        <!-- 2nd row -->
                                        <tr>
                                            <td>
                                                <button onclick="play('ao')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">a</b>o
                                                    (<b class="text-danger">อา</b>โอ=อาว)
                                                </button>
                                                <audio id="ao" src="../../sound/pinyin2/ao.mp3"></audio>
                                            </td>
                                            <td>
                                                <button onclick="play('ong')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">o</b>ng
                                                    (<b class="text-danger">โอ</b>ง)
                                                </button>
                                                <audio id="ong" src="../../sound/pinyin2/ong.mp3"></audio>
                                            </td>
                                            <td>
                                                <button onclick="play('en')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">e</b>n
                                                    (<b class="text-danger">เออ</b>น=เอิน)
                                                </button>
                                                <audio id="en" src="../../sound/pinyin2/en.mp3"></audio>
                                            </td>
                                            <td>
                                                <!-- <button type="button" id="btn-pinyin" class="btn btn-light">
                                                        <b class="text-danger">i</b>ai
                                                        (<b class="text-danger">อี</b>ยาย)
                                                        </button> -->
                                            </td>
                                            <td>
                                                <button onclick="play('uai')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">u</b>ai
                                                    (<b class="text-danger">อู</b>วาย)
                                                </button>
                                                <audio id="uai" src="../../sound/pinyin2/uai.mp3"></audio>
                                            </td>
                                            <td>
                                                <button onclick="play('üan')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">ü</b>an
                                                    (<b class="text-danger">อวี</b>อาน)
                                                </button>
                                                <audio id="üan" src="../../sound/pinyin2/üan.mp3"></audio>
                                            </td>
                                        </tr>

                                        <!-- 3rd row -->
                                        <tr>
                                            <td>
                                                <button onclick="play('an')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">a</b>n
                                                    (<b class="text-danger">อา</b>น)
                                                </button>
                                                <audio id="an" src="../../sound/pinyin2/an.mp3"></audio>
                                            </td>
                                            <td></td>
                                            <td>
                                                <button onclick="play('eng')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">e</b>ng
                                                    (<b class="text-danger">เออ</b>ง=เอิง)
                                                </button>
                                                <audio id="eng" src="../../sound/pinyin2/eng.mp3"></audio>
                                            </td>
                                            <td>
                                                <button onclick="play('iao')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">i</b>ao
                                                    (<b class="text-danger">อี</b>ยาว)
                                                </button>
                                                <audio id="iao" src="../../sound/pinyin2/iao.mp3"></audio>
                                            </td>
                                            <td>
                                                <button onclick="play('uan')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">u</b>an
                                                    (<b class="text-danger">อู</b>วาน)
                                                </button>
                                                <audio id="uan" src="../../sound/pinyin2/uan.mp3"></audio>
                                            </td>
                                            <td>
                                                <button onclick="play('ün')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">ü</b>n
                                                    (<b class="text-danger">อวี</b>น)
                                                </button>
                                                <audio id="ün" src="../../sound/pinyin2/ün.mp3"></audio>
                                            </td>
                                        </tr>

                                        <!-- 4th row -->
                                        <tr>
                                            <td>
                                                <button onclick="play('ang')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">a</b>ng
                                                    (<b class="text-danger">อา</b>ง)
                                                </button>
                                                <audio id="ang" src="../../sound/pinyin2/ang.mp3"></audio>
                                            </td>
                                            <td></td>
                                            <td>
                                                <button onclick="play('er')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">e</b>r
                                                    (<b class="text-danger">เออ</b>ร์)
                                                </button>
                                                <audio id="er" src="../../sound/pinyin2/er.mp3"></audio>
                                            </td>
                                            <td>
                                                <button onclick="play('ian')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">i</b>an
                                                    (<b class="text-danger">อี</b>ยาน)
                                                </button>
                                                <audio id="ian" src="../../sound/pinyin2/ian.mp3"></audio>
                                            </td>
                                            <td>
                                                <button onclick="play('uang')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">u</b>ang
                                                    (<b class="text-danger">อู</b>วาง)
                                                </button>
                                                <audio id="uang" src="../../sound/pinyin2/uang.mp3"></audio>
                                            </td>
                                            <td></td>
                                        </tr>

                                        <!-- 5th row -->
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button onclick="play('iang')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">i</b>ang
                                                    (<b class="text-danger">อี</b>ยาง)
                                                </button>
                                                <audio id="iang" src="../../sound/pinyin2/iang.mp3"></audio>
                                            </td>
                                            <td>
                                                <button onclick="play('uo')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">u</b>o
                                                    (<b class="text-danger">อู</b>โว)
                                                </button>
                                                <audio id="uo" src="../../sound/pinyin2/uo.mp3"></audio>
                                            </td>
                                            <td></td>
                                        </tr>

                                        <!-- 6th row -->
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button onclick="play('ie')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">i</b><b style="color: rgb(36, 18, 197);">e</b>
                                                    (<b class="text-danger">อี</b><b style="color: rgb(36, 18, 197);">เย</b>)
                                                </button>
                                                <audio id="ie" src="../../sound/pinyin2/ie.mp3"></audio>
                                            </td>
                                            <td>
                                                <button onclick="play('uei_ui')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">u</b>ei / -ui
                                                    (<b class="text-danger">อู</b>เวย)
                                                </button>
                                                <audio id="uei_ui" src="../../sound/pinyin2/uei_ui.mp3"></audio>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <!-- 7th row -->
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button onclick="play('iou_iu')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">i</b>ou / -iu
                                                    (<b class="text-danger">อี</b>โยว)
                                                </button>
                                                <audio id="iou_iu" src="../../sound/pinyin2/iou_iu.mp3"></audio>
                                            </td>
                                            <td>
                                                <button onclick="play('uen_un')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">u</b>en / -un
                                                    (<b class="text-danger">อู</b>เวิน)
                                                </button>
                                                <audio id="uen_un" src="../../sound/pinyin2/uen_un.mp3"></audio>
                                            </td>
                                            <td></td>
                                        </tr>

                                        <!-- 8th row -->
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button onclick="play('in')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">i</b>n
                                                    (<b class="text-danger">อี</b>ยิน)
                                                </button>
                                                <audio id="in" src="../../sound/pinyin2/in.mp3"></audio>
                                            </td>
                                            <td>
                                                <button onclick="play('ueng')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">u</b>eng
                                                    (<b class="text-danger">อู</b>เวิง)
                                                </button>
                                                <audio id="ueng" src="../../sound/pinyin2/ueng.mp3"></audio>
                                            </td>
                                            <td></td>
                                        </tr>

                                        <!-- 9th row -->
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button onclick="play('ing')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">i</b>ng
                                                    (<b class="text-danger">อี</b>ยิง)
                                                </button>
                                                <audio id="ing" src="../../sound/pinyin2/ing.mp3"></audio>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                        <!-- 10th row -->
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button onclick="play('iong')" type="button" id="btn-pinyin" class="btn btn-light">
                                                    <b class="text-danger">i</b>ong
                                                    (<b class="text-danger">อี</b>โยง)
                                                </button>
                                                <audio id="iong" src="../../sound/pinyin2/iong.mp3"></audio>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="" id="box">
                        <div class="card text-left" style="background: rgb(255, 205, 205);">
                            <div class="card-body">
                                <h5 class="card-title" id="pinyin-article">
                                    เคล็ดลับการออกเสียง
                                </h5>

                                <p class="card-text">
                                    1) เสียงสระผสม ให้รวบเสียงในส่วน<b class="text-danger"> สีแดง </b>และ
                                    <b>สีดำ </b>เป็นเสียงเดียว 1 พยางค์
                                </p>
                                <p class="card-text">2) <b class="text-danger">ü </b>
                                    (<b class="text-danger">อวี</b>)
                                    เป็นเสียงสระที่รวมเสียง
                                    <b class="text-danger"> i </b>และ
                                    (<b class="text-danger">อี</b>ย)
                                    <b class="text-danger"> u </b>
                                    (<b class="text-danger">อู</b>ว) ไว้ด้วยกัน
                                    เวลาออกเสียง ให้ออกเสียง “<b class="text-danger">i</b>
                                    (<b class="text-danger">อี</b>ย)”
                                    ก่อน แล้วค่อยๆ ห่อปากเสียง
                                    <b class="text-danger">u</b>
                                    (<b class="text-danger">อู</b>ว) โดยรวบให้เป็นเสียงเดียวกัน
                                </p>
                                <p class="card-text">3) <b class="text-danger">e</b>r
                                    (<b class="text-danger">เออ</b>ร์)
                                    ออกเสียงโดยการม้วนลิ้นขึ้น
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="" id="box">
                        <div class="card text-left" style="background: rgb(255, 205, 205);">
                            <div class="card-body">
                                <h5 class="card-title" id="pinyin-article">
                                    การอ่านเสียง
                                    “<b class="text-danger">e</b>” และ
                                    “<b class="text-danger">i</b>”
                                </h5>

                                <p class="card-text">
                                    1. <b class="text-danger">e</b> (<b class="text-danger">เออ</b>)
                                    ถ้าอยู่หลังสุดในสระผสม ให้เปลี่ยนเป็นเสียง -<b class="text-primary">e</b>
                                    (<b class="text-primary">เอ</b>) ได้แก่

                                    <button onclick="play('ie')" class="btn btn-light" type="button">
                                        <b class="text-danger">i</b><b class="text-primary">e</b>
                                        (<b class="text-danger">อี</b><b class="text-primary">เย</b>),
                                        <b class="text-danger">ü</b><b class="text-primary">e</b>
                                        (<b class="text-danger">อวี</b><b class="text-primary">เอ</b>)
                                    </button>
                                </p>
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            2. <b class="text-danger">i</b> ปกติอ่าน “
                                            <b class="text-danger">อี</b>ย”
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-3">เช่น
                                                    <a onclick="play('ji1')" class="btn btn-light">
                                                        j<b class="text-danger">i</b> (จี)
                                                    </a>
                                                    <audio id="ji1" src="../../sound/pinyin2/ji1.mp3"></audio>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a onclick="play('qi')" class="btn btn-light">
                                                        q<b class="text-danger">i</b> (ชี)
                                                    </a>
                                                    <audio id="qi" src="../../sound/pinyin2/qi.mp3"></audio>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a onclick="play('xi')" class="btn btn-light">
                                                        x<b class="text-danger">i</b> (ซี)
                                                    </a>
                                                    <audio id="xi" src="../../sound/pinyin2/xi.mp3"></audio>
                                                </div>
                                                <div class="col-sm-3"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            หากรวมกับ z, c, s และ zh, ch, sh, r ให้อ่าน “
                                            <b style="color: rgb(89, 0, 128);">อือ</b>”
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-3">เช่น
                                                    <a onclick="play('zi')" class="btn btn-light">
                                                        z<b style="color: rgb(89, 0, 128);">i</b> (จือ)
                                                    </a>
                                                    <audio id="zi" src="../../sound/pinyin2/zi.mp3"></audio>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a onclick="play('ci')" class="btn btn-light">
                                                        c<b style="color: rgb(89, 0, 128);">i</b> (ชือ)
                                                    </a>
                                                    <audio id="ci" src="../../sound/pinyin2/ci.mp3"></audio>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a onclick="play('si')" class="btn btn-light">
                                                        s<b style="color: rgb(89, 0, 128);">i</b> (ซือ)
                                                    </a>
                                                    <audio id="si" src="../../sound/pinyin2/si.mp3"></audio>
                                                </div>
                                                <div class="col-sm-3"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6"></div>
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <a onclick="play('zhi')" class="btn btn-light">
                                                        zh<b style="color: rgb(89, 0, 128);">i</b> (จรือ)
                                                    </a>
                                                    <audio id="zhi" src="../../sound/pinyin2/zhi.mp3"></audio>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a onclick="play('chi')" class="btn btn-light">
                                                        ch<b style="color: rgb(89, 0, 128);">i</b> (ชรือ)
                                                    </a>
                                                    <audio id="chi" src="../../sound/pinyin2/chi.mp3"></audio>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a onclick="play('shi')" class="btn btn-light">
                                                        sh<b style="color: rgb(89, 0, 128);">i</b> (ซรือ)
                                                    </a>
                                                    <audio id="shi" src="../../sound/pinyin2/shi.mp3"></audio>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a onclick="play('ri')" class="btn btn-light">
                                                        r<b style="color: rgb(89, 0, 128);">i</b> (รือ)
                                                    </a>
                                                    <audio id="ri" src="../../sound/pinyin2/ri.mp3"></audio>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- end สระ -->

        <!-- วรรณยุกต์ -->
        <div id="pinyin_lesson">
            <h4 class="header">
                3. 声调 Shēngdiào วรรณยุกต์
            </h4>
            <div class="card text-left" id="pinyin-body">
                <div class="card-body">

                    <!-- วรรณยุกต์ -->
                    <!-- desktop display -->
                    <div id="box" style="background: none; width: 100%; overflow-x: scroll;">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">เสียงที่</th>
                                    <th scope="col">เครื่องหมาย</th>
                                    <th scope="col">ระดับเสียง</th>
                                    <th scope="col">ตัวอย่าง</th>
                                    <th scope="col">เทียบเสียงวรรณยุกต์ไทย</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">เสียง 1</th>
                                    <td>ˉ</td>
                                    <td>55</td>
                                    <td>
                                        <a onclick="play('ā')" class="btn btn-light">ā</a>
                                        <audio id="ā" src="../../sound/pinyin3/ā.mp3"></audio>
                                    </td>
                                    <td>คล้ายกับ “เสียงสามัญ” (33)</td>
                                </tr>
                                <tr>
                                    <th scope="row">เสียง 2</th>
                                    <td>ˊ</td>
                                    <td>35</td>
                                    <td>
                                        <a onclick="play('á')" class="btn btn-light">á</a>
                                        <audio id="á" src="../../sound/pinyin3/á.mp3"></audio>
                                    </td>
                                    <td>คล้ายกับ “เสียงจัตวา” (14)</td>
                                </tr>
                                <tr>
                                    <th scope="row">เสียง 3</th>
                                    <td>ˇ</td>
                                    <td>214</td>
                                    <td>
                                        <a onclick="play('ǎ')" class="btn btn-light">ǎ</a>
                                        <audio id="ǎ" src="../../sound/pinyin3/ǎ.mp3"></audio>
                                    </td>
                                    <td>ตรงกับ “เสียงเอก” (21) + “เสียงจัตวา” (14)</td>
                                </tr>
                                <tr>
                                    <th scope="row">เสียง 4</th>
                                    <td>ˋ</td>
                                    <td>51</td>
                                    <td>
                                        <a onclick="play('à')" class="btn btn-light">à</a>
                                        <audio id="à" src="../../sound/pinyin3/à.mp3"></audio>
                                    </td>
                                    <td>คล้ายกับ “เสียงโท” (41)</td>
                                </tr>
                                <tr>
                                    <th scope="row">เสียง 5</th>
                                    <td>ไม่มี</td>
                                    <td>เสียงเบา</td>
                                    <td>เสียงสั้นและเบา</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="title"><b><u>หมายเหตุ</u></b> ระดับเสียง 1 คือ ระดับต่ำสุด 1 และ 5 คือ ระดับสูงสุด
                        </p>
                    </div>
                    <!-- end desktop display -->


                    <div class="" id="box">
                        <div class="card text-left" style="background: rgb(255, 205, 205);">
                            <div class="card-body">
                                <h5 class="card-title" id="pinyin-article">
                                    เคล็ดลับการออกเสียง
                                </h5>

                                <p class="text">
                                    1. เสียง 1, 2 และ 4 คล้ายกับภาษาไทย แต่ออกเสียงกระชับและสูงกว่า
                                </p>
                                <p class="text">
                                    2. เสียง 3 ออกเสียงเอก (21) ก่อน แล้วลากยาวให้เป็นเสียงจัตวา (14)
                                </p>
                                <p class="text">
                                    3. เสียง 5 เป็นเสียงเบา ออกเสียงให้สั้นและเบ
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end วรรณยุกต์ -->

        <!-- การสะกดเสียง -->
        <div id="pinyin_lesson">
            <h4 class="header">
                4. การสะกดเสียง (拼音 Pīnyīn พินอิน)
            </h4>

            <!-- desktop display -->
            <div id="box">
                <div class="card text-left" id="pinyin-body">
                    <div class="card-body" style="width: 100%; overflow-x: scroll;">
                        <div class="m-3" id="box">
                            <li>เสียง 1 พยางค์ ประกอบด้วย พยัญชนะ + สระ + วรรณยุกต์ เช่น</li>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td><button onclick="play('bā')" class="btn btn-light">bā (ปา)</button>
                                        </td>
                                        <audio id="bā" src="../../sound/pinyin4/bā.mp3"></audio>

                                        <td><button onclick="play('bá')" class="btn btn-light">bá (ป๋า)</button>
                                        </td>
                                        <audio id="bá" src="../../sound/pinyin4/bá.mp3"></audio>

                                        <td><button onclick="play('bǎ')" class="btn btn-light">bǎ (ป่า+อ๋า)</button>
                                        </td>
                                        <audio id="bǎ" src="../../sound/pinyin4/bǎ.mp3"></audio>

                                        <td><button onclick="play('bà')" class="btn btn-light">bà (ป้า)</button>
                                        </td>
                                        <audio id="bà" src="../../sound/pinyin4/bà.mp3"></audio>
                                    </tr>
                                    <tr>
                                        <td><button onclick="play('mī')" class="btn btn-light">mī (มี)</button>
                                        </td>
                                        <audio id="mī" src="../../sound/pinyin4/mī.mp3"></audio>
                                        <td><button onclick="play('mí')" class="btn btn-light">mí (หมี)</button>
                                        </td>
                                        <audio id="mí" src="../../sound/pinyin4/mí.mp3"></audio>
                                        <td><button onclick="play('mǐ')" class="btn btn-light">mǐ
                                                (หมี่+อี๋)</button> </td>
                                        <audio id="mǐ" src="../../sound/pinyin4/mǐ.mp3"></audio>
                                        <td><button onclick="play('mì')" class="btn btn-light">mì (มี่)</button>
                                        </td>
                                        <audio id="mì" src="../../sound/pinyin4/mì.mp3"></audio>
                                    </tr>
                                    <tr>
                                        <td><button onclick="play('gū')" class="btn btn-light">gū (กู)</button>
                                        </td>
                                        <audio id="gū" src="../../sound/pinyin4/gū.mp3"></audio>
                                        <td><button onclick="play('gú')" class="btn btn-light">gú (กู๋)</button>
                                        </td>
                                        <audio id="gú" src="../../sound/pinyin4/gú.mp3"></audio>
                                        <td><button onclick="play('gǔ')" class="btn btn-light">gǔ (กู่+อู๋)</button>
                                        </td>
                                        <audio id="gǔ" src="../../sound/pinyin4/gǔ.mp3"></audio>
                                        <td><button onclick="play('gù')" class="btn btn-light">gù (กู้)</button>
                                        </td>
                                        <audio id="gù" src="../../sound/pinyin4/gù.mp3"></audio>
                                    </tr>
                                    <!-- <tr>
                                            <td><button class="btn btn-light">pēn (เพิน)</button> </td>
                                            <td><button class="btn btn-light">pén (เผิน)</button> </td>
                                            <td><button class="btn btn-light">pěn (เผิ่น+เอิ๋น)</button> </td>
                                            <td><button class="btn btn-light">pèn (เผิ้น)</button> </td>
                                        </tr> -->
                                    <tr>
                                        <td><button onclick="play('jiā')" class="btn btn-light">jiā (เจีย)</button>
                                        </td>
                                        <audio id="jiā" src="../../sound/pinyin4/jiā.mp3"></audio>

                                        <td><button onclick="play('jiá')" class="btn btn-light">jiá (เจี๋ย)</button>
                                        </td>
                                        <audio id="jiá" src="../../sound/pinyin4/jiá.mp3"></audio>

                                        <td><button onclick="play('jiǎ')" class="btn btn-light">jiǎ
                                                (เจี่ย+เอี๋ย)</button> </td>
                                        <audio id="jiǎ" src="../../sound/pinyin4/jiǎ.mp3"></audio>

                                        <td><button onclick="play('jià')" class="btn btn-light">jià (เจี้ย)</button>
                                        </td>
                                        <audio id="jià" src="../../sound/pinyin4/jià.mp3"></audio>

                                    </tr>
                                    <tr>
                                        <td><button onclick="play('tiāo')" class="btn btn-light">tiāo
                                                (เทียว)</button> </td>
                                        <audio id="tiāo" src="../../sound/pinyin4/tiāo.mp3"></audio>

                                        <td><button onclick="play('tiáo')" class="btn btn-light">tiáo
                                                (เถียว)</button> </td>
                                        <audio id="tiáo" src="../../sound/pinyin4/tiáo.mp3"></audio>

                                        <td><button onclick="play('tiǎo')" class="btn btn-light">tiǎo
                                                (เถี่ยว+เอี๋ยว)</button> </td>
                                        <audio id="tiǎo" src="../../sound/pinyin4/tiǎo.mp3"></audio>

                                        <td><button onclick="play('tiào')" class="btn btn-light">tiào
                                                (เที่ยว)</button> </td>
                                        <audio id="tiào" src="../../sound/pinyin4/tiào.mp3"></audio>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end desktop display -->

        </div>
        <!-- end การสะกดเสียง-->

        <!-- กฏการเขียนพินอิน -->
        <div id="pinyin_lesson">
            <h4 class="header">
                5. กฏการเขียนพินอิน
            </h4>
            <div class="card text-left" id="pinyin-body">
                <div class="card-body">

                    <!-- 1st box -->
                    <div class="" id="box">
                        <h4><b>“การเปลี่ยนรูป” สระ</b><b class="text-danger"> i, u, ü</b></h4>

                        <p>
                            <li>สระ <b class="text-danger">i, u, ü</b> พยางค์ที่ “สระ” ไม่รวมกับ “พยัญชนะ” เช่น</li>
                        </p>

                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            <b class="text-danger">i</b>
                            เพิ่ม หรือเปลี่ยนเป็น
                            <b class="text-danger">y</b>
                            เช่น <b class="text-danger">i</b> = <b class="text-danger">y</b>i
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <b class="text-danger">i</b>a = <b class="text-danger">y</b>a
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <b class="text-danger">i</b>ai = <b class="text-danger">y</b>ai
                        </p>

                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            <b class="text-danger">u</b> เพิ่ม หรือเปลี่ยนเป็น
                            <b class="text-danger">w</b>
                            เช่น <b class="text-danger">u</b> = <b class="text-danger">w</b>u
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <b class="text-danger">u</b>a = <b class="text-danger">w</b>a
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <b class="text-danger">u</b>ai = <b class="text-danger">w</b>ai
                        </p>

                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            <b class="text-danger">ü</b> เปลี่ยนเป็น
                            <b class="text-danger"></b>yu
                            เช่น
                            <b class="text-danger">ü</b> = <b class="text-danger">yu</b>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <b class="text-danger">ü</b>e = <b class="text-danger">yu</b>e
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <b class="text-danger">ü</b>an = <b class="text-danger">yu</b>an
                        </p>
                    </div>

                    <!-- 2nd box -->
                    <div class="" id="box">
                        <h4><b>“การลดรูป” สระ i<b style="color: blueviolet;">o</b>u,
                                u<b style="color: blueviolet;">e</b>i และ u<b style="color: blueviolet;">e</b>n</b>
                        </h4>

                        <p>
                            <li>สระ i<b style="color: blueviolet;">o</b>u,
                                u<b style="color: blueviolet;">e</b>i,
                                u<b style="color: blueviolet;">e</b>n
                                เมื่อรวมกับพยัญชนะให้ลดรูปโดยตัด <b style="color: blueviolet;">o</b>
                                หรือ <b style="color: blueviolet;">e</b> ออก เช่น </li>
                        </p>

                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            i<b style="color: blueviolet;">o</b>u/-iu เช่น j + i<b style="color: blueviolet;">o</b>u
                            = jiu
                        </p>

                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            u<b style="color: blueviolet;">e</b>i/-ui เช่น s + u<b style="color: blueviolet;">e</b>i
                            = sui</p>

                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            u<b style="color: blueviolet;">e</b>n/-un เช่น l + u<b style="color: blueviolet;">e</b>n
                            = lun</p>
                    </div>

                    <!-- 3nd box -->
                    <div class="" id="box">
                        <h4><b>การเติมวรรณยุกต์บนสระ</b></h4>

                        <p>
                            <li>พยางค์ที่ปรากฏสระเดี่ยวตัวเดียว ให้เติมบนสระตัวนั้น เช่น</li>
                        </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            <b style="color: rgb(255, 123, 0);">à è</b>r <b style="color: rgb(255, 123, 0);">ā</b>n
                            <b style="color: rgb(255, 123, 0);"> ē</b>ng m<b style="color: rgb(255, 123, 0);">ā</b>
                            d<b style="color: rgb(255, 123, 0);">ǒ</b>ng g<b style="color: rgb(255, 123, 0);">é</b>
                            m<b style="color: rgb(255, 123, 0);">é</b>n z<b style="color: rgb(255, 123, 0);">ì</b>
                            x<b style="color: rgb(255, 123, 0);">ì</b>n l<b style="color: rgb(255, 123, 0);">ú</b>n
                            n<b style="color: rgb(255, 123, 0);">ǚ</b> y<b style="color: rgb(255, 123, 0);">ī</b>
                            y<b style="color: rgb(255, 123, 0);">á</b>n w<b style="color: rgb(255, 123, 0);">ǒ</b>
                            w<b style="color: rgb(255, 123, 0);">ǔ</b> y<b style="color: rgb(255, 123, 0);">ú</b>n
                        </p>
                        <p>
                            <li>พยางค์ที่ปรากฏสระเดี่ยวหลายตัว โดยทั่วไปให้เติมบนสระตัวแรก เช่น</li>
                        </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;

                            <b style="color: rgb(255, 123, 0);">à</b>i <b style="color: rgb(255, 123, 0);">à</b>o
                            <b style="color: rgb(255, 123, 0);"> ǒ</b>u g<b style="color: rgb(255, 123, 0);">ǎ</b>i
                            h<b style="color: rgb(255, 123, 0);">ǎ</b>o d<b style="color: rgb(255, 123, 0);">ě</b>i
                            t<b style="color: rgb(255, 123, 0);">ó</b>u y<b style="color: rgb(255, 123, 0);">á</b>o
                            y<b style="color: rgb(255, 123, 0);">ǒ</b>u w<b style="color: rgb(255, 123, 0);">à</b>i
                            w<b style="color: rgb(255, 123, 0);">é</b>i
                        </p>
                        <p>
                            <li>พยางค์ที่ปรากฏสระเดี่ยวหลายตัวที่ขึ้นต้นด้วยสระ
                                <b class="text-danger">i, u, ü</b> ให้เติมบนสระตัวถัดไป เช่น
                            </li>
                        </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            j<b class="text-danger">i</b><b style="color: rgb(255, 123, 0);">ā</b> x<b class="text-danger">i</b><b style="color: rgb(255, 123, 0);">ě</b>
                            p<b class="text-danger">i</b><b style="color: rgb(255, 123, 0);">ā</b>o d<b style="color: rgb(255, 123, 0);">i</b><b style="color: rgb(255, 123, 0);">à</b>n
                            j<b class="text-danger">i</b><b style="color: rgb(255, 123, 0);">ù</b> zh<b class="text-danger">u</b><b style="color: rgb(255, 123, 0);">ā</b>
                            ch<b class="text-danger">u</b><b style="color: rgb(255, 123, 0);">à</b>ng sh<b class="text-danger">u</b><b style="color: rgb(255, 123, 0);">á</b>i
                            q<b class="text-danger">u</b><b style="color: rgb(255, 123, 0);">ē</b> y<b class="text-danger">u</b><b style="color: rgb(255, 123, 0);">á</b>n
                            l<b class="text-danger">ü</b><b style="color: rgb(255, 123, 0);">è</b>
                        </p>
                        <p>
                            <li>หากเติมบนสระ <b class="text-danger">i</b>
                                ให้ตัดจุดออก เช่น b<b class="text-danger">ǐ</b> m<b class="text-danger">í</b>n t<b class="text-danger">ī</b>ng
                            </li>
                        </p>

                        <p>
                            <li>เมื่อพยัญชนะ <b class="text-primary">j q x </b>รวมกับสระที่ขึ้นต้นด้วยสระ
                                <b class="text-danger">ü</b> ให้ตัดจุดบน <b class="text-danger">ü</b> ออก เช่น
                            </li>
                        </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            <b class="text-primary">j</b><b class="text-danger">ǖ</b>n เขียนเป็น <b class="text-primary">j</b><b class="text-danger">ū</b>n
                            <b class="text-primary">q</b><b class="text-danger">ü</b>àn เขียนเป็น <b class="text-primary">q</b><b class="text-danger">u</b>àn
                            <b class="text-primary">x</b><b class="text-danger">ü</b>é เขียนเป็น <b class="text-primary">x</b><b class="text-danger">u</b>é
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end กฏการเขียนพินอิน -->

        <!-- กฏการเขียนพินอิน -->
        <div id="pinyin_lesson">
            <h4 class="header">
                6. กฏการเปลี่ยน “<b class="text-danger">เสียง 3</b>” (<b class="text-danger">ˇ</b>)
            </h4>
            <div class="card text-left" id="pinyin-body">
                <div class="card-body">

                    <!-- desktop display -->
                    <!-- 1st box -->
                    <div style="overflow-x: scroll;" id="box">
                        <h5 class="header">
                            “<b class="text-danger">เสียง 3</b>”(<b class="text-danger">ˇ</b>) ออกเสียงเหมือน “<b class="text-danger">เสียงเอก + เสียงจัตวา</b>” ของไทย)
                        </h5>

                        <p class="title">
                            <li>เมื่อ “<b class="text-danger">เสียง 3</b>” (<b class="text-danger">ˇ</b>)
                                ตามด้วย “<b style="color: darkviolet;">เสียง 1(ˉ), 2(ˊ) และ 4(ˋ)</b>”
                                ให้อ่าน “<b class="text-danger">ครึ่งเสียง 3</b>” (เหมือน “<b class="text-danger">เสียงเอก</b>” ของไทย) เช่น
                            </li>
                        </p>

                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td style="width: 150px;">
                                        <button onclick="play('lǎo_shī')" class="btn btn-light" id="laoshi">
                                            <b style="color: darkviolet;">老师</b>
                                            <b class="text-danger">lǎo</b><b style="color: darkviolet;">shī</b>
                                        </button>
                                        <audio id="lǎo_shī" src="../../sound/pinyin6/lǎo shī.mp3"></audio>

                                    </td>
                                    <td style="width: 150px;">อ่านเป็น</td>
                                    <td>
                                        (<b class="text-danger">เหล่า</b><b style="color: darkviolet;">ซือ</b>)
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 150px;">
                                        <button onclick="play('hǎo_wán')" class="btn btn-light" id="laoshi">
                                            <b style="color: darkviolet;">好玩</b>
                                            <b class="text-danger">hǎo</b><b style="color: darkviolet;">wán</b>
                                        </button>
                                        <audio id="hǎo_wán" src="../../sound/pinyin6/hǎo wán.mp3"></audio>
                                    </td>
                                    <td style="width: 150px;">อ่านเป็น</td>
                                    <td>
                                        (<b class="text-danger">ห่าว</b><b style="color: darkviolet;">หวาน</b>)
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 150px;">
                                        <button onclick="play('kě_shì')" class="btn btn-light" id="laoshi">
                                            <b style="color: darkviolet;">可是</b>
                                            <b class="text-danger">kě</b><b style="color: darkviolet;">shì</b>
                                        </button>
                                        <audio id="kě_shì" src="../../sound/pinyin6/kě shì.mp3"></audio>
                                    </td>
                                    <td style="width: 150px;">อ่านเป็น</td>
                                    <td>
                                        (<b class="text-danger">เข่อ</b><b style="color: darkviolet;">ซื่อ</b>)
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="title">
                            <li>
                                “<b class="text-danger">เสียง 3</b>”(<b class="text-danger">ˇ</b>) ซ้อนกัน <br>
                                <ol>
                                    1. ซ้อนกัน 2 พยางค์【ˇ + ˇ = ˊ + ˇ】ให้อ่านพยางค์แรกเป็น “<b class="text-danger">เสียง
                                        2</b>” (<b class="text-danger">ˊ</b>) เช่น
                                </ol>
                            </li>
                        </p>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td style="width: 150px;">
                                        <b style="color: darkviolet;">nǐ hǎo (หนี่ ห่าว)</b>
                                    </td>
                                    <td style="width: 150px;">อ่านเป็น</td>
                                    <td>
                                        <button onclick="play('nǐ_hǎo')" class="btn btn-light" id="laoshi">
                                            <b class="text-danger">ní</b><b style="color: darkviolet;">hǎo</b>
                                            (<b class="text-danger">หนี</b><b style="color: darkviolet;">ห่าว</b>)
                                        </button>
                                        <audio id="nǐ_hǎo" src="../../sound/pinyin6/nǐ hǎo.mp3"></audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 150px;">
                                        <b style="color: darkviolet;">hěn hǎo (เหิ่น ห่าว)</b>
                                    </td>
                                    <td style="width: 150px;">อ่านเป็น</td>
                                    <td>
                                        <button onclick="play('hén_hǎo')" class="btn btn-light" id="laoshi">
                                            <b class="text-danger">hén</b><b style="color: darkviolet;">hǎo</b>
                                            (<b class="text-danger">เหิน</b><b style="color: darkviolet;">ห่าว</b>)
                                        </button>
                                        <audio id="hén_hǎo" src="../../sound/pinyin6/hén hǎo.mp3"></audio>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="title">
                        <ol>
                            2. ซ้อนกัน 3 พยางค์【ˇ + ˇ + ˇ】ให้อ่านตามการแบ่งคำ ดังนี้
                            <ol>
                                2.1 【ˇ ˇ + ˇ = ˊ ˊ + ˇ】คำแรก 2 พยางค์ คำหลัง 1 พยางค์ ให้อ่าน พยางค์ที่
                                <b style="color: darkviolet;">1</b> และ <b style="color: darkviolet;">2</b> เป็น <b class="text-danger">“เสียง 2” (ˊ)</b> เช่น
                            </ol>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td style="width: 500px;">
                                            <b style="color: darkviolet;">展览</b><b class="text-primary">馆</b>
                                            <b style="color: darkviolet;">zhǎnlǎn</b><b class="text-primary">guǎn</b>
                                            (<b style="color: darkviolet;">จ่านหล่าน</b><b class="text-primary">ก่วน</b>)
                                            <b class="text-primary">หอ</b><b style="color: darkviolet;">นิทรรศการ</b>

                                        </td>
                                        <td style="">อ่านเป็น</td>
                                        <td>
                                            <button onclick="play('zhán_lán_guǎn')" class="btn btn-light" id="laoshi">
                                                <b class="text-danger">zhánlán </b>
                                                <b class="text-primary">guǎn</b>
                                                (<b class="text-danger">จ๋านหลาน </b>
                                                <b class="text-primary">ก่วน</b>)
                                            </button>
                                            <audio id="zhán_lán_guǎn" src="../../sound/pinyin6/zhán lán guǎn.mp3"></audio>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <ol>
                                2.2 【ˇ + ˇ ˇ = ˇ + ˊ ˇ】คำแรก 1 พยางค์ คำหลัง 2 พยางค์ ให้อ่าน พยางค์ที่ <b class="text-primary">2</b> เป็น
                                <b class="text-danger">“เสียง 2” (ˊ)</b> เช่น
                            </ol>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td style="width: 500px;">
                                            <b style="color: darkviolet;">小</b><b class="text-primary">老板</b>
                                            <b style="color: darkviolet;">xiǎo </b><b class="text-primary">lǎobǎn</b>
                                            (<b style="color: darkviolet;">เซี่ยว</b><b class="text-primary">หล่าวป่าน</b>)
                                            <b class="text-primary">เถ้าแก่</b><b style="color: darkviolet;">น้อย</b>
                                        </td>
                                        <td style="">อ่านเป็น</td>
                                        <td>
                                            <button onclick="play('xiǎo_lǎobǎn')" class="btn btn-light" id="laoshi">
                                                <b style="color: darkviolet;">xiǎo </b>
                                                <b class="text-danger">láo</b>
                                                <b class="text-primary">bǎn </b>
                                                (<b style="color: darkviolet;">เซี่ยว </b>
                                                <b class="text-danger">หลาว</b>
                                                <b class="text-primary">ป่าน</b>)
                                            </button>
                                            <audio id="xiǎo_lǎobǎn" src="../../sound/pinyin6/xiǎo lǎobǎn.mp3"></audio>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <ol>
                                2.3) 【ˇ + ˇ + ˇ = ˊ + ˊ + ˇ】3 คำ 3 พยางค์ (คำละ 1 พยางค์) ให้อ่าน พยางค์ที่<b style="color: darkviolet;"> 1</b> และ <b class="text-primary">2</b> เป็น
                                <b class="text-danger">“เสียง 2” (ˊ)</b> เช่น
                            </ol>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td style="width: 500px;">
                                            <b style="color: darkviolet;">我</b><b class="text-primary">很</b><b class="text" style="color: darkgreen;">好</b>
                                            <b style="color: darkviolet;">我</b><b class="text-primary">hěn</b><b class="text" style="color: darkgreen;">hǎo</b>
                                            (<b style="color: darkviolet;">หว่อ</b><b class="text-primary">เหิ่น</b><b class="text" style="color: darkgreen;">ห่าว</b>)
                                            <b style="color: darkviolet;">ฉัน</b><b class="text" style="color: darkgreen;">สบายดี</b><b class="text-primary">มาก</b>
                                        </td>
                                        <td style="">อ่านเป็น</td>
                                        <td>
                                            <button onclick="play('wó_hén_hǎo')" class="btn btn-light" id="laoshi">
                                                <b class="text-danger">wó hén</b>
                                                <b style="color: darkgreen;"> hǎo</b>
                                                (<b class="text-danger">หวอ เหิน </b>
                                                <b style="color: darkgreen;">ห่าว</b>)
                                            </button>
                                            <audio id="wó_hén_hǎo" src="../../sound/pinyin6/wó hén hǎo.mp3"></audio>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <b><u>หมายเหตุ</u></b> การอ่าน <b class="text-danger">“เสียง 3” (ˇ)</b>
                            เปลี่ยนแค่เสียงอ่านไม่ต้องเปลี่ยนรูปการเขียน
                        </ol>
                        </p>

                    </div>
                    <!-- end desktop display -->

                </div>
            </div>
        </div>
        <!-- end กฏการเขียนพินอิน -->

        <!-- กฏการเขียนพินอิน -->
        <div id="pinyin_lesson">
            <h4 class="header">
                7. การเปลี่ยนรูปวรรณยุกต์<b class="text-primary">不 bù (ปู้)</b> และ <b class="text-primary">一 yī
                    (อี)</b>
            </h4>
            <div class="card text-left" id="pinyin-body">
                <div class="card-body">

                    <!-- 1st box -->

                    <!-- desktop display -->
                    <div style="overflow-x: scroll;" id="box">
                        <h5 class="header">
                            1) คำว่า <b class="text-primary">不 bù (ปู้)</b>
                        </h5>
                        <p class="title">
                            <li>
                                ปกติอ่านเป็น <b class="text-primary">“เสียง 4”
                                    <button onclick="play('bù')" class="btn btn-light text-primary">
                                        <b>bù (ปู้)</b>
                                    </button>
                                    <audio id="bù" src="../../sound/pinyin7/bù.mp3"></audio>
                                </b>
                            </li>
                        </p>
                        <p class="title">
                            <li>
                                เมื่ออยู่หน้าคำที่เป็น <b class="text" style="color: darkgreen;">“เสียง 4” (ˋ)</b>
                                เหมือนกัน จะเปลี่ยนรูปเป็น <b class="text-danger">“เสียง 2”
                                    <button onclick="play('bú')" class="btn btn-light text-danger">
                                        <b>bú (ปู๋)</b>
                                    </button>
                                    <audio id="bú" src="../../sound/pinyin7/bú.mp3"></audio>
                                </b> เช่น
                            </li>
                        </p>

                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td style="width: 200px;">
                                        <b class="text-primary">不</b>
                                        <b style="color: darkgreen;">是</b>
                                        <b class="text-primary">bù</b>
                                        <b style="color: darkgreen;">shì</b>
                                        (<b class="text-primary">ปู้</b>
                                        <b style="color: darkgreen;">ซื่อ</b>)
                                    </td>
                                    <td style="width: 150px;">เปลี่ยนรูปเป็น</td>
                                    <td>
                                        <button onclick="play('bú_shi')" class="btn btn-light" id="laoshi">
                                            <b class="text-danger">bú </b><b style="color: darkolivegreen;">shì</b>
                                            (<b class="text-danger">ปู๋ </b><b style="color: darkolivegreen;">ซื่อ</b>)
                                        </button>
                                        <audio id="bú_shi" src="../../sound/pinyin7/bú shi.mp3"></audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">
                                        <b class="text-primary">不</b>
                                        <b style="color: darkgreen;">错</b>
                                        <b class="text-primary">bù</b>
                                        <b style="color: darkgreen;">cuò</b>
                                        (<b class="text-primary">ปู้</b>
                                        <b style="color: darkgreen;">ชั่ว</b>)
                                    </td>
                                    <td style="width: 150px;">เปลี่ยนรูปเป็น</td>
                                    <td>
                                        <button onclick="play('bú_cuò')" class="btn btn-light" id="laoshi">
                                            <b class="text-danger">bú </b><b style="color: darkolivegreen;">cuò</b>
                                            (<b class="text-danger">ปู๋ </b><b style="color: darkolivegreen;">ชั่ว</b>)
                                        </button>
                                        <audio id="bú_cuò" src="../../sound/pinyin7/bú cuò.mp3"></audio>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <h5 class="header">
                            2) คำว่า <b class="text-primary">一 yī (อี)</b>
                        </h5>
                        <p class="title">
                            <li>
                                เมื่อบอกวัน เดือน ปี หรือลำดับที่ เป็นต้น อ่านเป็น <b class="text-primary">“เสียง 1”
                                    yī (อี)</b> เช่น
                            </li>
                        </p>

                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td style="width: 200px;">
                                        <b style="color: darkgreen;">星期</b>
                                        <b class="text-primary">一</b>
                                    </td>
                                    <td style="width: 200px;">
                                        <button onclick="play('xīng_qī_yī')" class="btn btn-light">
                                            <b style="color: darkgreen;">xīngqī</b>
                                            <b class="text-primary"> yī</b>
                                        </button>
                                        <audio id="xīng_qī_yī" src="../../sound/pinyin7/xīng qī yī.mp3"></audio>
                                    </td>
                                    <td style="width: 200px;">
                                        (<b style="color: darkgreen;">ซิงชี </b>
                                        <b class="text-primary">อี</b>)
                                    </td>
                                    <td style="width: 200px;">
                                        <b style="color: darkgreen;">วัน </b>
                                        <b class="text-primary">จันทร์</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">
                                        <b class="text-primary">一</b>
                                        <b style="color: darkgreen;">月</b>
                                    </td>
                                    <td style="width: 200px;">
                                        <button onclick="play('yī_yuè')" class="btn btn-light">
                                            <b class="text-primary">yī </b>
                                            <b style="color: darkgreen;">yuè</b>
                                        </button>
                                        <audio id="yī_yuè" src="../../sound/pinyin7/yī yuè.mp3"></audio>
                                    </td>
                                    <td style="width: 200px;">
                                        (<b class="text-primary">อี </b>
                                        <b style="color: darkgreen;">เย่ว</b>)
                                    </td>
                                    <td style="width: 200px;">
                                        <b style="color: darkgreen;">เดือน </b>
                                        <b class="text-primary">1 มกราคม</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">
                                        <b class="text-primary">一</b>
                                        <b style="color: purple;">九八七</b>
                                        <b style="color: darkgreen;">年</b>
                                    </td>
                                    <td style="width: 200px;">
                                        <button onclick="play('Yījiǔbāqī_nián')" class="btn btn-light">
                                            <b class="text-primary">yī </b>
                                            <b style="color: purple;">jiǔ bā qī </b>
                                            <b style="color: darkgreen;">nián</b>
                                        </button>
                                        <audio id="Yījiǔbāqī_nián" src="../../sound/pinyin7/Yījiǔbāqī nián.mp3"></audio>
                                    </td>
                                    <td style="width: 200px;">
                                        (<b class="text-primary">อี </b>
                                        <b style="color: purple;">จิ่ว ปา ชี </b>
                                        <b style="color: darkgreen;">เหนียน</b>)
                                    </td>
                                    <td style="width: 200px;">
                                        <b style="color: darkgreen;">ปี</b>
                                        <b class="text-primary">1</b><b style="color: purple;">987</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">
                                        <b style="color: purple;">第</b>
                                        <b class="text-primary">一</b>
                                        <b style="color: darkgreen;">次</b>
                                    </td>
                                    <td style="width: 200px;">
                                        <button onclick="play('Dì_yī_cì')" class="btn btn-light">
                                            <b style="color: purple;">dì </b>
                                            <b class="text-primary">yī </b>
                                            <b style="color: darkgreen;">cì</b>
                                        </button>
                                        <audio id="Dì_yī_cì" src="../../sound/pinyin7/Dì yī cì.mp3"></audio>
                                    </td>
                                    <td style="width: 200px;">
                                        (<b style="color: purple;">ตี้ </b>
                                        <b class="text-primary">อี </b>
                                        <b style="color: darkgreen;">ชื่อ</b>)
                                    </td>
                                    <td style="width: 200px;">
                                        <b style="color: darkgreen;">ครั้ง </b>
                                        <b style="color: purple;">ที่ </b>
                                        <b class="text-primary">1</b>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <p class="title">
                            <li>
                                เมื่ออยู่หน้าคำที่เป็น <b class="text" style="color: deeppink;">“เสียง 1” (ˉ) “เสียง
                                    2” (ˊ) และ “เสียง 3” (ˇ) </b>
                                จะเปลี่ยนรูปเป็น <b class="text-danger">“เสียง 4” yì (อี้) </b>เช่น
                            </li>
                        </p>

                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td style="width: 250px;">
                                        <b class="text-primary">一</b>
                                        <b style="color: deeppink;">天</b>
                                        <b class="text-primary">yī </b>
                                        <b style="color: deeppink;">tiān</b>
                                        (<b class="text-primary">อี </b>
                                        <b style="color: deeppink;">เทียน</b>)
                                    </td>
                                    <td style="">
                                        เปลี่ยนรูปเป็น
                                    </td>
                                    <td style="">
                                        <button onclick="play('yì_tiān')" class="btn btn-light">
                                            <b class="text-danger">yì</b>
                                            <b style="color: deeppink;">tiān</b>
                                            (<b class="text-danger">อี้ </b>
                                            <b style="color: deeppink;">เทียน</b>)
                                        </button>
                                        <audio id="yì_tiān" src="../../sound/pinyin7/yì tiān.mp3"></audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 250px;">
                                        <b class="text-primary">一</b>
                                        <b style="color: deeppink;">年</b>
                                        <b class="text-primary">yī </b>
                                        <b style="color: deeppink;">nián</b>
                                        (<b class="text-primary">อี </b>
                                        <b style="color: deeppink;">เหนียน</b>)
                                    </td>
                                    <td style="">
                                        เปลี่ยนรูปเป็น
                                    </td>
                                    <td style="">
                                        <button onclick="play('yì_nián')" class="btn btn-light">
                                            <b class="text-danger">yì</b>
                                            <b style="color: deeppink;">nián</b>
                                            (<b class="text-danger">อี้ </b>
                                            <b style="color: deeppink;">เหนียน</b>)
                                        </button>
                                        <audio id="yì_nián" src="../../sound/pinyin7/yì nián.mp3"></audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 250px;">
                                        <b class="text-primary">一</b>
                                        <b style="color: deeppink;">起</b>
                                        <b class="text-primary">yī </b>
                                        <b style="color: deeppink;">qǐ</b>
                                        (<b class="text-primary">อี </b>
                                        <b style="color: deeppink;">ฉี่</b>)
                                    </td>
                                    <td style="">
                                        เปลี่ยนรูปเป็น
                                    </td>
                                    <td style="">
                                        <button onclick="play('yì_qǐ')" class="btn btn-light">
                                            <b class="text-danger">yì</b>
                                            <b style="color: deeppink;">qǐ</b>
                                            (<b class="text-danger">อี้ </b>
                                            <b style="color: deeppink;">ฉี่</b>)
                                        </button>
                                        <audio id="yì_qǐ" src="../../sound/pinyin7/yì qǐ.mp3"></audio>
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                        <p class="title">
                            <li>
                                เมื่ออยู่หน้าคำที่เป็น <b class="text" style="color: darkgreen;">“เสียง 4” (ˋ)</b>
                                เหมือนกัน จะเปลี่ยนรูปเป็น <b class="text-danger">“เสียง 2” yí (อี๋) </b> เช่น
                            </li>
                        </p>

                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td style="width: 200px;">
                                        <b class="text-primary">一</b>
                                        <b style="color: darkgreen;">次</b>
                                        <b class="text-primary">yī</b>
                                        <b style="color: darkgreen;">cì</b>
                                        (<b class="text-primary">อี</b>
                                        <b style="color: darkgreen;">ชื่อ</b>)
                                    </td>
                                    <td style="width: 150px;">เปลี่ยนรูปเป็น</td>
                                    <td>
                                        <button onclick="play('yí_cì')" class="btn btn-light" id="laoshi">
                                            <b class="text-danger">yí </b><b style="color: darkolivegreen;">cì</b>
                                            (<b class="text-danger">อี๋ </b><b style="color: darkolivegreen;">ชื่อ</b>)
                                        </button>
                                        <audio id="yí_cì" src="../../sound/pinyin7/yí cì.mp3"></audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">
                                        <b class="text-primary">一</b>
                                        <b style="color: darkgreen;">半</b>
                                        <b class="text-primary">yī</b>
                                        <b style="color: darkgreen;">bàn</b>
                                        (<b class="text-primary">อี</b>
                                        <b style="color: darkgreen;">ปั้น</b>)
                                    </td>
                                    <td style="width: 150px;">เปลี่ยนรูปเป็น</td>
                                    <td>
                                        <button onclick="play('yí_bàn')" class="btn btn-light" id="laoshi">
                                            <b class="text-danger">yí </b><b style="color: darkolivegreen;">bàn</b>
                                            (<b class="text-danger">อี๋ </b><b style="color: darkolivegreen;">ปั้น</b>)
                                        </button>
                                        <audio id="yí_bàn" src="../../sound/pinyin7/yí bàn.mp3"></audio>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end desktop display -->

                </div>
            </div>
        </div>
        <!-- end กฏการเขียนพินอิน -->
    </div>


    <!-- //////////////////script -->

    <script>
        function play(au) {
            var audio = document.getElementById(au);
            audio.play();
        }
    </script>

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