<?php
session_start();
$conn = mysqli_connect('sql304.epizy.com', 'epiz_31635742', 'W1W9DcNFcwAyVV' , 'epiz_31635742_rail');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = $_POST["query"];

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

$conn = mysqli_connect('localhost', 'root', 'root' , 'redundancy');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 $query = $_POST["query"];
$sql = " SELECT * FROM abstract_details WHERE akeywords like '%$query%' or atitle like '%$query%'  ";
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
			$pid = $row['absid'];
            echo "<tr><td><a href='home-view-project.php?id=$pid'>". $row['adomain'] ."</a></td>";
			echo "<td><a href='home-view-project.php?id=$pid'>". $row['atitle'] ."</a></td>";
			echo "<td><a href='home-view-project.php?id=$pid'>". $row['batchid'] ."</a></td>";
			echo "<td><a href='home-view-project.php?id=$pid'>". $row['ainstitute'] ."</a></td>";
			echo "</tr>";
		  }




	  echo" </tbody>
    </table>";






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
