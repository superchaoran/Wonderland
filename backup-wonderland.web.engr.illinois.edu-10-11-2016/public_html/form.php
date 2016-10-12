<?php session_start();?>
<!doctype html>
<html lang="en-US">
<head>
  <title>Wonderland Real Estate</title>
  <link rel="shortcut icon" href="http://designshack.net/favicon.ico">
  <link rel="icon" href="http://designshack.net/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="http://wonderland.web.engr.illinois.edu/style.css">
  <!--<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">-->
  <script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="/js/jquery.leanModal.min.js"></script>
  <!-- jQuery plugin leanModal under MIT License http://leanmodal.finelysliced.com.au/ -->
</head>

<body>
	<div id="topbar">
        <div class="navigation">
        <div id="wixLogo"><a href="http://wonderland.web.engr.illinois.edu/index.php">Wonderland Real Estate</a></div>
        <div id="login_bar"><?php include  $_SERVER['DOCUMENT_ROOT'] . "/core/login_bar.php"; ?>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/core/loginModel.php"; ?></div>
        </div>
	</div>

    <div id="w">
      <div id="site_structure">
        
        <div id="site_header">
          <div id="header_centered">
              <div id="centered_chair">
                <img src="/images/chair.png" target="_self" >
              </div>
              <div id="yellow_bar"></div>
              <div id="header_title" ><h1 style="font-size:300%;font-family:sans-serif;">Wonderland Real Estate</h1></div>
              <div id="long_bar"></div>
              <div id="navigation_bar">
                <a href="http://wonderland.web.engr.illinois.edu/index.php" target="_self" id="button_home">
                  <p>Home</p>
                </a>
                <a id="next_button" href="http://wonderland.web.engr.illinois.edu/view.php" target="_self">
                  <p>View Lease</p>
                </a>
                <a id="next_button" href="http://wonderland.web.engr.illinois.edu/search/searchBackend.php" target="_self">
                  <p>Search Lease</p>
                </a>
                <a id="next_button" href="http://wonderland.web.engr.illinois.edu/form.php" target="_self">
                  <p>Post Lease</p>
                </a>
                <a id="next_button" href="http://wonderland.web.engr.illinois.edu/contact.php" target="_self">
                  <p>Contact</p>
                </a>
              </div>
          </div>
        </div>

      <div style="margin-top:200px;left:0;width:980px;height:48px;position:absolute;background-color:black;">  
        <p style="text-align: center;font-size:250%;margin-top:5px;font-family:sans-serif;">Post Lease</p>
      </div>


			<div style="width:980px; margin-left:auto; margin-right:auto;color:black;margin-top:270px;position:absolute;font-size:120%;">
			
				<!--<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
				<form style="width:980px; margin-left:auto; margin-right:auto;"method="post" name="commentForm" id="commentForm" action="addForm.php" enctype="multipart/form-data">

					<div style="float: left; margin-right:20px;">
					<input class="txtfield" type="text" name="postTitle" size="41" value="" placeholder="title">
					<input class="txtfield" type="date" name="startDate" rows="20" cols="30">
					<input class="txtfield" type="date" name="endDate" rows="20" cols="30">
					<input class="txtfield" type="number" name="pricePerMonth" min="50" max="5000" placeholder="rent (between 50 and 5000)">
					<input class="txtfield" type="number" name="noOfBedrooms" min="1" max="8" placeholder="noOfBedrooms(between 1 and 8)">
					<input class="txtfield" type="text" name="address" size="41" value="" placeholder= "address">
					<input class="txtfield" type="text" name="provider" size="41" value="" placeholder="provider:(CPM, University Group, JSM or Personal)">
          <input class="txtfield" type="file" name="fileToUpload" id="fileToUpload" title="select image to upload">
          </div>

					<div style="float: left;">
					<textarea class="txtfield" name="postContent" rows="19" cols="59" placeholder="content"></textarea>
				 	</div>

					<input class="txtfield" type="submit" name="submit" value="Submit" style="width:970px;"> 
				</form>
				<div id="commentFormReturn"></div>
			</div>

	</div>
  </div>
  
    <script type="text/javascript">
      $(function(){
        $('#modaltrigger1').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
        $('#modaltrigger2').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
      });
    </script>

</body>
</html>
