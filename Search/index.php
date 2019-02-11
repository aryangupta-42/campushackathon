<?php
  require "../PHP/connection.php";
  session_start();
  if(isset($_SESSION["uid"])){
    $uid = $_SESSION["uid"];
    $qry = $db->prepare("SELECT * FROM users WHERE uid = :uid");
    $qry->execute(array(':uid'=>$uid));
    $det = $qry->fetch(PDO::FETCH_ASSOC);

    if(isset($_POST['searchtext'])){
      $searchtxt = $_POST['searchtext'];

      $qry = $db->prepare("SELECT * FROM users WHERE Name = :name");
      $qry->execute(array(':name'=>$searchtxt));
      $fres = $qry->fetch(PDO::FETCH_ASSOC);
    }

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
    <script type="text/javascript" src="../JS/search.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/search.css">
  </head>
  <body>
    <form class="" action="#" method="post" id="searchform">
      <div class="searchcont">
        <input type="text" name="searchtext" placeholder="Search Batchmate : " id="search" required>
        <input type="submit" name="searchbtn" value="Search" id="subBtn">
      </div>
      <div class="resultscont">
          <?php
            foreach ($sres as $fres) {
                // echo("<div class="card">
                //             <div class="cimg">
                //
                //             </div>
                //             <div class="vline">
                //
                //             </div>
                //             <div class="detholder">
                //               <div class="cname"> Name - ".$fres['Name'].
                //               "</div>
                //               <div class="chos"> Hostel - ".$fres['Hostel']."          </div>
                //           <div class="cdept">
                //             Department - ".$fres['Department']."  </div>
                //             </div>
                //           </div>")
                echo($fres['name']);
            }
           ?>
        <div class="card">
          <div class="cimg">

          </div>
          <div class="vline">

          </div>
          <div class="detholder">
            <div class="cname">
              Name - Search Name 1
            </div>
            <div class="chos">
              Hostel - Hostel 1
            </div>
            <div class="cdept">
              Department - Dep1
            </div>
          </div>
        </div>

        <div class="card">
          <div class="cimg">

          </div>
          <div class="vline">

          </div>
          <div class="detholder">
            <div class="cname">
              Name - Search Name 2
            </div>
            <div class="chos">
              Hostel - Hostel 2
            </div>
            <div class="cdept">
              Department - Dep2
            </div>
          </div>
        </div>



      </div>
    </form>
    <?php include("../Assets/header.php") ?>
  </body>
</html>
