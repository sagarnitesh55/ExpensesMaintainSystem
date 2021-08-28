<?php
	include('connection/db.php');
	$del=$_GET['del'];


	$query=mysqli_query($db, "delete from expenses where id= '$del' ");
	if ($query) {
		# code...
		echo "<script>alert('Record has been successfully deleted !') </script>";
		header('location:expenses.php'); 
	}else {
		echo "<script>alert('Some error ! Record is not deleted !') </script>";
	}


?> 