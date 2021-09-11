<?php include_once('../../layout/headerPosttest.php') ?>
<style>
    .btn-play {
        border-radius: 1.25rem !important;
    }
</style>
<?php if (isset($_GET['hsk_1']) && isset($_GET['part'])) : ?>
    <audio id="sound"></audio>
    <!-- ///// set1_1_1 -->
    <div class="container d-grid justify-content-center">
        <P class="text-center mt-5">HSK（一级）练习（1/1）【แบบฝึกหัด HSK 1 ชุดที่ 1/1】</P>
        <P class="text-center">第一部分【ส่วนที่ 1】</P>
        <div class="table-responsive">
            <p>第 1-10 题【ข้อ 1-10】</p>

            <form id="part1_3">
                <table class="table table-bordered text-center responsive">
                    <tbody id="set1_1_1">
                    </tbody>
                </table>
            </form>
        </div>

        <!-- ///// set1_1_2 -->
        <P class="text-center">第二部分【ส่วนที่ 2】</P>
        <div class="table-responsive">
            <div class="d-flex justify-content-between align-items-baseline">
                <p>第11-15题【ข้อ11-15】</p>
            </div>
            <table class="table table-bordered text-center responsive">
                <tbody id="set1_1_2_1">
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="btn btn-play btn-success" id="pretest-set1_1_1_${i}">
                                <i class="fas fa-headphones"></i>
                            </div>
                        </td>
                        <td class="col-2  col-md-1">
                            <input type="text" value="F" style="width:100%" class="text-center" disabled>
                        </td>
                        <td>คำตอบ</td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-between align-items-baseline">
                <p>第16-20题【ข้อ16-20】</p>
            </div>
            <table class="table table-bordered text-center responsive">
                <tbody id="set1_1_2_2">
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="btn btn-play btn-success" id="pretest-set1_1_1_${i}">
                                <i class="fas fa-headphones"></i>
                            </div>
                        </td>
                        <td class="col-2  col-md-1">
                            <input type="text" value="F" style="width:100%" class="text-center" disabled>
                        </td>
                        <td>คำตอบ</td>
                    </tr>
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
            const sound = document.getElementById("sound");
            const set1_1_1 = result.hsk_1.set1_1.part1;
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
                    sound.src = `../../sound/exercise/hsk1/set1_1/${i+1}.mp3`;
                    sound.play();
                });
            });

            const set1_1_2_1 = result.hsk_1.set1_1.part2.choice;
            const set1_1_2_2 = result.hsk_1.set1_1.part2.choice_1;
            const answer_1 = result.hsk_1.set1_1.part2.answer;
            const answer_2 = result.hsk_1.set1_1.part2.answer;
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
                           <input type="text" style="width:100%" class="text-center" maxlength="1" id="no${i+1}">

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
                           <input type="text" style="width:100%" class="text-center" maxlength="1" id="no${i+6}">

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
                    sound.src = `../../sound/exercise/hsk1/set1_1/${i+11}.mp3`;
                    sound.play();
                });
                $(`#pretest-set1_1_2_${i+6}`).click(() => {
                    sound.src = `../../sound/exercise/hsk1/set1_1/${i+16}.mp3`;
                    sound.play();
                });
            });


















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
                const sum_part1 = $.fn.count(set1_1_1, 3, true);
                const sum_part2_1 = $.fn.count_part2(answer_1, true);
                const sum_part2_2 = $.fn.count_part2(answer_2, true);


                console.log(sum_part2_1 , sum_part2_2);


            }




        });
    });
</script>