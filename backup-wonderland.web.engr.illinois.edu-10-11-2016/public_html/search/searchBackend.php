<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/magicquotes.inc.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';




$minPrice=-1;$maxPrice=2147483647;$noOfBedrooms="any";
$searchString="";
//search realEstate.address,post.postTitle,post.postContent


//$noOfBedrooms=$_POST['noOfBedrooms'];
if (isset($_POST['minPrice']))
   if ($_POST['minPrice'] !== '')
      $minPrice=$_POST['minPrice'];
if (isset($_POST['maxPrice']))
   if ($_POST['maxPrice'] !== '')
      $maxPrice=$_POST['maxPrice'];
if (isset($_POST['noOfBedrooms']))
   if ($_POST['noOfBedrooms'] !== '' )
      $noOfBedrooms=$_POST['noOfBedrooms'];
if (isset($_POST['searchString']))
   if ($_POST['searchString'] !== '' )
      $searchString=$_POST['searchString'];


try
{
	
	if($noOfBedrooms==="any"){
		$sql='SELECT postID,postTitle,postContent,startDate,endDate,pricePerMonth,
		              noOfBedrooms,address,post.createdDate,provider,post.picture
		      FROM post INNER JOIN realEstate 
		      ON post.postID=realEstate.realEstateID
		      WHERE realEstate.pricePerMonth>='.$minPrice.' AND realEstate.pricePerMonth<='.$maxPrice.
		      ' AND (realEstate.address LIKE \'%'.$searchString.'%\''.
				' OR realEstate.provider LIKE \'%'.$searchString.'%\''
				.')';
	}
	else if($noOfBedrooms==="6"){
		$sql='SELECT postID,postTitle,postContent,startDate,endDate,pricePerMonth,
		              noOfBedrooms,address,post.createdDate,provider,post.picture
		      FROM post INNER JOIN realEstate 
		      ON post.postID=realEstate.realEstateID
		      WHERE realEstate.pricePerMonth>='.$minPrice.' AND realEstate.pricePerMonth<='.$maxPrice.' AND realEstate.noOfBedrooms>=6'.
		      ' AND (realEstate.address LIKE \'%'.$searchString.'%\''.
				' OR realEstate.provider LIKE \'%'.$searchString.'%\''
				.')';
	}
	else{
		$sql='SELECT postID,postTitle,postContent,startDate,endDate,pricePerMonth,
		              noOfBedrooms,address,post.createdDate,provider,post.picture
		      FROM post INNER JOIN realEstate 
		      ON post.postID=realEstate.realEstateID
		      WHERE realEstate.pricePerMonth>='.$minPrice.' AND realEstate.pricePerMonth<='.$maxPrice.' AND realEstate.noOfBedrooms='.$noOfBedrooms.
		      ' AND (realEstate.address LIKE \'%'.$searchString.'%\''.
				' OR realEstate.provider LIKE \'%'.$searchString.'%\''
				.')';
	}
	if($minPrice===-1){
		$minPrice = "";
	}
	if($maxPrice===2147483647){
  		$maxPrice = "";
	}
	$result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error:' . $e->getMessage();
  echo $error;
  exit();
}



foreach ($result as $row)
{

$posts[] = array(
    'postID' => $row['postID'],
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

include 'displaySearch.php';