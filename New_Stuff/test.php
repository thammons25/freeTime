<html>
	<head>

		<title>test</title>
		<script language = "JavaScript">
		<!--
			function testOut()
			{
				window.location = './index.php';
			}
		//-->
		</script>
	</head>
<?php
	if( isset( $_POST["one"] ) )
	{
		echo "<body onload = 'testOut()'>";
	}
	else
	{
		echo "<body>";
	}
	
	echo "<p>Hello, world!</p>
			<form method = 'post' action = ''>
				Enter: <input type = 'text' name = 'one' />
				<br />
				<br />
				<input type = 'submit' value = 'submit' />
			</form>
		  </body>";		  

?>

</html>
