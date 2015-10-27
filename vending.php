<!DOCTYPE html> 
	<head>
		<title>Pay Calculation - Lab5</title>
		<link href="css.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<h1>Pay Calculation</h1>
<?php

function disbursement ($ammountDue)
{
	

	//Goal: Return back the cost
	$dollars = (int)($ammountDue);
	$cents = $ammountDue - $dollars;
	$cents *= 100;
	//Figure out how many 100 dollar bills needed
	$hundreds = (int)($dollars/100);
	$totalHundreds = $hundreds*100;
	$dollars = $dollars%100;
	//Figure out how many 50 dollar bills needed
	$fifties = (int)($dollars/50);
	$totalFifties = $fifties*50;
	$dollars = $dollars%50;
	//Figure out how many 20 dollar bills needed
	$twenties = (int)($dollars/20);
	$totalTwenties = $twenties*20;
	$dollars = $dollars%20;
	//Figure out how many 10 dollar bills needed
	$tens = (int)($dollars/10);
	$totalTens = $tens*10;
	$dollars = $dollars%10;
	//Figure out how many 5 dollar bills needed
	$fives = (int)($dollars/5);
	$totalFives = $fives*5;
	$dollars = $dollars%5;
	//Figure out how many 1 dollar bills needed
	//Figure out how many quarters needed
	$quarters = (int) ($cents/25);
	$totalQuarters = $quarters*25;
	$cents = $cents%25;
	//Figure out how many dimes needed
	$dimes = (int) ($cents/10);
	$totalDimes = $dimes*10;
	$cents = $cents%10;
	//Figure out how many dimes needed
	$nickels = (int) ($cents/5);
	$totalNickels = $nickels*5;
	$cents = $cents%5;

	//Figure out how many dimes needed
?>

<table>
		<tr><td>Denomination:</td>
			<th>Qty:</th>
			<th>Dispursed:</th>
		<tr><td>100:</td>
			<td> <?php echo $hundreds ?></td> <td><?php echo $totalHundreds ?></td></tr>
		<tr><td>50:</td>
			<td> <?php echo $fifties ?></td> <td><?php echo $totalFifties ?></td></tr>
		<tr><td>20:</td>
			<td> <?php echo $twenties ?></td> <td><?php echo $totalTwenties ?></td></tr>
		<tr><td>10:</td>
			<td> <?php echo $tens ?></td> <td><?php echo $totalTens ?></td></tr>
		<tr><td>5:</td>
			<td> <?php echo $fives ?></td> <td><?php echo $totalFives ?></td></tr>
		<tr><td>1:</td>
			<td> <?php echo $dollars ?></td> <td><?php echo $dollars ?></td></tr>
		<tr><td>.25:</td>
			<td> <?php echo $quarters ?></td> <td><?php echo $totalQuarters ?></td></tr>
		<tr><td>.10:</td>
			<td> <?php echo $dimes ?></td> <td><?php echo $totalDimes ?></td></tr>
		<tr><td>.05:</td>
			<td> <?php echo $nickels ?></td> <td><?php echo $totalNickels ?></td></tr>
		<tr><td>.01:</td>
			<td> <?php echo $cents ?></td> <td><?php echo $cents ?></td></tr>
		<tr><td>Total:</td>
			<td> <?php echo $ammountDue ?></td></tr>
</table>

<?php
}

if($_SERVER["REQUEST_METHOD"] =="GET")
{
		?>
				<form method="POST" action="vending.php">
					<table>
						<tr><td>Total bill: <input type="number" name="bill"></td>
						<tr><td>Tendered: <input type="text" name="tender"></td>
						<tr><td><input type="submit" value="submit" name="submit"></td></tr>
					</table>
				</form>	
<?php

} else if("$_SERVER[REQUEST_METHOD]" =="POST"){
	
		$totalBill = $_POST["bill"];
		$tendered = $_POST["tender"];
		$change = $tendered - $totalBill;
		
		echo disbursement ($change);
		
}

?>
</body>
</html>