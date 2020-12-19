<?php 
    session_start();
    include('./database/database.php');
    
    unset($_SESSION['err']);
    if(isset($_POST['login'])){

        $username = mysqli_real_escape_string($conn , $_POST['username']);
        $password = mysqli_real_escape_string($conn , $_POST['password']);
       
        $admin = "admin";
        // check username password
        $query = "SELECT * FROM student WHERE SUsername = '$username' AND Spassword = '$password' " ;
        $result = mysqli_query($conn , $query);
      
        $query_t = "SELECT * FROM teacher WHERE TUsername = '$username' AND TPassword = '$password'";
        $result_t = mysqli_query($conn , $query_t);

        $query_a = "SELECT * FROM $admin WHERE AUsername = '$username' AND Apassword = '$password' " ;
        $result_a = mysqli_query($conn , $query_a);


        
        // send Session first and lastname
        $check = "SELECT * FROM student WHERE SUsername = '$username' AND Spassword = '$password' " ;
        $query_s = mysqli_query($conn , $check);
        $result_send = mysqli_fetch_assoc($query_s);

        $check_t = "SELECT * FROM teacher WHERE TUsername = '$username' AND TPassword = '$password'";
        $query_tt = mysqli_query($conn , $check_t);
        $result_send_t = mysqli_fetch_assoc($query_tt);

         
        if (mysqli_num_rows($result)==1 ) {
            $_SESSION['username'] =$result_send['Sname'].' '.$result_send['SLname']; 
            $_SESSION['success'] = "You are now log in";

            header('location:index.php');
        }
        else if (mysqli_num_rows($result_t)==1) {
            $_SESSION['username'] = $result_send_t['Tname'].' '. $result_send_t['TLname']; 
            $_SESSION['success'] = "You are now log in";

            header('location:./teacher/Teacher_index.php');
        }
        else if (mysqli_num_rows($result_a)==1) {
            $_SESSION['username'] = $username; 
            $_SESSION['success'] = "You are now log in";

            header('location:./admin/Admin_index.php');
        }
        else {
            $_SESSION['err'] = 'Plase check username and password'; 
            header('location:Login.php');
        }
      
      }

?>