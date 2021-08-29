<?php


session_start();
if (isset($_SESSION['err'])) {
  $message = $_SESSION['err'];
  session_destroy();
  unset($_SESSION['err']);
} else $message = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/regis.css">
</head>


<body id="body">


  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <form action="Regis_check.php" method="post" class="needs-validation" novalidate autocomplete="off">
        <!-- Icon -->
        <div class="fadeIn first">
          <div class="text-center">

            <h2>
              Register
              <img src="./img/regis.png" alt="" style="width: 50px;">
            </h2>
          </div>

          <div class="form-row">
            <div class="form-group col-12 col-md-6">
              <label for="inputEmail4">Firstname</label>
              <input type="text" class="form-control" name="Fname" required>
            </div>
            <div class="form-group col-12 col-md-6">
              <label for="inputEmail4">Lastname</label>
              <input type="text" class="form-control" name="Lname" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group  col-12  col-md-12">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group  col-12  col-md-12">
              <label for="inputEmail4">Username</label>
              <input type="text" class="form-control" name="username" required>
            </div>
          </div>


          <div class="form-row">
            <div class="form-group  col-12 col-md-12">
              <label for="inputEmail4">Password</label>
              <input type="password" class="form-control" name="password" id="password" minlength="6" maxlength="10" required>
              <small id="password" class="form-text text-muted">อย่างน้อย 6-10 ตัวอักษร</small>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group  col-12 col-md-12">
              <label for="inputEmail4">Confirm Password</label>
              <input type="password" class="form-control" name="password2" id="confirm_password" required>
              <span id='message'></span>
            </div>
          </div>


          <script>

          </script>

          <div class="form-row">
            <div class="form-group col-8 col-md-6">
              <label for="inputEmail4" class="form-label">School</label>
              <select class="form-control" id="validationCustom" name="sh" required>
                <option selected disabled value="">select </option>
                <?php
                include('./database/database.php');

                $query = "SELECT * FROM School ";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<option value = ' . $row['SchoolID'] . '>' . $row['SchoolName'] . '</option>';
                }

                ?>


              </select>

            </div>
          </div>

          <div class="form-row">
            <div class="col-12  col-md-12">
            </div>
          </div>
          <div class="text-center">

            <input type="submit" name="reg_user" class="fadeIn first " value="SIGN UP">

          </div>

      </form>
    </div>
    <a id="formFooter" class="btn underlineHover" style="width: 100%;" href="Login.php">
      <p class="text-center" style="color: white; margin-bottom: 5px;"> Back </p>
    </a>
  </div>


</body>

<script src="https://code.jquery.com/jquery-3.6.0.slim.js" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  $('#password, #confirm_password').on('keyup', function() {
    if ($('#password').val() == $('#confirm_password').val()) {
      $('#message').html('Matching').css('color', 'green');
    } else
      $('#message').html('Not Matching').css('color', 'red');
  });
  var strMessage = '<?= $message ?>';
  if (strMessage) {
    console.log(strMessage);
    Swal.fire({
      heightAuto: false,
      text: strMessage,
      icon: 'error',
      padding: '3em'
    })
  }
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

</html>