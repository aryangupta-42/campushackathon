<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
      require 'connection.php';
      // $username = $_POST['username'];
      // $password = $_POST['password'];
      // $name = $_POST['name'];
      // $entry = $_POST['entry'];
      // $hostel = $_POST['hostel'];
      // $dept = $_POST['dept'];
      // $year = $_POST['year'];
      // $mencon = $_POST['mencon'];
      // $mentor = $_POST['mentor'];
      $username = "me2180672";
      $password = "hello";
      $name = "Aryan Gupta";
      $entry = "2018ME20672";
      $hostel = "Shivalik";
      $dept = "Mechanical";
      $year = 1;
      $mencon = 1234567891;
      $mentor = "abcd";
      $uid = uniqid(rand(),true);
      $strippass = stripslashes(htmlspecialchars($password));
      $hashpass = password_hash($strippass,PASSWORD_DEFAULT);
      $create = $db->prepare("INSERT INTO users(UserName,Password,Name,EntryNo,Hostel,Department,Year,Mentor,Mencon,uid) VALUES(:username,:hashpassword,:name,:entry,:hostel,:dept,:year,:mentor,:mencon,:uid)");
      $create->execute(array(
          ':username'=>$username,
          ':hashpassword'=>$hashpass,
          ':name'=>$name,
          ':entry'=>$entry,
          ':hostel'=>$hostel,
          ':dept'=>$dept,
          ':year'=>$year,
          ':mentor'=>$mentor,
          ':mencon'=>$mencon,
          ':uid'=>$uid
        ));
      echo ("done");
     ?>
  </head>
  <body >
    <!-- <form class="test" action="#" method="post">
      <input type="text" name="username" value="">
      <input type="password" name="password" value="">
      <input type="text" name="name" value="name">
      <input type="text" name="entry" value="entry">
      <input type="text" name="hoste" value="hostel">
      <input type="text" name="dept" value="dept">
      <input type="text" name="year" value="year">
      <input type="text" name="mentor" value="mentor">
      <input type="text" name="mencon" value="mencon">
      <input type="submit" name="sub" value="test">


    </form>
    hello -->

  </body>
</html>
