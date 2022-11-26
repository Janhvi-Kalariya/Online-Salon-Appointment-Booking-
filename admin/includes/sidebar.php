 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="dashboard.php" class="brand-link">
    <img src="company/logo.png" alt="Beauty salon" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">Beauty Saloon</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <?php
      $eid=$_SESSION['sid'];
      $sql="SELECT * from  users  where id=:eid ";                                    
      $query = $dbh -> prepare($sql);
      $query-> bindParam(':eid', $eid, PDO::PARAM_STR);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);

      $cnt=1;
      if($query->rowCount() > 0)
      {
        foreach($results as $row)
        {    
          ?>
          <div class="image">
            <img class="img-circle"
            src="staff_images/<?php echo htmlentities($row->userimage);?>" width="90px" height="90px" class="user-image"
            alt="User profile picture">
          </div>
          <div class="info">
            <a href="profile.php" class="d-block"><?php echo ($row->name); ?> <?php echo ($row->lastname); ?></a>
          </div>
          <?php 
        }
      } ?>

    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview menu-open">
          <a href="dashboard.php" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <!--Hair-->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Hair Care Services
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="add_hairservice.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Services</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="manage_hairservice.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Services</p>
              </a>
            </li>
          </ul>
        </li>
        <!--skinr-->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Skin Care Services
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="add_skinservice.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Services</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="manage_skinservice.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Services</p>
              </a>
            </li>
          </ul>
        </li>
        <!--makeup-->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Makeup Services
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="add_makeupservice.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Services</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="manage_makeupservice.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Services</p>
              </a>
            </li>
          </ul>
        </li>
        <!--<li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Manage Customers
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
           <li class="nav-item">
            <a href="add_customer.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Add Customer
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="customer_list.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Customer list
              </p>
            </a>
          </li>
        </ul>
      </li>-->
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <p>
            Appointments
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="all_appointments.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>All Appointments</p>
            </a>
          </li>
          <!--<li class="nav-item">
            <a href="new_appointment.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>New Appointments</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="accepted_appointment.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Accepted Appointments</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="rejected_appointment.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Rejected Appointments</p>
            </a>
          </li>-->
        </ul>
      </li>
      <!--<li class="nav-item has-treeview">
        <a href="invoices.php" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Invoice
          </p>
        </a>
      </li>-->
      <li class="nav-item has-treeview">
        <a href="search_appointment.php" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Search Appointments
          </p>
        </a>
      </li>
      <!--<li class="nav-item has-treeview">
        <a href="search_invoice.php" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Search Invoice
          </p>
        </a>
      </li>-->
      <li class="nav-header">USER MANAGEMENT</li>
      <!-- User Menu -->
      <li class="nav-item">
        <a href="adminregister.php" class="nav-link">
         <i class="far fa-user nav-icon"></i>
         <p>
          Register Admin
        </p>
      </a>
    </li><!-- /.user menu -->
    <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="far fa-user nav-icon"></i>
            <p>
              Manage 
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="manage_admin.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Admin</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="manage_user.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage users</p>
              </a>
            </li>
          </ul>
        </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
