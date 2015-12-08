<!DOCTYPE html> 
 <html lang="en">
<html>
	<head>
    	<meta charset="UTF-8">
		<title>Famous Singer</title>
        <link href="css/css.css" rel="stylesheet" type="text/css">
        <form action="answers.php" method="post" id="quiz"></form>
       </head>
       
       <body>
       	<div class="nav">
	<ul>
		<a href="famoussinger.php">Play</a></li>
		<a href="learnmore.php">Learn More!</a>	
		<a href="mail.php">Email Results</a></li>
	</ul>
       
       <div class="right">
        <?php
					// Score is calculated.
					$ans1 = $_POST["ques1answer"];
					$ans2 = $_POST["ques2answer"];	
					$ans3 = $_POST["ques3answer"];
					$ans4 = $_POST["ques4answer"];
					$ans5 = $_POST["ques5answer"];
					$ans6 = $_POST["ques6answer"];
					$ans7 = $_POST["ques7answer"];
					$ans8 = $_POST["ques8answer"];
					$ans9 = $_POST["ques9answer"];
					$ans10 =$_POST["ques10answer"];
					
					// Score begins at 0.
					$totalRight = 0;
					// total of 10 questions
					if ($ans1 == "A") { $totalRight++; }
    				if ($ans2 == "A") { $totalRight++; }
					if ($ans3 == "A") { $totalRight++; }
    				if ($ans4 == "A") { $totalRight++; }
					if ($ans5 == "E") { $totalRight++; }
    				if ($ans6 == "A") { $totalRight++; }
    				if ($ans7 == "C") { $totalRight++; }
    				if ($ans8 == "C") { $totalRight++; }
    				if ($ans9 == "B") { $totalRight++; }
    				if ($ans10 == "A") { $totalRight++; }
					
				// Score is displayed and shows how many questions you answered correctly.
				
					echo "<h1 id='right'> $totalRight out of 10 are right!</h1>";
					
					?>
</ul>
 <a href="emailresults.php">Email your results</a> to yourself!
         </body> 
   </html>