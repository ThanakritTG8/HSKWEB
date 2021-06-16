<?php include_once('../../layout/headerPretest.php') ?>

<div class="container d-grid justify-content-center">
    <div class="timer">
        <div class="timer-body">
            <?php
            $set_time = "0:30:1";
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
        <p>第 1-5 题【ข้อ 1-5】</p>

        <form id="part1_1">
            <table class="table table-bordered text-center responsive">

                <tr>
                    <td scope="col" rowspan="4" style="padding-top: 90px;" class="first">例如 :</td>
                    <td scope="col">
                        <div class="pin-in"> hěn xǐhuan</div>
                        <div> 很 喜欢</div>
                    </td>
                    <td scope="col" rowspan="2" style="padding-top: 50px; "><i class="fas fa-check correct"></i></td>

                </tr>
                <tr>
                    <td scope="col">ชอบมาก</td>

                </tr>
                <tr>
                    <td scope="col">
                        <div class="pin-in">kàn shū </div>
                        <div> 看 书</div>
                    </td>
                    <td scope="col" rowspan="2" style="padding-top: 50px; color:red"><i class="fas fa-times"></i></td>

                </tr>
                <tr>
                    <td scope="col">กินผลไม้</td>
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
        <p>第 6-10 题【ข้อ 6-10】</p>
        <form id="part1_2">
            <table class="table table-bordered text-center responsive">

                <tr>
                    <td scope="col" rowspan="2" style="padding-top: 45px;" class="first">例如 :</td>

                    <td scope="col" colspan="3">
                        <div class="pin-in">Wǒ xiǎng chī shuǐguǒ .</div>
                        <div>我 想 吃 水果 。</div>
                    </td>

                </tr>
                <tr>
                    <td scope="col"> A ดื่มน้ำ
                    </td>
                    <td scope="col"> B ซื้อเสื้อผ้า </td>
                    <td scope="col">C กินผลไม้ <i class="fas fa-check correct"></i></td>
                </tr>
                <tbody id="sesion2">
                </tbody>
            </table>
        </form>
    </div>
    <hr>
    <!-- //// ส่วนที่3 -->
    <div class="text-center">
        <p> 第三部分【ส่วนที่ 3】</p>
    </div>
    <div class="table-responsive">
        <p>第 11-15 题【ข้อ 11-15】</p>
        <form id="part1_3">
            <table class="table table-bordered text-center responsive">
                <tr>
                    <td scope="col" rowspan="2" style="padding-top: 40px;" class="first">例如：</td>

                    <td scope="col">
                        <div style="padding-left: 30px;" class="pin-in">Nǐ xǐhuan kàn shū ma ?</div>
                        <div>男：你 喜欢 看 书 吗 ？</div>
                        <div style="padding-left: 30px;" class="pin-in">Hěn xǐhuan .</div>
                        <div>女：很 喜欢 。</div>
                    </td>
                    <td class="col-2  col-md-1" style="padding-top: 40px;">
                        <input type="text" id="disabledTextInput" value="F" style="width:100%" class="text-center" disabled>
                    </td>
                    <td scope="col" style="padding-top: 35px;" id="part3_choice1">
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
        <p> 第四部分【ส่วนที่ 4】</p>
    </div>
    <div class="table-responsive">
        <p>第 16-20 题【ข้อ 16-20】</p>
        <form id="part1_4">
            <table class="table table-bordered text-center responsive">

                <tr>
                    <td scope="col" rowspan="2" style="padding-top: 60px;" class="first">例如：</td>

                    <td scope="col" colspan="3">
                        <div class="pin-in">Shàngwǔ tā qù shūdiàn mǎi shū.</div>
                        <div>上午 他 去 书店 买 书</div>
                        <div class="pin-in pl-2"> Tā shàngwǔ qù nǎlǐ ?</div>
                        <div>问：他 上午 去 哪里 ？</div>
                    </td>

                </tr>
                <tr>
                    <td scope="col">
                        <div class="pin-in pl-2"> fàndiàn</div>
                        <div>A 饭店</div>
                    </td>
                    <td scope="col">
                        <div class="pin-in pl-2"> shāngdiàn</div>
                        <div>B 商店</div>
                    </td>
                    <td scope="col">
                        <div class="pin-in pl-2"> shūdiàn </div>
                        <div>C 书店 <i class="fas fa-check correct"></i></div>
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
        <p style="background-color: blanchedalmond;">二、阅读【2 การอ่าน】</p>
        <p>第一部分【ส่วนที่ 1】</p>
    </div>
    <div class="table-responsive">
        <p>第 21-25 题【ข้อ 21-25】</p>

        <form id="part2_1">
            <table class="table table-bordered text-center responsive">

                <tr>
                    <td scope="col" rowspan="4" style="padding-top: 50px;" class="first">例如 :</td>
                    <td scope="col">ผลไม้</td>
                    <td scope="col">
                        <div class="pin-in"> shuǐguǒ</div>
                        <div> 水果</div>
                    </td>
                    <td scope="col" style="padding-top: 15px; "><i class="fas fa-check correct"></i></td>

                </tr>

                <tr>
                    <td scope="col">หนังสือ</td>
                    <td scope="col">
                        <div class="pin-in">diànnǎo</div>
                        <div> 电脑</div>
                    </td>
                    <td scope="col" style="padding-top: 15px; color:red"><i class="fas fa-times"></i></td>

                </tr>


                <tbody id="sesion2_1">
                </tbody>
            </table>
        </form>
    </div>
    <hr>
    <!-- //// ส่วนที่2 การอ่าน-->
    <div class="text-center">
        <p> 第二部分【ส่วนที่ 2】</p>
    </div>
    <div class="table-responsive">
        <p>第 26-30 题【ข้อ 26-30】</p>
        <form id="part2_2">
            <table class="table table-bordered text-center responsive">
                <tr>
                    <td scope="col" rowspan="2" style="padding-top: 20px;" class="first">例如：</td>

                    <td scope="col">
                        <div class="pin-in">Wǒ hěn xǐhuan chī shuǐguǒ .</div>
                        <div>我 很 喜欢 吃 水果 。</div>
                    </td>
                    <td class="col-2  col-md-1" style="padding-top: 20px;">
                        <input type="text" id="disabledTextInput" value="F" style="width:100%" class="text-center" disabled>
                    </td>
                    <td scope="col" style="padding-top: 20px;" id="part2_2_choice1">

                    </td>
                </tr>
                <tbody id="sesion2_2">
                </tbody>
            </table>
        </form>
    </div>
    <hr>
    <!-- //// ส่วนที่3 การอ่าน-->
    <div class="text-center">
        <p> 第三部分【ส่วนที่ 3】</p>
    </div>
    <div class="table-responsive">
        <p>第 31-35 题【ข้อ 31-35】</p>
        <form id="part2_3">
            <table class="table table-bordered text-center responsive">
                <tr>
                    <td scope="col" rowspan="2" style="padding-top: 20px;" class="first">例如：</td>

                    <td scope="col">
                        <div class="pin-in">Nǐ xǐhuan chī shuǐguǒ ma ?</div>
                        <div>你 喜欢 吃 水果 吗 ？</div>
                    </td>
                    <td class="col-2  col-md-1" style="padding-top: 15px;">
                        <input type="text" id="disabledTextInput" value="F" style="width:100%" class="text-center" disabled>
                    </td>
                    <td scope="col">
                        <div id="part2_3_choice1" class="pin-in"></div>
                        <div id="part2_3_choice2"></div>
                    </td>
                </tr>
                <tbody id="sesion2_3">
                </tbody>
            </table>
        </form>
    </div>
    <hr>
    <!-- //// ส่วนที่4 การอ่าน-->
    <div class="text-center">
        <p> 第四部分【ส่วนที่ 4】</p>
    </div>
    <div class="table-responsive">
        <p>第 36-40 题【ข้อ 36-40】</p>
        <form id="part2_4">
            <table class="table table-bordered text-center responsive">
                <tr>
                    <td scope="col" rowspan="2" style="padding-top: 20px;" class="first">例如：</td>

                    <td scope="col" class="d-flex justify-content-center align-items-end">
                        <div>
                            <div class="pin-in"> Wǒ</div>
                            <div>我 </div>
                        </div>
                        <div> <span>（ F ）</span>

                        </div>
                        <div>
                            <div class="pin-in">xǐhuan chī shuǐguǒ .</div>
                            <div>喜欢 吃 水果 。</div>
                        </div>

                    </td>
                    <td class="col-2  col-md-1" style="padding-top: 15px;">
                        <input type="text" id="disabledTextInput" value="F" style="width:100%" class="text-center" disabled>
                    </td>
                    <td scope="col">
                        <div id="part2_4_choice1" class="pin-in"></div>
                        <div id="part2_4_choice2"></div>
                    </td>
                </tr>
                <tbody id="sesion2_4">
                </tbody>
            </table>
        </form>
    </div>
    <hr>
    <div class="d-flex justify-content-center mt-1 mb-4">
        <?php $mess_send = "ส่งคำตอบ";
        include_once('../../plugin/sent_button.php')
        ?>
    </div>

