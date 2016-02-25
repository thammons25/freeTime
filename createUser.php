<?php
	$myConnect = mysqli_connect( "localhost:3306" , "root" , "new_password" , "app" );
	if( !($myConnect) )
	{
		die("FAILED<br />" . mysqli_connect_error() );
	}

	$prepSQL = $myConnect->prepare( "INSERT INTO Freetime( First , Last , Email , User , Pass ) 
		VALUES( ? , ? , ? , ? , ? )" );
	$prepSQL->bind_param( "sssss" , $fName , $lName , $snailMail , $uName , $pWord );

	$fName = $_POST["firstName"];
	$lName = $_POST["lastName"];
	$snailMail = $_POST["email"];
	$uName = $_POST["userName"];
	$pWord = $_POST["passCode"];

	$prepSQL->execute();
	echo "<p>Successfully added to database 'Freetime'</p>";
	$prepSQL->close();


	mysqli_close( $myConnect );
?>
