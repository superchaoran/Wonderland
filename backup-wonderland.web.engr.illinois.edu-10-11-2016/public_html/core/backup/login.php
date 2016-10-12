<?php

include  $_SERVER['DOCUMENT_ROOT'] . "/core/users.php";
echo "in login";

if(user_exists("Alex"))
{
	echo "exist";
}else{
	echo "not_exist";
}
//die();

if(empty($_POST) === false)
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	//echo $username, ' ', $password ;
	//check the username or password is empty
	if(empty($username) === true || empty($password) === true)
	{
		$errors[] = 'You need to enter a username and password';
	}
	else if (user_exists($username) === false) {
		# code...
	$errors[] = 'We can\'t find that username. Have you registered?';

	}
	

}
?>