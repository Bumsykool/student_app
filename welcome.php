
<?php
 //error_reporting(0);
require 'db/connect.php';
?>


  <?php 


     $first_name = trim($_POST['first_name']);
     $last_name = trim($_POST['last_name']);
     $reg_number = trim($_POST['reg_number']);
     $class =trim( $_POST['class']);
     $created_at = date('Y-m-d');
     $created_at= trim($_POST['birth_date']);  



mysqli_query($db,"INSERT INTO students (first_name,last_name,reg_number,class,birth_date)
            VALUES ('$first_name','$last_name','$reg_number','$class','$created_at')");
        
  if(mysqli_affected_rows($db) > 0){
  echo "<p>Your records has being succesfully saved</p>";
} else {
  echo "student NOT Added<br />";
  echo mysqli_error ($db);
}

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

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<div class="container" id="welcome">






Welcome  <?php echo $_POST['first_name'];      ?>  


<table class="table-bordered" id="table">
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
         <td> <?php echo $created_at; ?> </td>
       </tr>
    </tbody>
  </table>
</div>

<h5>Proceed to view <a href='record.php' id ="record">student records</a> </h5><br>


	
<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
    60%
  </div>
</body>
</html>



