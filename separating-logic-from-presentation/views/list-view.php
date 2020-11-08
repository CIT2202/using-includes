<?php
include "header.php";
?>

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
include "footer.php";
?>
