<?php

$grades = array(
	"Andrew" => array("test1" => 88, "hw1" => 92, "hw2" => 75, "midterm" => 97),
	"Bob" => array("test1" => 79, "hw1" => 84, "hw2" => 91, "midterm" => 85),
	"Alice" => array("test1" => 70, "hw1" => 60, "hw2" => 80, "midterm" => 95)
);


foreach($grades as $studentName => $studentGrades)
		{
				echo "<h1>$studentName Grades</h1>";
				echo "<ul>";
				foreach($studentGrades as $assignmentName => $grade )
				{
					echo "<li>$assignmentName : $grade</li>";
				}
				echo "</ul>";
		}
		