<!DOCTYPE html> 
	<head>
		<title>Events- Lab8</title>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
<div class="nav">
	<ul>
		<a href="common.php">Home</a></li>
		<a href="events.php">Events</a></li>	
		<a href="login.php">Login</a></li>
	</ul>
</div>

<?php
require_once("common.php");
$myEvents = readLines("myEvents.txt");
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	?>
	
		<form method="POST" action="mail.php">
			<table>
				<tr>
					<td>
						From:
					<input type="email" name="from">
					</td>
				</tr>
				<tr>
					<td>
						To:
					<input type="email" name="to">
					</td>
				</tr>
				<tr>
					<td>
						Subject:
					<input type="text" name= "subject">
					</td>
				</tr>
				<tr>
					<td>Message:
						<input type="message" name= "message">
						</td>
				</tr>
				<tr><td><h1> Your list:</h1>
						<ul>
						<?php
						foreach($myEvents as $myEventPosition =>$myEvent)
						{
							$myEvent = explode ("|",$myEvent);
							echo "<li>${myEvent[0]} - {$myEvent[1]}</li>";
						}
						?>
						</ul>
					</td>
				</tr>
				<tr>
					<td>
						<button type="submit">Submit</button>
					</td>
				</tr>
			</table>
		</form>
	
	<?php
} else if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$to = $_POST["to"];
	$subject = $_POST["subject"];
	$from = $_POST["from"];
	$message = "test";
	$headers = "From: $from";	
		
	mail($to, $subject, $message, $headers); 
	header("location: mail.php");
}
else {
	exit("unsupported");
}