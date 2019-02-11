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
  	<script type="text/javascript" src="../JS/courses.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/courses.css">
  </head>
  <body>
    <div class="cover">

    </div>
    <div class="page">
      <div class="caption">
        You are in Batch <?php echo($det['Batch']) ?> : Group <?php echo($det['GroupNo']) ?>
      </div>
      <div class="courseHolder">
        APL100 : LH 101 <br>
        CML100 : LH 102 <br>
        MCP100 : LH 103 <br>
        MCP101 : LH 104 <br>
        CMP100 : LH 105 <br>
      </div>
      <div class="link" id="timetable">
        Click Here to Access your Full Timetable
      </div>
    </div>
    <?php include('../Assets/header.php') ?>
  </body>
</html>
