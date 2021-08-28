<?php 
  require('connection/db.php');
   $query =" SELECT * FROM users WHERE email= '{$_SESSION['email']}' AND user_type= 'Admin' ";
   $run_query = mysqli_query($db, $query);

   if (mysqli_num_rows($run_query)>0) {

    ?>
     
<div class="container-fluid">

  <div class="row">

    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
      <div class="position-sticky pt-3">
        <h6 style="color: white; margin: 5px; font-style: italic;">Hello, 
          <?php include('connection/db.php'); 
            $query1 = mysqli_query($db, "select * from users where email='{$_SESSION['email']}' " );
            while ($row=mysqli_fetch_array($query1)) {
              echo $row['first_name']; echo " "; echo $row['last_name']; } ?> </h6> 
            
          
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <span data-feather="users"></span>
              Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="expenses.php">
              <span data-feather="layers"></span>
              Expenses
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="approved_expenses.php">
              <span data-feather="layers"></span>
              Approved Expenses
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="unapproved_expenses.php">
              <span data-feather="layers"></span>
              Unapproved Expenses 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="earning.php">
              <span data-feather="bar-chart-2"></span>
              Earning
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="approved_earnings.php">
              <span data-feather="bar-chart-2"></span>
              Approved Earnings
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="unapproved_earnings.php">
              <span data-feather="bar-chart-2"></span>
              Unapproved Earnings
            </a>
          </li>
          
          
          
        <!-- </ul> -->

<!--         <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6> -->
        <!-- <ul class="nav flex-column mb-2"> -->
          
          
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              abc -xyz
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              xyz
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              abcdefgh
            </a>
          </li>
        </ul>
      </div>
    </nav>
 <?php

   } else{

?> 

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
      <div class="position-sticky pt-3">
        <h6 style="color: white; margin: 5px 12px; font-style: italic;">Hello, 
          <?php include('connection/db.php'); 
            $query1 = mysqli_query($db, "select * from users where email='{$_SESSION['email']}' " );
            while ($row=mysqli_fetch_array($query1)) {
              echo $row['first_name']; echo " "; echo $row['last_name']; } ?> </h6> 
  
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="my_earnings.php">
              <span data-feather="bar-chart-2"></span>
              My Earnings 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="my_expenses.php">
              <span data-feather="layers"></span>
              My Expenses
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              abcdefgh
            </a>
          </li>
        </ul>
      </div>
    </nav>


<?php
   }


?>

