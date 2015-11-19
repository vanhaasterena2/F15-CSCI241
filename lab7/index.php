<?php
require_once("header.php");
?>
<!DOCTYPE html> 
	<head>
		<title>The Times - Lab7</title>
		<link rel="stylesheet" type="text/css" href="articles.css">
	</head>
	<body>
	<h1>Index Page:</h1>
<?php
$articlesFile = fopen("articles.txt", "r");

if(!is_resource($articlesFile))
{
	echo "Could not open the articles file.";
	exit();
}

while($article= fgets($articlesFile))
{
	$articles[] = explode("|",$article);
}

fclose($articlesFile);
$count=0;
foreach($articles as $position=> $article)
{
	echo "<a href='news.php?id=$position'>$article[0]</a>"; 
	echo "<br>";
	echo "<br>";
	echo substr($article[1],0,150);
	echo "<br>";
	echo "<br>";
	$count++;
	
	if($count==3)
	{
		break;
	}
}
?>



