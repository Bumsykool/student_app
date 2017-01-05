<?php

 error_reporting(0);
require 'db/connect.php';
?>

<?php


$id = $_GET['user_id'];
$idcount= count ($id);


if(isset($id))
{
	for($i=0;$i<$idcount;$i++){

		$del = $id[$i];
		$delete = "DELETE FROM students WHERE id={$id}" .$del;

if (mysqli_query($db, $delete)) {

    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($db);
}

	}



}


if ($result = $db->query("SELECT * FROM students")){
		if($count = $result->num_rows){

		echo '<p>' ,$count  ,'</p>'; 
		$rows = $result->fetch_all(MYSQLI_ASSOC);
    

    foreach ($rows  as $row ) {
    	echo $row [id];
    }
		echo '<pre>' , print_r($rows), '</pre>' ;

	}
}

		//<a href='list.php?id=$user_id'>

		

// sql to delete a record
// if ($result = $db->query("SELECT * FROM students")) {
 //	if($results->num_rows) {
 //		echo 'yay';
 //	}
// }

/*  $delete = "DELETE FROM students WHERE id={$id}";

if (mysqli_query($db, $delete)) {

    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($db);
}
*/
?>