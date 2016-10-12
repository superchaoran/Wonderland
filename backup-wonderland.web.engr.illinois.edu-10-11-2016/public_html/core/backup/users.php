<?php

	function user_exists($username)
	{
		echo "here";
		//$username = sanitize($username);
		//$query = mysql_query("SELECT COUNT('userID') FROM 'user' WHERE 'name' = '$username'");
		require_once  $_SERVER['DOCUMENT_ROOT'] . "/includes/db.inc.php";
		$query = 'SELECT COUNT(userID)  FROM user WHERE name = \''.$username.'\'';
		echo "here";
		$result = $pdo->query($query);
		//return (mysql_result($query, 0) == 1) ? true : false;
		foreach ($result as $row)
		{	
			return ($row['0']== 1) ? true : false;
		}
		//whether there exists a user 
		//return (mysql_result($query, 0) == 1) ? true : false;
	}
?>