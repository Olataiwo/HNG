<?php

	
	
	# define db constants
	define("DBNAME", "hng-test");
	define("DBUSER", "root");
	define("DBPASS", "riddle1");
	define("DBHOST", "localhost");

	try {
		$conn = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME, DBUSER, DBPASS);
	} catch(PDOException $e) {
		echo $e->getMessage();
	}
	
	

?>