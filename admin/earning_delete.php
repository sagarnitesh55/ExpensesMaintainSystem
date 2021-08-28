<?php
	include('connection/db.php');
	$del=$_GET['del'];

	$query="delete from earnings where id= '$del' ";
	$run_query=mysqli_query($db, $query);
	if ($run_query) {
		# code...
		echo "<script>alert('Record has been successfully deleted !') </script>";
		header('location:earning.php'); 
	}else {
		echo "<script>alert('Some error ! Record is not deleted !') </script>";
	}

// 	if(isset($_GET['id'])) {
//     if($stmt = $conn->query("DELETE FROM contact WHERE id='".$_GET['id']."'")){
//         header("location:record.php");
//     }
// }


?> 