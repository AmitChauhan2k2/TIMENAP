<?php
session_start();
include("includes/loginheader.php");
if (!$_SESSION['user_email']) {
   header('location:login.php');
}
?>
<body style="background:#ffff !important;">
<img class="banner1" src="css/12.jpg">


<div class="split left">
  <div class="centered">
    
  <h2 class="lol-left">Hi! <?php echo $_SESSION['user_name']; ?>
</h2>
    <p class="leftie">How to Schedule ?</p>
	<p class="leftie">---Firstly Fill basic Details---</p>
    <p class="leftie">---Set Priority---</p>
    <a href="schedule.php" class="leftiea">Click Here</a>
  </div>
</div>

<div class="split right">
  <div class="centered-right">
 
  <h2 class="lol-right">Appointments
</h2>
    <p class="rightie">Click Below to Check Appointments</p>
       <a href="appoitments.php" class="rightiea">Click Here</a>
  </div>
</div>


