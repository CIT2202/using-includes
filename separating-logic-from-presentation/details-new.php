<?php
try{
    $conn = new PDO('mysql:host=localhost;dbname=u0123456', 'u0123456', '01jan96');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

//checks to see if there is an id in the query string
if(!isset($_GET['id']))
{
	include "views/404-view.php";
	die();
}

//the id from the query string e.g. details.php?id=4
$filmId=$_GET['id']; 

//prepared statement uses the id to select a single film
$stmt = $conn->prepare("SELECT * FROM films INNER JOIN certificates on films.certificate_id=certificates.id WHERE films.id = :id");
$stmt->bindValue(':id',$filmId);
$stmt->execute();
$film=$stmt->fetch();

$errors=false;
if(empty($film)){
	$errors=true;
	$errMessage="Can't find any records for that film.";
}

$conn=NULL;

include "views/details-view.php";

?>
