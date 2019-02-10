<?php
  session_start();
  echo ($_SESSION["uid"]);
  session_unset();
  echo ($_SESSION["uid"]);
  echo "Hl";
  header("Location:index.php");
 ?>
