<?php
	$server = "localhost"; 
	$login = "root";
	$motdepasse = "08011996";
	$dbname = "school";

	/*mysql_connect("localhost", "root", "08011996");
	mysql_select_db("School");*/


		$conect = new PDO ('mysql: host ='.$server.'; dbname = '.$dbname.';charset = utf-8', $login, $motdepasse);





?>