  <!-- <include header> -->
  <?php include('../../layout/headerAdmin.php');

    if (isset($_SESSION['delete'])) {
        $message = $_SESSION['delete'];
        echo  "<script type='text/javascript'>alert('$message');</script>";

        unset($_SESSION['delete']);
    }
    if (isset($_SESSION['create'])) {
        $message = $_SESSION['create'];
        echo  "<script type='text/javascript'>alert('$message');</script>";

        unset($_SESSION['create']);
    }
    ?>

  <style>
      .container {
          display: flex;
          justify-content: center;

      }

      .form-control {
          width: 80%;
          height: 30px;
      }

      .btn-success-teacher {
          display: table;
          margin-bottom: 5px;
          border-radius: 1.25rem;
          text-transform: uppercase;

      }

      .card-body {
          padding: 20px 50px;
      }

      .card {
          width: 100%;
          margin-top: 50px;
          height: 80%;
      }

      .card-title {
          margin: 15px 0px;
          text-transform: uppercase;
      }

      .icon-delete {
          color: #c03d3d;
          cursor: pointer;
      }

      .icon-edit {
          color: #949425;
          cursor: pointer;
      }

      .icon-edit:hover {
          color: #d2d218;
      }

      .icon-delete:hover {
          color: #e72c2c;
      }

      @media(max-width:700px) {
          .teacher-table {
              overflow-x: scroll;
              font-size: 10px;
          }

          .card-body {
              padding: 20px 10px;
          }

          .btn-success-teacher {
              font-size: 12px;

          }

          .card {
              margin-top: 20px;
          }

      }

      input[type=text],
      input[type=password] {
          margin-bottom: 10px;
      }
  </style>

  <div class="container">
      <div class="card text-center">
          <div class="card-body">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="teacher-tab" data-toggle="tab" href="#teacher" role="tab" aria-controls="teacher" aria-selected="true">teacher</a>
                  </li>
                  <li class="nav-item" role="presentation">
                      <a class="nav-link" id="School-tab" data-toggle="tab" href="#School" role="tab" aria-controls="School" aria-selected="false">School</a>
                  </li>

              </ul>
              <div class="tab-content">
                  <!-- /////Shcool -->
                  <div class="tab-pane fade" id="School" role="tabpanel" aria-labelledby="School-tab">
                      <h5 class="card-title">School Account</h5>
                      <div class="header d-flex justify-content-between">
                          <div class="btn btn-success-teacher btn-success" data-toggle="modal" data-target="#modal-create">เพิ่ม<i class="fas fa-plus-circle" style="margin-left: 5px;"></i></div>
                          <div class="d-flex justify-content-end">
                              <input class="form-control p-2" id="schoolInput" type="text" placeholder="Search..">
                          </div>
                      </div>

                      <div class="teacher-table">
                          <table class="table table-bordered">
                              <thead style=" background-color: #ececec;">
                                  <tr>
                                      <th scope="col">ชื่อโรงเรียน</th>

                                      <th scope="col">แก้ไข</th>
                                  </tr>
                              </thead>
                              <tbody id="schoolTable">
                                  <?php

                                    include('../../database/database.php');
                                    $query = "SELECT * FROM school";
                                    $result = mysqli_query($conn, $query);

                                    while ($row = mysqli_fetch_assoc($result)) {

                                        echo
                                        ' <tr>
      <td>' . $row['SchoolName'] . '</td>
      <td><i  class="fas fa-edit icon-edit" data-toggle="modal" data-target="#modal-delete' . $row['SchoolID'] . '"></i></td>
      <!-- /// Modal Delete -->
      <div class="modal fade" id="modal-delete' . $row['SchoolID'] . '" tabindex="-1" aria-labelledby="modal-deleteLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">

                  <form action="schoolDelete.php" class="needs-validation" novalidate autocomplete="off" method="post">
                  <div class="modal-body" style="
                  background-color: whitesmoke;">
                      แก้ไข <i class="fas fa-edit"></i>
                      <hr>
                     <div class="d-flex justify-content-center">
                      <input type="text" class="form-control text-center" id="text-school" name="text-edit" value = " ' . $row['SchoolName'] . '" required>
                      </div>
                  </div>
                  <div class="modal-footer">
<input type="hidden" name="edit" value="' . $row['SchoolID'] . '">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save</button>
                     
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

                  <!-- ////// -->

                  <!-- /////Teacher -->
                  <div class="tab-pane fade show active" id="teacher" role="tabpanel" aria-labelledby="teacher-tab">
                      <h5 class="card-title">Teacher Account</h5>

                      <div class="header d-flex justify-content-between">
                          <div class="btn btn-success-teacher btn-success" data-toggle="modal" data-target="#modal-create">Create<i class="fas fa-plus-circle" style=" margin-left: 5px;"></i></div>
                          <div class="d-flex justify-content-end">
                              <input class="form-control p-2" id="teacherInput" type="text" placeholder="Search..">
                          </div>
                      </div>



                      <!-- /// Modal Create -->
                      <div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="modal-createLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">

                                  <form action="teacherCreate.php" method="post" class="needs-validation" novalidate autocomplete="off">
                                      <div class="modal-body">
                                          Create Accout
                                          <hr>
                                          <div class="d-flex justify-content-center">
                                              <div style="width: 70%;">
                                                  <input type="text" class="form-control" placeholder="ชื่อ" name="name" required>
                                                  <input type="text" class="form-control" placeholder="นามสกุล" name="Lname" required>
                                                  <input type="text" class="form-control" placeholder="Username" name="username" required>
                                                  <input type="password" class="form-control" placeholder="Password" name="password" minlength="6" required>

                                                  <select class="form-control" id="validationCustom" name="sh" required>
                                                      <option selected disabled value="">School </option>
                                                      <?php
                                                        include('../../database/database.php');

                                                        $query = "SELECT * FROM School ";
                                                        $result = mysqli_query($conn, $query);

                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            echo '<option value = ' . $row['SchoolID'] . '>' . $row['SchoolName'] . '</option>';
                                                        }

                                                        ?>


                                                  </select>

                                              </div>
                                          </div>
                                      </div>

                                      <div class="modal-footer">

                                          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">save</button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                      <!-- //// -->
                      <div class="teacher-table">
                          <table class="table table-bordered">
                              <thead style=" background-color: #ececec;">
                                  <tr>
                                      <th scope="col">ชื่อ-นามสกุล</th>
                                      <th scope="col">Username</th>
                                      <th scope="col">password</th>
                                      <th scope="col">School</th>

                                      <th scope="col">ลบ</th>
                                  </tr>
                              </thead>
                              <tbody id="teacherTable">
                                  <?php

                                    include('../../database/database.php');
                                    $query = "SELECT * FROM teacher INNER JOIN school ON teacher.SchoolID = school.SchoolID ";
                                    $result = mysqli_query($conn, $query);

                                    while ($row = mysqli_fetch_assoc($result)) {

                                        echo
                                        ' <tr>
      <td>' . $row['Tname'] . ' ' . $row['TLname'] . '</td>
      <td>' . $row['TUsername'] . '</td>
      <td>' . $row['TPassword'] . '</td>
      <td>' . $row['SchoolName'] . '</td>
      <td><i class="fas fa-trash icon-delete" data-toggle="modal" data-target="#modal-delete' . $row['TID'] . '"></i></td>
      <!-- /// Modal Delete -->
      <div class="modal fade" id="modal-delete' . $row['TID'] . '" tabindex="-1" aria-labelledby="modal-deleteLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">

                  <div class="modal-body">
                      คุณต้องการที่จะลบ ?
                      <hr>
                    
                      <p>Account : ' . $row['Tname'] . ' ' . $row['TLname'] . ' </p>
                      <p>School : ' . $row['SchoolName'] . '  </p>
                     
                    
                  </div>
                  <div class="modal-footer">
                  <form action="teacherDelete.php" method="post">
<input type="hidden" name="delete" value="' . $row['TID'] . '">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Delete</button>
                      </form>
                  </div>
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



          </div>
          <script>
              $(document).ready(function() {
                  $("#teacherInput").on("keyup", function() {
                      var value = $(this).val().toLowerCase();
                      $("#teacherTable tr").filter(function() {
                          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                      });
                  });
                  $("#schoolInput").on("keyup", function() {
                      var value = $(this).val().toLowerCase();
                      $("#schoolTable tr").filter(function() {
                          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                      });
                  });
              });
          </script>
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
      </div>
  </div>


  <?php include('../../layout/footerAdmin.php'); ?>