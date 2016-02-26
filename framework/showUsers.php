<!-- IF YOU EVER PLAN TO USE THIS YOU NEED TO PREPARE THE SELECT STATEMENT -->

<!-- DONT IGNORE THE MESSAGE ABOVE JUST DO IT GOD DAMN -->
<?php include './functionButton.php'; ?>


<?php
	$myConnect = mysqli_connect( "localhost:3306" , "root" , "new_password" , "Freetime" );
	if( !($myConnect) )
	{
		die("FAILED<br />" . mysqli_connect_error() );
	}

	$selectSQL = "SELECT id , First , Last , Email , User, reg_date FROM User_Info";
	$result = mysqli_query( $myConnect , $selectSQL );
	echo "<table border = 1>";
		echo "<tr>";
			echo "<th>id</th>";
			echo "<th>First</th>";
			echo "<th>Last</th>";
			echo "<th>Email</th>";
			echo "<th>Username</th>";
			echo "<th>Registered</th>";
		echo "</tr>";
		while( $row = mysqli_fetch_assoc( $result ) )
		{
			echo "<tr>";
				echo "<td>" . $row["id"] . "</td>";
				echo "<td>" . $row["First"] . "</td>";
				echo "<td>" . $row["Last"] . "</td>";
				echo "<td>" . $row["Email"] . "</td>";
				echo "<td>" . $row["User"] . "</td>";
				echo "<td>" . $row["reg_date"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";

		mysqli_close( $myConnect );
?>
<html>
	<head>
		<title> idk </title>
		<link rel = "stylesheet" type = "text/css" href = "./?.css" />
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"> </script>
		<script language = "JavaScript">
		<!--
			function SendBack()
			{
				window.location = "./homePage.php";
			}






		//-->
		</script>


		
		
	</head>



	<body>
		<p>Click button to go back to home</p>
		<button onclick = "SendBack()">HOME</button>
		<?php
			
			



		?>

		<script language = "JavaScript">
		<!--
			
			



		//-->
		</script>

	</body>
</html>
















