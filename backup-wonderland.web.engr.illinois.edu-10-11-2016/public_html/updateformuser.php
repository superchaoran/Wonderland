<?php

$id=$_GET["id"];
$title=$_GET["title"];
$sd=$_GET["sd"];
$ed=$_GET["ed"];
$ppm=$_GET["ppm"];
$nob=$_GET["nob"];
$ad=$_GET["ad"];
$pv=$_GET["pv"];
$ct=$_GET["ct"];

?>
<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>welcome to wonderland</title>
  <link rel="shortcut icon" href="http://designshack.net/favicon.ico">
  <link rel="icon" href="http://designshack.net/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="style.css">
  <!--<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">-->
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>
  <!-- jQuery plugin leanModal under MIT License http://leanmodal.finelysliced.com.au/ -->
</head>

<body>
  <div id="topbar"><a href="http://www.facebook.com">like us on facebook</a></div>
  <div id="w">
    <div class="content">
      <h1><a href="http://wonderland.web.engr.illinois.edu" style="color: #000000;text-decoration: none;">Welcome to the wonderland</a></h1>
      <left><a href="#loginmodal1" class="flatbtn" id="modaltrigger1">Member   Login</a></left>
      <left><a href="#loginmodal2" class="flatbtn" id="modaltrigger2">Create account</a></left>
    </div>  
      <!--<button type="button" class="btn btn-default btn-lg">Large button</button>
      <button type="button" class="btn btn-default btn-lg">Large button</button>-->
    <div class="content"> 



<!--
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<script src="jquery-1.7.2.min.js"></script>
<script>    

		$(document).ready(function() {
		//$("#mybox").hide();

		$("#commentForm").submit(function(e)
		{
		    var postData = $(this).serializeArray();
		    //alert(postData);
		    var formURL = $(this).attr("action");
		    $.ajax(
		    {
		        url : formURL,
		        type: "POST",
		        data : postData,
		        success:function(data, textStatus, jqXHR) 
		        {
		            //data: return data from server
		            //alert(data);
		            $("#display_table").load("index.php");
		            //$("#commentFormReturn").html(data);
		            //alert(data);
		        },
		        error: function(jqXHR, textStatus, errorThrown) 
		        {
		            //if fails      
		        }
		    });
		    e.preventDefault(); //STOP default action
		});
</script>
<body>
-->

	<div style="float: left; margin-right:20px;">
	
		<!--<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
		<form method="post" name="commentForm" id="commentForm" action="updateForm.php">


			<div style="float: left; margin-right:20px;">




			<div>
			Title:<br><input type="text" name="postTitle" size="41" value="<?php echo ($title); ?>" placeholder="<?php echo ($title); ?>">
			<br><br>
			</div>


			


			<div>
			startDate:<br><input type="date" name="startDate" rows="20" cols="30" value="<?php echo ($sd); ?>">
			<br><br>
			</div>

			<div>
			endDate:<br><input type="date" name="endDate" rows="20" cols="30" value="<?php echo ($sd); ?>">
			<br><br>
			</div>

			<div>
			pricePerMonth(between 50 and 5000):<br><input type="number" name="pricePerMonth" min="50" max="5000" value="<?php echo ($ppm); ?>">
			<br><br>
			</div>

			<div>
			noOfBedrooms(between 1 and 8):<br><input type="number" name="noOfBedrooms" min="1" max="8" value="<?php echo ($nob); ?>">
			<br><br>
			</div>

			<div>
			address:<br><input type="text" name="address" size="41" value="<?php echo ($ad); ?>">
			<br><br>
			</div>

			<div>
			provider:(CPM, University Group, JSM or Personal)<br><input type="text" name="provider" size="41" value="<?php echo ($pv); ?>">
			<br><br>
			</div>



			</div>

			<div style="float: left;">
			Content:<br><textarea name="postContent" rows="30" cols="50" ><?php echo ($ct); ?></textarea>
		 	</div>
		 	<br><br>
		 	<input type="hidden" name="realEstateID" size="41" value="<?php echo ($id); ?>"></textarea>


			<input type="submit" name="submit" value="Submit">
		</form>
		<div id="commentFormReturn"></div>
	</div>
<p></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></p>

	<!--
</body>-->







</div>
  </div>
  <div id="loginmodal1" style="display:none;" class = "loginmodal">
    <h1>User Login</h1>
    <form id="loginform" name="loginform" method="post" action="index.html" class = "loginform">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" class="txtfield" tabindex="1">
      
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" class="txtfield" tabindex="2">
      
      <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Log In" tabindex="3"></div>
    </form>
  </div>
  <div id="loginmodal2" style="display:none;" class = "loginmodal">
    <h1>User signup</h1>
    <form id="signupform" name="signupform" method="post" action="index.html" class = "loginform">
      <label for="email">email address:</label>
      <input type="text" name="email" id="email" class="txtfield" tabindex="1">
      <label for="phone">phone number:</label>
      <input type="text" name="phone" id="phone" class="txtfield" tabindex="1">
      <label for="gender">gender:</label>
      <input type="text" name="gender" id="gender" class="txtfield" tabindex="1">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" class="txtfield" tabindex="2">
      <label for="retype">Retype password:</label>
      <input type="retype" name="retype" id="retype" class="txtfield" tabindex="2">
      <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Sign up" tabindex="3"></div>
    </form>
  </div>
<script type="text/javascript">
$(function(){
  $('#loginform').submit(function(e){
    return false;
  });
  $('#singupform').submit(function(e){
    return false;
  });
  
  $('#modaltrigger1').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
  $('#modaltrigger2').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
});
</script>
</body>
</html>














