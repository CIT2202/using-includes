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
	echo "You shouldn't have got to this page.";
	die();
}

//the id from the query string e.g. details.php?id=4
$filmId=$_GET['id']; 

//prepared statement uses the id to select a single film
$stmt = $conn->prepare("SELECT * FROM films INNER JOIN certificates on films.certificate_id=certificates.id WHERE films.id = :id");
$stmt->bindValue(':id',$filmId);
$stmt->execute();
$film=$stmt->fetch();
$conn=NULL;


?>


<!DOCTYPE HTML>
<html>
<head>
<title>Display the details for a film</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php

//simple validation to see if we found a film
if($film){
	echo "<h1>{$film['title']}({$film['name']})</h1>";
	echo "<p>{$film['title']} was made in {$film['year']}.</p>";
}
else
{
	echo "<p>Can't find any film records.</p>";
}

?>
</body>
</html>