<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Welcome to CodeIgniter</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<style>.scrollable{height:400; overflow-y:scroll;}</style>
	</head>
	<body style="background-color:#f1f1f9">
	<div class="page">
		<div class="page-main">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<!-- Navbar content -->
				<a class="navbar-brand" href="/main">InfoCovid</a>
				<button class="navbar-toggler" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="/main">Home <span class="sr-only">(current)</span></a>
					</li>
					</ul>
				</div>
			</nav>
			
			<div class="container">
				<div class="jumbotron">
					<div class="container">
						<br>
						<h1 class="display-3 text-center">INFO COVID-19</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card bg-danger shadow">
							<div class="card-body">
								<div class="d-flex">
									<div class="text-white text-uppercase">
										<p class="text-white mb-0"><?php echo $positif['name']; ?></p>
										<h2 class="mb-0 number-font"><?php echo $positif['value']; ?></h2>
										<p class="text-white mb-0">Orang</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card bg-success shadow">
							<div class="card-body">
								<div class="d-flex">
									<div class="text-white text-uppercase">
										<p class="text-white mb-0"><?php echo $sembuh['name']; ?></p>
										<h2 class="mb-0 number-font"><?php echo $sembuh['value']; ?></h2>
										<p class="text-white mb-0">Orang</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card bg-secondary shadow">
							<div class="card-body">
								<div class="d-flex">
									<div class="text-white text-uppercase">
										<p class="text-white mb-0"><?php echo $meninggal['name']; ?></p>
										<h2 class="mb-0 number-font"><?php echo $meninggal['value']; ?></h2>
										<p class="text-white mb-0">Orang</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card text-white bg-warning mb-10 shadow">
							<div class="card-body">
								<div class="d-flex">
									<div class="text-white text-uppercase">
										<h2 class="mb-0 number-font"><?php echo $data['name']; ?></h2>
										<p class="text-white mb-0">
										<b><?php echo $data['positif'] ?></b> POSITIF, <b><?php echo $data['sembuh'] ?></b> <br>SEMBUH, <b><?php echo $data['meninggal'] ?></b> MENINGGAL</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="row row-card">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
						<div class="card shadow">
							<div class="card-header">Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</div>
							<div class="card-body">
								<div class="table-responsive service scrollable">
									<table class="table table-bordered table-hover">
										<thead class="thead-light">
											<tr>
												<th>No</th>
												<th>Provinsi</th>
												<th>Positif</th>
												<th>Sembuh</th>
												<th>Meninggal</th>
											</tr>
										</thead>
										<tbody>
										<?php $num=0;
										 foreach($prov as $value){?>
										 <?php $num+=1; ?>
											<tr>
												<th scop="col"><?php echo $num ?></th>
												<td><?php echo $value['attributes']['Provinsi'];?></td>
												<td><?php echo $value['attributes']['Kasus_Posi'];?></td>
												<td><?php echo $value['attributes']['Kasus_Semb'];?></td>
												<td><?php echo $value['attributes']['Kasus_Meni'];?></td>
											</tr>
											<?php
										}?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="row row-card">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
						<div class="card shadow">
							<div class="card-header">Data Kasus Coronavirus di Dunia</div>
							<div class="card-body">
								<div class="table-responsive service scrollable">
									<table class="table table-bordered table-hover">
										<thead class="thead-light">
											<tr>
												<th>No</th>
												<th>Negara</th>
												<th>Positif</th>
												<th>Sembuh</th>
												<th>Meninggal</th>
												<th>Aktif</th>
											</tr>
										</thead>
										<tbody>
										<?php $num=0;
										 foreach($global as $globalValue){?>
										 <?php $num+=1; ?>
											<tr>
												<th scop="col"><?php echo $num ?></th>
												<td><?php echo $globalValue['attributes']['Country_Region'];?></td>
												<td><?php echo $globalValue['attributes']['Confirmed'];?></td>
												<td><?php echo $globalValue['attributes']['Deaths'];?></td>
												<td><?php echo $globalValue['attributes']['Recovered'];?></td>
												<td><?php echo $globalValue['attributes']['Active'];?></td>
											</tr>
											<?php
										}?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>
