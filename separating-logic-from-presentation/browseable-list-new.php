<?php
try{
       $conn = new PDO('mysql:host=localhost;dbname=u0123456', 'u0123456', '01jan96');
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

//select all the films
$query = "SELECT * FROM films";
$resultset = $conn->query($query);
$films = $resultset->fetchAll();
$conn=NULL;
include "views/list-view.php";
?>

