<?php

session_start();

$server = "localhost";
$username = "root";
$password = "";
$dbname = "convert_db";


$conn = mysqli_connect($server , $username , $password , $dbname);
if (isset($_POST['submit'])) {
	if (!empty($_POST['category']) && !empty($_POST['unit']) && !empty($_POST['rate'])) {
		
		$category = $_POST['category'];
		$unit = $_POST['unit'];
		$rate = $_POST['rate'];
  
  $query = "INSERT INTO convert(category,unit,rate) VALUES('$category','$unit','$rate')";
  
  $run = mysqli_query($conn,$query);

  if ($run) {
  	
  	echo "succeed";
  }
  else{
  	echo "not successful";
  }


	}
	else{
		echo "null value";
	}
}


?>