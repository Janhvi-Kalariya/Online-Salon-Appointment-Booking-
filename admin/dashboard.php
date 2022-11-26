<?php

//include("admin_session.php");
session_start();
error_reporting(0);
include('includes/dbconnection.php');
//if (strlen($_SESSION['sid']==0)) {
  //header('location:logout.php');
//} 
?>
<!DOCTYPE html>
<html>
<?php @include("includes/head.php"); ?>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php @include("includes/header.php"); ?>
        <!-- Main Sidebar Container -->
        <?php @include("includes/sidebar.php"); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <?php $query1=mysqli_query($con,"Select * from tblhairservices");
                                $totalhair=mysqli_num_rows($query1);
                                ?>
                                <div class="inner">
                                    <h3><?php echo $totalhair;?></h3>
                                    <p>Hair Services</p>
                                </div>
                                <a href="manage_hairservice.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <?php $query2=mysqli_query($con,"Select * from tblskinservices");
                                $totalskin=mysqli_num_rows($query2);
                                ?>
                                <div class="inner">
                                    <h3><?php echo $totalskin;?></h3>

                                    <p>Skin Services</p>
                                </div>
                                <a href="manage_skinservice.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <?php $query3=mysqli_query($con,"Select * from tblmakeupservices");
                                $totalmakeup=mysqli_num_rows($query3);
                                ?>
                                <div class="inner">
                                    <h3><?php echo $totalmakeup;?></h3>

                                    <p>Makeup Services</p>
                                </div>
                                <a href="manage_makeupservice.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.row (main row) -->
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <?php
                                 //todays sale
                                $query4=mysqli_query($con,"select * from appointment");
                                $apt=mysqli_num_rows($query4);
            
                                ?>
                                <div class="inner">
                                <h3><?php echo $apt;?></h3>
                                    <p>All Appointments</p>
                                </div>
                                <a href="all_appointments.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <?php
                                 //todays sale
                                $query5=mysqli_query($con,"select * from users");
                                $users=mysqli_num_rows($query5);
            
                                ?>
                                <div class="inner">
                                <h3><?php echo $users;?></h3>
                                    <p>Total users</p>
                                </div>
                                <a href="manage_user.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <?php
                                 //todays sale
                                $query6=mysqli_query($con,"select * from admin");
                                $admin=mysqli_num_rows($query6);
            
                                ?>
                                <div class="inner">
                                <h3><?php echo $admin;?></h3>
                                    <p>Total Admins</p>
                                </div>
                                <a href="manage_admin.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    
                    <!-- ./col -->
                </div>
                <!-- /.row (main row) -->
            </div>
            <!-- /.container-fluid -->
        </section>
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
