<?php
	// define variables and set to empty values
	include $_SERVER['DOCUMENT_ROOT'] .'/includes/magicquotes.inc.php';

	$nameErr = $commentErr= "";
	$postTitle = $postContent = $parentID = "";
	$parentID=$_POST["parentID"];
	date("Y-m-d");
  
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
	    if ( empty($_POST["postTitle"]) )
	   	{
	   		$nameErr = "Name is required";
	    }

		if (empty($_POST["postContent"]))
	    {
   			$commentErr = "Comment is required";
		}

		// Create connection
		if(($commentErr == NULL) || ($nameErr == NULL))
		{

				include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
				try
			 	{
	  

				    
				    $sql0 = 'INSERT INTO post SET
				        postTitle =:postTitle,
				        postContent =:postContent,
				        createdDate =CURDATE(),
				        realEstateID =:realEstateID,
				        parentPostID=:parentPostID';
				    $s0=$pdo->prepare($sql0);
				    //$s->bindValue(':postID',10);
				    $s0->bindValue(':postTitle',$_POST["postTitle"]);
				    $s0->bindValue(':postContent',$_POST["postContent"]);
				    $s0->bindValue(':realEstateID',$realEstateID);
				    $s0->bindValue(':parentPostID',$_POST["parentID"]);
				    //$s->bindValue(':userID',1);
				    //$s->bindValue(':parentPostID',0);
				    //$s->bindValue(':realEstateID',1);
				    //$s->bindValue(':createdDate','2013-11-30');

				    $s0->execute();

				    
				    $realEstateID=$pdo->lastInsertId();

				     $sql1 = 'UPDATE realEstate SET
				    	startDate =:startDate,
				        endDate =:endDate,
				        pricePerMonth =:pricePerMonth,
				        noOfBedrooms=:noOfBedrooms,
				        userID=:userID,
				        address=:address,
				        createdDate=CURDATE(),
				        provider=:provider WHERE realEstateID=:realEstateID';

				    $s1=$pdo->prepare($sql1);
				    //$s->bindValue(':postID',10);
				    $s1->bindValue(':realEstateID',$realEstateID);
				    
				    $s1->bindValue(':startDate',$_POST["startDate"]);
				    $s1->bindValue(':endDate',$_POST["endDate"]);
				    
				    $s1->bindValue(':pricePerMonth',$_POST["pricePerMonth"]);
				    
				    $s1->bindValue(':noOfBedrooms',$_POST["noOfBedrooms"]);
				    $s1->bindValue(':userID',1);
				    $s1->bindValue(':address',$_POST["address"]);
				    
				    $s1->bindValue(':provider',$_POST["provider"]);
				    


				    //$s->bindValue(':userID',1);
				    //$s->bindValue(':parentPostID',0);
				    //$s->bindValue(':realEstateID',1);
				    //$s->bindValue(':createdDate','2013-11-30');

				    $s1->execute();

			 	}

				catch (PDOException $e)
				{
					$error = 'Error adding submitted joke.';
					//echo $_POST['postTitle']."</br>";
					//echo $post_id."</br>";
					//echo $_POST['postContent']."</br>";

					include 'error.html.php';
					exit();
				}
				header('Location:view.php');

		}


				if (isset($_POST['action']) and $_POST['action'] == 'Delete')
				{

				  include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
				  //echo "here";
				 //echo $_POST['id'];
				  // Delete category assignments for this joke
				  try
				  {
				    $sql = 'DELETE FROM post WHERE postID = :id';
				    $s = $pdo->prepare($sql);
				    $s->bindValue(':id', $_POST['id']);
				    $s->execute();
				  }
				  catch (PDOException $e)
				  {
				    $error = 'Error removing joke from categories.';
				    include 'error.html.php';
				    exit();
				  }

				  // Delete the joke
				  try
				  {
				    $sql = 'DELETE FROM realEstate WHERE realEstateID = :id';
				    $s = $pdo->prepare($sql);
				    $s->bindValue(':id', $_POST['id']);
				    $s->execute();
				  }
				  catch (PDOException $e)
				  {
				    $error = 'Error deleting joke.';
				    include 'error.html.php';
				    exit();
				  }

				  //header('Location: .'.'view.php');
				  //http://wonderland.web.engr.illinois.edu/
				  header('Location:view.php');
					exit();
				  
				}




/*
		echo "Success";

		//header('Location: .');
		exit();*/


}