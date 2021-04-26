<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Pengolah XML</title>

	<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

	<link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
	<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">Pengolah XML</a>
			<button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Insert Data</a></li>
					<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">View Data</a></li>
					<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Create XML</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<header class="masthead bg-primary text-white text-center">
		<div class="container d-flex align-items-center flex-column">
			<h1 class="masthead-heading text-uppercase mb-0">Aplikasi Pengolah 
				<?php
					$str = "<XML/>";
					echo htmlspecialchars($str);
				?>
			</h1>
			<p class="masthead-subheading font-weight-light mb-0">Menyimpan XML Ke Database, Menampilkan XML dari Database</p>
		</div>
	</header>

	<section class="page-section portfolio" id="portfolio">
		<div class="container d-flex align-items-center flex-column">               
			<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Insert Data</h2>
			<p class="masthead-subheading font-weight-light mb-0">Menyimpan data dari file XML ke Database</p>
		</div><br>
		<center>
			<a class="btn btn-success btn-xl" id="sendMessageButton" href="insert_xml.php">Insert XML</a>
		</center>
	</section>

	<section class="page-section bg-primary text-white mb-0" id="about">
		<div class="container">     
			<div class="container d-flex align-items-center flex-column">   
				<h2 class="page-section-heading text-center text-uppercase text-white">View Data</h2>
				<p class="masthead-subheading font-weight-light mb-0">Data gunung di provinsi Jawa Barat, hasil insert data dari file XML ke Database</p>
			</div><br>
			<div class="table-responsive-md">
				<table class="table table-striped col-md-8" bgcolor="white" align="center">
					<thead>
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Nama</th>
							<th scope="col">Lokasi</th>
							<th scope="col">Ketinggian</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						include 'koneksi.php';
						$data = mysqli_query($koneksi,"select * from data_xml");
						while($row = mysqli_fetch_array($data)){
							?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['nama']; ?></td>
								<td><?php echo $row['lokasi']; ?></td>
								<td><?php echo $row['ketinggian']; ?></td>
							</tr>
							<?php 
						}
						?>
					</tbody>
				</table>
			</div><br>
			<center>
				<a class="btn btn-danger btn-xl" id="sendMessageButton" href="clear_xml.php">Clear XML</a>
			</center>
		</div>
	</section>

	<section class="page-section" id="contact">
		<div class="container d-flex align-items-center flex-column">               
			<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Create XML</h2>
			<p class="masthead-subheading font-weight-light mb-0">Membuat data dari Database menjadi format XML</p>
		</div><br>
		<center>
			<a class="btn btn-primary btn-xl" id="sendMessageButton" href="create_xml.php">Create XML</a>
		</center>		
	</section>

	<div class="copyright py-4 text-center text-white">
		<div class="container"><small>Copyright © Rizki Setiawan 2021</small></div>
	</div>

	<div class="scroll-to-top d-lg-none position-fixed">
		<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>
