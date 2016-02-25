<!-- THIS IS THE FIRST PAGE SOMEONE WOULD ENCOUNTER  -->
<!-- IF YOU ARE NOT YET A REGISTERED USER THEN IT WILL BRING YOU TO A PAGE THAT WILL ASK YOU TO FILL OUT SOME INFO -->
<!-- CSS: ./homeOne.css -->
<!-- MAKE SURE CSS AND HTML ARE IN SAME FOLDER  -->
<html>
	<head>
		<title> idk </title>
		<link rel = "stylesheet" type = "text/css" href ="./general.css" />
		<link rel = "stylesheet" type = "text/css" href = "./createTask.css" />
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"> </script>
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,700,600,800,900' rel='stylesheet' type='text/css'>
		<script src = "./createTask.js"> </script>		
	</head>
	<body onload = "listPopulater()" >
		<div id="container">
			<div id="header">
				<div id="pageTitle">
					<h1>Welcome to Free Time!</h1>	
				</div>
			</div>  
			<!-- Header end -->
			<div id="howItWorks">
				<h2>Thank you for logging in!</h2>
				<p>You can now create a new task or join an existing one!</p>
			</div>	
			<div id="newTask">
				<h2>Create New Task!</h2>
				<form action="#">
					<div id="startDate">
						<p>Please Select Start Month!</p>
						<select name="newTaskStartMonth" id = "userMonth">	
						</select>
						<p>Please Select Start Day!</p>
						<select name="newTaskStartDay" id = "userDay">	
						</select>	
						<!-- New Task Start Date End -->
					</div>
					<div id="endDate">
						<p>Please Select End Month!</p>
						<select name="newTaskEndMonth" id = "userMonthAgain">	
						</select>
						<p>Please Select End Date</p>
						<select name="newTaskEndDay" id = "userDayAgain">	
						</select>
					</div>
				</form>
				<!-- New Task End -->
				<form action="#">

				</form>	
			</div>	
			<div id="existingTask">
				<h2>Join Existing Task!</h2>
			</div>	
			<footer>
				<a class="resume" href="facebook.com"><img src="./text70.png"/></a>
				<a class="resume" href="facebook.com"><img src="./text70.png"/></a>
				<p>Thomas Hammons & Emma Phillips &copy; 2016</p>
			</footer>
		</div>
		<!-- Container end -->
	</body>
</html>
