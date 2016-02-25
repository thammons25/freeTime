<!-- I USED THIS TO MAKE THE FIRST TABLE -->
<!-- JUST USED 'CREATE DATABASE Freetime' ON TERMINAL TO MAKE DB -->


<?php
	$myConnect = mysqli_connect( "localhost:3306" , "root" , "new_password" , "Freetime" );
	if( !($myConnect) )
	{
		die( "FAILED<br />" . mysqli_connect_error() );
	}

	$createSQL = "CREATE TABLE User_Info(
		id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		First VARCHAR(30) NOT NULL ,
		Last VARCHAR(30) NOT NULL ,
		Email VARCHAR(50) NOT NULL ,
		User VARCHAR(15) NOT NULL ,
		Pass VARCHAR( 20 ) NOT NULL ,
		reg_date TIMESTAMP ,
		UNIQUE( First , Last , Email , User )
		)";
	
	if( mysqli_query( $myConnect , $createSQL ) )
	{
		echo "<p>Successfully created table 'User_Info'</p>";
	}
	else {
		echo "<p>Failed to create table 'User_Info'</p>";
		echo "<p>" . mysqli_error( $myConnect ) . "</p>";
	}

	mysqli_close( $myConnect );







?>
