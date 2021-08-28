<?php 
	include('connection/db.php'); 

	 $email= $_POST['email'];
	 $mobile= $_POST['mobile'];
	 $Password= $_POST['Password'];
	 $user_type= $_POST['user_type'];
	 $first_name= $_POST['first_name'];
	 $last_name= $_POST['last_name'];


	 $Password = md5($Password); 


	$query = mysqli_query($db, "insert into users(email, mobile, password, user_type, first_name, last_name) values('$email', '$mobile', '$Password', '$user_type', '$first_name', '$last_name') "); 
	var_dump($query);

	if($query) {
		echo "<div class='alert alert-success'>Your data has been successfully added</div>";
	} else {
		echo "<div class='alert alert-danger'>There is some error, please try again !</div>";
	}
?>