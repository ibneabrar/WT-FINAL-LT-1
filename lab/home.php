<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home</title>
	<h1>Page 1[Home]</h1>
	<a href="home.php">home</a>
	<a href="conversion.php">conversion</a>
	<a href="history.php">history</a>
</head>
<body>
	<form action="conversion.php">
		<label for = "category">Select category</label>
		<select name = "category" id="category">
		<option value="Select a value">Select a value</option>
		</select>
		<label for="value"> value</label>
		<input type="text" name="value">
		<input type="submit" value="submit">
		<label for="result">result</label>
		<input type="text" name="result">
	</form>


</body>
</html>