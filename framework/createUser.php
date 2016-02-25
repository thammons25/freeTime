<!-- this creates new user from the updated form page. -->
<?php
	$myConnect = mysqli_connect( "localhost:3306" , "SQL USER HERE" , "SQL PWORD HERE" , "Freetime" );
	if( !($myConnect) )
	{
		die("FAILED<br />" . mysqli_connect_error() );
	}

	$prepSQL = $myConnect->prepare( "INSERT INTO User_Info( First , Last , Email , User , Pass ) 
		VALUES( ? , ? , ? , ? , ? )" );
	$prepSQL->bind_param( "sssss" , $fName , $lName , $snailMail , $uName , $pWord );

	$fName = $_POST["firstName"];
	$lName = $_POST["lastName"];
	$snailMail = $_POST["email"];
	$uName = $_POST["userName"];
	$pWord = $_POST["passCode"];

	$prepSQL->execute();
	echo "<p>Successfully added to database 'Freetime'</pn>";
	$prepSQL->close();


	mysqli_close( $myConnect );
?>









