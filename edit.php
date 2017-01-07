<?php
  error_reporting(0);


require 'db/connect.php';
?>
<?php

$id = $_GET['id'];


  /*if ($result = $db->query("SELECT * FROM students")){
    
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    

    foreach ($rows  as $row ) {
     //echo $row ['first_name'];
   }
    //echo '<pre>' , print_r($rows), '</pre>' ;
}*/
  
   $first_name = trim($_POST['first_name']);
     $last_name = trim($_POST['last_name']);
     $reg_number = trim($_POST['reg_number']);
     $class =trim( $_POST['class']);
     $birth_date= trim($_POST['birth_date']);



 $update = "UPDATE students
SET first_name='$first_name',last_name='$last_name',reg_number='$reg_number',class='$class',birth_date=$birth_date
WHERE id=$id";

if (mysqli_query($db, $update)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($db);
}
//header("Location: record.php");

?>

