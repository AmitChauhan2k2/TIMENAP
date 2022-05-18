<!DOCTYPE html>
	<head>
	<title>TimeNap</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/mystyle.css"/>
	</head>


<?php
session_start();
require("includes/db.php");
$emailError="";
$accountSuccess="";
$error="";
$success="";
if(isset($_POST['login'])){
	 $user_email=$_POST['email'];
	 $user_password=$_POST['password'];

	$select="SELECT * from user_db where user_email='$user_email' and user_password='$user_password'";
	$run=$conn->query($select);
	if($run->num_rows>0){
		while($row=$run->fetch_array()) {
		$_SESSION['user_name']=$user_name=$row['user_name'];
		$_SESSION['user_email']=$user_email=$row['user_email'];
		echo "<script> window.location.href='welcome.php'</script>";
		}
	}
	else{
		$error="Invalid Email or Password!";
	}
}
?>
<div class="inner" style="margin-top:100px;">
<form method="POST">
<h3>Login Form</h3>
<div class="form-group1">
<div class="form-wrapper">
<label for="">Email:</label>
<div class="form-holder">
<input type="email" name="email" class="form-control1" id="exampleInputEmail" placeholder="Enter Email" required>
</div>
</div>
</div>
<div class="form-group1">
<div class="form-wrapper">
<label for="">Password:</label>
<div class="form-holder">
<input type="password" name="password" class="form-control1" placeholder="Enter Password" required>	
</div></div></div>
<div class="form-end">
<div class="checkbox">
<label>
If You have Don't Have Account? <a href="reg.php">       Click Here To Register</a>
</label></div>
<div class="button-holder">
<button type="submit" name="login">Login Now</button>
</div>
</div>
</form>
</div></body></html>

