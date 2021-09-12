<?php include_once('../../layout/headerExercise.php') ?>
<style>
    .btn-play {
        border-radius: 1.25rem !important;
    }

    @media screen and (min-width:500px) {
        .td-respon {
            display: flex;
        }
    }
</style>
<?php if ((isset($_GET['hsk_1']) || isset($_GET['hsk_2'])) && isset($_GET['part'])) :
    if (isset($_GET['hsk_1'])) {
        $hsk_set = 1;
    } elseif (isset($_GET['hsk_2'])) {
        $hsk_set = 2;
    }
    $part = $_GET['part'];
?>
    <audio id="sound"></audio>

    <div class="container d-grid justify-content-center">
        <!-- ///// set1_1_1 -->
        <P class="text-center mt-5">HSK（一级）练习（1/1）【แบบฝึกหัด HSK 1 ชุดที่ 1/1】</P>
        <P class="text-center">第一部分【ส่วนที่ 1】</P>
        <div class="table-responsive">
            <p>第 1-10 题【ข้อ 1-10】</p>

            <form id="part1_1">
                <table class="table table-bordered text-center responsive">
                    <tbody id="set1_1_1">
                    </tbody>
                </table>
            </form>
        </div>

        <!-- ///// set1_1_2 -->
        <P class="text-center mt-2">第二部分【ส่วนที่ 2】</P>
        <div class="table-responsive">
            <div class="d-flex justify-content-between align-items-baseline">
                <p>第11-15题【ข้อ11-15】</p>
            </div>
            <table class="table table-bordered text-center responsive">
                <tbody id="set1_1_2_1">
                </tbody>
            </table>
            <div class="d-flex justify-content-between align-items-baseline">
                <p>第16-20题【ข้อ16-20】</p>
            </div>
            <table class="table table-bordered text-center responsive">
                <tbody id="set1_1_2_2">
                </tbody>
            </table>

        </div>

        <!-- ///// set1_1_3 -->
        <P class="text-center mt-2">第三部分【ส่วนที่ 3】</P>
        <div class="table-responsive">
            <div class="d-flex justify-content-between align-items-baseline">
                <p>第 21-25 题【ข้อ 21-25】</p>
            </div>
            <table class="table table-bordered text-center responsive">
                <tbody id="set1_1_3_1">

                </tbody>
            </table>
            <div class="d-flex justify-content-between align-items-baseline">
                <p>第 26-30 题【ข้อ 26-30】</p>
            </div>
            <table class="table table-bordered text-center responsive">
                <tbody id="set1_1_3_2">

                </tbody>
            </table>

        </div>

        <!-- ///// set1_2_1 -->
        <P class="text-center mt-5">HSK（一级）练习（1/2）【แบบฝึกหัด HSK 1 ชุดที่ 1/2】</P>
        <P class="text-center">第一部分【ส่วนที่ 1】</P>
        <div class="table-responsive">
            <p>第 1-10 题【ข้อ 1-10】</p>

            <form id="part1_2">
                <table class="table table-bordered text-center responsive">
                    <tbody id="set1_2_1">
                    </tbody>
                </table>
            </form>
        </div>

        <!-- ///// set1_2_2 -->
        <P class="text-center mt-2">第二部分【ส่วนที่ 2】</P>
        <div class="table-responsive">
            <div class="d-flex justify-content-between align-items-baseline">
                <p>第11-15题【ข้อ11-15】</p>
            </div>
            <table class="table table-bordered text-center responsive">
                <tbody id="set1_2_2_1">
                </tbody>
            </table>
            <div class="d-flex justify-content-between align-items-baseline">
                <p>第16-20题【ข้อ16-20】</p>
            </div>
            <table class="table table-bordered text-center responsive">
                <tbody id="set1_2_2_2">
                </tbody>
            </table>

        </div>

        <!-- ///// set1_2_3 -->
        <P class="text-center mt-2">第三部分【ส่วนที่ 3】</P>
        <div class="table-responsive">
            <div class="d-flex justify-content-between align-items-baseline">
                <p>第 21-25 题【ข้อ 21-25】</p>
            </div>
            <table class="table table-bordered text-center responsive">
                <tbody id="set1_2_3_1">
                </tbody>
            </table>
            <div class="d-flex justify-content-between align-items-baseline">
                <p>第 26-30 题【ข้อ 26-30】</p>
            </div>
            <table class="table table-bordered text-center responsive">
                <tbody id="set1_2_3_2">
                </tbody>
            </table>

        </div>

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

        $.getJSON("exercise.json", function(result) {
            const hsk = <?= $hsk_set ?>;
            const part = <?= $part ?>;

            const isHsk = hsk == 1 ? result.hsk_1 : result.hsk_2;
            const isSet1 = part == 1 ? isHsk.set1_1 : part == 2 ? isHsk.set2_1 : part == 3 ? isHsk.set3_1 : isHsk.set4_1
            const isSet2 = part == 1 ? isHsk.set1_2 : part == 2 ? isHsk.set2_2 : part == 3 ? isHsk.set3_2 : isHsk.set4_2


            const sound = document.getElementById("sound");
            const set1_1_1 = isSet1.part1;
            const data_set1_1_1 = [];


            set1_1_1.forEach((e, i) => {
                let setAnswer = [];
                if (e.answer == 'a') {
                    setAnswer.push(1, 0, 0);
                } else if (e.answer == 'b') {
                    setAnswer.push(0, 1, 0);
                } else setAnswer.push(0, 0, 1);
                let tr = `<tr>
                            <td rowspan="2" class="align-middle">${i+1}</td>
                            <td colspan="3">
                                <div class="btn btn-play btn-success" id="pretest-set1_1_1_${i}">
                                     <i class="fas fa-headphones"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        
                            <td class="text-left" >    
                            <input  type="radio" id="topic4_1_${i}" name="no${i+1}" value="${setAnswer[0]}" >
                                <label for="topic4_1_${i}">
                                ${e.choice[0]}
                                </label>
                            </td>
                            <td class="text-left">    
                            <input  type="radio" id="topic4_1_${i+10}" name="no${i+1}" value="${setAnswer[1]}" >
                                <label for="topic4_1_${i+10}">
                                ${e.choice[1]}
                                </label>
                            </td>  <td class="text-left">    
                            <input  type="radio" id="topic4_1_${i+20}" name="no${i+1}" value="${setAnswer[2]}" >
                                <label for="topic4_1_${i+20}">
                                ${e.choice[2]}
                                </label>
                            </td>
                        </tr>`;
                data_set1_1_1.push(tr);
            })
            $("#set1_1_1").html(data_set1_1_1);
            set1_1_1.forEach((e, i) => {
                $(`#pretest-set1_1_1_${i}`).click(() => {
                    sound.src = `../../sound/exercise/hsk${hsk}/set${part}_1/${i+1}.mp3`;
                    sound.play();
                });
            });

            const set1_1_2_1 = isSet1.part2.choice;
            const set1_1_2_2 = isSet1.part2.choice_1;
            const answer_1 = isSet1.part2.answer;
            const answer_2 = isSet1.part2.answer_2;
            const data_set1_1_2_1 = [];
            const data_set1_1_2_2 = [];

            set1_1_2_1.forEach((e, i) => {

                let tr = `<tr>
                        <td>${i+11}</td>
                        <td>
                            <div class="btn btn-play btn-success" id="pretest-set1_1_2_${i}">
                                <i class="fas fa-headphones"></i>
                            </div>
                        </td>
                        <td class="col-2 col-md-1">
                           <input type="text" style="width:100%" class="text-center" maxlength="1" id="no${i+1}_2_1">

                        </td>
                        <td class="text-start">${e}</td>
                    </tr>`;
                let tr_1 = `<tr>
                        <td>${i+16}</td>
                        <td>
                            <div class="btn btn-play btn-success" id="pretest-set1_1_2_${i+6}">
                                <i class="fas fa-headphones"></i>
                            </div>
                        </td>
                        <td class="col-2 col-md-1">
                           <input type="text" style="width:100%" class="text-center" maxlength="1" id="no${i+1}_2_2">

                        </td>
                        <td class="text-start">${set1_1_2_2[i]}</td>
                    </tr>`;
                data_set1_1_2_1.push(tr)
                data_set1_1_2_2.push(tr_1)

            })
            $("#set1_1_2_1").html(data_set1_1_2_1);
            $("#set1_1_2_2").html(data_set1_1_2_2);

            set1_1_2_1.forEach((e, i) => {
                $(`#pretest-set1_1_2_${i}`).click(() => {
                    sound.src = `../../sound/exercise/hsk${hsk}/set${part}_1/${i+11}.mp3`;
                    sound.play();
                });
                $(`#pretest-set1_1_2_${i+6}`).click(() => {
                    sound.src = `../../sound/exercise/hsk${hsk}/set${part}_1/${i+16}.mp3`;
                    sound.play();
                });
            });

            const set1_1_3_1 = isSet1.part3.topic;
            const set1_1_3_2 = isSet1.part3.topic_1;

            const choice = isSet1.part3.choice;
            const choice_1 = isSet1.part3.choice_1;

            const answer_3_1 = isSet1.part3.answer;
            const answer_3_2 = isSet1.part3.answer_1;
            const data_set1_1_3_1 = [];
            const data_set1_1_3_2 = [];

            set1_1_3_1.forEach((e, i) => {
                let tr;
                let tr_1;
                if (!e.pinin) {
                    tr = ` <tr>
                        <td>${i+21}</td>
                        <td class="text-start">
                            <div>
                                <div class="pin-in pl-2"> ${e.pinin_end}</div>
                                <div>（ ）${e.ch_end}</div>
                            </div>
                        </td>
                        <td class="col-2  col-md-1">
                         <input type="text" style="width:100%" class="text-center" maxlength="1" id="no${i+1}_3_1">
                        </td>
                        <td class="text-start">
                            <div class="pl-1">${choice[i].pinin}</div>
                            <div>${choice[i].ch}</div>
                        </td>
                    </tr>`;
                } else {
                    tr = ` <tr>
                        <td>${i+21}</td>
                        <td class="td-respon text-start">
                            <div>
                                <div class="pin-in">${e.pinin}</div>
                                <div>${e.ch} （ ）</div>
                            </div>
                            <div>
                                <div class="pin-in"> ${e.pinin_end}</div>
                                <div>${e.ch_end}</div>
                            </div>
                        </td>
                        <td class="col-2  col-md-1">
                         <input type="text" style="width:100%" class="text-center" maxlength="1" id="no${i+1}_3_1">
                        </td>
                        <td class="text-start">
                            <div class="pl-1">${choice[i].pinin}</div>
                            <div>${choice[i].ch}</div>
                        </td>
                    </tr>`;
                }
                if (!set1_1_3_2[i].pinin) {
                    tr_1 = ` <tr>
                        <td>${i+26}</td>
                        <td class="text-start">
                            <div>
                                <div class="pin-in pl-2"> ${set1_1_3_2[i].pinin_end}</div>
                                <div>（ ）${set1_1_3_2[i].ch_end}</div>
                            </div>
                        </td>
                        <td class="col-2  col-md-1">
                         <input type="text" style="width:100%" class="text-center" maxlength="1" id="no${i+1}_3_2">
                        </td>
                        <td class="text-start">
                            <div class="pl-1">${choice_1[i].pinin}</div>
                            <div>${choice_1[i].ch}</div>
                        </td>
                    </tr>`;
                } else {
                    tr_1 = ` <tr>
                        <td>${i+26}</td>
                        <td class="td-respon text-start">
                            <div>
                                <div class="pin-in">${set1_1_3_2[i].pinin}</div>
                                <div>${set1_1_3_2[i].ch} （ ）</div>
                            </div>
                            <div>
                                <div class="pin-in"> ${set1_1_3_2[i].pinin_end}</div>
                                <div>${set1_1_3_2[i].ch_end}</div>
                            </div>
                        </td>
                        <td class="col-2  col-md-1">
                         <input type="text" style="width:100%" class="text-center" maxlength="1" id="no${i+1}_3_2">
                        </td>
                        <td class="text-start">
                            <div class="pl-1">${choice_1[i].pinin}</div>
                            <div>${choice_1[i].ch}</div>
                        </td>
                    </tr>`;
                }



                data_set1_1_3_1.push(tr);
                data_set1_1_3_2.push(tr_1);


            })
            $("#set1_1_3_1").html(data_set1_1_3_1);
            $("#set1_1_3_2").html(data_set1_1_3_2);







            ////////////////////////////////////////////////////// set 2 
            const set1_2_1 = isSet2.part1;
            const data_set1_2_1 = [];

            set1_2_1.forEach((e, i) => {
                let setAnswer = [];
                if (e.answer == 'a') {
                    setAnswer.push(1, 0, 0);
                } else if (e.answer == 'b') {
                    setAnswer.push(0, 1, 0);
                } else setAnswer.push(0, 0, 1);
                let tr = `<tr>
                            <td rowspan="2" class="align-middle">${i+1}</td>
                            <td colspan="3">
                                <div class="btn btn-play btn-success" id="pretest-set1_2_1_${i}">
                                     <i class="fas fa-headphones"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        
                            <td class="text-left col-4" >    
                            <input  type="radio" id="topic4_1_${i+200}" name="no${i+21}" value="${setAnswer[0]}" >
                                <label for="topic4_1_${i+200}">
                                ${e.choice[0]}
                                </label>
                            </td>
                            <td class="text-left col-4">    
                            <input  type="radio" id="topic4_1_${i+210}" name="no${i+21}" value="${setAnswer[1]}" >
                                <label for="topic4_1_${i+210}">
                                ${e.choice[1]}
                                </label>
                            </td>  <td class="text-left col-4">    
                            <input  type="radio" id="topic4_1_${i+220}" name="no${i+21}" value="${setAnswer[2]}" >
                                <label for="topic4_1_${i+220}">
                                ${e.choice[2]}
                                </label>
                            </td>
                        </tr>`;
                data_set1_2_1.push(tr);
            })
            $("#set1_2_1").html(data_set1_2_1);
            set1_1_1.forEach((e, i) => {
                $(`#pretest-set1_2_1_${i}`).click(() => {
                    sound.src = `../../sound/exercise/hsk${hsk}/set${part}_2/${i+1}.mp3`;
                    sound.play();
                });
            });

            const set1_2_2_1 = isSet2.part2.choice;
            const set1_2_2_2 = isSet2.part2.choice_1;
            const answer2_1 = isSet2.part2.answer;
            const answer2_2 = isSet2.part2.answer_2;
            const data_set1_2_2_1 = [];
            const data_set1_2_2_2 = [];

            set1_2_2_1.forEach((e, i) => {

                let tr = `<tr>
                        <td>${i+11}</td>
                        <td>
                            <div class="btn btn-play btn-success" id="pretest-set1_2_2_${i}">
                                <i class="fas fa-headphones"></i>
                            </div>
                        </td>
                        <td class="col-2 col-md-1">
                           <input type="text" style="width:100%" class="text-center" maxlength="1" id="no${i+21}_2_1">

                        </td>
                        <td class="text-start">${e}</td>
                    </tr>`;
                let tr_1 = `<tr>
                        <td>${i+16}</td>
                        <td>
                            <div class="btn btn-play btn-success" id="pretest-set1_2_2_${i+6}">
                                <i class="fas fa-headphones"></i>
                            </div>
                        </td>
                        <td class="col-2 col-md-1">
                           <input type="text" style="width:100%" class="text-center" maxlength="1" id="no${i+21}_2_2">

                        </td>
                        <td class="text-start">${set1_2_2_2[i]}</td>
                    </tr>`;
                data_set1_2_2_1.push(tr)
                data_set1_2_2_2.push(tr_1)

            })
            $("#set1_2_2_1").html(data_set1_2_2_1);
            $("#set1_2_2_2").html(data_set1_2_2_2);

            set1_2_2_1.forEach((e, i) => {
                $(`#pretest-set1_2_2_${i}`).click(() => {
                    sound.src = `../../sound/exercise/hsk${hsk}/set${part}_2/${i+11}.mp3`;
                    sound.play();
                });
                $(`#pretest-set1_2_2_${i+6}`).click(() => {
                    sound.src = `../../sound/exercise/hsk${hsk}/set${part}_2/${i+16}.mp3`;
                    sound.play();
                });
            });


            const set1_2_3_1 = isSet2.part3.topic;
            const set1_2_3_2 = isSet2.part3.topic_1;

            const choice2 = isSet2.part3.choice;
            const choice2_1 = isSet2.part3.choice_1;

            const answer2_3_1 = isSet2.part3.answer;
            const answer2_3_2 = isSet2.part3.answer_1;
            const data_set1_2_3_1 = [];
            const data_set1_2_3_2 = [];

            set1_2_3_1.forEach((e, i) => {
                let tr;
                let tr_1;
                if (!e.pinin) {
                    tr = ` <tr>
                        <td>${i+21}</td>
                        <td class="text-start">
                            <div>
                                <div class="pin-in pl-2"> ${e.pinin_end}</div>
                                <div>（ ）${e.ch_end}</div>
                            </div>
                        </td>
                        <td class="col-2  col-md-1">
                         <input type="text" style="width:100%" class="text-center" maxlength="1" id="no${i+21}_3_1">
                        </td>
                        <td class="text-start">
                            <div class="pl-1">${choice2[i].pinin}</div>
                            <div>${choice2[i].ch}</div>
                        </td>
                    </tr>`;
                } else {
                    tr = ` <tr>
                        <td>${i+21}</td>
                        <td class="td-respon text-start">
                            <div>
                                <div class="pin-in">${e.pinin}</div>
                                <div>${e.ch} （ ）</div>
                            </div>
                            <div>
                                <div class="pin-in"> ${e.pinin_end}</div>
                                <div>${e.ch_end}</div>
                            </div>
                        </td>
                        <td class="col-2  col-md-1">
                         <input type="text" style="width:100%" class="text-center" maxlength="1" id="no${i+21}_3_1">
                        </td>
                        <td class="text-start">
                            <div class="pl-1">${choice2[i].pinin}</div>
                            <div>${choice2[i].ch}</div>
                        </td>
                    </tr>`;
                }
                if (!set1_2_3_2[i].pinin) {
                    tr_1 = ` <tr>
                        <td>${i+26}</td>
                        <td class="text-start">
                            <div>
                                <div class="pin-in pl-2"> ${set1_2_3_2[i].pinin_end}</div>
                                <div>（ ）${set1_2_3_2[i].ch_end}</div>
                            </div>
                        </td>
                        <td class="col-2  col-md-1">
                         <input type="text" style="width:100%" class="text-center" maxlength="1" id="no${i+21}_3_2">
                        </td>
                        <td class="text-start">
                            <div class="pl-1">${choice2_1[i].pinin}</div>
                            <div>${choice2_1[i].ch}</div>
                        </td>
                    </tr>`;
                } else {
                    tr_1 = ` <tr>
                        <td>${i+26}</td>
                        <td class="td-respon text-start">
                            <div>
                                <div class="pin-in">${set1_2_3_2[i].pinin}</div>
                                <div>${set1_2_3_2[i].ch} （ ）</div>
                            </div>
                            <div>
                                <div class="pin-in"> ${set1_2_3_2[i].pinin_end}</div>
                                <div>${set1_2_3_2[i].ch_end}</div>
                            </div>
                        </td>
                        <td class="col-2  col-md-1">
                         <input type="text" style="width:100%" class="text-center" maxlength="1" id="no${i+21}_3_2">
                        </td>
                        <td class="text-start">
                            <div class="pl-1">${choice2_1[i].pinin}</div>
                            <div>${choice2_1[i].ch}</div>
                        </td>
                    </tr>`;
                }



                data_set1_2_3_1.push(tr);
                data_set1_2_3_2.push(tr_1);


            })
            $("#set1_2_3_1").html(data_set1_2_3_1);
            $("#set1_2_3_2").html(data_set1_2_3_2);






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
            $.fn.count_part2 = function(answers, set, part, lesson2) {
                let sum = 0;
                if (!lesson2) {
                    answers.forEach((e, i) => {
                        let input_answer = $(`#no${i+1}_${set}_${part}`).val().toLowerCase();
                        if (e == input_answer) {
                            sum += 1;
                        }
                    });
                } else {
                    answers.forEach((e, i) => {
                        let input_answer = $(`#no${i+21}_${set}_${part}`).val().toLowerCase();
                        if (e == input_answer) {
                            sum += 1;
                        }
                    });
                }


                return sum;
            }
            $.fn.count = function(param, a, lesson2) {
                let sum = 0;
                if (!lesson2) {
                    param.forEach((e, i) => {
                        let num = parseInt($(`input[name=no${i+1}]:checked`, `#part1_${a}`).val());
                        if (num) {
                            sum += num
                        }
                    });
                } else {
                    param.forEach((e, i) => {
                        let num = parseInt($(`input[name=no${i+21}]:checked`, `#part1_${a}`).val());
                        if (num) {
                            sum += num
                        }
                    });
                }

                return sum;
            }
            $.fn.countScore = function() {
                //// ชุด 1 
                const sum_part1 = $.fn.count(set1_1_1, 1);
                const sum_part2_1 = $.fn.count_part2(answer_1, 2, 1);
                const sum_part2_2 = $.fn.count_part2(answer_2, 2, 2);
                const sum_part3_1 = $.fn.count_part2(answer_3_1, 3, 1);
                const sum_part3_2 = $.fn.count_part2(answer_3_2, 3, 2);

                //// ชุด 2
                const sum2_part1 = $.fn.count(set1_2_1, 2, true);
                const sum2_part2_1 = $.fn.count_part2(answer2_1, 2, 1, true);
                const sum2_part2_2 = $.fn.count_part2(answer2_2, 2, 2, true);
                const sum2_part3_1 = $.fn.count_part2(answer2_3_1, 3, 1, true);
                const sum2_part3_2 = $.fn.count_part2(answer2_3_2, 3, 2, true);

                let totle1 = sum_part1 + sum_part2_1 + sum_part2_2 + sum_part3_1 + sum_part3_2;
                let totle2 = sum2_part1 + sum2_part2_1 + sum2_part2_2 + sum2_part3_1 + sum2_part3_2;

                let totle = totle1 + totle2;



            }




        });
    });
</script>