<?php 
	include './functionButton.php'; 
	$myConnect = mysqli_connect( "localhost:3306" , "root" , "new_password" , "Freetime" );
	if( !($myConnect) )
	{
		die("FAILED<br />" . mysqli_connect_error() );
	}

	$prepSQL = $myConnect->prepare( "DELETE FROM User_Info WHERE Email = ? AND Pass = ? " );
	$prepSQL->bind_param( "ss" , $delEmail , $delPass );

	$delEmail = $_POST["email"];
	$delPass = $_POST["passCode"];
	$prepSQL->execute();

	$prepSQL->close();


	echo "<p>Successfullly deleted account!</p>";
	// echo "<script> window.location = './homePage.php'; </script>";


	mysqli_close( $myConnect );







?>
