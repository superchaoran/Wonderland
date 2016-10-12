<aside>
	<?php
	if(logged_in() === true)
	{
		//echo 'Logged_in';
		//include logged in file
		include '/core/loggedin.php';
	}
	else
	{
		//include 'includes/widgets/login.php';
	}
	?>
</aside>