<?php 
    session_start();
    include('./database/database.php');
    
    unset($_SESSION['err']);
    if(isset($_POST['reg_user'])){

        $username = mysqli_real_escape_string($conn , $_POST['username']);
        $password1 = mysqli_real_escape_string($conn , $_POST['password1']);
        $password2 = mysqli_real_escape_string($conn , $_POST['password2']);
        $email = mysqli_real_escape_string($conn , $_POST['email']);
        $sh = mysqli_real_escape_string($conn , $_POST['sh']);
        
      $user_check_query = "SELECT * FROM register WHERE Uname = '$username' OR email = '$email'";
      $query = mysqli_query($conn , $user_check_query);
      $result = mysqli_fetch_assoc($query);

      if($result){
        if ($result['Uname']=== $username) {

            $_SESSION['err'] = 'Username alredy exists';          

            header('location:Regis.php');
        }
        if ($result['email']=== $email) {
            $_SESSION['err'] = 'email alredy exists'; 
            header('location:Regis.php');
        }

      }

      if (!$_SESSION['err']) {
        //   $password = md5($password1);
          $sql = "INSERT INTO register  VALUES(NULL,'$username','$password1','$email','$sh')";
        $results =   mysqli_query($conn , $sql);
        if (!$results) {
            echo mysqli_error();
            echo $username, $password,$email;
        }
        else{


          $_SESSION['username'] = $username ; 
          $_SESSION['success'] = "You are now log in";
          header('location:index.php');
      }
    }


    }





?>