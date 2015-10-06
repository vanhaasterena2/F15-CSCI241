<!DOCTYPE html> 
<html>
	<head>
		<title>Times Table - Lab4</title>
		<link href="lab3.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<h1>Times Table</h1>
<?php
if($_SERVER["REQUEST_METHOD"] =="GET")
{
		?>
				<form method="POST" action="lab3.php">
					<table>
						
			
					<tr><td>Start: <input type="text" name="invoiceItem1"></td>
					<tr><td>End: <input type="text" name="invoiceItem2"></td>
					<tr><td><input type="submit" value="submit" name="submit"></td></tr>
				
				</table>
					</form>
<?php
}
?>
					
				
				</body>
				</html>