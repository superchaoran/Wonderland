<?php
session_start();
error_reporting(0);

include 'includes/db.inc.php';
//include sanitize;

if(logged_in() === true)
{
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'user_id', 'username', 'first_name', 'last_name', 'email');
}
$errors = array();


?>