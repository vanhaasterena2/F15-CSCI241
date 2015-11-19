<?php





//Check and see if the cookie already exist
if(isset($_COOKIE['views']))
{
	$views = $_COOKIE['views'];
	$decodedViews = base64_decode($views);
	$views = explode(",", $decodedViews);
	
}
else {
	$views = array(0,0);	
}
	
	if(isset($_GET["id"]))
	{
		$views[1] = ++$views[1];
		//produce a detail screen
	}
	
		$views[0] = ++$views[0];
//increment the part of the array for pageviews if its a page view

//increment the part of the array for news if its a news view




//set the cookie so you can pick it up on future request
setrawcookie("views",base64_encode(implode(",",$views)), time() +  60*60*24);

//header("Set-Cookie: pages=" . base64_encode("1,3,5"));
//$arrayPagesVisited = explode(",", base64_decode($_COOKIE['views']));

/*foreach($articles as $position=> $article)
{
	echo "<a href='index.php?id=$position'>$article[0]</a>"; 
	echo "<br>";
	echo $article [1];
	echo "<br>";	
}
*/