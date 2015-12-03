<!DOCTYPE html> 
	<head>
		<title>The Times - Lab7</title>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
<div class="nav">
	<ul>
		<a href="index.php">Home</a></li>
		<a href="events.php">Events</a></li>	
		<a href="login.php">Login</a></li>
	</ul>
</div>


<?php
require_once("common.php");
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	?>
	
		<form method="POST" action="login.php">
			<table>
				<tr>
					<td>
						Username:
					<input type="text" name="username">
					</td>
				</tr>
				<tr>
					<td>
						Password:
					<input type="password" name= "password">
					</td>
				</tr>
				<tr>
					<td>
						<input type="button" value="Submit" onclick="parent.location='admin.php'"
					</td>
				</tr>
			</table>
		</form>
	
	<?php
} else if($_SERVER["REQUEST_METHOD"] == "POST")
{
	//sanity checks
	
	if($_POST["username"] == "admin" && $_POST["password"] == "password")
	{
		
			$_SESSION["username"] = "admin";
	}
	else {
		//come back
		session_destroy();
		$_SESSION = array();
		session_write_close();
		header("Location: login.php");
		exit();
	}
	
}
else {
	exit("unsupported");
}