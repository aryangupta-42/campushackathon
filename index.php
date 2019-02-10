<?php
	session_start();
	if(isset($_SESSION["uid"])){
		header("Location: Home/index.php");
	}
 ?>
<html>
<head>
	<title>Login</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
	<script type="text/javascript" src="./JS/script.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="CSS/login.css">

</head>
<body>
	<div class="maincont">
		<div class="title">Login</div>
		<div class="formcontainer">
			<form action="#" method="POST" id="login">
				<input type="text" name="userid" id="userid" placeholder="Username : " required><br>
				<input type="password" name="pass" id="pass" placeholder="Password : " required><br>
				<input type="submit" name="login" id="subBtn" value="Login">
			</form>
		</div>
	</div>
	<div class="error">
	</div>
</body>
</html>
