<?php
session_start();
$conn = mysqli_connect('sql304.epizy.com', 'epiz_31635742', 'W1W9DcNFcwAyVV' , 'epiz_31635742_rail');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$pid = $_GET['id'];

$sql = " SELECT * FROM abstract_details WHERE absid = '$pid'  ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

if($row)
{
$domain = $row["adomain"];
$title = $row["atitle"];
$batchno = $row["batchid"];
$abstract = $row["aabstract"];
$inst = $row["ainstitute"];
}



?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" >
					<h1><a href="index.html">Alpha</a></h1>
					<nav id="nav">
						<ul>
							<li>
								<a href="#" class="icon fa-angle-down">Projects</a>
								<ul>
									<li><a href="#">Best Project</a></li>
									<li><a href="#">Top Projects</a></li>
									<li><a href="#">Creative Projects</a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="icon fa-angle-down">Domains</a>
								<ul>
									<li><a href="#">Php</a></li>
									<li><a href="#">Android</a></li>
									<li><a href="#">Java</a></li>
								</ul>
							</li>
							<li><a href="login-admin.html" class="button">Admin</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
<section id="main" class="container">
					<header>
						<h2>Project Title: <?php echo $title; ?></h2>
						<p> Domain : <?php echo $domain; ?></p>
					</header>
					<div class="box">
						


									<h3> Batch no : <?php echo $batchno; ?></h3>

									<h3> Institute : <?php echo $inst; ?></h3>
									<h3> Abstract :</h3>
									<p><?php echo $abstract; ?></p>
						<p>Cep risus aliquam gravida cep ut lacus amet. Adipiscing faucibus nunc placerat. Tempus adipiscing turpis non blandit accumsan eget lacinia nunc integer interdum amet aliquam ut orci non col ut ut praesent. Semper amet interdum mi. Phasellus enim laoreet ac ac commodo faucibus faucibus. Curae ante vestibulum ante. Blandit. Ante accumsan nisi eu placerat gravida placerat adipiscing in risus fusce vitae ac mi accumsan nunc in accumsan tempor blandit aliquet aliquet lobortis. Ultricies blandit lobortis praesent turpis. Adipiscing accumsan adipiscing adipiscing ac lacinia cep. Orci blandit a iaculis adipiscing ac. Vivamus ornare laoreet odio vis praesent nunc lorem mi. Erat. Tempus sem faucibus ac id. Vis in blandit. Nascetur ultricies blandit ac. Arcu aliquam. Accumsan mi eget adipiscing nulla. Non vestibulum ac interdum condimentum semper commodo massa arcu.</p>
						<div class="row">
							<div class="6u 12u(mobilep)">
								<h3>And now a subheading</h3>
								<p>Adipiscing faucibus nunc placerat. Tempus adipiscing turpis non blandit accumsan eget lacinia nunc integer interdum amet aliquam ut orci non col ut ut praesent. Semper amet interdum mi. Phasellus enim laoreet ac ac commodo faucibus faucibus. Curae lorem ipsum adipiscing ac. Vivamus ornare laoreet odio vis praesent.</p>
							</div>
							<div class="6u 12u(mobilep)">
								<h3>And another subheading</h3>
								<p>Adipiscing faucibus nunc placerat. Tempus adipiscing turpis non blandit accumsan eget lacinia nunc integer interdum amet aliquam ut orci non col ut ut praesent. Semper amet interdum mi. Phasellus enim laoreet ac ac commodo faucibus faucibus. Curae lorem ipsum adipiscing ac. Vivamus ornare laoreet odio vis praesent.</p>
							</div>
						</div>

											






					</div>
				</section>


			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

?>