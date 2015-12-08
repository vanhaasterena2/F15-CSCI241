<!DOCTYPE html> 
	<head>
		<title>Famous Singer</title>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
<?php	
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	?>
		<form method="POST" action="emailresults.php" class="message">
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
						<button type="submit">Submit<a href="emailresults.php"</a></button>
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
	header("location: emailresults.php");
}
else {
	exit("unsupported");
}