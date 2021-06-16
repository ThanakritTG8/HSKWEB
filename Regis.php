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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
  /* BASIC */

  body {
    font-family: "Poppins", sans-serif;
    height: 100vh;
    background-color: #fff0f0;
  }

  a {
    color: white;
    display: inline-block;
    text-decoration: none;
    font-weight: 400;
  }

  @media screen and (max-width: 320px) {
    .fix {
      margin-right: -35px;

    }
  }

  h2 {
    text-align: center;
    font-weight: 600;
    text-transform: uppercase;
    display: inline-block;
    margin: 30px 0px;
    color: #000033;
    border-bottom: 2px solid #e9645f;
  }

  @media screen and (max-width: 400px) {
    h2 {
      font-size: 15pt;
    }
  }


  /* STRUCTURE */

  .wrapper {
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    min-height: 40%;
  }

  #formContent {
    -webkit-border-radius: 10px 10px 10px 10px;
    border-radius: 10px 10px 10px 10px;
    background: #fff;

    width: 90%;
    max-width: 550px;
    position: relative;
    -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
    box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);

  }

  .first {
    padding: 0px 50px 0px 50px;
  }

  @media screen and (max-width: 350px) {
    .first {
      padding: 0px 30px 0px 30px;
    }
  }

  #formFooter {
    background-color: #e9645f;
    border-top: 1px solid #e9645f;

    text-align: center;
    -webkit-border-radius: 0 0 10px 10px;
    border-radius: 0 0 10px 10px;
  }



  /* TABS */

  h2.inactive {
    color: white;
  }

  h2.active {
    color: white;
    border-bottom: 2px solid #5fbae9;
  }



  /* FORM TYPOGRAPHY*/

  input[type=button],
  input[type=submit],
  input[type=reset] {
    background-color: #e9645f;
    border: none;
    color: white;
    padding: 15px 60px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-size: 13px;
    -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
    box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
    margin: 20px 0px 30px 0px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }


  input[type=button]:hover,
  input[type=submit]:hover,
  input[type=reset]:hover {
    background-color: #e9645f;
  }

  input[type=button]:active,
  input[type=submit]:active,
  input[type=reset]:active {
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
  }

  input[type=text],
  input[type=password] {

    text-decoration: none;
    display: inline-block;
    font-size: 16px;



    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
  }

  input[type=text]:focus,
  input[type=password]:focus {
    background-color: #fff;
    border-bottom: 2px solid #e9645f;
  }

  input[type=text]:placeholder {
    color: #cccccc;
  }

  input[type=button]:hover,
  input[type=submit]:hover,
  input[type=reset]:hover {
    background-color: #7be95f;
  }

  /* ANIMATIONS */

  /* Simple CSS3 Fade-in-down Animation */
  .fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown;
    -webkit-animation-duration: 0.8s;
    animation-duration: 0.8s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
  }

  @-webkit-keyframes fadeInDown {
    0% {
      opacity: 0;
      -webkit-transform: translate3d(0, -100%, 0);
      transform: translate3d(0, -100%, 0);
    }

    100% {
      opacity: 1;
      -webkit-transform: none;
      transform: none;
    }
  }

  @keyframes fadeInDown {
    0% {
      opacity: 0;
      -webkit-transform: translate3d(0, -100%, 0);
      transform: translate3d(0, -100%, 0);
    }

    100% {
      opacity: 1;
      -webkit-transform: none;
      transform: none;
    }
  }

  /* Simple CSS3 Fade-in Animation */
  @-webkit-keyframes fadeIn {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  @-moz-keyframes fadeIn {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  .fadeIn {
    opacity: 0;
    -webkit-animation: fadeIn ease-in 1;
    -moz-animation: fadeIn ease-in 1;
    animation: fadeIn ease-in 1;

    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;

    -webkit-animation-duration: 0.5s;
    -moz-animation-duration: 0.5s;
    animation-duration: 0.5s;
  }

  .fadeIn.first {
    -webkit-animation-delay: 0.2s;
    -moz-animation-delay: 0.2s;
    animation-delay: 0.2s;
  }

  /* Simple CSS3 Fade-in Animation */
  .underlineHover:after {
    display: block;
    left: 0;
    bottom: -10px;
    width: 0;
    height: 2px;
    background-color: white;
    content: "";
    transition: width 0.2s;
  }

  .underlineHover:hover {
    color: white;
  }

  .underlineHover:hover:after {
    width: 100%;
  }



  /* OTHERS */

  *:focus {
    outline: none;
  }

  #icon {
    width: 200px;
    height: 150px;
  }

  .wrapper {
    display: flex;

    padding: 20px;
  }

  .text-muted {
    font-size: 11px;
  }
</style>

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
            $('#password, #confirm_password').on('keyup', function() {
              if ($('#password').val() == $('#confirm_password').val()) {
                $('#message').html('Matching').css('color', 'green');
              } else
                $('#message').html('Not Matching').css('color', 'red');
            });
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
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
</script>

</html>