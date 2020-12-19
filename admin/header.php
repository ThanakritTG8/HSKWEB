<?php 
 session_start();

 if (!isset($_SESSION['username'])) {
     $_SESSION['msg'] = "You must log in first!";
     header('location: ../Login.php');
 }
 if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: ../Login.php');
}
if(isset($_SESSION['success'])){
    $message = $_SESSION['success'];
  echo  "<script type='text/javascript'>alert('$message');</script>"; 
 
  unset($_SESSION['success']);
  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>

<body id="body">
 <!-- notification -->

    <!-- navbar -->
    <nav class="navbar navbar-light">
        <a class="navbar-brand">
            <?php if (isset($_SESSION['username'])) :?>
            <h5 class="title">
           
            <?php echo $_SESSION['username']; ?>

            </h5>
              <?php endif ?>
        </a>
       
            <button class="btn btn-outline-success my-2 my-sm-0" type="button">
                <a href="Admin_index.php?logout='1'">LOG OUT</a>
            </button>
       
    </nav>