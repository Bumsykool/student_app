<?php

 error_reporting(0);
require 'db/connect.php';
?>

<?php



$id = $_GET['id'];


  $delete = "DELETE FROM students WHERE id=$id";

if (mysqli_query($db, $delete)) {

    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($db);
}
header("Location: record.php");
?>