<?php
session_start();
$conn = mysqli_connect('sql304.epizy.com', 'epiz_31635742', 'W1W9DcNFcwAyVV' , 'epiz_31635742_rail');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (($_SESSION["auname"]))
 {
$admin  = $_SESSION["auname"];

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
				<header id="header"		>
					<h1><a href="admin.php">Alpha</a></h1>
					<nav id="nav">
						<ul>
							<li>
								<a href="#" class="icon fa-angle-down">Batch</a>
								<ul>
									<li><a href="mini-projects.php">Mini Projects</a></li>
									<li><a href="major-projects.php">Major Projects</a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="icon fa-angle-down">Projects</a>
								<ul>
									<li>
										<a href="#">Mini Projects</a>
										<ul>
											<li><a href="best-projects.php">Best Projects</a></li>
											<li><a href="top-projects.php">Top Projects</a></li>
											<li><a href="creative-projects.php">Creative Projects</a></li>

										</ul>
									</li>
									<li>
										<a href="#">Main Projects</a>
										<ul>
											<li><a href="best-projects-major.php">Best Projects</a></li>
											<li><a href="top-projects-major.php">Top Projects</a></li>
											<li><a href="creative-projects-major.php">Creative Projects</a></li>

										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="#" class="icon fa-angle-down">Abstract</a>
								<ul>
									<li><a href="latest-abstracts.php">Latest Abstracts</a></li>
									<li><a href="approved-abstracts.php">Aproved Abstracts</a></li>
									<li><a href="rejected-abstracts.php">Rejected Abstracts</a></li>

								</ul>
							</li>

							<li><a href="logout.php" class="button">Logout</a></li>
						</ul>
					</nav>
				</header>	

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Welcome Admin... </br> <?php echo $admin;   ?>..!</h2>
									

					</header>

							
					

				</section>
<section id="main" class="container">

									<form method="post" action="admin-search.php">
										<div class="row uniform 50%">
											<div class="9u 12u(mobilep)">
												<input type="text" name="query" id="query" value="" placeholder="Keywords" />
											</div>
											<div class="3u 12u(mobilep)">
												<input type="submit" value="Search" class="fit" />
											</div>
										</div>
									</form>
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

<?php
 }
	else 
	{
		header('Location: admin-error.html');    
	}
?>