
<!--php code-->
<?php 

include ('dbconnection.php');
//include("header.php");

//error_reporting(0);

session_start();

if (isset($_SESSION['submit'])) {
    //header("location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
	$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($con, $sql);
		if (!mysqli_num_rows($result) > 0) {
			$sql1 = "INSERT INTO users (username, email, password, cpassword)
					VALUES ('$username', '$email', '$password','$cpassword')";
			$result = mysqli_query($con, $sql1)or die("Can't Insert".mysql_error());
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
        header("location: login.php");
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malena Beauty Salon</title>
    <style>
        body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
  align: center;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: flex;
  align-text: center;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
    </style>
</head>

<body>
<form method="POST" enctype="multipart/form-data">
  <div class="container" align="center">
    <h1 align="center">Register</h1>
    <p align="center">Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="username" id="username" required>

    <label for="email"><b>Email</b></label><br>
    <input type="text" pattern="[^ @]*@[^ @]*" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label><br>
    <input type="password" placeholder="Confirm Password" name="cpassword" id="psw-repeat" required>
    <hr>
    <!--<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>-->

    <button type="submit" name="submit" class="registerbtn">Register</button>
  </div>
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form> 
</body>
</html>
