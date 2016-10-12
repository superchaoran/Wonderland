<?php session_start();?>
<?php
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




include 'users.html.php';
?>
