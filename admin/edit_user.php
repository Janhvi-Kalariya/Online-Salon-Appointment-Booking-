<?php

session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
{
  //$category=$_POST['category'];
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];

  $eid=$_SESSION['edid'];
  $query=mysqli_query($con, "update  users set username='$username',email='$email',password='$password',cpassword='$cpassword' where id='$eid' ");
  if ($query) {
    //$msg="Service has been Updated.";
    echo '<script>alert("User details has been updated")</script>';
  }
  else
  {
    echo '<script>alert("Something Went Wrong. Please try again")</script>';
    //$msg="Something Went Wrong. Please try again";
  }
}
?>
<h4 class="card-title">Update Service Form </h4>
<form role="form" method="post">
  <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
  $eid=$_POST['edit_id'];
  $ret=mysqli_query($con,"select * from  users where id='$eid'");
  $cnt=1;
  while ($row=mysqli_fetch_array($ret))
  {
    $_SESSION['edid']=$row['id'];
    ?> 
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" class="form-control" id="sername" name="username" placeholder="" value="<?php  echo $row['username'];?>" required="true">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label> 
        <input type="text" class="form-control" id="details" name="email" placeholder="" value="<?php  echo $row['email'];?>" required="true">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="text" id="cost" name="password" class="form-control" placeholder="" value="<?php  echo $row['password'];?>" required="true">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Confirm Password</label><br>
        <input type="text" id="cost" name="cpassword" class="form-control" placeholder="" value="<?php  echo $row['cpassword'];?>">
      </div>
      <?php 
    } ?>
    <div class="card-footer">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      <span style="float: right;">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </span>
    </div>
  </div>
  <!-- /.card-body -->
</form>