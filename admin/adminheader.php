<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	
<div class="navbar">
		   <h2>Dashboard</h2> 			
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="incomingreq.php">Incoming Request</a></li>
			<li><a href="outgoingreq.php">Outgoing Request</a></li>
			<li><div class="dropdown">
				<button class="dropbtn">Courier</button>
					<div class="dropdown-content text-center">
						<a href="courierin.php">Incoming Courier</a>
						<a href="courierout.php">Outgoing Courier</a>
					</div>
				</div>
			</li>
			<li><a target="_blank" href="../index.php">View Site</a></li>
			<li><a href="adminlogout.php">Logout</a></li>
		</ul>
	</nav>
</div>
<br>
<br>
</body>
</html>