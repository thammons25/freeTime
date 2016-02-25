
<!-- THIS IS WHERE YOU ARE BROUGHT IF YOU CLICK 'REGISTER' ON THE FIRST PAGE -->
<!-- CONSIDER IT AS PAGE 2 -->
<!-- PAGE LOADS IN RESPONSE TO INDIVIDUAL WISHING TO CREATE AN ACCOUNT -->
<!-- CSS: ./basicInfoOne.css -->
<!-- MAKE SURE CSS AND HTML ARE IN SAME FOLDER  -->

<html>
	<head>
		<title> idk </title>
		<link rel = "stylesheet" type = "text/css" href = "./basicInfo.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,700,600,800,900' rel='stylesheet' type='text/css'>
		<script language = "JavaScript">
			function heyWorld()
			{
				alert("hello, world!");
			}
		<!--
		//IF YOU NEED JS FUNCTIONS PUT THEM 
			//HERE
		//-->
		</script>
	</head>
	<body>
	<div id="container">
		<div id="header">
			<h1>Hello, World!</h1>	
		</div>  
		<!-- Heading end -->
		<div id="signInForm">
		  	<form action="###" method="post" id="###">
		  		<h2>REGISTER NEW ACCOUNT</h2>
		  		<div id="topForm">
			 		<textarea name="firstName" placeholder="First Name"></textarea>	
			 	</div> 
			 	<div>
			 		<textarea name="lastName" placeholder="Last Name"></textarea>	
			 	</div>
			 	<div>
			 		<textarea name="email" placeholder="Email"></textarea>	
			 	</div> 
			 	<div>
			 		<textarea name="userName" placeholder="Username"></textarea>	
			 	</div>
			 	<div>
			 		<input type="password" name="passCode"/>
			 	</div>	
			 <div>
			 	<input type="submit" name="submit" value="submit" id="submit"/>
			 </div>	
		</form>
		<!-- Sign in form end -->
	  </div>
	  <footer>
			<p>Thomas Hammons & Emma Phillips &copy; 2016</p>
		</footer>
	</div>
	</body>	
</html>