</div>
<?php include_once('../../layout/footerPretest.php') ?>

<script>
    $(function() {
        $.getJSON("pretest_hsk1.json", function(result) {

            const part1 = result.listen.part1;
            //// ส่วนที่1
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
                        <td>
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
            const part2 = result.listen.part2;
            const data_part2 = [];

            part2.forEach((e, i) => {
                let setAnswer = [];
                if (e.answer == 'a') {
                    setAnswer.push(1, 0, 0);
                } else if (e.answer == 'b') {
                    setAnswer.push(0, 1, 0);
                } else setAnswer.push(0, 0, 1);
                let td = `<tr> <th scope="row" class="first">${i+6}</th>
                        <td class="text-left">
                            <div class="form-check form-check-inline">
                                <input  type="radio" id="topic2_1_${i}" name="no${i+1}" value="${setAnswer[0]}" >
                                <label for="topic2_1_${i}">${e.topic[0]}</label>
                            </div>
                        </td><td class="text-left">
                            <div class="form-check form-check-inline">
                                <input  type="radio" id="topic2_2_${i+1}" name="no${i+1}" value="${setAnswer[1]}" >
                                <label for="topic2_2_${i+1}">${e.topic[1]}</label>
                            </div>
                        </td><td class="text-left">
                        <div class="form-check form-check-inline">
                                <input  type="radio" id="topic2_3_${i+2}" name="no${i+1}" value="${setAnswer[2]}" >
                                <label for="topic2_3_${i+2}">${e.topic[2]}</label>
                            </div>
                        </td>
                    </tr>`;
                data_part2.push(td);
            });

            $("#sesion2").html(data_part2);

            //// ส่วนที่3
            const part3 = result.listen.part3.choice;
            const answer = result.listen.part3.answer;
            const data_part3 = [];
            answer.forEach((e, i) => {
                let td = `<tr>
                            <th scope="col" class="first">${i+11}</th>
                            <td scope="col">
                            </td>
                            <td class="col-2  col-md-1" >
                                <input type="text" style="width:100%" class="text-center" maxlength="1" id="no${i+1}">
                            </td>
                            <td scope="col" >
                                <div >${part3[i+1]}</div>
                            </td>
                        </tr>`;

                data_part3.push(td);
            });
            $("#part3_choice1").html(part3[0]);
            $("#sesion3").html(data_part3);


            //// ส่วนที่4
            const part4 = result.listen.part4;
            const data_part4 = [];

            part4.forEach((e, i) => {
                let setAnswer = [];
                if (e.answer == 'a') {
                    setAnswer.push(1, 0, 0);
                } else if (e.answer == 'b') {
                    setAnswer.push(0, 1, 0);
                } else setAnswer.push(0, 0, 1);
                let td = `<tr> <th scope="row" class="first">${i+16}</th>
                        <td class="text-left">
                            <div class="form-check form-check-inline">
                                <input  type="radio" id="topic4_1_${i}" name="no${i+1}" value="${setAnswer[0]}" >
                                <label for="topic4_1_${i}"><div class="pin-in pl-1">${e.topic[0].pinin}</div><div>${e.topic[0].ch}</div></label>
                            </div>
                        </td><td class="text-left">
                            <div class="form-check form-check-inline">
                                <input  type="radio" id="topic4_2_${i+1}" name="no${i+1}" value="${setAnswer[1]}" >
                                <label for="topic4_2_${i+1}"><div class="pin-in pl-1">${e.topic[1].pinin}</div><div>${e.topic[1].ch}</div></label>
                            </div>
                        </td><td class="text-left">
                        <div class="form-check form-check-inline">
                                <input  type="radio" id="topic4_3_${i+2}" name="no${i+1}" value="${setAnswer[2]}" >
                                <label for="topic4_3_${i+2}"><div class="pin-in pl-1">${e.topic[2].pinin}</div><div>${e.topic[2].ch}</div></label>
                            </div>
                        </td>
                    </tr>`;
                data_part4.push(td);
            });

            $("#sesion4").html(data_part4);


            const part2_1 = result.reading.part1;
            //// ส่วนที่1 การอ่าน
            const data_part2_1 = [];
            part2_1.forEach((e, i) => {
                let setAnswer = [];
                if (e.answer) {
                    setAnswer.push(1, 0);
                } else {
                    setAnswer.push(0, 1);
                }
                let td = `<tr> <th scope="row" class="first">${i+21}</th>
                        <td>${e.topic.th}</td>
                        <td><div class="pin-in">${e.topic.pinin}</div>
                                <div">${e.topic.ch}</div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input  type="radio" id="topic2_1_1_${i+1}"  name="no${i+1}" value="${setAnswer[0]}">
                                <label  for="topic2_1_1_${i+1}">true</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input  type="radio" id="topic2_1_2_${i+2}"  name="no${i+1}" value="${setAnswer[1]}">
                                <label  for="topic2_1_2_${i+2}">false</label>
                            </div>
                        </td>
                    </tr>`;
                data_part2_1.push(td);
            });
            $("#sesion2_1").html(data_part2_1);


            //// ส่วนที่2 การอ่าน
            const part2_2 = result.reading.part2.topic;
            const choice2_2 = result.reading.part2.choice;
            const answer2_2 = result.reading.part2.answer;
            const data_part2_2 = [];
            part2_2.forEach((e, i) => {
                let td = `<tr>
                            <th scope="col" class="first">${i+26}</th>
                            <td scope="col">
                            <div class="pin-in">${e.pinin}</div>
                            <div>${e.ch}</div>

                            </td>
                            <td class="col-2  col-md-1" >
                                <input type="text" style="width:100%" class="text-center" maxlength="1" id="no_2_${i+1}">
                            </td>
                            <td scope="col" >
                                <div>${choice2_2[i+1]}</div>
                            </td>
                        </tr>`;

                data_part2_2.push(td);
            });
            $("#part2_2_choice1").html(choice2_2[0]);
            $("#sesion2_2").html(data_part2_2);

            //// ส่วนที่3 การอ่าน
            const part2_3 = result.reading.part3.topic;
            const choice2_3 = result.reading.part3.choice;
            const answer2_3 = result.reading.part3.answer;
            const data_part2_3 = [];
            part2_3.forEach((e, i) => {
                let td = `<tr>
                            <th scope="col" class="first">${i+31}</th>
                            <td scope="col">
                            <div class="pin-in">${e.pinin}</div>
                            <div>${e.ch}</div>

                            </td>
                            <td class="col-2  col-md-1" >
                                <input type="text" style="width:100%" class="text-center" maxlength="1" id="no_3_${i+1}">
                            </td>
                            <td scope="col" >
                                <div class="pin-in pl-1">${choice2_3[i+1].pinin}</div>
                                <div >${choice2_3[i+1].ch}</div>
                            </td>
                        </tr>`;

                data_part2_3.push(td);
            });
            $("#part2_3_choice1").html(choice2_3[0].pinin);
            $("#part2_3_choice2").html(choice2_3[0].ch);
            $("#sesion2_3").html(data_part2_3);



            //// ส่วนที่4 การอ่าน
            const part2_4 = result.reading.part4.topic;
            const choice2_4 = result.reading.part4.choice;
            const answer2_4 = result.reading.part4.answer;
            const data_part2_4 = [];
            part2_4.forEach((e, i) => {
                let td
                if (e.pinin_end) {
                    td = `<tr>
                            <th scope="col" class="first">${i+36}</th>
                            <td scope="col" class="d-flex justify-content-center align-items-end">
                            <div>
                            <div class="pin-in">${e.pinin}</div>
                            <div>${e.ch}</div>
                            </div>
                            <div> <span>（  ） 。</span></div>
                            <div>
                            <div class="pin-in">${e.pinin_end}</div>
                            <div>${e.ch_end}</div>
                            </div>
                            </td>
                            <td class="col-2  col-md-1" >
                                <input type="text" style="width:100%" class="text-center" maxlength="1" id="no_4_${i+1}">
                            </td>
                            <td scope="col" >
                                <div class="pin-in pl-2">${choice2_4[i+1].pinin}</div>
                                <div >${choice2_4[i+1].ch}</div>
                            </td>
                        </tr>`;
                } else if (e.pinin_sec) {
                    if (e.pinin_sec_end) {
                        td = `<tr>
                            <th scope="col" style="padding-top: 30px;" class="first">${i+36}</th>
                            <td scope="col" >
                           
                            <div class="pin-in">${e.pinin}</div>
                            <div>${e.ch}</div>
                            <div class="d-flex justify-content-center align-items-end">
                            <div>
                            <div class="pin-in">${e.pinin_sec}</div>
                            <div>${e.ch_sec}<span>（  ） 。</span></div>
                            </div>
                            <div>
                            <div class="pin-in">${e.pinin_sec_end}</div>
                            <div>${e.ch_sec_end}</div>
                            </div>
                            </div>
                            </td>
                            <td class="col-2  col-md-1" style="padding-top: 30px;" >
                                <input type="text" style="width:100%" class="text-center" maxlength="1" id="no_4_${i+1}">
                            </td>
                            <td scope="col" style="padding-top: 20px;">
                                <div class="pin-in pl-2">${choice2_4[i+1].pinin}</div>
                                <div >${choice2_4[i+1].ch}</div>
                            </td>
                        </tr>`;
                    }

                } else {
                    td = `<tr>
                            <th scope="col" class="first">${i+36}</th>
                            <td scope="col" class="d-flex justify-content-center align-items-end">
                            <div>
                            <div class="pin-in">${e.pinin}</div>
                            <div>${e.ch}</div>
                            </div>
                            <div> <span>（  ） 。</span></div>
                            </td>
                            <td class="col-2  col-md-1" >
                                <input type="text" style="width:100%" class="text-center" maxlength="1" id="no_4_${i+1}">
                            </td>
                            <td scope="col" >
                                <div class="pin-in pl-2">${choice2_4[i+1].pinin}</div>
                                <div >${choice2_4[i+1].ch}</div>
                            </td>
                        </tr>`;
                }
                data_part2_4.push(td);
            });
            $("#part2_4_choice1").html(choice2_4[0].pinin);
            $("#part2_4_choice2").html(choice2_4[0].ch);
            $("#sesion2_4").html(data_part2_4);









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
            $.fn.count_part3 = function(answers, listen, part) {
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
                const sum_part_2 = $.fn.count(part2, 2, true);
                const sum_part_3 = $.fn.count_part3(answer, true);
                const sum_part_4 = $.fn.count(part4, 4, true);

                let total_listen = sum_part1 + sum_part_2 + sum_part_3 + sum_part_4;

                // reading
                const sum_part2_1 = $.fn.count(part2_1, 1, false);
                const sum_part2_2 = $.fn.count_part3(answer2_2, false, 2);
                const sum_part2_3 = $.fn.count_part3(answer2_3, false, 3);
                const sum_part2_4 = $.fn.count_part3(answer2_4, false, 4);
                let total_reading = sum_part2_1 + sum_part2_2 + sum_part2_3 + sum_part2_4;
                const total = total_listen + total_reading;

                ///send score
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {

                        if (total >= 24) {
                            Swal.fire({
                                icon: 'success',
                                title: 'สอบผ่าน',
                                text: `คุณได้คะแนนสอบ ${total} คะแนน`,
                                confirmButtonText: `ยืนยัน`,
                            }).then((result) => {
                                window.location.href = "../student/index.php"
                            })
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'สอบไม่ผ่าน',
                                text: `คุณได้คะแนนสอบ ${total} คะแนน`,
                                confirmButtonText: `ยืนยัน`,
                            }).then((result) => {
                                window.location.href = "../student/index.php"
                            })
                        }
                    }
                };
                xmlhttp.open("GET", "../../models/submitTest.php?score=" + total + "&&hsk=1", true);
                xmlhttp.send();



            }

        });
    });
</script>

</html>