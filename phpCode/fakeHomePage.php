<?php include './functionButton.php'; ?>
<html>
	<head>
		<title> idk </title>
		<link rel = "stylesheet" type = "text/css" href ="./general.css" />
		<link rel = "stylesheet" type = "text/css" href = "./homePage.css" />
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"> </script>
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,700,600,800,900' rel='stylesheet' type='text/css'>
		<script language = "JavaScript">
		<!--
		//-->
		</script>		
	</head>
	<body>
		<div id="container">
			<div id="header">
				<div id="pageTitle">
					<h1>Welcome to Free Time!</h1>	
				</div>
				<div id="signInForm">
					<!-- 
						returningUser.php is unseen page by user that will redirect you to the creating task page where you
						can use the program. if you do not enter in proper information then returningUser will bring you back here
					-->
			  		<form action="./returningUser.php" method="post" id="###"> 
				 		<div id="existingUsername">
				 			<p>Username:</p>
				 			<input type="text" name="userName"></textarea>	
				 			</p>
				 		</div>
				 		<div id="existingPassword">
				 			<p>Password:</p>
				 			<input type="password" name="passCode"/>
				 		</div>	
				 		<div id="existingSubmit">
				 			<input type="submit" name="submit" value="Sign In" id="submit"/>
				 		</div>	
					</form>
				</div>	
				<!-- Sign in form end -->
			</div>  
			<!-- Header end -->
			<div id="homePageContent">
				<div id ="aboutFreeTime">
					<h1>Meet up with<br />your groups<h1/>
					<h2>Compare availibility and see what<br /> times work for everyone.</h2>	
				</div>
				<!-- About section end -->
				<!-- 
					this form will bring you to createUser.php, which is a page unseen by user. 
					createUser will add user to the sql db, then redirect to createTask.php

				 -->
				<div id="signUpForm">
					<h2>REGISTER NEW ACCOUNT</h2>
				  	<form action="./createUser.php" method="post" id="###">
				  		<div id="firstName">
					 		<textarea name="firstName" placeholder="First Name"></textarea>	
					 	</div> 
					 	<div id="lastName">
					 		<textarea name="lastName" placeholder="Last Name"></textarea>	
					 	</div>
					 	<div id="email">
					 		<textarea name="email" placeholder="Email"></textarea>	
					 	</div> 
					 	<div id="username">
					 		<textarea name="userName" placeholder="Username"></textarea>	
					 	</div>
					 	<div>
					 		<p>Password:</p>
					 		<input type="password" name="passCode"/>
					 	</div>	
					 <div id="signUp">
					 	<input type="submit" name="submit" value="Sign Up" id="submit"/>
					 </div>	
					</form>
				<!-- Sign up end -->
				</div>	
			<!-- Content end -->
			<footer>
				<p>Thomas Hammons & Emma Phillips &copy; 2016</p>
			</footer>
		</div>
		<!-- Container end -->
	</body>
</html>
