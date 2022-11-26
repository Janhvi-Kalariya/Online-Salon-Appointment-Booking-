<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sid']==0)) {
  header('location:logout.php');
} else{

  if(isset($_POST['submit']))
  {
    $cid=$_GET['viewid'];
    $remark=$_POST['remark'];
    $status=$_POST['status'];
    $query=mysqli_query($con, "update  tblappointment set Remark='$remark',Status='$status' where ID='$cid'");
    if ($query) {
      echo "<script>alert('Updated Successfuly');</script>"; 
      echo "<script>window.location.href = 'view-appointment.php'</script>";
    }
    else
    {
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
                <h1>Appointments</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                  <li class="breadcrumb-item active">New Appointments</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">DataTable with New Appointment</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <h4>View Appointment:</h4>
                    <?php
                    $cid=$_GET['viewid'];
                    $ret=mysqli_query($con,"select * from tblappointment where ID='$cid'");
                    $cnt=1;
                    while ($row=mysqli_fetch_array($ret)) 
                    {
                      ?>
                      <table id="example1" class="table table-bordered table-hover">
                        <tr>
                          <th>Appointment Number</th>
                          <td><?php  echo $row['AptNumber'];?></td>
                        </tr>
                        <tr>
                          <th>Name</th>
                          <td><?php  echo $row['Name'];?></td>
                        </tr>

                        <tr>
                          <th>Email</th>
                          <td><?php  echo $row['Email'];?></td>
                        </tr>
                        <tr>
                          <th>Mobile Number</th>
                          <td><?php  echo $row['PhoneNumber'];?></td>
                        </tr>
                        <tr>
                          <th>Appointment Date</th>
                          <td><?php  echo $row['AptDate'];?></td>
                        </tr>

                        <tr>
                          <th>Appointment Time</th>
                          <td><?php  echo $row['AptTime'];?></td>
                        </tr>

                        <tr>
                          <th>Services</th>
                          <td><?php  echo $row['Services'];?></td>
                        </tr>
                        <tr>
                          <th>Apply Date</th>
                          <td><?php  echo $row['ApplyDate'];?></td>
                        </tr>
                        <tr>
                          <th>Status</th>
                          <td> <?php  
                          if($row['Status']=="1")
                          {
                            echo "Selected";
                          }

                          if($row['Status']=="2")
                          {
                            echo "Rejected";
                          }

                          ;?></td>
                        </tr>
                      </table>
                      <?php if($row['Remark']=="")
                      { 
                        ?>
                        <table id="example1" class="table table-bordered table-hover">

                          <form name="submit" method="post" enctype="multipart/form-data"> 
                            <tr>
                              <th>Remark :</th>
                              <td>
                                <textarea name="remark" placeholder="" rows="3" cols="12" class="form-control wd-450" required="true"></textarea>
                              </td>
                            </tr>

                            <tr>
                              <th>Status :</th>
                              <td>
                               <select name="status" class="form-control wd-450" required="true" >
                                 <option value="1" selected="true">Selected</option>
                                 <option value="2">Rejected</option>
                               </select></td>
                             </tr>

                             <tr align="center">
                              <td colspan="2"><button type="submit" name="submit" class="btn btn-primary pd-x-20">Submit</button></td>
                            </tr>
                          </form>
                        </table>
                        <?php 
                      } else 
                      { 
                        ?>
                        <table id="example1" class="table table-bordered table-hover">
                          <tr>
                            <th>Remark</th>
                            <td><?php echo $row['Remark']; ?></td>
                          </tr>
                          <tr>
                            <th>Remark date</th>
                            <td><?php echo $row['RemarkDate']; ?>  </td>
                          </tr>

                        </table>
                        <?php
                      }
                    }
                    ?>
                  </div>
                  <!-- /.card-body -->
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
    </div>
    <!-- ./wrapper -->
    <?php @include("includes/foot.php"); ?>
  </body>
  </html>
  <?php 
} ?>
