<?php
  // include('connection/db.php'); 
  include('include/header.php');
  include('include/sidebar.php');
?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"> 
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="expenses.php">Expenses</a></li>
              <li class="breadcrumb-item"><a href="#">Add Expenses</a></li>
              
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            
           <h1 class="h2">Add Expenses</h1> 
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              <!-- <a class="btn btn-primary" href="add_customer.php">Add Customer</a> -->
            </div>
          </div>
          <div style="width: 100%; background-color: #f2f4f4">
            
              <form style="margin: 3%; padding: 3%;" method="POST" enctype="multipart/form-data" name="expenses_form" id="expenses_form">
                <div id="msg"></div>
                <div class="form-row mt-4">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="name">Name</label>
                        <input type="name" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="rupees">Rupees </label>
                        <input type="number" class="form-control" id="rupees" name="rupees" placeholder="Rupees">
                    </div>
                </div>
                 <div class="form-row mt-4">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="tenure">Tenure</label>
                        <input type="name" class="form-control" id="tenure" name="tenure" placeholder="Tenure">
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="date">Date </label>
                        <input type="date" class="form-control" id="date" name="date" placeholder="Date">
                    </div>
                </div>
                 <div class="form-row mt-4">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="mode_of_payment">Mode of Payment</label>
                        <input type="name" class="form-control" id="mode_of_payment" name="mode_of_payment" placeholder="Mode of Payment">
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="paid_by">Paid By</label>
                        <select name="paid_by" id="paid_by" class="form-control">
                        <option value="">Select Name</option>
                        <?php 
                        include('connection/db.php'); 

                        if (isset($_SESSION['email'])) {
                           $query = mysqli_query($db, "select * from users");

                          while($row=mysqli_fetch_array($query)) {
                          ?>
                          
                            
                            <option value="<?php echo $row['first_name']; ?>"><?php echo $row['first_name']; ?></option>

                          <?php
                            }
                         
                          }
                           ?>
                       
                          </select>
                         
                       </div>
                </div>
                 <div class="form-row mt-4">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="images">Images</label>
                        <input type="file" class="form-control" id="images" name="images" placeholder="Select Image">
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="remarks">Remarks </label>
                        <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Remarks">
                  </div>
                </div>
                       <?php 

                       include('connection/db.php');
                        $query1 = mysqli_query($db, "SELECT * FROM users WHERE email= '{$_SESSION['email']}' AND user_type= 'Admin' " );
                          
                          if (mysqli_num_rows($query1)>0) {  ?>
                <div class="form-row mt-4">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="transaction_id">Transaction Id</label>
                        <input type="text" class="form-control" id="transaction_id" name="transaction_id" placeholder="Transaction Id">
                    </div>
                   

                    <div class="form-group col-lg-6 col-sm-12">
                    <label for="is_approved">Is Approved</label>
                      <select name="is_approved" id="is_approved" class="form-control">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>    

                       
                    
                </div>
                 <div class="form-row mt-4">
                      <div class="form-group col-lg-6 col-sm-12">
                     

                        <label for="created_by">Created By</label>   
                        <?php include('connection/db.php');

                          $query2=mysqli_query($db, "select * from users where email='{$_SESSION['email'] }' ");

                          while ($row=mysqli_fetch_array($query2)) { ?>   
                        
                        <input type="name" class="form-control" id="created_by" name="created_by" placeholder="Created By" value="<?php echo $row['first_name'];?>">

                        <?php   
                               }
                           ?>
                    </div>
                    <!-- <div class="form-group col-lg-6 col-sm-12">
                        <label for="updated_by">Updated By </label>
                        <input type="name" class="form-control" id="updated_by" name="updated_by" placeholder="Updated By">
                    </div> -->
                </div>
                 <?php   
                        }else { 
                  ?>
                  <div class="form-row mt-4">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="transaction_id">Transaction Id</label>
                        <input type="text" class="form-control" id="transaction_id" name="transaction_id" placeholder="Transaction Id">
                    </div>
                      <div class="form-group col-lg-6 col-sm-12">
                     

                        <label for="created_by">Created By</label>   
                        <?php 
                        include('connection/db.php');

                          $query3=mysqli_query($db, "select * from users where email='{$_SESSION['email'] }' ");

                          while ($row=mysqli_fetch_array($query3)) { ?>   
                        
                        <input type="name" class="form-control" id="created_by" name="created_by" placeholder="Created By" value="<?php echo $row['first_name'];?>">

                        <?php   
                               }
                           ?>
                    </div>
                
                </div>
                <input type="hidden" name="is_approved" id="is_approved" value="No">
                  <?php
                      }
                   ?>


                <!--  <div class="form-row mt-4">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="deleted_by">Deleted By</label>
                        <input type="name" class="form-control" id="deleted_by" name="deleted_by" placeholder="Deleted By">
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="is_active">Is Active</label>
                          <select name="is_active" id="is_active" class="form-control">
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                          </select>
                    </div>
                </div> -->
            
                <!-- <input type="hidden" name="id"> -->
                <div class="form-row mt-4">
                  <div class="form-group col-lg-12 col-sm-12">
                      <input type="submit" class="btn btn-block btn-success" placeholder="submit" name="submit" id="submit">
                  </div>
                </div>
              </form>
            
          </div>
            


          <!-- <canvas class="my-4" id="myChart" width="900" height="380"></canvas> -->

          
          <div class="table-responsive">
            
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <!-- datatable plugin -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
      $('#example').DataTable();
      } );
    
      
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#submit").click(function(){
          var name= $("#name").val();
          var rupees= $("#rupees").val();
          var tenure= $("#tenure").val();
          var date= $("#date").val();
          var mode_of_payment= $("#mode_of_payment").val();
          var paid_by= $("#paid_by").val();
          var images= $("#images").val();
          var remarks= $("#remarks").val();
          var transaction_id= $("#transaction_id").val();
          var is_approved= $("#is_approved").val();
          var created_by= $("#created_by").val();
          // var updated_by= $("#updated_by").val();
          // var deleted_by= $("#deleted_by").val();
          // var is_active= $("#is_active").val();
          var data = $("#expenses_form").serialize();
          

            $.ajax ({
              type:"POST",
              url :"expenses_add.php",
              data:data,
              success:function(data){
                $("#msg").html(data); 
                alert(data); 
              }
            });
 
            });
        });
    </script>
    

  </body>
</html>
