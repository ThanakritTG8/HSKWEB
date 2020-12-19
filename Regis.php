<?php


session_start();
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>HSk</title>
 
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">
</head>
<style>
 /* BASIC */

 body {
     font-family: "Poppins", sans-serif;
     height: 100vh;
 }

 a {
     color: white;
     display: inline-block;
     text-decoration: none;
     font-weight: 400;
 }
 @media screen and (max-width: 320px){
   .fix{
    margin-right:-35px;
   
   }
 }

 h2 {
     text-align: center;
     font-size: 16px;
     font-weight: 600;
     text-transform: uppercase;
     display: inline-block;
     margin: 40px 8px 10px 8px;
     color: #cccccc;
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
     padding: 0px;
     -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
     box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);

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
     padding: 15px 80px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     text-transform: uppercase;
     font-size: 13px;
     -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
     box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
     -webkit-border-radius: 5px 5px 5px 5px;
     border-radius: 5px 5px 5px 5px;
     margin: 5px 20px 40px 20px;
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

 input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #7be95f;
}

 /* ANIMATIONS */

 /* Simple CSS3 Fade-in-down Animation */
 .fadeInDown {
     -webkit-animation-name: fadeInDown;
     animation-name: fadeInDown;
     -webkit-animation-duration: 1s;
     animation-duration: 1s;
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

     -webkit-animation-duration: 1s;
     -moz-animation-duration: 1s;
     animation-duration: 1s;
 }

 .first {
     margin-top: 20px;
     margin-bottom: 20px;

 }

 .fadeIn.first {
     -webkit-animation-delay: 0.4s;
     -moz-animation-delay: 0.4s;
     animation-delay: 0.4s;
 }

 .fadeIn.second {
     -webkit-animation-delay: 0.6s;
     -moz-animation-delay: 0.6s;
     animation-delay: 0.6s;
 }

 .fadeIn.third {
     -webkit-animation-delay: 0.8s;
     -moz-animation-delay: 0.8s;
     animation-delay: 0.8s;
 }

 .fadeIn.fourth {
     -webkit-animation-delay: 1s;
     -moz-animation-delay: 1s;
     animation-delay: 1s;
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
    }</style>
<body id="body">


  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      
      <form action="Regis_check.php" method="post" class="needs-validation" novalidate >
        <!-- Icon -->
        <div class="fadeIn first">
          <h1 style="text-align: center; margin-bottom: 20px;">Register</h1>
          <div class="form-row">
         <div class="col-2 col-md-1"></div>
            <div class="form-group col-4 col-sm-4 col-md-5">
              <label for="inputEmail4">Firstname</label>
              <input type="text" class="form-control" name="Fname" required>
            </div>
            <div class="form-group col-4 col-sm-4 col-md-5">
              <label for="inputEmail4">Lastname</label>
              <input type="text" class="form-control" name="Lname" required>
            </div>
          </div>

          <div class="form-row">
            <div class="col-2 col-md-1"></div>
            <div class="form-group  col-8 col-sm-8 col-md-10">
              <label for="inputEmail4">Username</label>
              <input type="text" class="form-control" name="username"  required>
            </div>
          </div>
      
           
          <div class="form-row">
            <div class="col-2 col-md-1"></div>
            <div class="form-group  col-8 col-sm-8 col-md-10">
              <label for="inputEmail4">Password</label>
              <input type="password" class="form-control" name="password1" id="password" required>
            </div>
          </div>

          <div class="form-row">
            <div class="col-2 col-md-1"></div>
            <div class="form-group  col-8 col-sm-8 col-md-10">
              <label for="inputEmail4">Confirm Password</label>
              <input type="password" class="form-control" name="password2" id="confirm_password" required>
              <span id='message'></span>
            </div>
          </div>


<script>
$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
</script>


          <div class="form-row">
            <div class="col-2 col-md-1"></div>
            <div class="form-group  col-8 col-sm-8 col-md-10">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
          </div>

          <div class="form-row">
            <div class="col-2 col-md-1 col-lg-1 "></div>
            <div class="form-group col-5">
              <label for="inputEmail4" class="form-label">School</label>
              <select class="form-control" id="validationCustom" name = "sh" required >
              <option selected disabled value="">select </option>
<?php
 include('./database/database.php');

 $query = "SELECT * FROM school ";
 $result = mysqli_query($conn , $query);

 while($row = mysqli_fetch_assoc($result)){
   echo '<option value = '.$row['SchoolID'].'>'.$row['SchoolName'].'</option>' ;
 }

?>
                
              </select>
          
            </div>
            </div>



        </div>
        <div class="row">
          <div class="col-1 col-sm-3 col-md-3  fix" ></div>
          <div class="col-1 col-sm-5 col-md-5">
            <input  style="text-align: center;" type="submit" name = "reg_user" class="fadeIn fourth " value="SIGN UP">
          </div>
        
        </div>

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

      <!-- Login Form -->

      <!-- Remind Passowrd -->
      <a id="formFooter" class="btn underlineHover" style="width: 100%;" href="Login.php">
        <p class="text-center" style="color: white;"> Back </p>
      </a>
    </div>
  </div>

</body>

</html>