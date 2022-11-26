<html>
<body>
<h1>EPMLOYEE'S FORM</h1>

<form method="post" enctype="multipart/form-data">
<table>
<tr>
<td>First name</td>
<td> <input type="text" name="fname"></td>
</tr>
<tr>
<td>Last name</td>
<td> <input type="text" name="lname"></td>
</tr>
<tr>
<td>Password</td>
<td> <input type="text" name="password"></td>
</tr>
<tr>
<td>Confirm password</td>
<td> <input type="text" name="cpassword"></td>
</tr>

<tr>
<td>City</td>
<td> <input type="text" name="city"></td>
</tr>
<tr>
<td>Contact No</td>
<td> <input type="text" name="contact"></td>
</tr>
<tr>
<td>Salary</td>
<td> <input type="text" name="salary"></td>
</tr>
<tr>
<td> Image: </td>
<td><input type="file" name="img" />
</td>
</tr>
<tr>
<td><input type="submit" name="Submit"><br></td>
</tr>
</table>
</form>
</body>
</html>


<?php
	include("dbconnection.php");
	
	if(isset($_REQUEST['Submit'])){
		
			 	 $firstname=$_POST['fname'];
				 $lastname=$_POST['lname'];
				 $password=$_POST['password'];
				 $cpassword=$_POST['cpassword'];
				 $city=$_POST['city'];
				 $contact=$_POST['contact'];
				 $salary=$_POST['salary'];
			
				$img=$_FILES['img']['name'];
				$target_dir="images/";
				$imgs=$target_dir.basename($img);
				move_uploaded_file($_FILES['img']['tmp_name'],$imgs);
			 
				if($password != $cpassword){
					
					echo "password and confirm password does not match";
				}else{
			 $iquery="insert into list1(ID,first_name,last_name,City,contact_no,salary,img) values(NULL,'".$firstname."','".$lastname."','".$city."','".$contact."','".$salary."','".$img."')"; 
					
						
					$p1=mysqli_query($db,$iquery);
					if($p1=1){
						header("location:elist.php?msg1=inserted");
					
					}
					if($p1=0){
						echo"not inserted";
					
					}
				}

	}
 ?>
 
 