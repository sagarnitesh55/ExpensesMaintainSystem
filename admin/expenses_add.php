<?php 
	// session_start();
	include('connection/db.php'); 

	 $name= $_POST['name'];
	 $rupees= $_POST['rupees'];
	 $tenure= $_POST['tenure'];
	 $date= $_POST['date'];
	 $mode_of_payment= $_POST['mode_of_payment'];
	 $paid_by= $_POST['paid_by'];
	 // $images= $_POST['images'];
	 $created_by= $_POST['created_by'];
	 $remarks= $_POST['remarks'];
	 $is_approved= $_POST['is_approved'];
	 $transaction_id= $_POST['transaction_id'];

	 // $created_by= $_POST['Password'];
	 // $updated_by= $_POST['updated_by'];
	 // $deleted_by= $_POST['deleted_by'];
	 // $is_active= $_POST['is_active'];

  // $images = $_FILES['images']['name'];
	$target_dir = "uploads/";
	$images = $target_dir . basename($_FILES["images"]["name"]);
	$tmp_name = $_FILES['images']['tmp_name'];
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($images,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["images"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// Check if file already exists
// if (file_exists($images)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// Check file size
// if ($_FILES["images"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
// } else {
//   if move_uploaded_file($_FILES['images']['tmp_name'],'uploads/'.$images); {
//     echo "The file ". htmlspecialchars( basename( $_FILES["images"]["name"])). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }
  
  // $tmp_name = $_FILES['images']['tmp_name']; 

  // $fileext = strtolower(pathinfo($images,PATHINFO_EXTENSION));

  // if(!($fileext=="jpg" || $fileext=="png" || $fileext=="jpeg" || $fileext=="gif")) {
	 //  echo "Sorry File type not correct";
	  
  // } else {


	$query = mysqli_query($db, "INSERT INTO expenses(name, rupees, tenure, date, mode_of_payment, paid_by, images, created_by, remarks, is_approved, transaction_id) VALUES('$name', '$rupees', '$tenure', '$date', '$mode_of_payment', '$paid_by', '$images', '$created_by', '$remarks', '$is_approved', '$transaction_id') "); 
	var_dump($query);

	if($query) {
		// move_uploaded_file($_FILES['images']['tmp_name'],'uploads/'.$images);
		
		// echo "Insert";
		
		echo "<script>alert('Your data has been successfully added')</script>";
		header('location: expenses.php');
	} else {
		echo "<script>alert('some error ! Try again.')</script>"; 
		header('location: expenses_add.php');		
	}

// }

?>

