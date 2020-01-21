<?php
include "connect.php";

//checks to see if there is an id in the query string
if(!isset($_GET['id']))
{
	include "views/404-view.php";
	die();
}

//the id from the query string e.g. details.php?id=4
$filmId=$_GET['id'];

//prepared statement uses the id to select a single film
$stmt = $conn->prepare("SELECT * FROM films WHERE films.id = :id");
$stmt->bindValue(':id',$filmId);
$stmt->execute();
$film=$stmt->fetch();
$conn=NULL;

include "views/details-view.php";

?>
