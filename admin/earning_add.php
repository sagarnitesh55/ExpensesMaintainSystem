<?php 
	include('connection/db.php'); 

	 $amount= $_POST['amount'];
	 $earning_source= $_POST['earning_source'];
	 $tenure= $_POST['tenure'];
	 $date= $_POST['date'];
	 $mode_of_payment= $_POST['mode_of_payment'];
	 $recieved_by= $_POST['recieved_by'];
	 // $images= $_POST['images']['name'];
	 $created_by= $_POST['created_by'];
	 $remarks= $_POST['remarks'];
	 $transaction_id= $_POST['transaction_id'];
	 $is_approved= $_POST['is_approved'];
	
   	 $target_dir = "uploads/";
	 $images = $target_dir . basename($_FILES["images"]["name"]);
	 $tmp_name = $_FILES['images']['tmp_name'];
	 $uploadOk = 1;
	 $imageFileType = strtolower(pathinfo($images,PATHINFO_EXTENSION));


	 $query = mysqli_query($db, "insert into earnings (amount, earning_source, tenure, date, mode_of_payment, recieved_by, images, created_by, remarks transaction_id, is_approved) values('$amount', '$earning_source', '$tenure', '$date', '$mode_of_payment', '$recieved_by', '$images', '$created_by' '$remarks', '$transaction_id', '$is_approved') "); 
	
	var_dump($query);

	if($query) {
		move_uploaded_file($_FILES['images']['tmp_name'],'uploads/'.$images);
		
		// echo "Insert";
		
		// echo "<div class='alert alert-success'>Your data has been successfully added</div>";
		echo "<script>console.log('Your data has been successfully added')</script>";
		header('location: earning.php');

	} else {
		 // echo "<div class='alert alert-danger'>There is some error, please try again !</div>";
		echo "<script>alert('Some error!, please try again.')</script>";
		header('location: earning.php');
	}

// }

?>