<style type = "text/css">
	#mainList {
		list-style-type: none;
	}
	a.mainLink:hover {
		text-transform: uppercase;
	}
</style>
<?php
	include './connect.php';
	session_start();
	echo "<h3>Whatcha Up To?</h3>";
	echo "<ul id = 'mainList'>
			<li><a class = 'mainLink' href = './createProject.php'>Create New Project</a></li>
			<br />
			<li><a class = 'mainLink' href = './joinProject.php'>Join Existing Project</a></li>
			<br />
			<li><a class = 'mainLink' href = './editProject.php'>Edit Your Project Times</a></li>
		 </ul>";






?>
