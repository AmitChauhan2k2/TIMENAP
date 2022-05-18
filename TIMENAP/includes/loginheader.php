<!DOCTYPE html>
	<head>
	<title>TimeNap</title>
	
	<link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap"
      rel="stylesheet"    />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/mystyle.css"/>
		<link rel="stylesheet" type="text/css" href="css/fonts.css"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>

	</head>

<body>
<div class="container">
		<nav class="lol">
			<div class="container-fluid">
				<div class="navbar-header">
				<a  href="#">
						<div class="lol-ks">TimeNap</div></a>
			</div>
            <ul class="nav navbar-nav">
			<li class="active"><a href="welcome.php">Home</a></li>
			<li><a href="schedule.php">Schedule</a></li>
			<li><a href="appoitments.php">Appointments</a></li>
			<li><a href="">Hi! <?php echo $_SESSION['user_name']; ?></a></li>
			<li><a href="logout.php">Logout</a></li>
			
			
			</ul>
		</div>
	</nav>
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
