<?php 
    session_start();
    include('./database/database.php');
    
    unset($_SESSION['err']);
    if(isset($_POST['login'])){

        $username = mysqli_real_escape_string($conn , $_POST['username']);
        $password = mysqli_real_escape_string($conn , $_POST['password']);
       
        
        $query = "SELECT * FROM register WHERE Uname = '$username' AND password = '$password'";
        $result = mysqli_query($conn , $query);
      
        $query_t = "SELECT * FROM teacher_regis WHERE username = '$username' AND password = '$password'";
        $result_t = mysqli_query($conn , $query_t);


     
        if (mysqli_num_rows($result)==1 ) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now log in";

            header('location:index.php');
        }
        else if (mysqli_num_rows($result_t)==1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now log in";

            header('location:./teacher/Teacher_index.php');
        }
        else {
            $_SESSION['err'] = 'Plase check username and password'; 
            header('location:Login.php');
        }
      
      }

?>