<?php session_start();?>
<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
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

        <div style="position:absolute;margin-top:220px;color:black;">
          <div style="top:0px;width:690px;height:580px;position:absolute;">
          <img src="images/apt1.jpg" >
          </div>

          <div style="top:0px;left:700px;width:300px;height:701px;position:absolute;">
            <div style="height:301px;background-color: rgba(36, 36, 36, 0.25);padding:20px;">
              <div style="width:260px;">
                <h2 style="font-size:220%;margin-bottom:15px;margin-top:20px;color:white;">Basic Guide to Subleasing</h2>
                <p style="color:black; margin:3px;color: #242424; font-size:150%;">Subleasing your place can be a tough task when you are in college. Along with school, work,
               and your social life you now have the job of finding a tenant to take over your lease.
                Here are some things you should consider when subleasing your place.</p>
              </div>
              <div style="border-bottom: 1px solid rgba(209, 209, 209, 1);
                          height: 0 !important;min-height: 0 !important;color: #242424;">
              </div>
              <a style="color: white; font-size:160%;" href="/guide.php"><div style="top: 255px; left: 25px; position: absolute; ">Read more</div>
              <div style="top: 250px; left: 250px; width: 21px; position: absolute;"><p sytle="font-size:160%;">&gt;</p><a>
              </div>
            </div>

            <div style="margin-top:10px;cursor:default;">
              <img src="images/lamp.png" height="285" width="300">
            </div>

            <div style="margin-top:7px;cursor:default;">
              <img src="images/carpet.png" height="285" width="300">
            </div>
          </div>

          <div style="background-color:black; left:0px; margin-top:528px; width:470px; height:62px; position:absolute;padding:15px;cursor:default;">
            <p style="color:white;font-size:250%;font-family:sans-serif;"><b>Minimum Research, Maximum Comfort</b></p>
          </div>

          <div style="background-color:black; left:480px; margin-top:528px; width:210px; height:62px; position:absolute;padding:25px;">
            <a href="http://wonderland.web.engr.illinois.edu/search/searchBackend.php" style="color:white;font-size:150%;font-family:sans-serif;margin-left:20px;"><b>Research Now >></b></a>
          </div>

          <div style="margin-top:600px;left:0px;width:340px;height:291px;position:absolute;cursor:default;">
            <img src="images/floor_plan.jpg" width="340" height="291" >
          </div>

          <div style="margin-top:600px;left:350px;width:340px;height:291px;position:absolute;cursor:default;">
            <img src="images/apt5.jpg" width="340" height="291">
          </div>

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