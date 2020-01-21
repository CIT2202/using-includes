<?php
include "header.php";
?>
<p><a href="browseable-list-new.php"><<< Back to list</a></p>
<?php

if($film){
	echo "<h1>{$film['title']}</h1>";
	echo "<p>{$film['title']} was made in {$film['year']}.</p>";

}else{
	echo "<p>Can't find any records for that film.</p>";
}

include "footer.php";
?>
