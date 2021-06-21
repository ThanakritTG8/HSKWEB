<?php session_start();
if (isset($_SESSION['err'])) {
  $message = $_SESSION['err'];
  session_destroy();
  unset($_SESSION['err']);
} else  $message = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/login.css">
</head>


<body id="body">

  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="./img/PSU_FIS_ENG450.png" class="rounded " id="icon" alt="User Icon" />
      </div>

      <!-- Login Form -->
      <form action="Login_check.php" method="post" class="needs-validation" novalidate autocomplete="off">
        <div class="form-row">

          <div class="form-group  col-10 col-sm-8 col-md-10">

            <input type="text" class="form-control" name="username" placeholder="Username" required>
          </div>
        </div>

        <div class="form-row">

          <div class="form-group  col-10 col-sm-8 col-md-10">

            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-10 col-sm-8 col-md-10" style="font-size: 12px;">

          </div>

          <input type="submit" class="fadeIn first" name="login" value="Log In">

      </form>

    </div>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" style="color: white;" href="Regis.php">Register </a>
      <img src="./img/pen.png" alt="" style="width: 20px;">
    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.slim.js" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
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