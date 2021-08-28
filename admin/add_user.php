<?php
  // include('connection/db.php'); 
  include('include/header.php');
  include('include/sidebar.php');
?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"> 
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="dashboard.php">Users</a></li>
              <li class="breadcrumb-item"><a href="#">Add User</a></li>
              
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            
           <h1 class="h2">Users</h1> 
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              <!-- <a class="btn btn-primary" href="add_customer.php">Add Customer</a> -->
            </div>
          </div>
          <div style="width: 60%; margin-left: 20%; background-color: #f2f4f4">
            
              <form style="margin: 3%; padding: 3%;" method="POST" name="Customer_form" id="Customer_form">
                <div id="msg"></div>
                
           
                
                <div class="form-group">
                  <label for="First Name">First Name</label>
                  <input type="name" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                  <label for="Last Name">Last Name </label>
                  <input type="name" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name">
                </div>
                <div class="form-group">
                  <label for="Customer Email">Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Enter Customer Email">
                </div>
                 <div class="form-group">
                  <label for="password">Password</label>
                  <input type="Password" name="Password" id="Password" class="form-control" placeholder="Enter Password">
                </div>
                <div class="form-group">
                  <label for="mobile">Mobile</label>
                  <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile Number">
                </div>
                <div class="form-group">
                  <label for="User_Type">User Type</label>
                  <select name="user_type" id="user_type" class="form-control">
                    <option value="Admin">Admin</option>
                    <option value="Employee">Employee</option>
                  </select>
                </div>
                <input type="hidden" name="id">
                <div class="form-group">
                    <input type="submit" class="btn btn-block btn-success" placeholder="saved" name="submit" id="submit">
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
          var email= $("#email").val();
          var mobile= $("#mobile").val();
          var Password= $("#Password").val();
          var first_name= $("#first_name").val();
          var last_name= $("#last_name").val();
          var user_type= $("#user_type").val();
          var data = $("#Customer_form").serialize();

          
          
            // $('#Password').click(function(){
          
            //   $('#output').val($.MD5($('#Password').val()));
          
            // });
          
          

          

            $.ajax ({
              type:"POST",
              url :"user_add.php",
              data:data,
              success:function(data){
                $("#msg").html(data);  
              }
            });

            });
        });
    </script>
    

  </body>
</html>
