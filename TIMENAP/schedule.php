<?php
session_start();
include("includes/loginheader.php");
if (!$_SESSION['user_email']) {
   header('location:login.php');
}
?>
<html>
<head>
<title>TimeNap</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css"/>
	<link rel="stylesheet" type="text/css" href="css/fonts.css"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

</head>
<body>

<div class="inner" style="margin-top:60px;">
<form method="POST">
<h3>ADD NEW APPOINTMENT:</h3>
<div class="form-group1">
<div class="form-wrapper">
<label for="">DATE:</label>
<div class="form-holder">
<input type="date" name="adate" class="form-control">
</div></div>
<div class="form-group1">
<div class="form-wrapper">
<label for="">START TIME:</label>
<div class="form-holder">
<input type="time" name="startt" class="form-control">
</div></div></div>
<div class="form-group1">
<div class="form-wrapper">
<label for="">END TIME:</label>
<div class="form-holder">
<input type="time" name="endt" class="form-control">
</div></div></div>
<div class="form-group1">
<div class="form-wrapper">
<label for="">DESCRIPTION:</label>
<div class="form-holder">
<input type="text" name="descp" class="form-control" placeholder="Enter Description">
</div></div></div>

<div class="form-wrapper">
<label for="">Piority:</label>
<div class="form-holder select">

<select name="priority" class="form-control">
<option value="Low">Low</option>
<option value="Medium">Medium</option>
<option value="High">High</option>
</select>

</div>
</div>
<div class="form-end">
<div class="button-holder">
<button type="submit" name="add_appoint">ADD</button>
</div></div></form></div>

<?php
   $conn =new mysqli("localhost","root","","timenap");
    if(isset($_POST['add_appoint'])){
        $usname= $_SESSION['user_name'];
        $adate=$_POST['adate'];
        $startt=$_POST['startt'];
        $endt=$_POST['endt'];
        $descp=$_POST['descp'];
        $priority=$_POST['priority'];

        $insert="INSERT INTO appointment (usname,adate,startt,endt,descp,priority) values('$usname','$adate','$startt','$endt','$descp','$priority')";
        $run=$conn->query($insert);
        if($run){
            echo "<script> alert('Successfully Added');</script>";
            
        }
        else {
            echo "error";
        }
    }
?>
