<!DOCTYPE html>
	<head>
	<title>TimeNap</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/mystyle.css"/>

	</head>
<?php
require("includes/db.php");
$emailError="";
$accountSuccess="";
if(isset($_POST['register'])){
	 $user_name=$_POST['fullname'];
	 $user_email=$_POST['email'];
     $user_gender=$_POST['gender'];
 	 $user_province=$_POST['province'];
 	 $user_password=$_POST['password'];
	
	$select="SELECT * from user_db where user_email='$user_email'";
	$exe=$conn->query($select);
	if($exe->num_rows>0){
		$emailError= "<p class='text text-center text-danger'>Email already registered</p>";
	}
	else{
		$insert="INSERT into user_db (user_name,user_email,user_gender,user_password) values('$user_name','$user_email','$user_gender','$user_password')";
	$run=$conn->query($insert);
	if($run){
		$accountSuccess="<p class='text text-center text-success'>Account created successfully</p>";
	}
	else{
		echo "error";
	}
}
}
?>

<?php
					if ($emailError!="") {
						echo $emailError;
					}
					if ($accountSuccess!="") {
						echo $accountSuccess;
						echo "<script> alert('Congratulations! You are Registered....') </script>";
						header("location:login.php");
					}
					?>




<div class="wrapper">
<div class="inner">
<form method="POST">
<h3>Registration Form</h3>
<div class="form-group">
<div class="form-wrapper">
<label for="">Full Name:</label>
<div class="form-holder">

<input type="text" name="fullname" class="form-control" id="exampleInputEmail" placeholder="Enter Full Name" required>
</div>
</div>
<div class="form-wrapper">
<label for="">Email:</label>
<div class="form-holder">

<input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Enter Email" required>
</div>
</div>
</div>
<div class="form-group">
<div class="form-wrapper">
<label for="">Password:</label>
<div class="form-holder">

<input type="password" name="password" placeholder="Enter Password"  class="form-control">	
</div>
</div>
<div class="form-wrapper">
<label for="">Repeat Password:</label>
<div class="form-holder">

<input type="password" class="form-control" placeholder="Enter Pasword Again">
</div>
</div>
</div>
<div class="form-group">

<div class="form-wrapper">
<label for="">Gender:</label>
<div class="form-holder select">

<select name="gender" class="form-control">
<option value="male">Male</option>
<option value="female">Female</option>
</select>

</div>
</div>
</div>
<div class="form-end">
<div class="checkbox">
<label>
If You have Already Have Account? <a href="login.php">       Click Here To Login</a>

</label>
</div>
<div class="button-holder">
<button type="submit" name="register">Register Now</button>
</div>
</div>
</form>
</div>
</div>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
