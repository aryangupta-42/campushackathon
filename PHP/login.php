<?php
	require 'connection.php';
	session_start();
		$username = $_POST['username'];
		$pass = $_POST['password'];
		$strippass = stripslashes(htmlspecialchars($pass));
		$usrpass = $db->prepare("SELECT Password FROM users WHERE Username=:username");
		$usrpass->execute(array(':username'=>$username));
		if ($usrpass->rowCount()==0) {
			echo("invalid");
		}else{
			foreach ($usrpass as $password) {
				$passdb = $password['Password'];
			}
			if (password_verify($strippass,$passdb)) {
				$uid = $db->prepare("SELECT uid FROM users WHERE Username=:username");
				$uid->execute(array(':username'=>$username));
				foreach ($uid as $uidr) {
					$uidb = $uidr['uid'];
				}
				$_SESSION["uid"] = $uidb;
				echo("success");
			}else{
				echo("failure");
			}
		}
	session_write_close();

 ?>
