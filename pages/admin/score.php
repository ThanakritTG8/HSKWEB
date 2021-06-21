  <!-- <include header> -->
  <?php include('../../layout/headerAdmin.php'); ?>

  <style>
      .container {
          display: flex;
          justify-content: center;

      }

      .pointer {
          cursor: pointer;
      }

      #score {
          width: 60% !important;
      }

      .filter {
          width: 250px;
      }

      .form-label {
          margin-right: 5px;
      }

      .select {
          justify-content: flex-end !important;
      }

      .form-control {
          width: 50%;
          height: 30px;
          margin-bottom: 10px;
      }

      .form-select {
          display: flex;
          width: 100%;

          justify-content: center;
      }

      .card {
          width: 100%;
          margin-top: 50px;
          height: 80%;
      }

      h4 {
          text-align: center;
          margin: 20px 0px;
      }

      .card-body {
          padding: 10px;
      }

      .card-title {
          color: rgb(122, 45, 45);
          text-decoration: overline;
          font-weight: 800;
          padding: 20px 0px;
      }

      .table-scroll {
          overflow-x: scroll;
      }

      .table-header {
          background-color: black;
          color: white;
      }

      .table-header :hover {
          background-color: rgb(122, 45, 45);
          text-decoration: overline;
          color: white;
      }

      tr th:first-child:hover {
          background: unset !important;
          text-decoration: unset !important;
      }

      tr th:nth-child(2):hover {
          background: unset;
          text-decoration: unset;
      }

      @media (min-width : 750px) {
          .filter {
              width: 450px;
          }

      }

      @media (min-width : 1000px) {
          .table-scroll {
              overflow-x: unset;
          }
      }

      @media (max-width : 500px) {
          .form-control {
              width: 50%;
          }
      }
  </style>

  <div class="container">
      <div class="card center">
          <div class="card-body">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="HSK1-tab" data-toggle="tab" href="#HSK1" role="tab" aria-controls="HSK1" aria-selected="true">HSK1</a>
                  </li>
                  <li class="nav-item" role="presentation">
                      <a class="nav-link" id="HSK2-tab" data-toggle="tab" href="#HSK2" role="tab" aria-controls="HSK2" aria-selected="false">HSK2</a>
                  </li>

              </ul>

              <div class="tab-content">
                  <div class="tab-pane fade show active" id="HSK1" role="tabpanel">
                      <h4 class="card-title">คะแนน HSK1</h4>
                      <div class="d-flex justify-content-between">
                          <div class="d-flex align-items-end filter">
                              <input class="form-control p-2" id="score-hsk1" type="text" placeholder="Search..">
                          </div>


                      </div>
                      <div class="table-scroll">
                          <table class="table table-bordered text-center" id="hsk1-table">
                              <thead>
                                  <tr class="table-header">
                                      <th>No. </th>
                                      <th>Name </th>
                                      <th class="pointer" onclick="sortTable(2)">Pretest</th>
                                      <th class="pointer" onclick="sortTable(3)">Posttest</th>
                                      <th class="pointer" onclick="sortTable(4)">ชุดที่ 1</th>
                                      <th class="pointer" onclick="sortTable(5)">ชุดที่ 2</th>
                                      <th class="pointer" onclick="sortTable(6)">ชุดที่ 3</th>
                                      <th class="pointer" onclick="sortTable(7)">ชุดที่ 4</th>
                                      <th class="pointer" onclick="sortTable(8)">School</th>
                                  </tr>
                              </thead>
                              <tbody id="scoreTable-hsk1">
                                  <?php
                                    $no = 0;
                                    include('../../database/database.php');
                                    $query = "SELECT * FROM (((Student 
                                 INNER JOIN HSK_Exam_Score ON Student.SID = HSK_Exam_Score.SID)
                                 INNER JOIN HSK1_Exercise_Score ON Student.SID =HSK1_Exercise_Score.SID)
                                 INNER JOIN School ON Student.SchoolID =School.SchoolID)";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $no += 1;
                                        echo '  <tr>
                                        <td scope="row">' .  $no . '</td>
                                    <td>' . $row['Sname'] . ' ' . $row['SLname'] . '</td>
                                    <td> ' . $row['HSK1_Pretest'] . '</td>
                                    <td> ' . $row['HSK1_Posttest'] . '</td>
                                    <td> ' .  $row['hsk1_session_1'] . '</td>
                                    <td> ' .  $row['hsk1_session_2'] . '</td>
                                    <td> ' .  $row['hsk1_session_3'] . '</td>
                                    <td> ' . $row['hsk1_session_4'] . '</td>
                                    <td> ' . $row['SchoolName'] . '</td>
                                </tr>';
                                    }


                                    ?>



                              </tbody>
                          </table>
                      </div>
                  </div>


                  <div class="tab-pane fade " id="HSK2" role="tabpanel">
                      <h4 class="card-title">คะแนน HSK2</h4>
                      <div class="d-flex justify-content-between">
                          <div class="d-flex align-items-end filter">
                              <input class="form-control p-2" id="score-hsk2" type="text" placeholder="Search..">
                          </div>


                      </div>
                      <div class="table-scroll">
                          <table class="table table-bordered text-center" id="hsk2-table">
                              <thead>
                                  <tr class="table-header">
                                      <th>No. </th>
                                      <th>Name </th>
                                      <th class="pointer" onclick="sortTable_hsk2(2)">Pretest</th>
                                      <th class="pointer" onclick="sortTable_hsk2(3)">Posttest</th>
                                      <th class="pointer" onclick="sortTable_hsk2(4)">ชุดที่ 1</th>
                                      <th class="pointer" onclick="sortTable_hsk2(5)">ชุดที่ 2</th>
                                      <th class="pointer" onclick="sortTable_hsk2(6)">ชุดที่ 3</th>
                                      <th class="pointer" onclick="sortTable_hsk2(7)">ชุดที่ 4</th>
                                      <th class="pointer" onclick="sortTable_hsk2(8)">School</th>
                                  </tr>
                              </thead>
                              <tbody id="scoreTable-hsk2">
                                  <?php
                                    $no = 0;
                                    include('../../database/database.php');
                                    $query = "SELECT * FROM (((Student 
                                 INNER JOIN HSK_Exam_Score ON Student.SID = HSK_Exam_Score.SID)
                                 INNER JOIN HSK2_Exercise_Score ON Student.SID =HSK2_Exercise_Score.SID)
                                 INNER JOIN School ON Student.SchoolID =School.SchoolID)";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $no += 1;
                                        echo '  <tr>
                                        <td scope="row">' .  $no . '</td>
                                    <td >' . $row['Sname'] . ' ' . $row['SLname'] . '</td>
                                    <td> ' . $row['HSK2_Pretest'] . '</td>
                                    <td> ' . $row['HSK2_Posttest'] . '</td>
                                    <td> ' .  $row['hsk2_session_1'] . '</td>
                                    <td> ' .  $row['hsk2_session_2'] . '</td>
                                    <td> ' .  $row['hsk2_session_3'] . '</td>
                                    <td> ' . $row['hsk2_session_4'] . '</td>
                                    <td> ' . $row['SchoolName'] . '</td>
                                </tr>';
                                    }


                                    ?>



                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>



  <?php include('../../layout/footerAdmin.php'); ?>
  <script>
      $(document).ready(function() {
          $("#score-hsk1").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#scoreTable-hsk1 tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
          });
          $("#score-hsk2").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#scoreTable-hsk2 tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
          });

      });

      let click = 0;

      function sortTable_hsk2(e) {
          const taget = e;
          click += 1;

          let table, rows, switching, i, x, y, shouldSwitch;
          table = document.getElementById("hsk2-table");
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

      function sortTable(e) {
          const taget = e;
          click += 1;

          let table, rows, switching, i, x, y, shouldSwitch;
          table = document.getElementById("hsk1-table");
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