<?php

$id=$_GET["id"];

include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/magicquotes.inc.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
//include '/chapter9/includes/db.inc.php';
try
{
  
  /*$sql = 'SELECT post.postID, postTitle, name, email
      FROM post INNER JOIN user
        ON post.userID = user.userID';*/
/*
  $sql = 'SELECT postID, postTitle, postContent FROM post';
  $result = $pdo->query($sql);*/

  $sql = 'SELECT postID,parentPostID,postTitle,postContent,startDate,endDate,pricePerMonth,
                  noOfBedrooms,address,post.createdDate,provider
          FROM post INNER JOIN realEstate 
          ON post.postID=realEstate.realEstateID';
  $result = $pdo->query($sql);

}
catch (PDOException $e)
{
  $error = 'Error fetching jokes: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

foreach ($result as $row)
{
  /*
  $posts[] = array(
    'post' => $row['postID'],
    'title' => $row['postTitle'],
    'name' => $row['name'],
    'email' => $row['email']
  );*/
$posts[] = array(
    'postID' => $row['postID'],
    'parentPostID' => $row['parentPostID'],
    'postTitle' => $row['postTitle'],
    'postContent' => $row['postContent'],
    'startDate' => $row['startDate'],
    'endDate'=> $row['endDate'],
    'pricePerMonth' => $row['pricePerMonth'],
    'noOfBedrooms' => $row['noOfBedrooms'],
    'address' => $row['address'],
    'createdDate' => $row['createdDate'],
    'provider' => $row['provider']);
  //echo $row['postID']."</br>".$row['postTitle']."</br>".$row['postContent'];
  
}
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


    <?php if($post['postID']==$id): ?>
    <div style="float:left">
      <form action="addPost.php" method="post">
        <div>
          <input type="submit" name="action" value="Delete">
          <a href="updateformuser.php?id=<?=$post['postID']?>&title=<?=$post['postTitle']?>&sd=<?=$post['startDate']?>&ed=<?=$post['endDate']?>&ppm=<?=$post['pricePerMonth']?>&nob=<?=$post['noOfBedrooms']?>&ad=<?=$post['address']?>&pv=<?=$post['provider']?>&ct=<?=$post['postContent']?>" class="button" id = "post"> Update Lease</a>
        </div>
      </form>    
    </div>


      <blockquote>
        <p style= "text-align:left">
          <?php $pid=$post['postID']?>
          <?php htmlout($post['postTitle']); ?> &nbsp;&nbsp;</br>
          <?php htmlout($post['postContent']); ?></br>
          RealEstate Information:</br>
          startDate: <?php htmlout($post['startDate']); ?> &nbsp;&nbsp;
          endDate: <?php htmlout($post['endDate']); ?> &nbsp;&nbsp;
          pricePerMonth: <?php htmlout($post['pricePerMonth']); ?> &nbsp;&nbsp;
          noOfBedrooms: <?php htmlout($post['noOfBedrooms']); ?> &nbsp;&nbsp;</br>
          address: <?php htmlout($post['address']); ?> &nbsp;&nbsp;
          createdDate: <?php htmlout($post['createdDate']); ?> &nbsp;&nbsp;
          provider: <?php htmlout($post['provider']); ?> &nbsp;&nbsp;</br>
        </p>
      </blockquote>

    <?php endif;?>


    <?php if($post['parentPostID']==$id): ?>
    <div style="float:left">
      <form action="addPost.php" method="post">
        <div>
          <input type="hidden" name="deleteid" value="<?php htmlout($post['postID']); ?>">
          <input type="hidden" name="address" value="<?php htmlout($post['parentPostID']); ?>">
          <input type="submit" name="action" value="Delete">
          <img src="r1.png" width="42" height="42">
        </div>
      </form>    
    </div>

      <blockquote>
        <p style= "text-align:left">
          <?php htmlout($post['postContent']); ?></br>
        </p>
      </blockquote>


    <?php endif;?>





    <?php endforeach; ?>
    <div class="content">
      <font size="6">Leave a Message</font>
    </div>
    <div class="content">
      <form method="post" name="commentForm" id="commentForm" action="addPost.php">
      <input type="hidden" name="parentID" value="<?php htmlout($pid); ?>">
      <input type="hidden" name="address" value="<?php htmlout($id); ?>">
      <textarea rows="8" cols="80" name="postContent" placeholder="Message"></textarea>
      <div class="row">
        <div class="12u"><input type="submit" name="submit" value="Submit"></div>
      </div>
      </form>
    </div>
    



    


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







         <!-- <input type="hidden" name="id" value="<?php
              htmlout($post['postID']); ?>"> -->
