<?php include_once('../../layout/headerPosttest.php') ?>
<?php if (isset($_GET['session'])) :
    $session = $_GET['session'];
?>
    <div class="container d-grid justify-content-center">
        <div class="timer">
            <div class="timer-body">
                <?php
                $set_time = "0:50:1";
                include_once('../../plugin/alert_time.php');
                ?>
            </div>
        </div>

        <!-- //// ส่วนที่1 -->
        <div class="text-center">
            <p style="background-color: blanchedalmond;">一、听力【1 การฟัง】</p>
            <p> 第一部分【ส่วนที่ 1】</p>
        </div>
        <div class="table-responsive">
            <div class="d-flex justify-content-between align-items-baseline">
                <p>第 1-10 题【ข้อ 1-10】</p>
                <div class="btn btn-play btn-success" id="lesson-btn">
                    Play <i class="fas fa-headphones"></i>
                </div>
            </div>

            <form id="part1_1">
                <table class="table table-bordered text-center responsive">

                    <tr>
                        <td scope="col" rowspan="2" style="padding-top: 30px;" class="col-2 first">例如：</td>
                        <td scope="col">
                            <div> แมว 1 ตัว</div>
                        </td>
                        <td scope="col"><i class="fas fa-check correct"></i></td>

                    </tr>
                    <tr>
                        <td scope="col">ขับรถยนต์</td>
                        <td scope="col"><i class="fas fa-times incorrect"></i></td>
                    </tr>


                    <tbody id="sesion1">
                    </tbody>
                </table>
            </form>
        </div>
        <hr>
        <!-- //// ส่วนที่2 -->
        <div class="text-center">
            <p> 第二部分【ส่วนที่ 2】</p>
        </div>
        <div class="table-responsive">

            <div class="d-flex justify-content-between align-items-baseline">
                <p>第 11-15 题【ข้อ 11-15】</p>
                <div class="btn btn-play btn-success" id="lesson-btn">
                    Play <i class="fas fa-headphones"></i>
                </div>
            </div>
            <table class="table table-bordered text-center responsive">
                <tr>
                    <td scope="col" rowspan="2" style="padding-top: 40px;" class="col-2 first">例如：</td>

                    <td scope="col">
                        <div class="pin-in" style="padding-left: 30px;">Nǐ xǐhuan shénme yánsè ?</div>
                        <div>男：你 喜欢 什么 颜色 ？</div>
                        <div class="pin-in" style="padding-left: 30px;"> Wǒ zuì xǐhuan hóngsè .</div>
                        <div>女： 我 最 喜欢 红色 。</div>
                    </td>
                    <td class="col-2  col-md-1" style="padding-top: 40px;">
                        <input type="text" value="F" style="width:100%" class="text-center" disabled>
                    </td>
                    <td scope="col" class="text-start" style="padding-top: 40px;" id="part1_2_choice1">
                    </td>
                </tr>
                <tbody id="sesion2">
                </tbody>
            </table>

            <p>第 16-20 题【ข้อ 16-20】</p>

            <table class="table table-bordered text-center responsive">

                <tbody id="sesion2-1">
                </tbody>
            </table>

        </div>
        <hr>
        <!-- //// ส่วนที่3 -->
        <div class="text-center">
            <p>第三部分【ส่วนที่ 3】</p>
        </div>
        <div class="table-responsive">
            <div class="d-flex justify-content-between align-items-baseline">
                <p>第 21-30 题【ข้อ 21-30】</p>
                <div class="btn btn-play btn-success" id="lesson-btn">
                    Play <i class="fas fa-headphones"></i>
                </div>
            </div>
            <form id="part1_3">
                <table class="table table-bordered text-center responsive">

                    <tr>
                        <td scope="col" rowspan="2" style="padding-top: 45px;" class="first">例如 :</td>

                        <td scope="col" colspan="3" class="text-left">
                            <div class="pin-in pl-3">Nǐ hǎo, zhège bēizi shì nǐ de ma ?</div>
                            <div>男：你 好，这个 杯子 是 你 的 吗 ？</div>
                            <div class="pin-in pl-3"> Bú shì, wǒ de shì hóngsè de .</div>
                            <div> 女：不 是，我 的 是 红色 的 。</div>
                            <div class="pin-in pl-3"> Nǚ de bēizi shì shénme yánsè de ?</div>
                            <div>问：女 的 杯子 是 什么 颜色 的 ？</div>
                        </td>

                    </tr>
                    <tr>
                        <td scope="col">
                            <div class="pin-in pl-2"> hēisè</div>
                            <div>A 黑色</div>
                        </td>
                        <td scope="col">
                            <div class="pin-in pl-2"> báisè</div>
                            <div>B 白色</div>
                        </td>
                        <td scope="col" class="d-flex justify-content-start align-items-end">
                            <div>
                                <div class="pin-in pl-2"> hóngsè</div>
                                <div>C 红色</div>
                            </div>
                            <i class="fas fa-check correct" style="padding:0px 0px 10px 10px; "></i>
                        </td>
                    </tr>
                    <tbody id="sesion3">
                    </tbody>
                </table>
            </form>
        </div>
        <hr>
        <!-- //// ส่วนที่4 -->
        <div class="text-center">
            <p>第四部分【ส่วนที่ 4】</p>
        </div>
        <div class="table-responsive">
            <div class="d-flex justify-content-between align-items-baseline">
                <p>第 31-35 题【ข้อ 31-35】</p>
                <div class="btn btn-play btn-success" id="lesson-btn">
                    Play <i class="fas fa-headphones"></i>
                </div>
            </div>
            <form id="part1_4">
                <table class="table table-bordered text-center responsive">

                    <tr>
                        <td scope="col" rowspan="2" style="padding-top: 45px;" class="first">例如 :</td>

                        <td scope="col" colspan="3" class="text-left">
                            <div class="pin-in pl-3"> Nǐ jiā lí gōngsī yuǎn ma ?</div>
                            <div>女：你 家 离 公司 远 吗 ？</div>
                            <div class="pin-in pl-3"> Bú tài yuǎn .</div>
                            <div>男：不 太 远 。</div>
                            <div class="pin-in pl-3"> Nǐ měitiān zěnme qù gōngsī ?</div>
                            <div>女：你 每天 怎么 去 公司 ？</div>

                            <div class="pin-in pl-3"> Zuò gōnggòngqìchē .</div>
                            <div>男：坐 公共汽车 。</div>
                            <div class="pin-in pl-3"> Nán de jiā lí gōngsī yuǎn ma ?</div>
                            <div>问：男 的 家 离 公司 远 吗 ？</div>
                        </td>

                    </tr>
                    <tr>
                        <td scope="col">
                            <div class="pin-in pl-2"> hěn jìn</div>
                            <div>A 很 近</div>
                        </td>
                        <td scope="col">
                            <div class="pin-in pl-2"> hěn yuǎn</div>
                            <div> B 很 远</div>
                        </td>
                        <td scope="col" class="d-flex justify-content-start align-items-end">
                            <div>
                                <div class="pin-in pl-2"> bú tài yuǎn</div>
                                <div>C 不 太 远 </div>
                            </div>
                            <i class="fas fa-check correct" style="padding:0px 0px 10px 10px; "></i>
                        </td>
                    </tr>
                    <tbody id="sesion4">
                    </tbody>
                </table>
            </form>
        </div>
        <hr>
        <!-- //// ส่วนที่1 การอ่าน -->
        <div class="text-center">
            <p style="background-color: blanchedalmond;"> 二、阅读【2 การอ่าน】</p>
            <p> 第一部分【ส่วนที่ 1】</p>
        </div>
        <div class="table-responsive">
            <p>第 36-40 题【ข้อ 36-40】</p>

            <table class="table table-bordered text-center responsive">
                <tr>
                    <td scope="col" rowspan="2" class="col-2 pt-2 first">例如：</td>

                    <td scope="col" class="text-start">
                        <div class="pin-in ">Wǒ měitiān zǎoshang dōu yào chūqù pǎobù .</div>
                        <div>我 每天 早上 都 要 出去 跑步 。</div>
                    </td>
                    <td class="col-2  col-md-1 pt-2">
                        <input type="text" value="F" style="width:100%" class="text-center" disabled>
                    </td>
                    <td scope="col pt-2" class="text-start" id="part2_1_choice1">
                    </td>
                </tr>
                <tbody id="sesion2_1">
                </tbody>
            </table>
        </div>
        <hr>
        <!-- //// ส่วนที่2 การอ่าน-->
        <div class="text-center">
            <p> 第二部分【ส่วนที่ 2】</p>
        </div>
        <div class="table-responsive">
            <p>第 41-45 题【ข้อ 41-45】</p>
            <table class="table table-bordered text-center responsive">
                <tr>
                    <td scope="col" rowspan="2" style="padding-top: 20px;" class="first">例如：</td>

                    <td scope="col" class="d-flex justify-content-start align-items-end">
                        <div>
                            <div class="pin-in"> Nǐ de yīfú shì shénme</div>
                            <div> 你 的 衣服 是 什么</div>
                        </div>
                        <div> <span>（ F ）</span>

                        </div>
                        <div>
                            <div class="pin-in">de ?</div>
                            <div> 的 ？</div>
                        </div>

                    </td>
                    <td class="col-2  col-md-1" style="padding-top: 15px;">
                        <input type="text" value="F" style="width:100%" class="text-center" disabled>
                    </td>
                    <td scope="col" class="text-start">
                        <div id="part2_2_choice1" class="pin-in pl-1"> </div>
                        <div id="part2_2_choice2"></div>
                    </td>
                </tr>
                <tbody id="sesion2_2">
                </tbody>
            </table>
        </div>
        <hr>
        <!-- //// ส่วนที่3 การอ่าน -->
        <div class="text-center">
            <p>第三部分【ส่วนที่ 3】</p>
        </div>
        <div class="table-responsive">
            <p>第 46-50 题【ข้อ 46-50】</p>

            <form id="part2_3">
                <table class="table table-bordered text-center responsive">

                    <tr>
                        <td scope="col" rowspan="2" style="padding-top: 80px;" class="col-2 first">例如：</td>
                        <td scope="col" class="text-left">
                            <div class="pin-in ">Xiǎo Wáng shì wǒmen de xīn tóngxué, tā hěn ài bāngzhù rén,</div>
                            <div> 小 王 是 我们 的 新 同学， 他 很 爱 帮助 人，</div>
                            <div class="pin-in ">dàjiā dōu xǐhuan tā .</div>
                            <div>大家 都 喜欢 他 。</div>
                            <div class="pin-in pl-2">Xiǎo Wáng xǐhuan bāngzhù rén .</div>
                            <div>★ 小 王 喜欢 帮助 人 。</div>
                        </td>
                        <td scope="col" style="padding-top: 30px;"><i class="fas fa-check correct"></i></td>

                    </tr>
                    <tr>
                        <td scope="col" class="text-left">
                            <div class="pin-in ">Wǒ xǐhuan chànggē, dàn chàng de bù zěnmeyàng . </div>
                            <div>我 喜欢 唱歌， 但 唱 得 不 怎么样 。</div>
                            <div class="pin-in pl-2"> Nǐ de gē chàng de fēicháng hǎo .</div>
                            <div>★ 你 的 歌 唱 得 非常 好 。</div>
                        </td>
                        <td scope="col" style="padding-top: 30px;"><i class="fas fa-times incorrect"></i></td>
                    </tr>


                    <tbody id="sesion2_3">
                    </tbody>
                </table>
            </form>
        </div>
        <hr>

        <!-- //// ส่วนที่4 การอ่าน -->
        <div class="text-center">

            <p> 第四部分【ส่วนที่ 4】</p>
        </div>
        <div class="table-responsive">
            <p>第 51-55 题【ข้อ 51-55】</p>
            <?php if ($session == 1) : ?>
                <div class="pin-in pl-2">Lǎoshī, wǒ bú huì zuò dì tí . </div>
                <p>A . 老师，我 不 会 做 第 4 题 。</p>
                <div class="pin-in pl-2"> Wǒ yào qù shāngdiàn mǎi dōngxī, nǐ ne?</div>
                <p>B . 我 要 去 商店 买 东西， 你 呢 ？</p>
                <div class="pin-in pl-2"> Duì, wǒ érzi měitiān néng zǒulù qù shàngkè .</div>
                <p>C . 对， 我 儿子 每天 能 走路 去 上课 。</p>
                <div class="pin-in pl-2"> Zhème kuài. Nǐ juéde zěnmeyàng ?</div>
                <p>D . 这么 快 。你 觉得 怎么样 ？</p>
                <div class="pin-in pl-2">Wǒ bú rènshí, kěnéng shì xīn lái de xuésheng .</div>
                <p>E . 我 不 认识， 可能 是 新 来 的 学生 。</p>
                <div class="pin-in pl-2">Méi guānxi, diànyǐng hái méi kāishǐ ne ?</div>
                <p>F . 没 关系， 电影 还 没 开始 呢 ？</p>
            <?php else : ?>
                <div class="pin-in pl-2">Wǒ yào kǎoshì, kǎowán shì zài qù ba .</div>
                <p>A . 我 要 考试， 考完 试 再 去 吧 。</p>
                <div class="pin-in pl-2">Tā hái méi xiàbān. Nǐ shì ……</div>
                <p>B . 他 还 没 下班 。你 是 ……</p>
                <div class="pin-in pl-2">Duì, wǒ érzi měitiān néng zǒulù qù shàngkè .</div>
                <p>C . 对，我 儿子 每天 能 走路 去 上课 。</p>
                <div class="pin-in pl-2">Nà nǐmen yào hē diǎnr chá ma ?</div>
                <p>D . 那 你们 要 喝 点儿 茶 吗 ？</p>
                <div class="pin-in pl-2">Zhè shì yí jiàn ràng wǒ kuàilè de shìqing .</div>
                <p>E . 这 是 一 件 让 我 快乐 的 事情 。</p>
                <div class="pin-in pl-2">Méi guānxi, diànyǐng hái méi kāishǐ ne ?</div>
                <p>F . 没 关系， 电影 还 没 开始 呢 ？</p>

            <?php endif ?>

            <table class="table table-bordered text-center responsive">
                <tr>
                    <td scope="col" rowspan="2" class="col-2 pt-2 first">例如：</td>

                    <td scope="col" class="text-start">
                        <div class="pin-in ">Duìbuqǐ, wǒ lái wǎn le fēnzhōng . </div>
                        <div> 对不起，我 来 晚 了 5 分钟 。</div>
                    </td>
                    <td class="col-2  col-md-1 pt-2">
                        <input type="text" value="F" style="width:100%" class="text-center" disabled>
                    </td>

                </tr>
                <tbody id="sesion2_4">
                </tbody>
            </table>

            <p>第 56-60 题【ข้อ 56-60】</p>
            <?php if ($session == 1) : ?>

                <div class="pin-in pl-2">Zhēn de ma ? Wǒ kànkan .</div>
                <p>A . 真 的 吗 ？ 我 看看 。</p>
                <div class="pin-in pl-2"> Tā xìng Lǐ, jiào Lǐ Hóng, shì wǒ de tóngxué .</div>
                <p>B . 他 姓 李，叫 李 红， 是 我 的 同学 。</p>
                <div class="pin-in pl-2"> Wǎnshang wǒ dìdi hé tā nǚpéngyǒu lái zhèr chī fàn .</div>
                <p>C . 晚上 我 弟弟 和 他 女朋友 来 这儿 吃 饭 。</p>
                <div class="pin-in pl-2">Xiàng qián zǒu, jiù zài lù de zuǒbiān .</div>
                <p>D . 向 前 走，就 在 路 的 左边 。</p>
                <div class="pin-in pl-2">Wǒ kěnéng zài fēijī shang .</div>
                <p>E . 我 可能 在 飞机 上 。</p>

            <?php else : ?>

                <div class="pin-in pl-2"> Tā shì fàndiàn fúwùyuán .</div>
                <p>A . 他 是 饭店 服务员 。</p>
                <div class="pin-in pl-2">Méi wèntí, fēicháng huānyíng .</div>
                <p>B . 没 问题， 非常 欢迎 。</p>
                <div class="pin-in pl-2"> Suīrán tiān qíng le, dànshì wàimiàn hái hěn lěng . </div>
                <p>C . 虽然 天 晴 了，但是 外面 还 很 冷 。</p>
                <div class="pin-in pl-2">Yīnwèi tā bìng le, jīntiān méi qù xuéxiào .</div>
                <p>D . 因为 他 病 了，今天 没 去 学校 。</p>
                <div class="pin-in pl-2">Duì, wǒ měitiān zǒulù qù shàngbān .</div>
                <p>E . 对， 我 每天 走路 去 上班 。</p>


            <?php endif ?>
            <table class="table table-bordered text-center responsive ">
                <tbody id="sesion2_4_1">
                </tbody>
            </table>
        </div>
        <hr>

        <div class="d-flex justify-content-center mt-1 mb-4">
            <?php $mess_send = "ส่งคำตอบ";
            include_once('../../plugin/sent_button.php')
            ?>
        </div>

    </div>



