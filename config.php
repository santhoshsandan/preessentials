<?php
	$db_host='localhost';
	$db_username='root';
	$db_password='';
	$db_database = "perc1";
	$db = mysqli_connect($db_host, $db_username, $db_password, $db_database);
	if (!$db)
	{
		die ("Could not connect to the database: <br />". mysql_error());
	}
	mysqli_select_db($db, 'perc1');
?>
