<?php
 //error_reporting(0);
require 'db/connect.php';
?>


<?php 


     $first_name = trim($_POST['first_name']);
     $last_name = trim($_POST['last_name']);
     $reg_number = trim($_POST['reg_number']);
     $class =trim( $_POST['class']);
     $birth_date= trim($_POST['birth_date']);  



mysqli_query($db,"INSERT INTO students (first_name,last_name,reg_number,class,birth_date)
            VALUES ('$first_name','$last_name','$reg_number','$class','$birth_date')");
        
  if(mysqli_affected_rows($db) > 0){
  echo "<p>student Added</p>";
} else {
  echo "student NOT Added<br />";
  echo mysqli_error ($db);
  
}

header("Location: welcome.php");
?>



<?php mysql_close($db); ?>