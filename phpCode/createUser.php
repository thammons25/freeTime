<!-- THIS PAGE IS ARRIVED AT BECAUSE SOMEONE FILLED OUT THE FORM ON ./homePage.php -->

<!-- USER CREATED NEW ACCOUNT  -->

<!-- USER DOES NOT EVERY ACTUALLY SEE THIS PAGE IT IS FOR REDIRECTION AND DATABASE PURPOSES ONLY -->

<!-- HEY TOM LOOK HERE: BE SURE TO USE PREPARED PHP/SQL STATEMENTS EVERYWHERE FOR EVERYTHING OTHERWISE YOULL GET FUCKED-->

<?php
	$myConnect = mysqli_connect( "localhost:3306" , "root" , "new_password" , "Freetime" );
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
	$prepSQL->close();


	mysqli_close( $myConnect );
?>
<html>
	<head>
		<title> idk </title>
		<!-- FUNCTION REDIRECTS TO THE PAGE ON WHICH THE PROGRAM EXISTS -->
		<script language = "JavaScript">
		<!--
			function ShowInfo()
			{
				window.location = "./createTask.php";
			}

		//-->
		</script>
		
	</head>



	<body onload = "ShowInfo()">

	</body>
</html>






















