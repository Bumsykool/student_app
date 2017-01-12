
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
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<div class="container">

  
    <div class="jumbotron">
    <h1>Student Record App</h1> 
    </div>


  <form action="welcome.php" method="post">
  <div class="form-group col-xs-8">
    <label for="first_name">First Name:</label>
    <input type="text" class="form-control" id="first_name" name="first_name">
  </div>
  <div class="form-group col-xs-8">
    <label for="last_name">Last Name:</label>
    <input type="text" class="form-control" id="last_name" name="last_name">
  </div>
  <div class="form-group col-xs-8">
    <label for="reg_number">Reg no:</label>
    <input type="text" class="form-control" id="reg_number" name="reg_number">
  </div>
  <div class="form-group col-xs-8">
    <label for="class">Class:</label>
    <input type="integer" class="form-control" id="class" name="class">
  </div>
  <div class="form-group col-xs-8">
    <label for="birth_date">Date of Birth:</label>
    <input type="date" class="form-control" id="birth_date" name="birth_date">
  </div>
  <div id='float'>
   <button type="submit" class="btn btn-info">Submit</button>
 </div>
</form>
 
<div id="space"></div>
<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
    20%
  </div>
</div>
</div>
</div>



</body>
</html>