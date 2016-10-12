<?php
session_start();
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
                  noOfBedrooms,address,post.createdDate,provider,post.picture
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
    'provider' => $row['provider'],
    'picture' => $row['picture']);
  //echo $row['postID']."</br>".$row['postTitle']."</br>".$row['postContent'];
  
}
?>


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



      <!--<button type="button" class="btn btn-default btn-lg">Large button</button>
      <button type="button" class="btn btn-default btn-lg">Large button</button>-->
    <div class="content" style="margin-top:175px;position:absolute;width:980px;">  


<?php include_once $_SERVER['DOCUMENT_ROOT'] .
    '/includes/helpers.inc.php'; ?>

   

    
    <?php foreach ($posts as $post):?>


    <?php if($post['postID']==$id): ?>
    <!--<div style="float:left">
      <form action="addPost.php" method="post">
        <div>-->
          <!--<input type="submit" name="action" value="Delete">-->
          <!--<a style="display: block;width: 50px;height: 20px;background: #E1E1E1;padding: 9px;text-align: left;border-radius: 5px;color: white;font-weight: bold;color:black;" href="updateformuser.php?id=<?=$post['postID']?>&title=<?=$post['postTitle']?>&sd=<?=$post['startDate']?>&ed=<?=$post['endDate']?>&ppm=<?=$post['pricePerMonth']?>&nob=<?=$post['noOfBedrooms']?>&ad=<?=$post['address']?>&pv=<?=$post['provider']?>&ct=<?=$post['postContent']?>" class="button" id = "post">Update</a>-->
      <!--  </div>
      </form>    
    </div>-->

      <div style="left:0;height:48px;background-color:black;padding:3px;">  
        <p style="text-align: center;font-size:250%;font-family:sans-serif;"><?php htmlout($post['postTitle']); ?></p>
      </div>

        <div style= "text-align:left; padding:10px;color:black;font-size:150%;background-color:rgba(36, 36, 36, 0.25);">
          <?php $pid=$post['postID']?>
          <?php htmlout($post['postContent']); ?></br>
          RealEstate Information:</br>
          startDate: <?php htmlout($post['startDate']); ?> &nbsp;&nbsp;
          endDate: <?php htmlout($post['endDate']); ?> &nbsp;&nbsp;
          pricePerMonth: <?php htmlout($post['pricePerMonth']); ?> &nbsp;&nbsp;
          noOfBedrooms: <?php htmlout($post['noOfBedrooms']); ?> &nbsp;&nbsp;</br>
          address: <?php htmlout($post['address']); ?> &nbsp;&nbsp;
          createdDate: <?php htmlout($post['createdDate']); ?> &nbsp;&nbsp;
          provider: <?php htmlout($post['provider']); ?> &nbsp;&nbsp;</br>

        </div>

      <?php echo "<img src=\"". "http://wonderland.web.engr.illinois.edu/uploads/".$post['picture']."\"".
      " height = \"467\" width = \"467\" >"; ?>
      <iframe src="http://wonderland.web.engr.illinois.edu/map/final_map.php?address=<?=$post['address']?>" width="467" height="467"></iframe>


    <?php endif;?>
    <?php endforeach; ?>

    <div style="color:black;font-size:150%;background-color:rgba(36, 36, 36, 0.25);">
    <?php foreach ($posts as $post):?>
    <?php if($post['parentPostID']==$id): ?>
   <!-- <div style="float:left">
      <form action="addPost.php" method="post">
        <div>
          <input type="hidden" name="deleteid" value="<?php htmlout($post['postID']); ?>">
          <input type="hidden" name="address" value="<?php htmlout($post['parentPostID']); ?>">
          <input type="submit" name="action" value="Delete">-->
             
    <!--    </div>
      </form>    
    </div>-->

        <p style= "text-align:left;color:black;">
          <?php echo "<img src=\"".($post['postID'] % 20).".PNG\" width=\"42\" height=\"42\">"; ?> <?php htmlout($post['postContent']); ?>
        </p>
         
    <?php endif;?>
    <?php endforeach; ?>
  </div>



    
    <div style="background-color:black;height:50px;padding:10px;">
      <font size="5" color="white">Leave a Message</font>
    </div>

    <div style="color:black;font-size:150%;">
      <form method="post" name="commentForm" id="commentForm" action="addPost.php">
      <input type="hidden" name="parentID" value="<?php htmlout($pid); ?>">
      <input type="hidden" name="address" value="<?php htmlout($id); ?>">
      <textarea class="txtfield" rows="8" cols="200" name="postContent" placeholder="Message"></textarea>
      <input class="txtfield" type="submit" name="submit" value="Submit">
      </form>
    </div>
    

    </div>

<!--     <div id="footer">
      <div style="border-bottom: 1px solid rgba(36, 36, 36, 1);
      height: 0 !important;
      min-height: 0 !important;"></div>
    </div> -->


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







         <!-- <input type="hidden" name="id" value="<?php
              htmlout($post['postID']); ?>"> -->
