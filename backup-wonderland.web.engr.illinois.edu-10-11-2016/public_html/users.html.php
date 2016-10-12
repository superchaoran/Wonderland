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

      <div style="margin-top:200px;left:0;width:980px;height:48px;position:absolute;background-color:black;">  
        <p style="text-align: center;font-size:250%;margin-top:5px;font-family:sans-serif;">View Lease</p>
      </div>

      <div style="margin-top:250px;width:980px;position:absolute;">

      <?php include_once $_SERVER['DOCUMENT_ROOT'] .
            '/includes/helpers.inc.php'; ?>    
            <?php foreach ($posts as $post):?>
            <?php if($post['parentPostID']==0): ?>
            <?php echo "<a href="."\"/displaypost.php?id=".$post['postID']."\">"; ?>
            <?php echo "<img src=\"". "http://wonderland.web.engr.illinois.edu/uploads/".$post['picture']."\"".
              " height = \"322\" width = \"322\" >"; ?></a>
          
            <?php endif;?>
            <?php endforeach; ?>
      </div>

      <!--
      <div style="margin-top:12000px;position:relative;color:black;">
        <?php include_once $_SERVER['DOCUMENT_ROOT'] .
            '/includes/helpers.inc.php'; ?>    
            <?php foreach ($posts as $post):?>
            <?php if($post['parentPostID']==0): ?>
            <div style="float:left">
              <form action="addForm.php" method="post">
                <div>
                  <input type="hidden" name="id" value="<?php
                      htmlout($post['postID']); ?>">
                  <input type="submit" name="action" value="Delete">
                </div>
              </form>    
            </div>

              <blockquote>
                <p style= "text-align:left">
                  <b><?php htmlout($post['postTitle']); ?></b> &nbsp;&nbsp;
                  <a href="displaypost.php?id=<?=$post['postID'] ?>" class="button button-small">Learn More</a></br>

                  </br>
                </p>
              </blockquote>
            <?php endif;?>
          <?php endforeach; ?>
        </div>
      -->

    </div>
  </div>
  

</body>
</html>
