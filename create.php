<?php
 error_reporting(0);
require 'db/connect.php';
?>

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
		 
/*
		 if (mysql_query($insert, $db)) {
		 	//success!
		 	header("location:welcome.php");
		exit;
		 }

		 else {
		 	echo "<p> subject creation failed.</p>";
		 	echo "<p>" . mysql_error() . "</p>";
		 }  */
		
?>


<?php mysql_close($db); ?>