<?php
	$host = "localhost:3306";
	$user = "root";
	$pass = "qweasd";
	$db = "freetime";

	$myConn = mysqli_connect( $host , $user , $pass , $db );
	if( !$myConn )
	{
		die( "FAILED(!!!) -> " . mysqli_connect_error( $myConn ) );
	}
?>
