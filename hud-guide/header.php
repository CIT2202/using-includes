<!DOCTYPE html>
<html>
<head>
	<title>
	<?php
    if(isset($pageTitle)){
        echo $pageTitle;
    }else{
        echo "All about Huddersfield";
    }
	?>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	</title>
</head>
<body>
<header>
<div>All About Huddersfield</div>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="sport.php">Sport</a></li>
        <li><a href="industry.php">Industry</a></li>
        <li><a href="university.php">University</a></li>
    </ul>
</nav>
</header>
