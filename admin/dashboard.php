<?php 

  include('include/header.php'); 
  include('include/sidebar.php'); 
?>




    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"> 
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          
          <li class="breadcrumb-item"><a href="dashboard.php">All Users</a></li>
          
        </ol>
      </nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        
       <h1 class="h2">Customers</h1> 

        <?php include('connection/db.php');
        
              $query = mysqli_query($db, "select * from users where email='{$_SESSION['email']}' and user_type='1' "); 

              if (mysqli_num_rows($query)>0) {

                ?> 
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    
                  </div>
                  <a class="btn btn-primary" href="add_user.php">Add User</a>
                </div>

            <?php  } ?>
        
      </div>
      <table id="example" class="display" style="width:100%">
          <thead>
              <tr>
                  <th>S.No.</th>
                  
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>User Type</th>
                  <th>Update</th>
                  
                  
                  
              </tr>
          </thead>
          <tbody>
             
             <?php 
              include('connection/db.php'); 

               $query= mysqli_query($db, "select * from users" );
               while ($row= mysqli_fetch_array($query)) {
                ?>

              <tr>
                  
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row ['first_name']; ?></td>
                <td><?php echo $row ['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row ['mobile']; ?></td>
                <td><?php echo $row ['user_type']; ?></td>
                <td>
                    <div class="row">
                      <div class="btn-group">
                        <a href="user_edit.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary"><span><i class="fas fa-user-edit"></i></span></a>
                        <a href="user_delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger"><span> <i class="fas fa-trash"></i></span></a>
                        
                      </div> 
                      
                    </div>
                  </td>
                  
                  
              </tr>
                <?php 
                  }
                ?>
          </tbody>
    
      </table>

      <!-- <canvas class="my-4" id="myChart" width="900" height="380"></canvas> -->

      
    <!--   <div class="table-responsive">
        
      </div> -->
    </main>
  </div>
</div>


    <!-- <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script> -->
      <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" 
      crossorigin="anonymous"></script> -->
      <script src="js/dashboard.js"></script>

     <!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
      <script src="../../assets/js/vendor/popper.min.js"></script>
      <script src="../../dist/js/bootstrap.min.js"></script>

      <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript">
      $(document).ready(function() {
      $('#example').DataTable();
      } );
    
      
    </script>
    <script>
      feather.replace()
    </script>
  </body>
</html>
