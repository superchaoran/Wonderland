<?php header( "refresh:1; url=/index.php" );  session_start(); ?>
<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>welcome to wonderland</title>
  <link rel="shortcut icon" href="http://designshack.net/favicon.ico">
  <link rel="icon" href="http://designshack.net/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="/style.css">
  <!--<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">-->
  <script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="/js/jquery.leanModal.min.js"></script>
  <!-- jQuery plugin leanModal under MIT License http://leanmodal.finelysliced.com.au/ -->
</head>

<body>
  <div id="topbar">  <?php 
  //header() can not be wrote under echo
  //unset($_SESSION['email']);
    //echo $_SESSION['email'];

  session_destroy();
   echo "<p style=\"font-size\":40px;>Logging out...</h2>";
  ?></div>
    <div id="w">
    <div class="content" style="text-decoration: none;">
  <h1><a href="http://wonderland.web.engr.illinois.edu" style="color: #000000;text-decoration: none;">Welcome to the wonderland</a></h1>




	</div>
	</div>

</body>
</html>