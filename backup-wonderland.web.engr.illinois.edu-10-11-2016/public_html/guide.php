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
        <p style="text-align: center;font-size:250%;margin-top:5px;font-family:sans-serif;">Basic Guide to Subleasing</p>
      </div>

      <p style="margin-top:250px;left:0;width:980px;color:black;font-size:150%;position:absolute;">Subleasing your place can be a tough task when you are in college. Along with school, work, and your social life you now have the job of finding a tenant to take over your lease. Here are some things you should consider when subleasing your place.</p>


      <div style="margin-top:300px;margin-left:0px;width:235px;height:220px;position:absolute;background-color:grey;">  
        <p style="text-align: center;font-size:200%;margin-top:5px;font-family:sans-serif;color:White;">Legal</p>
        <p style="color:black;font-size:110%;text-align: left;margin-left:4px;">If you are currently in a lease, you should consult your landlord or realtor to see if you are allowed to sublet your place.If your roommates are not planning on moving out, then you should be considerate of them. Be sure you run decisions by them about tenants, bills, furniture, rent payments, etc... </p>
      </div>

      <div style="margin-top:300px;margin-left:245px;width:235px;height:220px;position:absolute;background-color:grey;">  
        <p style="text-align: center;font-size:200%;margin-top:5px;font-family:sans-serif;color:White;">Roommates</p>
        <p style="color:black;font-size:110%;text-align: left;margin-left:4px;">Be sure to discuss the idea of subleasing with your current roommate(s). If they are also moving out and are in need of finding somebody to take over their lease then you can split the costs and responsibilities associated with subleasing.</p>
 
      </div>
      
      <div style="margin-top:300px;margin-left:490px;width:235px;height:220px;position:absolute;background-color:grey;">  
      <p style="text-align: center;font-size:200%;margin-top:5px;font-family:sans-serif;color:White;">Tenants</p>
      <p style="color:black;font-size:110%;text-align: left;margin-left:4px;">Choosing responsible tenants is the key to a good sublease.While you should not discriminate when choosing a tenant, there are some basic guidelines you can follow when screening tenants. Finally, a responsible tenant should have no qualms with putting down a deposit. This can help if they fail to pay rent or damage your place while they are living there.</p>

      </div>
      
      <div style="margin-top:300px;margin-left:735px;width:235px;height:220px;position:absolute;background-color:grey;">  
      <p style="text-align: center;font-size:200%;margin-top:5px;font-family:sans-serif;color:White;">Advertising</p>
      <p style="color:black;font-size:110%;text-align: left;margin-left:4px;">Bulletin boards can also become extremely cluttered, making it difficult for somebody to find the sublease that is right for them. Bulletin boards are a great way to advertise your sublease, but they should be used in conjunction with other tactics. Emails can also be sent out to students at your college or university. Talk to your schools system administrator to discuss sending out mass emails. Be sure you do not SPAM your fellow students.</p>
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
