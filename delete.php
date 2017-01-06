<?php

 error_reporting(0);
require 'db/connect.php';
?>

<?php






  if ($result = $db->query("SELECT * FROM students")){
		
		$rows = $result->fetch_all(MYSQLI_ASSOC);
    

    foreach ($rows  as $row ) {
    	//echo $row [id];
    	$id = $_GET['id'];
    }
		//echo '<pre>' , print_r($rows), '</pre>' ;
}
	


  $delete = "DELETE FROM students WHERE id=$id";

if (mysqli_query($db, $delete)) {

    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($db);
}

?>