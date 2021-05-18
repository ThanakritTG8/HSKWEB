<?php include('../../layout/headerAdmin.php'); ?>
<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: white;
        margin-top: 20px;
        margin-bottom: 20px;
        padding-top: 20px;
    }

    .vacab-main {
        width: 100%;

    }

    .text-header {
        margin-bottom: 20px;
    }

    thead {
        white-space: nowrap;
    }

    .icon-delete {
        color: #da1b1b;
        cursor: pointer;
    }

    .icon-delete:hover {
        color: #880606;
    }

    .modal-header {
        justify-content: center !important;
    }

    .set-table {
        overflow: scroll;
        overflow-y: hidden;
    }

    th {
        font-weight: unset;
        font-size: 14px;
    }

    .btn {
        margin-bottom: 10px;
    }
</style>
<!-- /// Modal Create -->
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="modal-createLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title">เพิ่มคำศัพท์</h5>
            </div>
            <form action="Create.php?vocab='1'&&set=<?= $_GET['set'] ?>&&part=<?= $_GET['part'] ?>" method="post" class="needs-validation" novalidate autocomplete="off">
                <div class="modal-body">

                    <div class="d-flex justify-content-center">
                        <div style="width: 70%;">
                            <label>หมวด</label>
                            <select class="form-control" id="validationCustom" name="type" required>
                                <option selected disabled value="">หมวด </option>
                                <?php
                                include('../../database/database.php');
                                $set = 'HSK' . $_GET['set'] . '_Vocab';
                                $query = "SELECT * FROM $set GROUP BY type";
                                $result = mysqli_query($conn, $query);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value = " . $row['type'] . ">" . $row['type'] . "</option>";
                                }

                                ?>

                            </select>
                            <label>ประเภทคำศัพท์</label>
                            <select class="form-control" id="validationCustom" name="type_word" required>
                                <option selected disabled value="">ประเภทคำศัพท์ </option>
                                <?php
                                include('../../database/database.php');
                                $set = 'HSK' . $_GET['set'] . '_Vocab';
                                $query = "SELECT * FROM $set GROUP BY type_word";
                                $result = mysqli_query($conn, $query);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value = " . $row['type_word'] . ">" . $row['type_word'] . "</option>";
                                }

                                ?>
                            </select>
                            <label>No.</label>
                            <input type="text" class="form-control" name="vocab_no">
                            <label>คำศัพท์</label>
                            <input type="text" class="form-control" name="ch" required>
                            <label>พินอิน</label>
                            <input type="text" class="form-control" name="pinyin" required>
                            <label>ประเภท</label>
                            <input type="text" class="form-control" name="type_ch">
                            <div class="form-text text-end">( Ex. 代 )</div>
                            <label>คำแปล</label>
                            <input type="text" class="form-control" name="th" required>
                            <div class="form-text text-end">( Ex.สัปดาห์หน้า )</div>
                            <label>เสียง</label>
                            <input type="file" class="form-control-file" name="sound">



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
<div class="container">
    <div class="vacab-main">
        <div class="d-flex justify-content-center text-header">
            <div>
                <h4>คำศัพท์</h4>
                <span><?php echo 'HSK' . $_GET['set'] . ' ชุดที่' . $_GET['part'] ?> </span>
            </div>
        </div>
        <div class="btn btn-success" data-toggle="modal" data-target="#modal-create">เพิ่มคำศัพท์<i class="fas fa-plus-circle" style="margin-left: 5px;"></i></div>

        <div class="set-table">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">หมวด</th>
                        <th scope="col">ประเภทคำศัพท์</th>
                        <th scope="col">No.</th>
                        <th scope="col">คำศัพท์</th>
                        <th scope="col">พินอิน</th>
                        <th scope="col">ประเภท</th>
                        <th scope="col">คำแปล</th>
                        <th scope="col">เสียง</th>
                        <th scope="col">ลบ</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include('../../database/database.php');
                    $set = 'HSK' . $_GET['set'] . '_Vocab';
                    $HSK_id = 'HSK' . $_GET['set'] . '_VocabID';
                    $part = $_GET['part'];
                    $ses = 'session';
                    $no = 0;
                    $query = "SELECT * FROM $set WHERE $ses =  $part";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $no += 1;
                        echo '  <tr>
      <th scope="row">' .  $no . '</th>
      <th scope="row">' .  $row['type'] . '</th>
      <th scope="row">' .  $row['type_word'] . '</th>
      <th scope="row">' .  $row['vocab_no'] . '</th>
      <th scope="row">' .  $row['ch'] . '</th>
      <th scope="row">' .  $row['pinyin'] . '</th>
      <th scope="row">' .  $row['type_ch'] . '</th>
      <th scope="row">' .  $row['th'] . '</th>
      <th scope="row">' .  $row['sound'] . '</th>
      <th scope="row"><i  class="fas fa-trash icon-delete" data-toggle="modal" data-target="#modal' . $row[$HSK_id] . '"></i></th>
      <!-- /// Modal Delete -->
      <div class="modal fade" id="modal' . $row[$HSK_id] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title " id="exampleModalLabel">คุณต้องการจะลบ ?</h5>
           
          </div>
          <div class="modal-body">
          <form action="Delete.php">
          <div class="form-group">
            <h5 for="exampleFormControlInput1" class="text-center" style =" width:100%" >คำศัพท์ : ' .  $row['ch'] . '</h5>
       
          </div>
     
          <input type="hidden" value="' . $row[$HSK_id] . '" name="vocabId">
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