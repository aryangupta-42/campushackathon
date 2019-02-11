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
    <title>Homepage</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
  	<script type="text/javascript" src="../JS/home.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/home.css">
  </head>
  <body>
    <div class="upperhalf">
      <div class="welcomemsg">
        Welcomes Batch of <?php echo(substr($det['EntryNo'],0,4)); ?> Entry
      </div>
    </div>
    <div class="lowerhalf">
      <div class="greeting">
        <div class="usrimg">

        </div>
        <div class="usrmsg">
          Hi, <?php echo($det['Name']) ?> <br>
          <div class="submsg">
            Entry Number : <?php echo($det['EntryNo']) ?> <br>
            Hostel : <?php echo($det['Hostel']) ?> <br>
            Department : <?php echo($det['Department']) ?> <br>
          </div>
        </div>
      </div>
      <div class="vline">

      </div>
      <div class="btncont">
        <div class="btn" id="courses">
          Courses
        </div>
        <div class="btn" id="hostelrep">
          Hostel Reps
        </div>
        <div class="btn" id="mentor">
          Mentor Details
        </div>
        <div class="btn" id="search">
          Search Batchmates
        </div>
      </div>
    </div>
    <?php include("../Assets/header.php") ?>
  </body>
</html>
