<?php
	$dbhost = "localhost";
	$dbuser = "is";
	$dbpass = "isbuch";
	$dbname = "is";
	
	if(!($conn = mysql_connect($dbhost, $dbuser, $dbpass))){
		die("Couldn't establish connection to Mysql, database! ");
	}
	
	if(!mysql_select_db($dbname)){
		die("Couldn't connect to database $dbname !");
	}
	mysql_query("SET NAMES UTF8");
?>