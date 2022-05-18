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

<div class="lol-aga">
    <table class="lol-table">
    <tr>
    <th>S No.</th>
    <td><b>Date</b></td>
    <th>Start Time</th>
    <th>End Time</th>
    <th>Discprition</th>
    <th>Piority Level</th>
    <th>Action</th>
    </tr>
        <?php
$conn =new mysqli("localhost","root","","timenap");
$usname= $_SESSION['user_name'];
$select="SELECT * from appointment WHERE usname='$usname'";
$run=$conn->query($select);
if ($run->num_rows>0) {
    $total=0;
   while ($row=$run->fetch_array()) {
       $total=$total+1;
       $id=$row['id'];
       ?>
               <tr>
       <td><?php echo $total;?></td>
       <td><?php echo $row['adate'];?></td>
       <td><?php echo $row['startt'];?></td>
       <td><?php echo $row['endt'];?></td>
       <td><?php echo $row['descp'];?></td>
       <td><?php echo $row['priority'];?></td>
       <div class="lol-ks">
       <td><a href="update.php?id=<?php echo $id;?>" ><img src="css/11.png"></a></td>
       <td><a href="delete.php?id=<?php echo $id;?>"><img src="css/12.png"></a></td></div>
       </tr>
       <?php
   }
}
else { 
    ?>
    <tr>
    <td colspan="4">Record not found</td>
    </tr>
<?php
}
?>
    </table>
    </div>
    <div class="col-sm-6">
    </div>
        </div>

  
</body>
</html>
