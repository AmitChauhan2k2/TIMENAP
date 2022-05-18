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
<?php

    $conn =new mysqli("localhost","root","","timenap");
 $id=$_GET['id'];
 $select="SELECT * FROM appointment WHERE id='$id'";
 $run= $conn->query($select);
 if($run->num_rows>0){
     while ($row= $run->fetch_array()) {
         $adate=$row['adate'];
         $startt=$row['startt'];
         $endt=$row['endt'];
         $descp=$row['descp'];
         $priority=$row['priority'];
   }

   ?>
<div class="inner" style="margin-top:60px;">
<form method="POST">
<h3>DELETE APPOINTMENT:</h3>
<div class="form-group1">
<div class="form-wrapper">
<label for="">DATE:</label>
<div class="form-holder">
<input type="date" name="adate" value="<?php echo $adate;?>" readonly  class="form-control">
</div></div>
<div class="form-group1">
<div class="form-wrapper">
<label for="">START TIME:</label>
<div class="form-holder">
<input type="time" name="startt" value="<?php echo $startt;?>" readonly  class="form-control">
</div></div></div>
<div class="form-group1">
<div class="form-wrapper">
<label for="">END TIME:</label>
<div class="form-holder">
<input type="time" name="endt" value="<?php echo $endt;?>" readonly  class="form-control">
</div></div></div>
<div class="form-group1">
<div class="form-wrapper">
<label for="">DESCRIPTION:</label>
<div class="form-holder">
<input type="text" name="descp"  value="<?php echo $descp;?>" readonly class="form-control" placeholder="Enter Description">
</div></div></div>

<div class="form-wrapper">
<label for="">Piority:</label>
<div class="form-holder select">

<select name="priority"  value="<?php echo $priority;?>" readonly  class="form-control">
<option value="Low">Low</option>
<option value="Medium">Medium</option>
<option value="High">High</option>
</select>

</div>
</div>
<div class="form-end">
<div class="button-holder">
<button type="submit" name="delete">DELETE</button>
</div></div></form></div>
<?php
 $conn =new mysqli("localhost","root","","timenap");
 $id=$_GET['id'];
if(isset($_POST['delete'])){
    $usname= $_SESSION['user_name'];
    $id=$_GET['id'];
    $delete="DELETE from appointment where usname='$usname' && id='$id'";
    $del=$conn->query($delete);
    if ($del) {
        echo "<script> alert('Successfully Deleted') </script>";
        echo "<script> window.location.href='appoitments.php' </script>";
    }
else {
    echo "<script>alert('Something Went wrong! Error')</script>";
}
}}
?>