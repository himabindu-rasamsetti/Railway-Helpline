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
				<section class="box">

									<h2>Projects List</h2>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Batch Number</th>
													<th>Domain </th>
													<th>Title of the Project</th>
													<th>Institute</th>
												</tr>
											</thead>
											<tbody>
								

					<?php 

if (($_SESSION["auname"])) 
 {


$conn = mysqli_connect('localhost', 'root', 'root' , 'redundancy');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
$sql = " SELECT * FROM abstract_details WHERE aflag = '0'  ";
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
            echo "<tr><td><a href='view-project.php?id=$pid'>". $row['batchid'] ."</a></td>";
			echo "<td><a href='view-project.php?id=$pid'>". $row['adomain'] ."</a></td>";
			echo "<td><a href='view-project.php?id=$pid'>". $row['atitle'] ."</a></td>";
			echo "<td><a href='view-project.php?id=$pid'>". $row['ainstitute'] ."</a></td>";
			echo "</tr>";
		  }




	  echo" </tbody>
    </table>";





 }
?>

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
		header('Location: error.html');    
	}
?>