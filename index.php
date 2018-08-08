<!DOCTYPE html>

<?php
 	session_start();
 	if (!isset ($_SESSION["number"])) {
 	$_SESSION["number"] = 0;
 	}
 	$num = $_SESSION["number"];
?>

<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>My First Heading</h1>
<p>My first paragraph.</p>

</body>
</html>
