<?php
	try{
		global $db;
		$db = new PDO("mysql:host=localhost;dbname=fkit;character:utf-8",'root','root');
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $E){
		echo($E);
	}
 ?>
