<?php
include  $_SERVER['DOCUMENT_ROOT'] . "/core/init.php";
include  $_SERVER['DOCUMENT_ROOT'] . "/core/users.php";

$errors;
/*
if(email_exists('alex@gmail.com'))
{
	echo 'exist';
}*/

//echo 'exist';
if(empty($_POST) === false)
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	//echo $email, ' ', $password ;
	//check the email or password is empty
	if(empty($email) === true || empty($password) === true)
	{
		$errors = 'You need to enter an email and password';
	}
	else if (email_exists($email) === false) {
		# code...
	$errors = 'We can\'t find that email. Have you registered?';
	}
	/*
	else if(email_active($email) === false)
	{
		$errors = 'You haven\'t activated your account!';
	}*/
	else
	{
		//pass in user name and password
		$login = login($email, $password);
		if($login === false)
		{
			$errors = "That email/password combination is incorrect";
		}
		else
		{
			session_start();
			//set the user session 
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			//redirect user to home
			//header('Location: /core/loginWait.php');
			//header('Location:/core/loginWait.php');
			$errors="";
		}
	}
	//header('Location:/core/loginWait.php');

	//print_r ($errors);
}
header('Location: /core/loginWait.php?errors='.$errors);
?>