<?php 

  session_start(); 

?>

<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> 
  </head>

  <body class="text-center" style="background-image: url(../header-bg.jpg); background: #a38efc;">
    <form class="form-signin" action="" method="POST">
      <img class="mb-4" src="img/logo.png" alt="" width="80%" height="80%">
      <h1 class="h3 mb-3 font-weight-normal" style="color: white;">Please sign in</h1>
      <label for="Email" class="sr-only">Email address</label>
      <input type="email" id="Email" name="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="Password" name="password" class="form-control" placeholder="Password" required>
      <!-- <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div> -->
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
      <a href="signup.php">Create an Account </a>
      <p class="mt-5 mb-3 text-muted" style="color: white;">&copy; 2017-2018</p>
    </form>

    </body>
  </html>

  <?php

  $email = ""; 
  $password = "";
  $errors = array();

  include('connection/db.php');
   
    // User login 
  if (isset($_POST['login'])) { 
  
  // Data sanitization to prevent SQL injection 
  $email = mysqli_real_escape_string($db, $_POST['email']); 
  $password = mysqli_real_escape_string($db, $_POST['password']); 

  // Error message if the input field is left blank 
  if (empty($email)) { 
    array_push($errors, "Email is required"); 
  } 
  if (empty($password)) { 
    array_push($errors, "Password is required"); 
  } 

  // Checking for the errors 
  if (count($errors) == 0) { 
    
    // Password matching 
    $password = md5($password); 
    
    $query = "SELECT * FROM users WHERE email= 
        '$email' AND password='$password'"; 

    $results = mysqli_query($db, $query); 

    // $results = 1 means that one user with the 
    // entered username exists 
    if (mysqli_num_rows($results) == 1) { 
      
      // Storing username in session variable 
      $_SESSION['email'] = $email; 
      
      // Welcome message 
      // $_SESSION['email'] = "You have logged in!"; 
      
      // Page on which the user is sent 
      // to after logging in 
      header('location: admin/dashboard.php'); 
    } 
    else { 
      
      // If the username and password doesn't match 
      array_push($errors, "Username or password incorrect"); 
    } 
  } 
}

  ?>