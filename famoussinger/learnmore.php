<?php
$famous = array(
	array("name"=>"Carrie Marie Underwood","age"=>"32","hometown"=>"Tuscaloosa, OK","Famous Song"=>"Jesus Take The Wheel","genre"=>"Country"),
	array("name"=>"Taylor Alison Swift ","age"=>"25","hometown"=>"Reading, PA","Famous Song"=>"Shake It Off","genre"=>"Pop"),
	array("name"=>"Adam Noah Levine","age"=>"36","hometown"=>"Los Angeles, CA","Famous Song"=>"Sugar","genre"=>"Pop Rock"),
	array("name"=>"Justin Randall Timberlake","age"=>"34","hometown"=>"Memphis, TN","Famous Song"=>"Sexy Back","genre"=>"Pop, R&B"),
	array("name"=>"Adele Laurie Blue Adkins ","age"=>"27" ,"hometown"=>"Tottenham, ENG","Famous Song"=>"Hello","genre"=>"Soul")
);
?>


<h1> Celebrity Fun Facts!</h1>
<?php

$famousAge = "age";
$famousName = "name";

if($_SERVER["REQUEST_METHOD"] == "GET")
{
	//DOCT...
	if(isset($_GET["id"]))
	{
		//produce a detail screen
		echo "<h3>Celebrity Facts:</h3>";
		
		if(isset($famous[$_GET["id"]]))
		{
			echo "<ul>";
			foreach($famous[$_GET["id"]] as $famousName => $contactHometown)
			{
				echo "<li>$famousName : $contactHometown</li>";
			}
			echo "</ul>";
			
			echo "<a href='learnmore.php'>Back to list</a>";			
		}
		else
			{
				echo "<a href='learnmore.php'>Back to list</a>";			
			}
		
		
	}
	else {
		echo "<ul>";
		foreach($famous as $singerStatus=> $singerName)
		{
			echo "<li class='famous'><a href='learnmore.php?id=$singerStatus'>{$singerName["name"]}</a></li>";
		}
		echo "</ul>";	
	}
	
}