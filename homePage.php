
<!-- THIS IS THE FIRST PAGE SOMEONE WOULD ENCOUNTER  -->
<!-- IF YOU ARE NOT YET A REGISTERED USER THEN IT WILL BRING YOU TO A PAGE THAT WILL ASK YOU TO FILL OUT SOME INFO -->
<!-- CSS: ./homeOne.css -->
<!-- MAKE SURE CSS AND HTML ARE IN SAME FOLDER  -->
<html>
	<head>
		<title> idk </title>
		<link rel = "stylesheet" type = "text/css" href = "./homePage.css" />
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"> </script>
		<link rel = "stylesheet" type = "text/css" href = "./homePage.css" />
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,700,600,800,900' rel='stylesheet' type='text/css'>
		<script language = "JavaScript">
		<!--
		//-->
		</script>		
	</head>
	<body>
		<div id = "wholePage">
			<h1 id = "loginHeader"> Welcome To Crazy Town </h1>
			<form method = "post" action = "#" >
				<div id = "loginBox">
					<div>
		 				<textarea name="username" placeholder="Username"></textarea>	
		 			</div>
		 			<div>
		 				<textarea name="password" placeholder="Password"></textarea>	
		 			</div>
					<div class="homeButtons">
						<input type = "submit" value = "LOG IN" id="loginButton" />
					</div>
					<div class="homeButtons">
						<input type = "submit" value = "NOT A USER YET?" formmethod = "post" formaction = "./basicInfo.php" id="makeUser"/>
					</div>
				</div>
			</form>
		</div>

		<?php
		?>

		<script language = "JavaScript">
		<!--
			
		//-->
		</script>
		<footer>
			<p>Thomas Hammons & Emma Phillips &copy; 2016</p>
		</footer>
	</body>
</html>
