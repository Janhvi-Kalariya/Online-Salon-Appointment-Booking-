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
    $sername=$_POST['sername'];
    $cost=$_POST['cost'];
    $query=mysqli_query($con, "insert into  tblservices(ID,ServiceName,Cost) values(NULL,'$sername','$cost')");
    if ($query) {
      echo "<script>alert('Service has been added.');</script>"; 
      echo "<script>window.location.href = 'add_service.php'</script>";   
      $msg="";
    }
    else
    {
      echo "<script>alert('Something Went Wrong. Please try again.');</script>";    
    }
  }
}*/
//if{
  if(isset($_POST['submit']))
  {
    $category=$_POST['category'];
    $sername=$_POST['sername'];
    $description=$_POST['description'];
    $cost=$_POST['cost'];
    //$image=$_POST['image'];
    $img=$_FILES['img']['name'];
    $target_dir="../images/";
    
    $imgs=$target_dir.basename($img);
    move_uploaded_file($_FILES['img']['tmp_name'],$imgs); 
				

    $query=mysqli_query($con, "insert into tblhairservices(Id,Category,ServiceName,Description,Cost,Image) values(NULL,'$category','$sername','$description','$cost','$img')");
    
    if ($query) {
      echo "<script>alert('Service has been added.');</script>"; 
      echo "<script>window.location.href = 'add_hairservice.php'</script>";   
      $msg="";
    }
    else
    {
      echo "<script>alert('Something Went Wrong. Please try again.');</script>";    
    }
  }

  
//}
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
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Add service</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row offset-md-2">
             <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add Hair Care Service</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                   <div class="form-group">
                      <label for="exampleInputEmail1">Category</label><br>
                      <!--<div class="col-md-4">
                       <label for="inputState" class="form-label">State</label>
                         <select id="inputState" class="form-select">
                           <option selected>Choose...</option>
                           <option>...</option>
                         </select>
                     </div>-->
                      <select name="category" class="form-select" aria-label="Default select example">
                        <option selected>Select</option>
                        <option value="Hair Cutting">Hair Cutting</option>
                        <option value="Hair Colouring">Hair Colouring</option>
                        <option value="Hair Styling">Hair Styling</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Service Name</label>
                      <input type="text" class="form-control" id="sername" name="sername" placeholder="Enter service name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label> 
                      <textarea type="text" class="form-control" id="details" name="description" placeholder="Add description" required="true" rows="4" cols="4"></textarea> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Cost</label>
                      <input type="text" class="form-control" id="cost" name="cost" placeholder="Add cost">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Image</label><br>
                      <input type="file" id="img" name="img" placeholder="Image">
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->


    </div>
    <!-- /.content-wrapper -->
    <?php @include("includes/footer.php"); ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>

  <!-- ./wrapper -->
  <?php @include("includes/foot.php"); ?>
</body>
</html>
