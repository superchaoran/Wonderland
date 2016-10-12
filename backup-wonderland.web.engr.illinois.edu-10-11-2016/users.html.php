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

</body>
</html>
