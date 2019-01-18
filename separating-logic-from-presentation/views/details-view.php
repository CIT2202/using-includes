<?php
include "header.php";
?>
<p><a href="browseable-list-new.php"><<< Back to list</a></p>
<?php

if($errors){
	echo "<p>{$errMessage}</p>";
}else{
	echo "<h1>{$film['title']}({$film['name']})</h1>";
	echo "<p>{$film['title']} was made in {$film['year']}.</p>";
}

include "footer.php";
?>