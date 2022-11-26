<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
// if (strlen($_SESSION['bpmsaid']==0)) {
//   header('location:logout.php');
// } 
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
              <h3>Appointments</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">General Form</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div id="editData" class="modal fade">
            <div class="modal-dialog modal-lg ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">View Appoint</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" id="info_update">
                  <!--?php @include("view_appointment.php");?>-->
                </div>
                <div class="modal-footer ">
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
          </div>
          <!--   end modal -->
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <!-- Input addon -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Search Appointment</h3>
                </div>
                <div class="card-body">
                 <form method="post" name="search" action="">
                  <div class="input-group input-group-md">
                    <input type="text" id="searchdata"  name="searchdata" required="true" class="form-control">
                    <span class="input-group-append">
                      <button type="submit" name="search"  class="btn btn-info btn-flat">Go!</button>
                    </span>
                  </div>
                </form>
                <!-- /input-group -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="card-body col-md-12">
            <?php
            if(isset($_POST['search']))
            { 

              $sdata=$_POST['searchdata'];
              ?>
              <h5 align="center" style="color: blue;" class="mb-3">Result against "<?php echo $sdata;?>" keyword </h4> 
              <table class="table table-bordered"> 
                <thead> 
                  <tr> 
                    <th>#</th> 
                    <th>FirstName</th> 
                    <th>LastName</th>
                    <th>Email</th>
                    <th>Phone Number</th> 
                    <th>Category</th>
                    <th>Service</th>
                    <th>AptDate</th>
                    <th>AptTime</th>
                    <th>Message</th>
                    <th>Apply Date</th>
                    
                  </tr> 
                </thead> 
                <tbody>
                  <?php
                  $ret=mysqli_query($con,"select *from  appointment where  FirstName like '%$sdata%' || LastName like '%$sdata%' || PhoneNumber like '%$sdata%' || Category like '%$sdata%'");
                  $num=mysqli_num_rows($ret);
                  if($num>0){
                    $cnt=1;
                    while ($row=mysqli_fetch_array($ret)) {

                      ?>

                      <tr> 
                        <th scope="row"><?php echo $cnt;?></th> 
                        <td><?php  echo $row['FirstName'];?></td> 
                        <td><?php  echo $row['LastName'];?></td>
                        <td><?php  echo $row['Email'];?></td>
                        <td><?php  echo $row['PhoneNumber'];?></td>
                        <td><?php  echo $row['Category'];?></td>
                        <td><?php  echo $row['Service'];?></td>
                        <td><?php  echo $row['AptDate'];?></td> 
                        <td><?php  echo $row['AptTime'];?></td> 
                        <td><?php  echo $row['Message'];?></td>
                        <td><?php  echo $row['ApplyDate'];?></td>
                        <!--<td><a href="#" class=" edit_data" id="?php echo  $row['Id']; ?>" title="click for edit">View</a></td>-->  
                        </tr>   <?php 
                        $cnt=$cnt+1;
                      } 
                    } else { ?>
                      <tr>
                        <td colspan="8"> No record found against this search</td>

                      </tr>

                    <?php } 
                  }?>
                </tbody> 
              </table> 
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
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
  <script type="text/javascript">
    $(document).ready(function(){
      $(document).on('click','.edit_data',function(){
        var edit_id=$(this).attr('id');
        $.ajax({
          url:"",
          type:"post",
          data:{edit_id:edit_id},
          success:function(data){
            $("#info_update").html(data);
            $("#editData").modal('show');
          }
        });
      });
    });
  </script>
</body>
</html>
