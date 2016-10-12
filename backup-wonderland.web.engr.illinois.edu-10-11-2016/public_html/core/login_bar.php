
<?php

if(isset($_SESSION['email'])){
	echo "<p style=\"font-size: 18px; color:black; margin-top:12px; margin-right:4px;\">".$_SESSION['email']."&nbsp&nbsp";
	echo "<a href=\"\core\logoutWait.php\" style=\"font-size: 18px; text-decoration: none; margin-right:4px;\">Log Out</a></p>";

}
else{
	echo "<div style=\"margin-top:19px;\">";
	echo "<a href=\"#loginmodal1\" class=\"account_management\" id=\"modaltrigger1\">Member   Login</a>";
	echo "<a href=\"#loginmodal2\" class=\"account_management\" id=\"modaltrigger2\">Create account</a>";
	echo "</div>";
}
?>