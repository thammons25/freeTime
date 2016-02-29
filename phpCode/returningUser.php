<!-- THIS SELECT STATEMENT NEEDS TO BE PREPARED BEFOREHAND -->
<?php include './functionButton.php'; ?>


<?php	
	$myConnect = mysqli_connect( "localhost:3306" , "root" , "new_password" , "Freetime" );
	if( !($myConnect) )
	{
		die("FAILED<br />" . mysqli_connect_error() );
	}

	$i = 0;

	$selectSQL = "SELECT First, Last , User , Pass FROM User_Info";
	$result = mysqli_query( $myConnect , $selectSQL );
	while( $row = mysqli_fetch_assoc( $result ) )
	{
		// this is the confirmation that the user has identified themself correctly.
		if( ($row["User"] == $_POST["userName"] ) && ( $row["Pass"] == $_POST["passCode"] ) )
		{
			$retUser = $row["User"];
			$retFirst = $row["First"];
			$retLast = $row["Last"];
			$i = 1;
			break;
		}
	}
	// SHOULD REALLY MAYBE CONSIDER NOT WEDGING SCRIPT TAGS IN THE MIDDLE OF A PHP SCRIPT???????
	// WORKS FOR NOW THOUGH ( 2/25/2016 @ 5:35PM )
	if( $i == 1 ) //will send to logged in page 
	{
		echo "<p> Welcome back, " . $retFirst . " " . $retLast . "</p>";
		// echo "<button onclick = 'ToLogin()'>LOGIN</button>";
		echo "<script> window.location = './createTask.php'; </script>";


	}
	//returns user back to home page to try again
	else 

	{
		echo "<script> window.location = './homePage.php'; </script>";
	}
	mysqli_close( $myConnect );




?>






<html>
	<head>
		<title> idk </title>
		<link rel = "stylesheet" type = "text/css" href = "./?.css" />
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"> </script>
		<script language = "JavaScript">
		<!--
			function BackHome()
			{
				window.location = "./homePage.php";
			}
			function ToLogin()
			{
				window.location = "./createTask.php";
			}






		//-->
		</script>


		
		
	</head>



	<body>
		<?php
			
			



		?>

		<script language = "JavaScript">
		<!--
			
			



		//-->
		</script>

	</body>
</html>
















