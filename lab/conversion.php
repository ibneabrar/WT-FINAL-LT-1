<?php 

session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>conversion</title>
		<h1>Page 2[conversion]</h1>
	<a href="home.php">home</a>
	<a href="conversion.php">conversion</a>
	<a href="history.php">history</a>
</head>
<body>
	<form action="conn.php" method="post">
	<label for="category"> category</label>
		<input type="text" name="category">
		<label for="unit">unit</label>
		<input type="text" name="unit">
		<label for="rate">rate</label>
		<input type="text" name="rate">
		<input type="submit" value="submit">

</form>
</body>
</html>