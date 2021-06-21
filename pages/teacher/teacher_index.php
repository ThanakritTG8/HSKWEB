  <!-- <include header> -->
  <?php include('../../layout/headerTeacher.php'); ?>
  <style>
    .topic {
      text-align: center;
      background-color: bisque;
      font-weight: bolder;
    }

    tr th:first-child:hover {
      background: unset;
      text-decoration: unset;
    }

    tr th:last-child:hover {
      background: unset;
      text-decoration: unset;
    }


    .pointer {
      cursor: pointer;
    }

    .table-header :hover {
      background-color: #4caf50;
      text-decoration: overline;
    }

    h4 {
      font-weight: bolder;
      text-transform: uppercase;
    }

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

    .table-header {
      font-size: 10pt;
      background: rgb(122, 45, 45);
      color: #fff;
    }

    tbody {
      font-size: 10pt;
      background-color: ivory;
    }

    @media screen and (max-width: 1200px) {

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
        $query_name = "SELECT * FROM Teacher INNER JOIN School ON Teacher.SchoolID = School.SchoolID WHERE TID= $tid";
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
        <table class="table table-bordered text-center" id="myTable">

          <tr class="table-header">
            <th>No. </th>
            <th onclick="sortTable(1)" class="pointer">Name </th>
            <th onclick="sortTable(2)" class="pointer">HSK1_Pretest</th>
            <th onclick="sortTable(3)" class="pointer">HSK1_Posttest</th>
            <th onclick="sortTable(4)" class="pointer">HSK2_Pretest</th>
            <th onclick="sortTable(5)" class="pointer">HSK2_Posttest</th>
            <th>view</th>
          </tr>

          <tbody>

            <?php

            include('../../database/database.php');
            $no = 0;
            $tid = $_SESSION['TID'];
            $query_t = "SELECT * FROM Teacher WHERE TID =$tid";
            $result_t = mysqli_query($conn, $query_t);

            while ($row_t = mysqli_fetch_assoc($result_t)) {
              $schID = $row_t['SchoolID'];

              /////////// ตางรางคะแนน pretest และ post 
              $query = "SELECT * FROM (((Student 
 INNER JOIN HSK_Exam_Score ON Student.SID = HSK_Exam_Score.SID)
 INNER JOIN HSK1_Exercise_Score ON Student.SID =HSK1_Exercise_Score.SID)
 INNER JOIN HSK2_Exercise_Score ON Student.SID =HSK2_Exercise_Score.SID) WHERE SchoolID = $schID";
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
        <p class="topic">HSK1 </p>
        <p>Pretest   :   ' . $row['HSK1_Pretest'] . ' </p>
        <p>Posttest  :   ' . $row['HSK1_Posttest'] . ' </p>
        <p> ชุดที่1  : ' . $row['hsk1_session_1'] . '  </p>
        <p> ชุดที่2 : ' . $row['hsk1_session_2'] . ' </p>
        <p> ชุดที่3 : ' . $row['hsk1_session_3'] . ' </p>
        <p> ชุดที่4  : ' . $row['hsk1_session_4'] . ' </p>
        <hr>  <hr>
        <p class="topic">HSK2 </p>
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

      </div>
    </div>
  </div>

  <?php include('../../layout/footerTeacher.php'); ?>

  <script>
    $(document).ready(function() {
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    let click = 0;

    function sortTable(e) {
      const taget = e;
      click += 1;
      
      let table, rows, switching, i, x, y, shouldSwitch;
      table = document.getElementById("myTable");
      switching = true;
      /*Make a loop that will continue until
      no switching has been done:*/
      while (switching) {
        //start by saying: no switching is done:
        switching = false;
        rows = table.rows;
        /*Loop through all table rows (except the
        first, which contains table headers):*/
        for (i = 1; i < (rows.length - 1); i++) {
          //start by saying there should be no switching:
          shouldSwitch = false;
          /*Get the two elements you want to compare,
          one from current row and one from the next:*/
          x = rows[i].getElementsByTagName("TD")[taget];
          y = rows[i + 1].getElementsByTagName("TD")[taget];
          //check if the two rows should switch place:
          if (click % 2 == 0) {
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
              //if so, mark as a switch and break the loop:
              shouldSwitch = true;
              break;
            }
          } else {
            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
              //if so, mark as a switch and break the loop:
              shouldSwitch = true;
              break;
            }
          }
        }
        if (shouldSwitch) {
          /*If a switch has been marked, make the switch
          and mark that a switch has been done:*/
          rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
          switching = true;
        }
      }
    }
  </script>