<?php endif ?>
<?php include_once('../../layout/footerPretest.php') ?>
<script>
    $(function() {

        $.getJSON("posttest_hsk2.json", function(result) {
            const session = <?= $session ?>;
            const dataSession = session === 1 ? result.session_1 : result.session_2;
            //// ส่วนที่1
            const part1 = dataSession.listen.part1;
            const data = [];
            part1.forEach((e, i) => {
                let setAnswer = [];
                if (e.answer) {
                    setAnswer.push(1, 0);
                } else {
                    setAnswer.push(0, 1);
                }
                let td = `<tr> <th scope="row" class="first">${i+1}</th>
                        <td>${e.topic}</td>
                        <td class="col-4">
                            <div class="form-check form-check-inline">
                                <input  type="radio" id="topic1_1_${i+1}"  name="no${i+1}" value="${setAnswer[0]}">
                                <label  for="topic1_1_${i+1}">true</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input  type="radio" id="topic1_2_${i+2}"  name="no${i+1}" value="${setAnswer[1]}">
                                <label  for="topic1_2_${i+2}">false</label>
                            </div>
                        </td>
                    </tr>`;
                data.push(td);
            });
            $("#sesion1").html(data);

            //// ส่วนที่2 
            const choice_1 = dataSession.listen.part2.choice_1;
            const answer2 = dataSession.listen.part2.answer;
            const choice_2 = dataSession.listen.part2.choice_2;
            const data_part2_1 = [];
            const data_part2_2 = [];
            choice_2.forEach((e, i) => {
                let td = `<tr>
                            <th scope="col" class="first">${i+11}</th>
                            <td scope="col" class="col-4">
                            

                            </td>
                            <td class="col-2  col-md-1" >
                                <input type="text" style="width:100%" class="text-center" maxlength="1" id="no${i+1}">
                            </td>
                            <td scope="col" class="text-start" >
                                <div>${choice_1[i+1]}</div>
                            </td>
                        </tr>`;

                let td_2 = `<tr>
                            <th scope="col" class="col-2 first">${i+16}</th>
                            <td scope="col" class="col-4">
                            

                            </td>
                            <td class="col-2  col-md-1" >
                                <input type="text" style="width:100%" class="text-center" maxlength="1" id="no${i+6}">
                            </td>
                            <td scope="col" class="text-start">
                                <div>${choice_2[i]}</div>
                            </td>
                        </tr>`;
                data_part2_1.push(td);
                data_part2_2.push(td_2);
            });
            $("#sesion2").html(data_part2_1);
            $("#sesion2-1").html(data_part2_2);
            $("#part1_2_choice1").html(choice_1[0]);
            //// ส่วนที่3
            const part3 = dataSession.listen.part3;
            const data_part3 = [];

            part3.forEach((e, i) => {
                let setAnswer = [];
                if (e.answer == 'a') {
                    setAnswer.push(1, 0, 0);
                } else if (e.answer == 'b') {
                    setAnswer.push(0, 1, 0);
                } else setAnswer.push(0, 0, 1);
                let td = `<tr> <th scope="row" class="first">${i+21}</th>
                        <td class="text-left">
                            <div class="form-check form-check-inline">
                                <input  type="radio" id="topic3_1_${i}" name="no${i+1}" value="${setAnswer[0]}" >
                                <label for="topic3_1_${i}">
                                <div class="pin-in pl-2">${e.topic[0].pinin}</div>
                                <div>${e.topic[0].ch}</div>
                                </label>
                            </div>
                        </td><td class="text-left">
                            <div class="form-check form-check-inline">
                                <input  type="radio" id="topic3_2_${i+1}" name="no${i+1}" value="${setAnswer[1]}" >
                                <label for="topic3_2_${i+1}">
                                <div class="pin-in pl-2">${e.topic[1].pinin}</div>
                                <div>${e.topic[1].ch}</div>
                                </label>
                            </div>
                        </td><td class="text-left">
                        <div class="form-check form-check-inline">
                                <input  type="radio" id="topic3_3_${i+2}" name="no${i+1}" value="${setAnswer[2]}" >
                                <label for="topic3_3_${i+2}">
                                <div class="pin-in pl-2">${e.topic[2].pinin}</div>
                                <div>${e.topic[2].ch}</div>
                                </label>
                            </div>
                        </td>
                    </tr>`;
                data_part3.push(td);
            });

            $("#sesion3").html(data_part3);

            //// ส่วนที่4
            const part4 = dataSession.listen.part4;
            const data_part4 = [];

            part4.forEach((e, i) => {
                let setAnswer = [];
                if (e.answer == 'a') {
                    setAnswer.push(1, 0, 0);
                } else if (e.answer == 'b') {
                    setAnswer.push(0, 1, 0);
                } else setAnswer.push(0, 0, 1);
                let td = `<tr> <th scope="row" class="first">${i+31}</th>
                        <td class="text-left">
                            <div class="form-check form-check-inline">
                                <input  type="radio" id="topic4_1_${i}" name="no${i+1}" value="${setAnswer[0]}" >
                                <label for="topic4_1_${i}">
                                <div class="pin-in pl-2">${e.topic[0].pinin}</div>
                                <div>${e.topic[0].ch}</div>
                                </label>
                            </div>
                        </td><td class="text-left">
                            <div class="form-check form-check-inline">
                                <input  type="radio" id="topic4_2_${i+1}" name="no${i+1}" value="${setAnswer[1]}" >
                                <label for="topic4_2_${i+1}">
                                <div class="pin-in pl-2">${e.topic[1].pinin}</div>
                                <div>${e.topic[1].ch}</div>
                                </label>
                            </div>
                        </td><td class="text-left">
                        <div class="form-check form-check-inline">
                                <input  type="radio" id="topic4_3_${i+2}" name="no${i+1}" value="${setAnswer[2]}" >
                                <label for="topic4_3_${i+2}">
                                <div class="pin-in pl-2">${e.topic[2].pinin}</div>
                                <div>${e.topic[2].ch}</div>
                                </label>
                            </div>
                        </td>
                    </tr>`;
                data_part4.push(td);
            });

            $("#sesion4").html(data_part4);



            //// ส่วนที่1 การอ่าน
            const topic = dataSession.reading.part1.topic;
            const choice2_1 = dataSession.reading.part1.choice;
            const answer2_1 = dataSession.reading.part1.answer;
            const data_read_1 = [];
            topic.forEach((e, i) => {
                let td = `<tr>
                            <th scope="col" class="first">${i+36}</th>
                            <td scope="col" class="col-6 text-start">
                            <div class="pin-in">${e.pinin} </div>
                            <div>${e.ch} </div>
                            </td>
                            <td class="col-2  col-md-1" >
                                <input type="text" style="width:100%" class="text-center" maxlength="1" id="no_1_${i+1}">
                            </td>
                            <td scope="col" class="text-start">
                                <div>${choice2_1[i+1]}</div>
                            </td>
                        </tr>`;


                data_read_1.push(td);
            });
            $("#sesion2_1").html(data_read_1);
            $("#part2_1_choice1").html(choice2_1[0]);


            //// ส่วนที่2 การอ่าน
            const part2_2 = dataSession.reading.part2.topic;
            const choice2_2 = dataSession.reading.part2.choice;
            const answer2_2 = dataSession.reading.part2.answer;
            const data_read_2 = [];
            part2_2.forEach((e, i) => {
                let td
                if (e.pinin_end) {
                    td = `<tr>
                            <th scope="col" class="first">${i+41}</th>
                            <td scope="col" class="d-flex justify-content-start extream">
                            <div>
                            <div class="pin-in">${e.pinin}</div>
                            <div>${e.ch}</div>
                            </div>
                             <span style="min-width: 60px;">（  ） </span>
                            <div>
                            <div class="pin-in">${e.pinin_end}</div>
                            <div>${e.ch_end}</div>
                            </div>
                            </td>
                            <td class="col-2  col-md-1" >
                                <input type="text" style="width:100%" class="text-center" maxlength="1" id="no_2_${i+1}">
                            </td>
                            <td scope="col" class="text-start" >
                                <div class="pin-in pl-2">${choice2_2[i+1].pinin}</div>
                                <div >${choice2_2[i+1].ch}</div>
                            </td>
                        </tr>`;
                } else if (e.pinin_sec) {
                    if (e.pinin_sec_end) {
                        td = `<tr>
                            <th scope="col" style="padding-top: 30px;" class="first ">${i+41}</th>
                            <td scope="col" class=" justify-content-start extream">
                            <div class="text-start">
                            <div class="pin-in pl-2">${e.pinin}</div>
                            <div>${e.ch}</div>
                            </div>

                            <div class="d-flex justify-content-start">
                           
                            <div>
                            <div class="pin-in pl-2">${e.pinin_sec}</div>
                            <div>${e.ch_sec} <span style="min-width: 60px;">（  ） </span></div>
                            </div>
                            <div>
                            <div class="pin-in ">${e.pinin_sec_end}</div>
                            <div>${e.ch_sec_end}</div>
                            </div>

                       

                            </div>
                            </td>
                            <td class="col-2  col-md-1" style="padding-top: 30px;" >
                                <input type="text" style="width:100%" class="text-center" maxlength="1" id="no_2_${i+1}">
                            </td>
                            <td scope="col" class="text-start" style="padding-top: 20px;">
                            <div class="pin-in pl-2">${choice2_2[i+1].pinin}</div>
                                <div >${choice2_2[i+1].ch}</div>
                            </td>
                        </tr>`;
                    }

                } else {
                    td = `<tr>
                            <th scope="col" class="first">${i+41}</th>
                            <td scope="col" class="d-flex justify-content-start extream">
                            <div>
                            <div class="pin-in">${e.pinin}</div>
                            <div>${e.ch}</div>
                            </div>
                            <div style="min-width: 60px;"> <span>（  ） 。</span></div>
                            </td>
                            <td class="col-2  col-md-1" >
                                <input type="text" style="width:100%" class="text-center" maxlength="1" id="no_2_${i+1}">
                            </td>
                            <td scope="col" class="text-start" >
                                <div class="pin-in pl-2">${choice2_2[i+1].pinin}</div>
                                <div >${choice2_2[i+1].ch}</div>
                            </td>
                        </tr>`;
                }
                data_read_2.push(td);
            });
            $("#sesion2_2").html(data_read_2);
            $("#part2_2_choice1").html(choice2_2[0].pinin);
            $("#part2_2_choice2").html(choice2_2[0].ch);


            //// ส่วนที่3 การอ่าน
            const part2_3 = dataSession.reading.part3;
            const data2_3 = [];
            part2_3.forEach((e, i) => {
                let setAnswer = [];
                if (e.answer) {
                    setAnswer.push(1, 0);
                } else {
                    setAnswer.push(0, 1);
                }
                let td = `<tr> <th scope="row" class="first">${i+46}</th>
                        <td class="text-left">
                        <div class="pin-in ">${e.topic.pinin}</div>
                        <div>${e.topic.ch}</div>
                        <div class="pin-in ">${e.topic.pinin_sec}</div>
                        <div>${e.topic.ch_sec}</div>
                        <div class="pin-in pl-2">${e.topic.pinin_thr}</div>
                        <div>${e.topic.ch_thr}</div>
                        
                        
                        </td>
                        <td class="col-4 pt-3">
                            <div class="form-check form-check-inline">
                                <input  type="radio" id="topic2_1_${i+1}"  name="no${i+1}" value="${setAnswer[0]}">
                                <label  for="topic2_1_${i+1}">true</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input  type="radio" id="topic2_2_${i+2}"  name="no${i+1}" value="${setAnswer[1]}">
                                <label  for="topic2_2_${i+2}">false</label>
                            </div>
                        </td>
                    </tr>`;
                data2_3.push(td);
            });
            $("#sesion2_3").html(data2_3);



            //// ส่วนที่4 การอ่าน
            const topic_2_4 = dataSession.reading.part4.topic;
            const topic_2_4_1 = dataSession.reading.part4.topic_1;
            const answer2_4 = dataSession.reading.part4.answer;
            const answer2_4_1 = dataSession.reading.part4.answer_1;
            const data_read_4 = [];
            const data_read_4_1 = [];
            topic_2_4.forEach((e, i) => {
                let td = `<tr>
                            <th scope="col" class="col-2 first" >${i+51}</th>
                            <td scope="col" class="col-6 text-start">
                            <div class="pin-in">${e.pinin} </div>
                            <div>${e.ch} </div>
                            </td>
                            <td class="col-2  col-md-1" >
                                <input type="text" style="width:100%" class="text-center" maxlength="1" id="no_4_${i+1}" autocomplete='off'>
                            </td>
                           
                        </tr>`;
                let td_1 = `<tr>
                            <th scope="col" class="col-2 first">${i+56}</th>
                            <td scope="col" class="col-6 text-start">
                            <div class="pin-in">${topic_2_4_1[i].pinin} </div>
                            <div>${topic_2_4_1[i].ch} </div>
                            </td>
                            <td class="col-2  col-md-1" >
                                <input type="text" style="width:100%" class="text-center" maxlength="1" id="no_5_${i+1}">
                            </td>
                           
                        </tr>`;


                data_read_4.push(td);
                data_read_4_1.push(td_1);
            });
            $("#sesion2_4").html(data_read_4);
            $("#sesion2_4_1").html(data_read_4_1);


            $("#send").click(() => {
                Swal.fire({
                    icon: 'question',
                    title: 'คุณต้องการจะส่งคำตอบ ?',
                    showCancelButton: true,
                    showConfirmButton: true,
                    confirmButtonText: `ยืนยัน`,
                    cancelButtonText: `ยกเลิก`
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.fn.countScore();
                    }
                })

            });

            $.fn.count_part2 = function(answers, listen, part) {
                let sum = 0;
                if (listen) {
                    answers.forEach((e, i) => {
                        let input_answer = $(`#no${i+1}`).val().toLowerCase();
                        if (e == input_answer) {
                            sum += 1;
                        }
                    });
                } else {
                    answers.forEach((e, i) => {
                        let input_answer = $(`#no_${part}_${i+1}`).val().toLowerCase();
                        if (e == input_answer) {
                            sum += 1;
                        }
                    });
                }

                return sum;
            }
            $.fn.count = function(param, a, listen) {
                let sum = 0;
                if (listen) {
                    param.forEach((e, i) => {
                        let num = parseInt($(`input[name=no${i+1}]:checked`, `#part1_${a}`).val());
                        if (num) {
                            sum += num
                        }
                    });
                } else {
                    param.forEach((e, i) => {
                        let num = parseInt($(`input[name=no${i+1}]:checked`, `#part2_${a}`).val());
                        if (num) {
                            sum += num
                        }
                    });
                }

                return sum;
            }
            $.fn.countScore = function() {
                // listen
                const sum_part1 = $.fn.count(part1, 1, true);
                const sum_part2 = $.fn.count_part2(answer2, true);
                const sum_part3 = $.fn.count(part3, 3, true);
                const sum_part4 = $.fn.count(part4, 4, true);

                let total_listen = sum_part1 + sum_part2 + sum_part3 + sum_part4;
                //reading 
                const sum_part2_1 = $.fn.count_part2(answer2_1, false, 1);
                const sum_part2_2 = $.fn.count_part2(answer2_2, false, 2);
                const sum_part2_3 = $.fn.count(part2_3, 3);
                const sum_part2_4 = $.fn.count_part2(answer2_4, false, 4);
                const sum_part2_4_1 = $.fn.count_part2(answer2_4_1, false, 5);

                let total_read = sum_part2_1 + sum_part2_2 + sum_part2_3 + sum_part2_4 + sum_part2_4_1;

                let total = total_listen + total_read
                console.log(total);
                ///send score
                //     var xmlhttp = new XMLHttpRequest();
                //     xmlhttp.onreadystatechange = function() {
                //         if (this.readyState == 4 && this.status == 200) {
                //             if (total >= 36) {
                //                 Swal.fire({
                //                     icon: 'success',
                //                     title: 'สอบผ่าน',
                //                     text: `คุณได้คะแนนสอบ ${total} คะแนน`,
                //                     confirmButtonText: `ยืนยัน`,
                //                 }).then((result) => {
                //                     window.location.href = "../student/index.php"
                //                 })
                //             } else {
                //                 Swal.fire({
                //                     icon: 'error',
                //                     title: 'สอบไม่ผ่าน',
                //                     text: `คุณได้คะแนนสอบ ${total} คะแนน`,
                //                     confirmButtonText: `ยืนยัน`,
                //                 }).then((result) => {
                //                     window.location.href = "../student/index.php"
                //                 })
                //             }
                //         }
                //     };
                //     xmlhttp.open("GET", "../../models/submitTest.php?score=" + total + "&&hsk=2", true);
                //     xmlhttp.send();

            }

        });
    });
</script>