<?php
include("dbconnection.php");
//$db=mysqli_connect("localhost", "root", "", "employees");
$list_query="select * from users";
$data_query=mysqli_query($con,$list_query);
?>

<html>
<body>

<h1 align="center"> USERS LIST<!--<a href="register.php">Add Record</a>--></h1>   
<table align="center" border="2">	
		<tr>
			<th>Id</th>
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
			<th>Confirm Password</th>
			<!--<th>Salary</th>
			<th>Image</th>-->
			<th colspan="2">Action</th>
		</tr>
		
		<?php  
			//$path="images/"; 
			while($list_data=mysqli_fetch_array($data_query)){
		
		?>
		<tr>
			<td><?php echo $list_data['0'];  ?> </td>
			<td><?php echo $list_data['1'];  ?></td>
			<td><?php echo $list_data['2'];  ?> </td>
			<td><?php echo $list_data['3'];  ?> </td>
			<td><?php echo $list_data['4'];  ?> </td>
	
			<!--<td><img src="<?php echo $path.$list_data['8'];?>" height="100" width="100"/> </td>-->
			<td><a href="edelete.php?delete_id=<?php echo $list_data['id']; ?>">DELETE</a></td>
			<td><a href="eupdate.php?update_id=<?php echo $list_data['id']; ?>">UPDATE</a></td>
		</tr>
		
		<?php	}  ?>
	
	</table>
</body>
</html>
