<?php
	// define variables and set to empty values
	include $_SERVER['DOCUMENT_ROOT'] .'/includes/magicquotes.inc.php';
$error="";

//Upload picture
$target_dir = "/home/wonderland/public_html/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $error = $error. "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $error = $error. "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $error = $error. "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    $error = $error. "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $error = $error. "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $error = $error. "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $error = $error. "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        $error = $error. "Sorry, there was an error uploading your file.";
    }
}



	$nameErr = $commentErr= "";
	$postTitle = $postContent = $parentID = "";
	$parentID=$_POST["parentID"];
  
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
				        parentPostID=:parentPostID,
				        picture =:picture';
				    $s0=$pdo->prepare($sql0);
				    //$s->bindValue(':postID',10);
				    $s0->bindValue(':postTitle',$_POST["postTitle"]);
				    $s0->bindValue(':postContent',$_POST["postContent"]);
				    $s0->bindValue(':realEstateID',$realEstateID);
				    $s0->bindValue(':parentPostID',$_POST["parentID"]);
				    $s0->bindValue(':picture',basename( $_FILES["fileToUpload"]["name"]));
				    //$s->bindValue(':userID',1);
				    //$s->bindValue(':parentPostID',0);
				    //$s->bindValue(':realEstateID',1);
				    //$s->bindValue(':createdDate','2013-11-30');

				    $s0->execute();

				    
				    $realEstateID=$pdo->lastInsertId();

				     $sql1 = 'INSERT INTO realEstate SET
				    	realEstateID=:realEstateID,
				    	startDate =:startDate,
				        endDate =:endDate,
				        pricePerMonth =:pricePerMonth,
				        noOfBedrooms=:noOfBedrooms,
				        userID=:userID,
				        address=:address,
				        createdDate=CURDATE(),
				        provider=:provider';

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
					$error = $error.'Error adding post.';
					//echo $_POST['postTitle']."</br>";
					//echo $post_id."</br>";
					//echo $_POST['postContent']."</br>";

					include 'error.html.php';
					header('Location:view.php');
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
				    $error = 'Error removing post from categories.';
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
				    $error = 'Error deleting post.';
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