<?php
	session_start();  
	include('connection/db.php');

	$approve_expense = $_GET['approve_expense'];

	$query= "UPDATE expenses SET is_approved='Yes' WHERE id='$approve_expense' ";

	$run_query =mysqli_query($db, $query); 

	if ($run_query) {
		echo "<script>console.log('User has been approved.')</script>";
		header('location: unapproved_expenses.php'); 
	}else {
		echo "<script>console.log('Some error! Please check and try again.')</script>";
	}


?>