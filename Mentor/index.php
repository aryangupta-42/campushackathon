<?php
  require '../PHP/connection.php';

  session_start();

  if(isset($_SESSION["uid"])){
    $uid = $_SESSION["uid"];
    $qry = $db->prepare("SELECT * FROM users WHERE uid = :uid");
    $qry->execute(array(':uid'=>$uid));
    $det = $qry->fetch(PDO::FETCH_ASSOC);
  }else{
    header("Location:../index.php");
  }
  if (isset($_POST['logout'])) {
      session_unset();
      session_destroy();
      header('location:../index.php');
    }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Courses</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
  	<script type="text/javascript" src="../JS/mentor.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/mentor.css">
  </head>
  <body>
    <div class="cover">

    </div>
    <div class="page">
      <div class="caption">
        Your Mentors Name is <?php echo($det['Mentor']); ?>
      </div>
      <div class="introtext">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        <br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        <br><br>
        <b>Contact Details - </b> +91 <?php echo($det['MenCon']) ?>
      </div>
    </div>
    <?php include('../Assets/header.php') ?>
  </body>
</html>
