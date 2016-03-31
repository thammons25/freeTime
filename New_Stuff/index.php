<?php
	session_start();
	include './connect.php';
	include './header.php';
	if( $_SESSION["logStatus"] = 1 && isset( $_SESSION["logName"] ) )
	{
		// echo "<p>Hello, world!</p>";
		include './mainContent.php';
		echo "<h3>Your Current Groups!</h3>";
		include './showUserProjects.php';
	}
	include './footer.php';

?>
