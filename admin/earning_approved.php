<?php
	session_start();  
	include('connection/db.php');

	$approve_earning = $_GET['approve_earning'];

	$query= "UPDATE earnings SET is_approved='Yes' WHERE id='$approve_earning' ";

	$run_query =mysqli_query($db, $query); 

	if ($run_query) {
		echo "<script>console.log('User has been approved.')</script>";
		header('location: unapproved_earnings.php'); 
	}else {
		echo "<script>console.log('Some error! Please check and try again.')</script>";
	}


?>