<!DOCTYPE html>
<html>
<head>
	<title>Lottery</title>
</head>
<body>
</body>

<h1>Not So Lucky Lotto</h1>
<p>Similar (obviously not the same as) labs, so no luck really involved.</p>

<h2>Chosen Numbers</h2>
<ul>
	<?
		$numbersPerRow = 3;
		$lotoNums = $totalLottoNumbers*$numbersPerRow;
		$totalLottoNumbers = 6;
	?>
</ul>

<h2>Number Selection</h2>
<table>
<tr>
<?php
	$lotoNums = $totalLottoNumbers*$numbersPerRow;
	$totalLottoNumbers = 6;
	$numbersPerRow = 3;

	for($ct = 1; $ct <= $totalLottoNumbers; $ct++)
	{
		echo "<td>";

		echo $ct; 
		
		?>
		<form method ="post" action="lotto.php">
				<input type ="hidden" name="deleteNumber" value="<?php echo $position; ?>">
				<button type="submit" >X </button>"
		</form>
		<?php
		echo "</td>";

		if($ct%$numbersPerRow==0 && $ct != $totalLottoNumbers )
		{
			echo "</tr><tr>";
		}
	}

?>
</tr>
</table>
</html>
