<?php
try
{
  $pdo = new PDO('mysql:host=engr-cpanel-mysql.engr.illinois.edu;dbname=wonderland_wonderland', 'wonderland_user', 'wonderland');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'error.html.php';
  exit();
}
