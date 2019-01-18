
<!DOCTYPE HTML>
<html>
<head>
<title>List the films</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
	
	<h1>A Browseable List</h1>
<?php

//check to see if there are any results
if($films){
	//loop over the array of films and display their titles
	foreach ($films as $film) {
	    echo "<p>";
	    echo "<a href='details-new.php?id={$film["id"]}'>";
	    echo $film['title'];
		echo "</a>";
	    echo "</p>";
	}
}else{
	echo "No records found";
}
?>
</body>
</html>