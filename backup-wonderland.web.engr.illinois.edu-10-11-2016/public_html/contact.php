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
        <p style="text-align: center;font-size:250%;margin-top:5px;font-family:sans-serif;">Contact</p>
      </div>



      <div style="width:980px; margin-left:auto; margin-right:auto;color:black;margin-top:270px;position:absolute;font-size:120%;">
      
      <iframe src="http://wonderland.web.engr.illinois.edu/map/contact_map.php?address=201 N Goodwin Ave, Urbana, IL 61801" width="980" height="150"></iframe>

      </div>

      <div style="margin-top:440px;left:0;width:980px;height:48px;position:absolute;background-color:white;">  
        <p style="text-align: center;font-size:250%;margin-top:5px;font-family:sans-serif;color:black;">Our Team</p>
      </div>


      <div style="margin-top:500px;margin-left:0px;width:235px;height:80px;position:absolute;background-color:grey;">  
        <p style="text-align: center;font-size:200%;margin-top:5px;font-family:sans-serif;color:White;">Yifan Wang</p>
        <p style="color:black;font-size:110%;text-align: center;">Founder && Software Architect</p>
        <p style="color:black;font-size:110%;text-align: center;">ywang123@illinois.edu</p>
      </div>

      <div style="margin-top:500px;margin-left:245px;width:235px;height:80px;position:absolute;background-color:grey;">  
        <p style="text-align: center;font-size:200%;margin-top:5px;font-family:sans-serif;color:White;"> Ninqi Li</p>
        <p style="color:black;font-size:110%;text-align: center;">Founder && Interface Planner<p>
        <p style="color:black;font-size:110%;text-align: center;">nli10@illinois.edu</p>
      </div>
      
      <div style="margin-top:500px;margin-left:490px;width:235px;height:80px;position:absolute;background-color:grey;">  
      <p style="text-align: center;font-size:200%;margin-top:5px;font-family:sans-serif;color:White;">Xia Hua</p>
      <p style="color:black;font-size:110%;text-align: center;">Founder && Database Manager</p>
      <p style="color:black;font-size:110%;text-align: center;">xiahua3@illinois.edu</p>
      </div>
      
      <div style="margin-top:500px;margin-left:735px;width:235px;height:80px;position:absolute;background-color:grey;">  
      <p style="text-align: center;font-size:200%;margin-top:5px;font-family:sans-serif;color:White;">Chaoran Wang</p>
      <p style="color:black;font-size:110%;text-align: center;">Founder && Software Engineer</p>
      <p style="color:black;font-size:110%;text-align: center;">wang374@illinois.edu</p>
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
