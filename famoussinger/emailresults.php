<!DOCTYPE html> 
<html>
	<head>
		<title>Famous Singer</title>
       <link href="css.css" rel="stylesheet" type="text/css">
 
	</head>
	<body>  
		  	
   	<div class="nav">
	<ul>
		<a href="famoussinger.php">Play</a></li>
		<a href="learnmore.php">Learn More!</a>	
		<a href="mail.php">Email Results</a></li>
	</ul>
</div> 
<?php	
//require_once("mail.php");
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	?>
		<form method="POST" action="mail.php" class="message">
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
					<td>Results:
						
						<input type="results" name= "results">
						</td>
				</tr>
				<tr>
					<td>
						<button type="submit">Submit<a href="goodbye.php"</a></button>
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
	
	$to = "vanhaasterena2@winthrop.edu";
	mail($to, $subject, $message, $headers); 
}
else {
	exit("unsupported");
}