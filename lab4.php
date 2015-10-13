<!DOCTYPE html> 
<html>
	<head>
		<title>Times Table - Lab4</title>
		<link href="css.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<h1>Times Table</h1>
<?php
if($_SERVER["REQUEST_METHOD"] =="GET")
{
		?>
				<form method="POST" action="lab4.php">
					<table>
						<tr><td>Start: <input type="number" name="start"></td>
						<tr><td>End: <input type="number" name="end"></td>
						<tr><td><input type="submit" value="submit" name="submit"></td></tr>
					</table>
				</form>	
<?php
} else if($_SERVER["REQUEST_METHOD"] == "POST"){
?>

<?php
					
					$start = $_POST["start"];
					$end = $_POST["end"];	
					
					echo "<pre>";
					
					for($col=$start; $col<=$end; $col++)
						{
							echo  "\t" . $col ;
						}
					
					for( $row=$start; $row<=$end; $row++)
					{
						echo "\r\n";
						echo $row . "\t";
						
						for($col=$start; $col<=$end; $col++)
						{ 
							echo ($row * $col) . "\t"; 
						}
						
					}
					echo "</pre>";
}	
?>			
	
	</body>
</html>
