<?php
require_once("header.php");
?>
<!DOCTYPE html> 
	<head>
		<title>The Times - Lab7</title>
		<link rel="stylesheet" type="text/css" href="articles.css">
	</head>
	<body>
  		<div id="wrapper">
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
/*
//header("Set-Cookie: views=" . $_COOKIE);
if(isset($_COOKIE['pageCount']))
{
	$pageCount = ++$_COOKIE['pageCount'];
	setrawcookie("views",$pageCount, time() +  60*60*24);
}
else
{
	$pageCount = 1;
	setrawcookie("views",$pageCount, time() +  60*60*24);
}
echo "Hi there, the last article you read " . $pageCount;

//header("Set-Cookie: pages=" . base64_encode("1,3,5"));
//$arrayPagesVisited = explode(",", base64_decode($_COOKIE['views']));

foreach($articles as $position=> $article)
{
	echo "<a href='index.php?id=$position'>$article[0]</a>"; 
	echo "<br>";
	echo $article [1];
	echo "<br>";	
}*/
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	//DOCT...
	if(isset($_GET["id"]))
	{
		//produce a detail screen
		echo "<h3>News Page:</h3>";
		if(isset($articles[$_GET["id"]]))
		{
		echo $articles[$_GET["id"]][0];
			echo "<br>";
			echo "<br>";
		echo $articles[$_GET["id"]][1];
			echo "<br>";
			echo "<br>";
			echo "<a href='index.php'>Back to list</a>";	
						
		}
		else
			{
				echo "<a href='index.php'>Back to list</a>";			
			}
	}
}	
?>
</div>
</body>
</html>