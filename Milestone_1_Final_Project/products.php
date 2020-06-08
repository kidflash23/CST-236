<?php
include 'header.php';
require_once 'autoLoader.php';

 $dbservername = "localhost";
 $dbusername = "root";
 $dbpassword = "root";
 $dbname = "User_Database_Milestone_1";


// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

echo '<h1 style="text-align: center;">Products</h1>';

/*
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Products</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


</body>
</html>
/*
 * 
 * 
 */

echo '<div class="active-cyan-4 mb-4" style="max-width: 20rem; text-align: center;">
  <input class="form-control" type="text" placeholder="Search" aria-label="Search"> <br>
  <button type="button" class="btn btn-dark">Search</button>
</div> <br>';
echo '<table class="table">
<tbody>';
for ($s = 0; $s < 1; $s++) {
    echo '<tr>';
for ($m = 0; $m < 8; $m++) {
    echo '<tr>';
    

?>

