<?php
  error_reporting(0);


require 'db/connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student record Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<div class="container">
	<div class="jumbotron">   

		<?php


$id = $_GET['user_id'];



if ($result = $db->query("SELECT * FROM students")){
		if($count = $result->num_rows){

		echo '<p>' ,$count  ,'</p>'; 
		$rows = $result->fetch_all(MYSQLI_ASSOC);
    

    foreach ($rows  as $row ) {
    	echo $row ["first_name"] , ' ' ,
    		$row ["last_name"], ' ' ,
    		$row ["reg_num"], ' ' ,
    		$row ["class"], ' ' ,
    		$row ["birth_date"]	,'<br>'			;
    }
		echo '<pre>' , print_r($rows), '</pre>' ;

	}
}

?>




	  </div>

</div>



<body>