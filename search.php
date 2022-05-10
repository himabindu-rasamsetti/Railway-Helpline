<?php
session_start();
$conn = mysqli_connect('sql304.epizy.com', 'epiz_31635742', 'W1W9DcNFcwAyVV' , 'epiz_31635742_rail');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = $_POST["query"];


if (($_SESSION["auname"])) 
 {


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Projects | Learn more about the projects</title>
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
					<h1><a href="student.php">Alpha</a></h1>
					<nav id="nav">
						<ul>
							<li>
								<a href="#" class="icon fa-angle-down">Batch</a>
								<ul>
									<li><a href="student-reg.php">Mini Projects</a></li>
									<li><a href="student-reg-details.php">Major Projects</a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="icon fa-angle-down">Projects</a>
								<ul>
									<li>
										<a href="#">Mini Projects</a>
										<ul>
											<li><a href="#">Best Projects</a></li>
											<li><a href="#">Top Projects</a></li>
											<li><a href="#">Creative Projects</a></li>

										</ul>
									</li>
									<li>
										<a href="#">Main Projects</a>
										<ul>
											<li><a href="#">Best Projects</a></li>
											<li><a href="#">Top Projects</a></li>
											<li><a href="#">Creative Projects</a></li>

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
						<h2>New Projects</h2>
						<p>Projects recently uploaded from students.</p>
					</header>
					
					<div class="row">
						<div class="12u">

							<!-- Table -->
								<section class="box">

									<h4>Projects List</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Domain</th>
													<th>Title</th>
													<th>Batch</th>
													<th>Institute</th>
												</tr>
											</thead>
											<tbody>
								

<?php 

if (($_SESSION["level"])==0) 
 {


$conn = mysqli_connect('localhost', 'root', 'root' , 'projects');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 $query = $_POST["query"];
$sql = " SELECT `pid`,`pdomain`,`ptitle`,`pbatchno`,`pinst` FROM `project` WHERE `ptitle` like '%$query%'  ";
$result = mysqli_query($conn,$sql);
/*
if (mysqli_query($conn, $sql)) {
   echo "successfull: " ;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


echo " <table width='100%'>
      <thead>
        <tr>
          <th>Domain</th>
          <th>Title</th>
          <th>Batch No</th>
          <th>Institute</th>
        </tr>
      </thead>
      <tbody>";
*/
while( $row = mysqli_fetch_assoc($result) ){
			$pid = $row['pid'];
            echo "<tr><td><a href='project-view.php?id=$pid'>". $row['pdomain'] ."</a></td>";
			echo "<td><a href='project-view.php?id=$pid'>". $row['ptitle'] ."</a></td>";
			echo "<td><a href='project-view.php?id=$pid'>". $row['pbatchno'] ."</a></td>";
			echo "<td><a href='project-view.php?id=$pid'>". $row['pinst'] ."</a></td>";
			echo "</tr>";
		  }




	  echo" </tbody>
    </table>";





 }
else 
	 {




?>





								</section>

						</div>
					</div>
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
						<li>&copy; Sruta. All rights reserved.</li><li>Design: <a href="http://srutasoftwaresolutions.com">SRUTA</a></li>
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
		header('Location: login.html');    
	}
?>