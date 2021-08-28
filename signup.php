<!-- -->
<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- boootstrap --> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
	<!-- <h2>Please Sign up.</h2> -->
  <!-- <div class="form align-content-between text-justify"> -->
  	<form class="form-signin" action="" method="POST">
        <img class="mb-4" src="img/logo.png" alt="" width="80%" height="80%">
        <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>

        
        <label for="name" class="sr-only">First Name</label>
        <input type="name" id="First_name" name="first_name" class="form-control" placeholder="Enter Your First Name" required>

        <label for="name" class="sr-only">Last Name</label>
        <input type="name" id="Last_name" name="last_name" class="form-control" placeholder="Enter Your Last Name" required>

  <!--       <label for="InputDob" class="sr-only">D.O.B</label>
        <input type="date" id="Dob" name="Dob" class="form-control" placeholder="Enter Your Date of Birth" required> -->

        <label for="Number" class="sr-only">Mobile</label>
        <input type="Number" id="Mobile" name="mobile" class="form-control" placeholder="Enter Your Mobile Number" required>

        <label for="email" class="sr-only">Email address</label>
        <input type="email" id="Email" name="email" class="form-control" placeholder="Enter Your Email address" required autofocus>

        <label for="Password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        
        
        
        <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" id="submit" value="Sign Up">
        <a href="index.php">Already an Account</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
      </form>
    <!-- </div> -->


  </body>
</html>

<?php 

  include('connection/db.php');

  $errors = array(); 
  // $_SESSION['email'] = ""; 

    // DBMS connection code -> hostname, 
    // username, password, database name 
  

  if (isset($_POST['submit'])) {  

      // new signup secure

  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']); 
  $email = mysqli_real_escape_string($db, $_POST['email']); 
  $password = mysqli_real_escape_string($db, $_POST['password']); 
   

  // Ensuring that the user has not left any input field blank 
  // error messages will be displayed for every blank input 
  if (empty($first_name)) { array_push($errors, "First Name is required"); } 
  if (empty($last_name)) { array_push($errors, "Last Name is required"); } 
  if (empty($mobile)) { array_push($errors, "Mobile is required"); } 
  if (empty($email)) { array_push($errors, "Email is required"); } 
  if (empty($password)) { array_push($errors, "Password is required"); } 

  
  // If the form is error free, then register the user 
  if (count($errors) == 0) { 
    
    // Password encryption to increase data security 
    $password = md5($password); 
    
    // Inserting data into table 
    $query = "INSERT INTO users(first_name, last_name, mobile, email, password) 
              VALUES('$first_name', '$last_name', '$mobile', '$email', '$password')"  ;
    
    $run_query = mysqli_query($db, $query); 

    // Storing username of the logged in user, 
    // in the session variable 
    // $_SESSION['email'] = $email; 
    
    // Welcome message 
    // $_SESSION['email'] = "You have logged in"; 

      if($run_query) {
          echo "<script> alert('Your account is created, Now You can login ! ')</script>";
           header('location: index.php'); 
        }  else {
          echo "<script> alert('Some error ! Please Try again')</script>";
        }
    
    // Page on which the user will be 
    // redirected after logging in 
    // header('location: index.php'); 
    }

  } 

?>