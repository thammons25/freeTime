<!-- will show database information as an html table  -->


<?php
	$myConnect = mysqli_connect( "localhost:3306" , "root" , "new_password" , "Freetime" );
	if( !($myConnect) )
	{
		die( "FAILED<br />" . mysqli_connect_error() );
	}

	$selectSQL = "SELECT id,First,Last,Email,User FROM User_Info";
	$result = mysqli_query( $myConnect , $selectSQL );
	echo "<table border = 1>";
		echo "<tr>";
			echo "<th>id</th>";
			echo "<th>First</th>";
			echo "<th>Last</th>";
			echo "<th>Email</th>";
			echo "<th>Username</th>";
		echo "</tr>";
		while( $row = mysqli_fetch_assoc( $result ) )
		{
			echo "<tr>";
				echo "<td>" . $row["id"] . "</td>";
				echo "<td>" . $row["First"] . "</td>";
				echo "<td>" . $row["Last"] . "</td>";
				echo "<td>" . $row["Email"] . "</td>";
				echo "<td>" . $row["User"] . "</td>";
			echo "</tr>";
		}
	echo "</table>";

	mysqli_close( $myConnect );


?>
