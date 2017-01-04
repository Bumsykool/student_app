
<?php
 error_reporting(0);
require 'db/connect.php';
?>




<!DOCTYPE html>
<html lang="en">
	<head>
 	 <title>Student record App</title>
  	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

<div class="container">


<?php 

		

		 if(isset($_POST['first_name'])) {


		 $first_name = trim($_POST['first_name']);
		 $last_name = trim($_POST['last_name']);
		 $reg_number = trim($_POST['reg_number']);
		 $class =trim( $_POST['class']);
		 $birth_date= trim($_POST['birth_date']);  


		 if($insert = $db->query("INSERT INTO students 
		 	(first_name, last_name, reg_number, class, birth_date)
		VALUES ('{$first_name}','{$last_name}',{$reg_number}, {$class}, {$birth_date} )")) {

		 	echo $db->affected_rows;
		 }
		}
?>  


<h5>Your records has being succesfully saved</h5>
Welcome  <?php echo $_POST['first_name']; ?>  


<table class="table-striped">
    <thead>
      <tr>
        <th>Your Record</th>
      </tr> 
    </thead>
    <tbody>
      <tr>
        <td>  First Name: </td>
        <td><?php echo $_POST['first_name'];  ?> </td>
        
      </tr>
      <tr>
        <td>Last Name: </td>
        <td><?php echo $_POST['last_name'];  ?> </td>
      </tr>
      <tr>
        <td> Reg. number: </td>
        <td> <?php echo $_POST['reg_number'];  ?> </td>
       </tr>
        <tr>
         <td> Class: </td>
         <td> <?php echo $_POST['class'];  ?> </td>
       </tr>
        <tr>
         <td> Date of Birth: </td>
         <td> <?php echo $_POST['birth_date'];  ?> </td>
       </tr>
    </tbody>
  </table>
</div>

<h5>Are your records Accurate ? if yes, Then proceed to our  <a href='home.html' id ="home">site</a> </h5><br>
	<h6><bold>OR</bold></h6>
	<h5><a href="index.php">Edit your record</a></h5>
</body>
</html>

