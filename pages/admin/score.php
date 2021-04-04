  <!-- <include header> -->
  <?php include('../../layout/headerAdmin.php'); ?>

  <style>
      .container {
          display: flex;
          justify-content: center;

      }

      #score {
          width: 60% !important;
      }

      .filter {
          width: 100%;
      }

      .form-label {
          margin-right: 5px;
      }

      .select {
          justify-content: flex-end !important;
      }

      .form-control {
          width: 30%;
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

      .table-scroll {
          overflow-x: scroll;
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
                              <input class="form-control p-2" id="score" type="text" placeholder="Search..">
                          </div>

                          <div class="filter">
                              <div class="form-select select">
                                  <label class="form-label d-flex align-items-center">Filter by School :</label>
                                  <select class=" form-control " id="select" name="sh" required>
                                      <option selected disabled value="">select </option>
                                      <option value="">All </option>
                                      <?php
                                        include('../../database/database.php');

                                        $query = "SELECT * FROM School ";
                                        $result = mysqli_query($conn, $query);

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<option value = ' . $row['SchoolName'] .  '>' . $row['SchoolName'] . '</option>';
                                        }

                                        ?>
                                  </select>

                              </div>
                              <div class="form-select select">
                                  <label class="form-label d-flex align-items-center">Sort by :</label>
                                  <select class=" form-control " id="select" name="sh" required>
                                      <option selected disabled value="">Sort </option>
                                      <option value="">Pretest </option>
                                      <option value="">Postest </option>
                                      <option value="">ชุดที่ 1</option>
                                      <option value="">ชุดที่ 2 </option>
                                      <option value="">ชุดที่ 3 </option>
                                      <option value="">ชุดที่ 4 </option>

                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="table-scroll">
                          <table class="table table-bordered  text-center">
                              <thead style=" background-color: #ececec;">
                                  <tr>
                                      <th>No. </th>
                                      <th>Name </th>
                                      <th>Pretest</th>
                                      <th>Posttest</th>
                                      <th>ชุดที่ 1</th>
                                      <th>ชุดที่ 2</th>
                                      <th>ชุดที่ 3</th>
                                      <th>ชุดที่ 4</th>
                                      <th>School</th>
                                  </tr>
                              </thead>
                              <tbody id="scoreTable">
                                  <?php
                                    $no = 0;
                                    include('../../database/database.php');
                                    $query = "SELECT * FROM (((Student 
                                 INNER JOIN HSK_Exam_Score ON Student.SID = HSK_Exam_Score.SID)
                                 INNER JOIN HSK1_Exercise_Score ON Student.SID =HSK1_Exercise_Score.SID)
                                 INNER JOIN School ON student.SchoolID =School.SchoolID)";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $no += 1;
                                        echo '  <tr>
                                        <th scope="row">' .  $no . '</th>
                                    <th>' . $row['Sname'] . ' ' . $row['SLname'] . '</th>
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
                              <input class="form-control p-2" id="score" type="text" placeholder="Search..">
                          </div>
                          <div class="filter">
                              <div class="form-select select">
                                  <label class="form-label d-flex align-items-center">Filter by School :</label>
                                  <select class=" form-control " id="select" name="sh" required>
                                      <option selected disabled value="">select </option>
                                      <option value="">All </option>
                                      <?php
                                        include('../../database/database.php');

                                        $query = "SELECT * FROM School ";
                                        $result = mysqli_query($conn, $query);

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<option value = ' . $row['SchoolName'] .  '>' . $row['SchoolName'] . '</option>';
                                        }

                                        ?>
                                  </select>

                              </div>
                              <div class="form-select select">
                                  <label class="form-label d-flex align-items-center">Sort by :</label>
                                  <select class=" form-control " id="select" name="sh" required>
                                      <option selected disabled value="">Sort </option>
                                      <option value="">Pretest </option>
                                      <option value="">Postest </option>
                                      <option value="">ชุดที่ 1</option>
                                      <option value="">ชุดที่ 2 </option>
                                      <option value="">ชุดที่ 3 </option>
                                      <option value="">ชุดที่ 4 </option>

                                  </select>
                              </div>

                          </div>

                      </div>
                      <div class="table-scroll">
                          <table class="table table-bordered  text-center">
                              <thead style=" background-color: #ececec;">
                                  <tr>
                                      <th>No. </th>
                                      <th>Name </th>
                                      <th>Pretest </th>
                                      <th>Posttest</th>
                                      <th>ชุดที่ 1</th>
                                      <th>ชุดที่ 2</th>
                                      <th>ชุดที่ 3</th>
                                      <th>ชุดที่ 4</th>
                                      <th>School</th>
                                  </tr>
                              </thead>
                              <tbody id="scoreTable">
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
                                        <th scope="row">' .  $no . '</th>
                                    <th >' . $row['Sname'] . ' ' . $row['SLname'] . '</th>
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

  <script>
      $(document).ready(function() {
          $("#score").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#scoreTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
          });

      });
      $(document).ready(function() {
          $("#select").on("change", function() {
              var value = $(this).val().toLowerCase();
              $("#scoreTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
          });

      });
  </script>

  <?php include('../../layout/footerAdmin.php'); ?>