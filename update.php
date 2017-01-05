
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


$update = "UPDATE students
SET first_name=$first_name,last_name=$last_name,reg_number=$reg_number,class=$class,birth_date=$birth_date
WHERE id=5";

if (mysqli_query($db, $update)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($db);
}
