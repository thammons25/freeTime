<?php
	$host = "";
	$user = "";
	$pass = "";
	$db = "";

	$myConn = mysqli_connect( $host , $user , $pass , $db );
	if( !$myConn )
	{
		die( "FAILED(!!!) -> " . mysqli_connect_error( $myConn ) );
	}
?>
