<!DOCTYPE html> 
	<head>
		<title>Events - Lab8</title>
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
$myEvents = readLines("myEvents.txt");
$events = readLines("events.txt");
?>

<h1> Current Events:</h1>
<ul>
	
<?php
foreach($events as $position =>$event)
{
	$eventSearch = $event;
	$event = explode ("|",$event);
	echo "<li>$event[0] - $event[1]";
	if(!in_array ($eventSearch, $myEvents))
	{
	?>
	<form method="post" action="events.php">
			<input type="hidden" name="addEvent" value="<?php  echo $position; ?>">
			<button type="submit" >Add to List</button>
		</form>
	<?php
	}
	echo "</li>";
}
?>

</ul>
<h1> Your list:</h1>
<ul>
	
<?php
foreach($myEvents as $myEventPosition =>$myEvent)
{
	$myEvent = explode ("|",$myEvent);
	echo "<li>$myEvent[0] - $myEvent[1]";
	?>
	<form method="post" action="events.php">
			<input type="hidden" name="deleteEvent" value="<?php  echo $myEventPosition; ?>">
			<button type="submit" >Remove</button>
		</form>
	<?php
	echo "</li>";
}
?>

</ul>
You can also <a href="mail.php">email this list</a> to yourself or a friend.

<?php
}
else if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST["deleteEvent"]))
	{
		//Perform a delete
		//Sanity Checks
		
		deleteLine("myEvents.txt",$_POST["deleteEvent"]);
		//setrawcookie("flash", base64_encode("You successfully deleted from my file!"), time() + (5 * 60));
				
		header("Location: events.php");
		
	}
	else if(isset($_POST["addEvent"]))
	{
		
		$events = readLines("events.txt");
		$event = $events[$_POST["addEvent"]];
		$event = explode("|", $event);
		appendLine("myEvents.txt", implode("|",$event));
		
		//setrawcookie("flash", base64_encode("You successfully inserted into my file!"), time() + (5 * 60));
		
		
		header("Location: events.php");
	}
}