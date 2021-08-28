<?php 
session_start();
session_unset(); 

	
	include('connection/db.php'); 


    $query= mysqli_query($db, "select * from users where email='{$_SESSION['email']}' " ); 

      if ($query) {
	  	 header('location: index.php');
	  } else {
	  	header('location:dashboard.php'); 
	  }
  ?>