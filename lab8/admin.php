<!DOCTYPE html> 
	<head>
		<title>Events - Lab8</title>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
<div class="nav">
	<ul>
		<a href="index.php">Home</a></li>
		<a href="events.php">Events</a></li>	
		<a href="admin.php">Admin</a></li>
		<a href="login.php">Logout</a></li>
	</ul>
</div>
<?php
require_once("common.php");
if($_SERVER["REQUEST_METHOD"] == "GET")
{
if($_SESSION["username"] != "admin")
{
	header("location: login.php");
}
$events = readLines("events.txt");
?>

<h1> Current Events:</h1>
<ul>
	
<?php
foreach($events as $position =>$event)
{
	$event = explode ("|",$event);
	echo "<li>$event[0] - $event[1]";
	?>
	<form method="post" action="admin.php">
			<input type="hidden" name="deleteEvent" value="<?php  echo $position; ?>">
			<button type="submit" >X</button>
		</form>
	<?php
	echo "</li>";
}
?>

</ul>

<h1>Add Event:</h1>

<form action="admin.php" method="post">
	<table>
		<tr>
			<td>
				Event Name: <input type="text" name="eventName"/>
			</td>
		</tr>
		<tr>
			<td>
				Event Location: <input type="text" name="eventLocation"/>
			</td>
		</tr>
		<tr>
			<td>
				<button type="submit"> Submit </button>
			</td>
		</tr>
	</table>
</form>
<?php
}
else if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST["deleteEvent"]))
	{
		//Perform a delete
		//Sanity Checks
		
		deleteLine("events.txt",$_POST["deleteEvent"]);
		//setrawcookie("flash", base64_encode("You successfully deleted from my file!"), time() + (5 * 60));
				
		header("Location: admin.php");
		
	}
	else if(isset($_POST["eventName"]))
	{
		//Perform an insert
		//Add the todo item to the todo.csv file
		$event = array();
		 
		//Sanity checks
		
		$event[] = $_POST["eventName"];
		$event[] = $_POST["eventLocation"];
	
		appendLine("events.txt", implode("|",$event) . "\r\n");
		
		//setrawcookie("flash", base64_encode("You successfully inserted into my file!"), time() + (5 * 60));
		
		
		header("Location: admin.php");
	}
}