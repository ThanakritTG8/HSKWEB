<?php include('../../layout/headerAdmin.php'); ?>
<style>
    .container {
        margin-top: 20px;
    }

    .card {
        padding: 20px 5px;
    }

    .icon-delete {
        color: #da1b1b;
        cursor: pointer;
    }

    .icon-delete:hover {
        color: #880606;
    }

    .table-light tbody+tbody,
    .table-light td,
    .table-light th,
    .table-light thead th {
        border-color: #b0b3b5;
    }

    .td_img {
        width: 100px;
    }

    .t-scroll {
        overflow-x: scroll;
    }

    .header {
        margin: auto;
        padding: 20px 0px;
    }

    .btn-less {
        max-width: 130px;
        margin-bottom: 10px;
    }

    @media screen and (min-width: 780px) {
        .t-scroll {
            overflow-x: unset;
        }
    }
</style>
<?php

?>

<div class="container">
    <div class="card">
        <div class="header">
            <h4>บทเรียน</h4>
            <span><?php echo 'HSK' . $_GET['set'] . ' ชุดที่' . $_GET['part'] ?> </span>
        </div>
        <div class="btn btn-less btn-success" data-toggle="modal" data-target="#modal-create">เพิ่มบทเรียน<i class="fas fa-plus-circle" style="margin-left: 5px;"></i></div>

        <div class="t-scroll">
            <table class="table  table-bordered text-center">
                <thead>
                    <tr class="table-light">
                        <th scope="col">#</th>
                        <th scope="col">รูป</th>
                        <th scope="col">เสียง</th>
                        <th scope="col">ชื่อบทเรียน</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include('../../database/database.php');
                    $num = 0;
                    $sesion = "session";
                    $part = $_GET['part'];
                    $set = 'HSK' . $_GET['set'] . '_lesson';
                    $HSK_id = 'HSK' . $_GET['set'] . '_LID';
                    $query = "SELECT * FROM $set  WHERE $sesion = $part ";
                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $num += 1;
                        if ($num < 2) {
                            echo '<tr><td>' . $num . '</td>
                    <td class="td_img"><img src="../../img/บทเรียนHSK' . $_GET['set'] . '_ชุดที่' . $_GET['part'] . '/' . $row['pic'] . '" height="200"></td>
                    <td>' . $row['voice'] . '</td>
                    <td>' . $row['lesson_name'] . '</td>
                    <td> default </td></tr>';
                        }
                        echo '<tr><td>' . $num . '</td>
                    <td class="td_img"><img src="../../img/บทเรียนHSK' . $_GET['set'] . '_ชุดที่' . $_GET['part'] . '/' . $row['pic'] . '" height="200"></td>
                    <td>' . $row['voice'] . '</td>
                    <td>' . $row['lesson_name'] . '</td>
                    <td><i class="fas fa-trash icon-delete" data-toggle="modal" data-target="#modal' . $row[$HSK_id] . '"></i></td>
                    <!-- /// Modal Delete -->
                    <div class="modal fade" id="modal' . $row[$HSK_id] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title " id="exampleModalLabel">คุณต้องการจะลบ ?</h5>
                         
                        </div>
                        <div class="modal-body">
                        <form action="Delete.php">
                        <div class="form-group text-center">
                          <h5 for="exampleFormControlInput1" >ชื่อบทเรียน : ' . $row['lesson_name'] . '</h5>
                          <img src="../../img/บทเรียนHSK' . $_GET['set'] . '_ชุดที่' . $_GET['part'] . '/' . $row['pic'] . '" height="200">
                        </div>
                   
                        <input type="hidden" value="' . $row[$HSK_id] . '" name="lessId">
                        <input type="hidden" value="' . $_GET['set'] . '" name="set">
                        <input type="hidden" value="' . $_GET['part'] . '" name="part">
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">ยืนยัน</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        </div> 
                         </form>
                      </div>
                    </div>
                  </div>
                    <!-- //// -->
                   
                    </tr>';
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /// Modal Create -->
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="modal-createLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title">เพิ่มบทเรียน</h5>
            </div>
            <form action="Create.php?less='1'&&set=<?= $_GET['set'] ?>&&part=<?= $_GET['part'] ?>" method="post" enctype="multipart/form-data" class="needs-validation" novalidate autocomplete="off">
                <div class="modal-body">
    
                    <div class="d-flex justify-content-center">
                        <div style="width: 70%;">
                            <label>ภาพ</label>
                            <input type="file" class="form-control-file" name="pic" required>
                            <hr>
                            <label>เสียง</label>
                            <input type="file" class="form-control-file" name="sound" required>
                            <hr>
                            <label>ชื่อบทเรียน</label>
                            <input type="text" class="form-control" name="less_name" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">ยืนยัน</button>
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">ปิด</button>

                </div>
            </form>
        </div>
    </div>
</div>
<?php include('../../layout/footerAdmin.php'); ?>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>