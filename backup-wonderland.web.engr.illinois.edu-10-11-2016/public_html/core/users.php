<?php
	function logged_in()
	{
		return (isset($_SESSION['user_id'])) ? true : false;
	}

	function user_data($user_id)
	{
		$data = array();
		$user_id = (int)$user_id;

		$func_num_args = func_num_args();
		//loop through and grab each one
		$func_get_args = func_get_arg();

		if($func_num_args > 0 )
		{
			unset($func_get_args[0]);
			$field = implode('', $func_get_args);
			echo $field;
		}

		print_r($func_get_args);
	}


/*
	function user_exists($username)
	{
		$username = sanitize($username);
		$query = mysql_query("SELECT COUNT('userID') FROM 'user' WHERE 'name' = '$username'");
		//whether there exists a user 
		return (mysql_result($query, 0) == 1) ? true : false;
	}*/

	function email_exists($email)
	{
		require_once  $_SERVER['DOCUMENT_ROOT'] . "/includes/db.inc.php";
		$query = 'SELECT COUNT(email)  FROM user WHERE email = \''.$email.'\'';
		$result = $pdo->query($query);
		//echo 'here';
		foreach ($result as $row)
		{	
			return ($row['0']== 1) ? true : false;
		}
	}

	//check whether user is activated 

	function email_active($email)
	{
		/*
		$username = sanitize($username);
		$query = mysql_query("SELECT COUNT('userID') FROM 'user' WHERE 'name' = '$username' AND 'active' = 1");
		//whether there exists a user 
		return (mysql_result($query, 0) == 1) ? true : false;*/

		//require_once  $_SERVER['DOCUMENT_ROOT'] . "/includes/db.inc.php";

		require  $_SERVER['DOCUMENT_ROOT'] . "/includes/db.inc.php";
		$query = 'SELECT COUNT(email)  FROM user WHERE email = \''.$email.'\'';
		$result = $pdo->query($query);
		//echo 'Here';
		foreach ($result as $row)
		{	
			return ($row['0']== 1) ? true : false;
		}
	}

	function user_id_from_username($username)
	{	
		$username = sanitize($username);
		$query = mysql_query("SELECT 'userID' FROM 'user' WHERE 'name' = '$username'");
		return mysql_result(query, 0, 'user_id');
	}

	function login($email, $password)
	{
		//sanitize username
		//encrype the password
		//pass userID back if it is successfully logged in 
		//else pass back false
		//$user_id = user_id_from_username($username);
		//$username = sanitize($username);
		//$password = $password;
		//return whether user name and password match
		//$query = mysql_query("SELECT COUNT('userID') FROM 'user' WHERE 'name' = '$username' AND 'password' = '$password'");
		

		require  $_SERVER['DOCUMENT_ROOT'] . "/includes/db.inc.php";
		$query1 = 'SELECT COUNT(email) FROM user WHERE email = \''.$email.'\' AND password = \''.$password.'\'';
		//echo $email;
		//$query1 = 'SELECT COUNT(email)  FROM user WHERE email = \''.$email.'\'';
		$result1 = $pdo->query($query1);

		
		foreach ($result1 as $row1)
		{	
			//echo "hash";
			return ($row1['0']== 1) ? true : false;
		}


		//whether there exists a user 
		//return (mysql_result($query, 0) == 1) ? true : false;
	}

	function register($email, $password)
	{

		require  $_SERVER['DOCUMENT_ROOT'] . "/includes/db.inc.php";
		$sql0 = 'INSERT INTO user SET
				        email =:email,
				        password =:password';
				    $s0=$pdo->prepare($sql0);
				    //$s->bindValue(':postID',10);
				    $s0->bindValue(':email',$email);
				    $s0->bindValue(':password',$password);
				    $s0->execute();

	}
?>