<?php

$grades = array(
	"Andrew" => array("test1" => 88, "hw1" => 92, "hw2" => 75, "midterm" => 97),
	"Bob" => array("test1" => 79, "hw1" => 84, "hw2" => 91, "midterm" => 85),
	"Alice" => array("test1" => 70, "hw1" => 60, "hw2" => 80, "midterm" => 95)
);

function averageScore($grades, $item)
{
$avgGrades = $item1 + $item2 + $item3 + $item4;
$item1 = ["test1"];
$item2 = ["hw1"];
$item3 = ["hw2"];
$item4 = ["midterm"];

	foreach($avgGrades as $grades => $item)
	{
		$avgGrades = test1 + hw1 + hw2 + midterm;
	}

	return $avgGrades; 
}

echo "The average for the midterm is " . averageScore($grades, "midterm") . "%";
echo "The average for homework 1 is " . averageScore($grades, "hw1") . "%";

