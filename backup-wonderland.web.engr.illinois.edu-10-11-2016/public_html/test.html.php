<?php include_once $_SERVER['DOCUMENT_ROOT'] .
    '/includes/helpers.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>List of Jokes</title>
  </head>
  <body>
    <p>Here are all the posts in the database:</p>
    	<?php
    	$query="SELECT * FROM posts";
    	$result=mysql_query($query);
		$num = mysql_numrows($result);

		$i=0;
		while ($i < $num) 
		{
				$field1-name=mysql_result($result,$i,"post_ID");

				echo <b>
				$field1-name </b> <br>;
				$i++;
		}
		?>
  </body>
</html>
