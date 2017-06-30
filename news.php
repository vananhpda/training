<!DOCTYPE html>
<html>
<head>
	<title>news</title>
</head>
<?php
	$connect = mysqli_connect('', '', '');
	$query = mysql_query('SQL');
	$data = mysqli_fetch_assoc($query);



?>
<body>
<h1>news</h1>
</body>
</html>
