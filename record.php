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
//to chech d content of db
if ($result = $db->query("SELECT * FROM students")){
    if($count = $result->num_rows){
    //echo '<p>'  ,$count  , '</p>'; 
    $rows = $result->fetch_all(MYSQLI_ASSOC); 
    }
    //echo '<pre>' , print_r($rows), '</pre>' ;
  }
?>
<p><h5>There are <b> <?php echo $count; ?> </b>records</h5></p>

<table class="table">
   <thead>
   <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Reg number</th>
    <th>Class</th>
    <th>Date of Birth</th>
    <th>Action</th>
    <tr>
   </thead>
   <tbody>

       <?php foreach($rows  as $row ){ 
        ?>
      <tr>
        <td><?php echo $row ["first_name"]; ?></td>
      <td><?php echo $row ["last_name"]?></td>
      <td><?php echo $row ["reg_num"] ?></td>
        <td><?php echo $row ["class"] ?></td>
          <td><?php echo $row ["birth_date"] ?></td>
      <td><a href="update.php?id=<?php echo $row['id'] ?>">Edit</a>|<a href="delete.php?id=<?php echo $row['id'] ?>">Del</a></td>
      </tr>
      <?php } ?>
   </tbody>
</table>                        









    </div>

</div>



<body>