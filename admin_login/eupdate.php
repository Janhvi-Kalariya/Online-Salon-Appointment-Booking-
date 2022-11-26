<?php
include("dbconnection.php");
//$db=mysqli_connect("localhost", "root", "", "employee");
$uid=$_GET['update_id'];
$uquery="select * from list1 where ID=".$uid;
$up_query=mysqli_query($db,$uquery);
$updata=mysqli_fetch_array($up_query);
?>
<html>
<body>
<h1>UPDATE EPMLOYEE'S FORM</h1>
<form method="post" enctype="multipart/form-data">
<table>
<tr>
<td>First Name :</td>
<td> <input type="text" name="fname" value="<?php echo $updata['1'];?>"></td>
</tr>
<tr>
<td>Last name</td>
<td> <input type="text" name="lname" value="<?php echo $updata['last_name']; ?>"></td>
</tr>
<tr>
<td>City</td>
<td> <input type="text" name="city" value="<?php echo $updata['city']; ?>"></td>
</tr>
<tr>
<td>Contact No</td>
<td> <input type="text" name="contact" value="<?php echo $updata['6']; ?>"></td>
</tr>
<tr>
<td>Salary</td>
<td> <input type="text" name="salary" value="<?php echo $updata['7']; ?>"></td>
</tr>
<tr>
<td> Image: </td>
<td><input type="file" name="img1" value="<?php echo $updata['8']; ?>" />
</td>
<td><img src="images/<?php echo $updata['8']; ?>" height="100" width="100" />
<input type="hidden" name="imgd" value="<?php echo $updata['8']; ?>" />
</td>
</tr>
<tr>
<td><input type="submit" name="updates" value="UPDATE"><br></td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_REQUEST['updates'])){
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$city=$_POST['city'];
	$cno=$_POST['contact'];
	$salary=$_POST['salary'];
	
	if($_FILES['img1']['name']!=''){
	
	$imgg=$_FILES['img1']['name'];
	$dir="images/";
	$tot=$dir.basename($imgg);	
	move_uploaded_file($_FILES['img1']['tmp_name'],$tot);	
	}else{
	$imgg=$_POST['imgd'];
	}
	
	$update_query="update list1 set 
			
		first_name='".$fname."',
		last_name='".$lname."',
		city='".$city."',
		contact_no='".$cno."',
		salary='".$salary."',
		img='".$imgg."'
		where ID='".$uid."'
	";
	
$updatedata=mysqli_query($db,$update_query);
	
	if($updatedata=1){
		
		header("location:elist.php");
		
	}	
}
?>

