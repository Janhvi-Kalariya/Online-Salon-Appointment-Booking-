<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
//if (strlen($_SESSION['sid']==0)) {
  //header('location:logout.php');
//} 
/*else{
  if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobilenum=$_POST['mobilenum'];
    $gender=$_POST['gender'];
    $details=$_POST['details'];
    $query=mysqli_query($con, "insert into  tblcustomers(Name,Email,MobileNumber,Gender,Details) value('$name','$email','$mobilenum','$gender','$details')");
    if ($query) {
      echo "<script>alert('Customer has been added.');</script>"; 
      echo "<script>window.location.href = 'add_customer.php'</script>"; 
    } else {
      echo "<script>alert('Something Went Wrong. Please try again.');</script>";    
    } 
  }*/
  //else{
    if(isset($_POST['submit']))
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $mobilenum=$_POST['mobilenum'];
      $gender=$_POST['gender'];
      $details=$_POST['details'];
      $query=mysqli_query($con, "insert into  tblcustomers(Name,Email,MobileNumber,Gender,Details) value('$name','$email','$mobilenum','$gender','$details')");
      if ($query) {
        echo "<script>alert('Customer has been added.');</script>"; 
        echo "<script>window.location.href = 'add_customer.php'</script>"; 
      } else {
        echo "<script>alert('Something Went Wrong. Please try again.');</script>";    
      } 
    }
  ?>
  <!DOCTYPE html>
  <html>
  <?php @include("includes/head.php"); ?>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <?php @include("includes/header.php"); ?>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <?php @include("includes/sidebar.php"); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active">Add Customer</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row offset-md-1">
             <div class="col-md-8 mr-3">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add Customer</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post">
                  <div class="card-body">
                    <div class="form-group"> 
                      <label for="exampleInputEmail1">Name</label> 
                      <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="" required="true"> 
                    </div> 
                    <div class="form-group"> 
                      <label for="exampleInputPassword1">Email</label> 
                      <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="" required="true"> 
                    </div>
                    <div class="form-group"> 
                      <label for="exampleInputEmail1">Mobile Number</label> 
                      <input type="text" class="form-control" id="mobilenum" name="mobilenum" placeholder="Mobile Number" value="" required="true" >
                    </div>
                    <div class="radio">
                      <p style="padding-top: 20px; font-size: 15px"> <strong>Gender:</strong> 
                        <label>
                          <input type="radio" name="gender" id="gender" value="Female" checked="true">
                          Female
                        </label>
                        <label>
                          <input type="radio" name="gender" id="gender" value="Male">
                          Male
                        </label>
                      </p>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Address/Details</label> 
                      <textarea type="text" class="form-control" id="details" name="details" placeholder="Details" required="true" rows="4" cols="4"></textarea> 
                    </div>
                    <button type="submit" name="submit" class="btn btn-info">Add</button>
                  </form> 
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <?php @include("includes/footer.php"); ?>
    </div>
    <!-- ./wrapper -->
    <?php @include("includes/foot.php"); ?>
  </body>
  </html>
