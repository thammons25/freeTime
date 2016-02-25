<?php	
	$myConnect = mysqli_connect( "localhost:3306" , "SQL LOGIN" , "SQL PWORD" , "Freetime" );
	if( !($myConnect) )
	{
		die("FAILED<br />" . mysqli_connect_error() );
	}

	$selectSQL = "SELECT First, Last , User , Pass FROM User_Info";
	$result = mysqli_query( $myConnect , $selectSQL );
	while( $row = mysqli_fetch_assoc( $result ) )
	{
		if( ($row["User"] == $_POST["userName"] ) && ( $row["Pass"] == $_POST["passCode"] ) )
		{
			$retUser = $row["User"];
			$retFirst = $row["First"];
			$retLast = $row["Last"];
			break;
		}
	}
	if( !($retUser) )
	{
		echo "<p>Username/Password combination not found!</p>";
		echo "<button onclick = 'backHome()'>Home</button>";
	}
	else 
	{
		echo "<p> Welcome back " . $retFirst . " " . $retLast . "</p>";
	}




?>






<html>
	<head>
		<title> idk </title>
		<link rel = "stylesheet" type = "text/css" href = "./?.css" />
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"> </script>
		<script language = "JavaScript">
		<!--
			function backHome()
			{
				window.location = "./homePage.php";
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
















