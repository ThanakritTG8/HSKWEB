  <!-- <include header> -->
  <?php include('../../layout/headerTeacher.php'); ?>
  <style>
    #info {
      width: 100%;
      height: 80%;
      margin-top: 30px;

      padding: 10px;
    }

    .container {
      display: flex;
      justify-content: center;
    }

    .cl-table {
      margin-top: 10px;
    }

    thead {
      font-size: 10pt;
    }

    tbody {
      font-size: 10pt;
    }

    @media screen and (max-width: 1200px) {
      thead {
        font-size: 8pt;
      }

      tbody {
        font-size: 8pt;
      }
    }

    .icon:hover {
      color: green;
      cursor: pointer;
    }

    .row {
      margin: 0px !important;
      width: 100%;
    }

    .modal-body {
      padding-left: 40px;
    }

    #myInput {
      margin-top: 20px;
      max-width: 200px;
      max-height: 28px;
    }

    @media screen and (max-width: 700px) {
      #myInput {
        max-width: 150px;
        max-height: 25px;
      }

      .body-table {
        padding: 10px;
      }

      .cl-table {
        overflow-x: scroll;
      }
    }

    .body-table-bg {
      background-color: white;
    }

    .icon-search {
      padding-top: 20px !important;
      color: gray;
    }
  </style>

  <div class="container">
    <div class="body-table-bg " id="info">
      <div class="text-center">
        <?php
        include('../../database/database.php');
        $tid = $_SESSION['TID'];
        $query_name = "SELECT * FROM teacher INNER JOIN school ON teacher.SchoolID = school.SchoolID WHERE TID= $tid";
        $result_name = mysqli_query($conn, $query_name);

        while ($row_name = mysqli_fetch_assoc($result_name)) {
          echo '<h4>' . $row_name['SchoolName'] . '</h4>';
        }

        ?>
      </div>
      <div class="d-flex flex-row-reverse">

        <div>
          <input class="form-control p-2" id="myInput" type="text" placeholder="Search..">
        </div>
        <div class="p-2 icon-search"><i class='fas fa-search '></i></div>

      </div>
      <div class="cl-table">
        <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th>No. </th>
              <th>Name </th>
              <th>HSK1_Pretest</th>
              <th>HSK1_Posttest</th>
              <th>HSK2_Pretest</th>
              <th>HSK2_Posttest</th>
              <th>view</th>
            </tr>
          </thead>
          <tbody id="myTable">

            <?php

            include('../../database/database.php');
            $no = 0;
            $tid = $_SESSION['TID'];
            $query_t = "SELECT * FROM teacher WHERE TID =$tid";
            $result_t = mysqli_query($conn, $query_t);

            while ($row_t = mysqli_fetch_assoc($result_t)) {
              $schID = $row_t['SchoolID'];

              /////////// ตางรางคะแนน pretest และ post 
              $query = "SELECT * FROM (((student 
 INNER JOIN hsk_exam_score ON student.SID = hsk_exam_score.SID)
 INNER JOIN hsk1_exercise_score ON student.SID =hsk1_exercise_score.SID)
 INNER JOIN hsk2_exercise_score ON student.SID =hsk2_exercise_score.SID) WHERE SchoolID = $schID";
              $result = mysqli_query($conn, $query);

              while ($row = mysqli_fetch_assoc($result)) {
                $no += 1;
                echo '
   <tr>
   <td scope="row">' . $no . '</td>
   <td>' . $row['Sname'] . ' ' . $row['SLname'] . '</td>
   <td> ' . $row['HSK1_Pretest'] . '</td>
   <td> ' . $row['HSK1_Posttest'] . '</td>
   <td> ' . $row['HSK2_Pretest'] . '</td>
   <td> ' . $row['HSK2_Posttest'] . '</td>
   <td>
   <i class="far fa-eye icon" style="font-size:20px" data-toggle="modal" data-target="#Modal' . $row['SID'] . '"></i></td>
 </tr>';

                echo ' <!-- Modal -->
<div class="modal fade" id="Modal' . $row['SID'] . '" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLongTitle">' . $row['Sname'] . ' ' . $row['SLname'] . '</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>HSK1 </p>
        <p>Pretest   :   ' . $row['HSK1_Pretest'] . ' </p>
        <p>Posttest  :   ' . $row['HSK1_Posttest'] . ' </p>
        <p> ชุดที่1  : ' . $row['hsk1_session_1'] . '  </p>
        <p> ชุดที่2 : ' . $row['hsk1_session_2'] . ' </p>
        <p> ชุดที่3 : ' . $row['hsk1_session_3'] . ' </p>
        <p> ชุดที่4  : ' . $row['hsk1_session_4'] . ' </p>
        <hr>  <hr>
        <p>HSK2 </p>
        <p>Pretest   : ' . $row['HSK2_Pretest'] . ' </p>
        <p>Posttest  : ' . $row['HSK2_Posttest'] . ' </p>
        <p> ชุดที่1 : ' . $row['hsk2_session_1'] . ' </p>
        <p> ชุดที่2 :  ' . $row['hsk2_session_2'] . '</p>
        <p> ชุดที่3 :  ' . $row['hsk2_session_3'] . '</p>
        <p> ชุดที่4  : ' . $row['hsk2_session_4'] . ' </p>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>      ';
              }
            }
            ?>

          </tbody>
        </table>
        <script>
          $(document).ready(function() {
            $("#myInput").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
            });
          });
        </script>
      </div>
    </div>
  </div>

  <?php include('../../layout/footerTeacher.php'); ?>