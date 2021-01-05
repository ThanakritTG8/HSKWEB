<?php session_start();
if(isset($_SESSION['err'])){
  $message = $_SESSION['err'];
echo  "<script type='text/javascript'>alert('$message');</script>"; 
session_destroy();
unset($_SESSION['err']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="stylesheet" href="./css/Login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>
<style>
    
#icon {
  width:350px;
  margin-top: 30px;
  margin-bottom: 40px;
  /* height: 150px; */
  
}
@media screen and (max-width: 500px) {  
  #icon {
    width:250px;
  }
}


}
</style>

<body id="body">

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="./img/PSU_FIS_ENG450.png" class="rounded " id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form action="Login_check.php" method="post" class="needs-validation" novalidate>
            <div class="form-row">
            <div class="col-2 col-md-1"></div>
            <div class="form-group  col-8 col-sm-8 col-md-10">
          
              <input type="text" class="form-control" name="username"  placeholder="Username" required>
            </div>
          </div>
              
          <div class="form-row">
            <div class="col-2 col-md-1"></div>
            <div class="form-group  col-8 col-sm-8 col-md-10">
            
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            </div>
          </div>

                <input type="submit" class="fadeIn fourth" name="login" value="Log In" >


            </form>
            <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
      </script>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" style="color: white;" href="Regis.php">Register </a>
                or
                <a class="underlineHover" style="color: white;" href="#"> Forgot Password?</a>
            </div>

        </div>
    </div>

    <script src="./js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>

</body>

</html>