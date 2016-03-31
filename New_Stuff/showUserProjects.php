<!-- USE FORM METHOD = "GET" TO SELECT OTHER USERS AS ./showUserProjects.php?id= IF YOU WANT TO SHOW GROUP MEMBERS! -->
<?php
	include './connect.php';

	$sqlSelect = "SELECT projectNum FROM projectMembers WHERE userNum = " . filter_var( $_SESSION["logID"] , FILTER_VALIDATE_INT);

	$result = mysqli_query( $myConn , $sqlSelect );

	if( !$result )
	{
		echo "error(2) -> " . mysqli_error( $myConn );
	}

	if( mysqli_num_rows( $result ) > 0 )
	{
		$userProjects = array();
		while( $row = mysqli_fetch_assoc( $result ) )
		{
			array_push( $userProjects , filter_var( $row["projectNum"] , FILTER_VALIDATE_INT));

		}
		echo "<table border = '1'>
				<tr>
					<th>Project Name</th>
				</tr>";
		$i = 0;
		while( $i < count( $userProjects) )
		{
			$sqlSelect = "SELECT projName FROM projects WHERE projID = " . filter_var( $userProjects[$i] , FILTER_VALIDATE_INT ) ;
			$result = mysqli_query( $myConn , $sqlSelect );
			if( !$result )
			{
				echo "error(3) -> " . mysqli_error( $myConn );
			}
			while( $row = mysqli_fetch_assoc( $result ) )
			{
				echo "<tr>";
					echo "<td>" . $row["projName"] . "</td>";
				echo "</tr>";
			}
			$i++;
		}
		echo "</table>";
	}











?>
