<?php
  require "../PHP/connection.php";
  session_start();
  if(isset($_SESSION["uid"])){
    $uid = $_SESSION["uid"];
    $qry = $db->prepare("SELECT * FROM users WHERE uid = :uid");
    $qry->execute(array(':uid'=>$uid));
    $det = $qry->fetch(PDO::FETCH_ASSOC);
  }else{
    header("Location:../index.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hostel Reps</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
  	<script type="text/javascript" src="../JS/hostelrep.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/hostelrep.css">
  </head>
  <body>
    <div class="title">
      <?php echo($det['Hostel']) ?>'s Representatives
    </div>
    <div class="cardholder">
      <div class="card">
        <div class="cimg">
        </div>
        <div class="ctit">
          <b>Position Name</b>
        </div>
        <div class="cname">
          Person Name
        </div>
        <div class="ccon">
          9911182828
        </div>
      </div>
            <div class="card">
        <div class="cimg">
        </div>
        <div class="ctit">
          <b>Position Name</b>
        </div>
        <div class="cname">
          Person Name
        </div>
        <div class="ccon">
          9911182828
        </div>
      </div>
            <div class="card">
        <div class="cimg">
        </div>
        <div class="ctit">
          <b>Position Name</b>
        </div>
        <div class="cname">
          Person Name
        </div>
        <div class="ccon">
          9911182828
        </div>
      </div>
            <div class="card">
        <div class="cimg">
        </div>
        <div class="ctit">
          <b>Position Name</b>
        </div>
        <div class="cname">
          Person Name
        </div>
        <div class="ccon">
          9911182828
        </div>
      </div>
            <div class="card">
        <div class="cimg">
        </div>
        <div class="ctit">
          <b>Position Name</b>
        </div>
        <div class="cname">
          Person Name
        </div>
        <div class="ccon">
          9911182828
        </div>
      </div>
            <div class="card">
        <div class="cimg">
        </div>
        <div class="ctit">
          <b>Position Name</b>
        </div>
        <div class="cname">
          Person Name
        </div>
        <div class="ccon">
          9911182828
        </div>
      </div>
    </div>
    <?php include("../Assets/header.php") ?>
  </body>
</html>
