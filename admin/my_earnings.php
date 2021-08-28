<?php 

  include('include/header.php'); 
  include('include/sidebar.php'); 
?>




    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"> 
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          
          <li class="breadcrumb-item"><a href="#">All Earnings</a></li>
          
        </ol>
      </nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        
       <h1 class="h2">My Earnings</h1> 
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            
          </div>
          <a class="btn btn-primary" href="add_earning.php">Add Earning</a>
        </div>
      </div>
      <table id="example" class="display" style="width:100%">
          <thead>
              <tr>
                  <th>ID</th>
                  
                  <th>Earning Source</th>
                  <th>Amount</th>
                  <th>Tenure</th>
                  <th>Date</th>
                  <th>Mode of Payment</th>
                  <th>Received By</th>
                  <th>Images</th>
                  <th>Remarks</th>
                  <!-- <th>Created  date</th> -->
                  <th>Created By</th>
                  <th>Is Approved</th>
                  <!-- <th>Updated Date</th>
                  <th>Updated By</th>
                  <th>Deleted Date</th>
                  <th>Deleted by</th> -->
                  <!-- <th>Is Active</th> -->
                  <th>Update</th>
          
                </tr>
          </thead>
          <tbody>
             
             <?php 
              include('connection/db.php'); 


               $query= mysqli_query($db, "SELECT * FROM earnings WHERE is_approved='Yes' AND id=' ".$_SESSION['email']." ' " );
              // $query = mysql_query("SELECT * FROM earnings JOIN users ON earnings.id = users.id GROUP BY earning_source ");
               while ($row=mysqli_fetch_array($query)) {
                ?>

              <tr>
                  
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row ['earning_source']; ?></td>
                <td><?php echo $row ['amount']; ?></td>
                <td><?php echo $row['tenure']; ?></td>
                <td><?php echo $row ['date']; ?></td>
                <td><?php echo $row ['mode_of_payment']; ?></td>
                <td><?php echo $row ['recieved_by']; ?></td>
                <td><?php echo $row ['images']; ?></td>
                <td><?php echo $row['remarks']; ?></td>
                
                <td><?php echo $row ['created_by']; ?></td>
                <td><?php echo $row ['is_approved']; ?></td>
                
                
  
                 <td>
                    <div class="row">
                      <div class="btn-group">
                        <a href="earning_edit.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary"><span><i class="fas fa-user-edit"></i></span></a>
                        <a href="earning_delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger"><span> <i class="fas fa-trash"></i></span></a>
                        
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
