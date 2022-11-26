<?php

session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
{
  //$category=$_POST['category'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $uname=$_POST['uname'];
  $email=$_POST['email'];
  $mobilenum=$_POST['mobilenum'];
  $gender=$_POST['gender'];
  $permission=$_POST['permission'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];

  $eid=$_SESSION['edid'];
  $query=mysqli_query($con, "update  admin set FirstName='$fname',LastName='$lname',Username='$uname',Email='$email',MobileNumber='$mobilenum',Gender='$gender',Permission='$permission',Password='$password',ConfirmPassword='$cpassword' where Id='$eid' ");
  if ($query) {
    //$msg="Service has been Updated.";
    //echo"hello";
    echo '<script>alert("Admin details has been updated")</script>';
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
  $ret=mysqli_query($con,"select * from  admin where Id='$eid'");
  $cnt=1;
  while ($row=mysqli_fetch_array($ret))
  {
    $_SESSION['edid']=$row['Id'];
    ?> 


  <div class="card-body">
      <div class="form-group"> 
        <label for="exampleInputEmail1">FirstName</label> 
        <input type="text" class="form-control" id="name" name="fname"  value="<?php  echo $row['FirstName'];?>" required="true"> 
      </div> 
      <div class="form-group"> 
        <label for="exampleInputEmail1">LastName</label> 
        <input type="text" class="form-control" id="name" name="lname"  value="<?php  echo $row['LastName'];?>" required="true"> 
      </div> 
      <div class="form-group"> 
        <label for="exampleInputEmail1">Username</label> 
        <input type="text" class="form-control" id="name" name="uname"  value="<?php  echo $row['Username'];?>" required="true"> 
      </div> 
      <div class="form-group"> 
        <label for="exampleInputPassword1">Email</label> 
        <input type="text" id="email" name="email" class="form-control"  value="<?php  echo $row['Email'];?>" required="true"> 
      </div>
      <div class="form-group"> 
        <label for="exampleInputPassword1">Mobile Number</label> 
        <input type="text" id="mobilenum" name="mobilenum" class="form-control"  value="<?php  echo $row['MobileNumber'];?>" required="true"> 
      </div>
      <div class="form-group"> 
        <label for="exampleInputPassword1">Gender</label> 
        <?php 
        if($row['Gender']=="Male")
        {
          ?>
          <input type="radio" id="gender" name="gender" value="Male" checked="true">Male
          <input type="radio" name="gender" value="Female">Female
          <?php
        } ?>
        <?php 
        if($row['Gender']=="Female")
        {
          ?>
          <input type="radio" id="gender" name="gender" value="Male" >Male
          <input type="radio" name="gender" value="Female" checked="true">Female
          <?php 
        }?>
      </div>
      <div class="form-group col-6">
                      <label class="" for="register1-email">Permission:</label>
                       <select name="permission" class="form-control" value="<?php  echo $row['Permission'];?>" required>
                         <option value="Super User">Super User</option>
                         <option value="Admin">Admin</option>
                         <option value="User">User</option>
                       </select>
                    </div>
      <!--<div class="form-group"> 
        <label for="exampleInputEmail1">Permission</label> 
        <textarea type="text" class="form-control" id="details" name="permission" placeholder="Details" required="true" rows="4" cols="4">
            <!]--php  echo $row['Details'];?>  
         </textarea> 
      </div>-->
      <div class="form-group"> 
        <label for="exampleInputEmail1">Password</label> 
        <input type="password" class="form-control" id="name" name="password"  value="<?php  echo $row['Password'];?>" required="true"> 
      </div> 
      <div class="form-group"> 
        <label for="exampleInputEmail1">Confirm Password</label> 
        <input type="password" class="form-control" id="name" name="cpassword"  value="<?php  echo $row['ConfirmPassword'];?>" required="true"> 
      </div> 
      <!--<div class="form-group"> 
        <label for="exampleInputPassword1">Creation Date</label> 
        <input type="text" id="" name="" class="form-control"  value="<\?php  echo $row['CreationDate'];?>" readonly='true'> 
      </div>-->
     
    


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