<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home - Agenda Kleber Fernando</title>
	<!-- Favicon -->
	<link href="../../assets/img/brand/favicon.png" rel="icon" type="image/png">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- Icons -->
	<link href="../../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
	<link href="../../assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link href="../../assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>
<body>
	<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
		<div class="container-fluid">
			<!-- Toggler -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- Brand -->
			<a class="navbar-brand pt-0" href="/">
				<img src="../../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
			</a>
			<!-- User -->
			<ul class="nav align-items-center d-md-none">
				<li class="nav-item dropdown">
					<a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="ni ni-bell-55"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<div class="media align-items-center">
				  <span class="avatar avatar-sm rounded-circle">
					<img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.jpg
	">
				  </span>
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
						<div class=" dropdown-header noti-title">
							<h6 class="text-overflow m-0">Welcome!</h6>
						</div>
						<a href="./Theme/profile.html" class="dropdown-item">
							<i class="ni ni-single-02"></i>
							<span>My profile</span>
						</a>
						<a href="./Theme/profile.html" class="dropdown-item">
							<i class="ni ni-settings-gear-65"></i>
							<span>Settings</span>
						</a>
						<a href="./Theme/profile.html" class="dropdown-item">
							<i class="ni ni-calendar-grid-58"></i>
							<span>Activity</span>
						</a>
						<a href="./Theme/profile.html" class="dropdown-item">
							<i class="ni ni-support-16"></i>
							<span>Support</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#!" class="dropdown-item">
							<i class="ni ni-user-run"></i>
							<span>Logout</span>
						</a>
					</div>
				</li>
			</ul>
			<!-- Collapse -->
			<div class="collapse navbar-collapse" id="sidenav-collapse-main">
				<!-- Collapse header -->
				<div class="navbar-collapse-header d-md-none">
					<div class="row">
						<div class="col-6 collapse-brand">
							<a href="/">
								<img src="../../assets/img/brand/blue.png">
							</a>
						</div>
						<div class="col-6 collapse-close">
							<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
								<span></span>
								<span></span>
							</button>
						</div>
					</div>
				</div>
				<!-- Form -->
				<form class="mt-4 mb-3 d-md-none">
					<div class="input-group input-group-rounded input-group-merge">
						<input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<span class="fa fa-search"></span>
							</div>
						</div>
					</div>
				</form>
				<!-- Navigation -->
				<ul class="navbar-nav">
					<li class="nav-item active">
					<a class=" nav-link active " href="#"> <i class="ni ni-bullet-list-67 text-primary"></i> Todos
					</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="/contatos">
							<i class="ni ni-single-02 text-yellow"></i> Contatos
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="/enderecos">
							<i class="ni ni-pin-3 text-red"></i> Endereços
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="main-content">
		<!-- Navbar -->
		<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
			<div class="container-fluid">
				<!-- Brand -->
				<a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="/">Agenda KFH</a>
				<!-- Form -->
				<form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
					<div class="form-group mb-0">
						<div class="input-group input-group-alternative">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-search"></i></span>
							</div>
							<input class="form-control" placeholder="Buscar contato ou endereço..." type="text">
						</div>
					</div>
				</form>
				<!-- User -->
				<ul class="navbar-nav align-items-center d-none d-md-flex">
					<li class="nav-item dropdown">
						<a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<div class="media align-items-center">
								<span class="avatar avatar-sm rounded-circle">
								  <img alt="Image placeholder" src="../../assets/img/theme/k_thumbs.png">
								</span>
								<div class="media-body ml-2 d-none d-lg-block">
									<span class="mb-0 text-sm  font-weight-bold">Kleber Fernando</span>
								</div>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
							<div class=" dropdown-header noti-title">
								<h6 class="text-overflow m-0">Meu contato</h6>
							</div>
							<a href="/usuario" class="dropdown-item">
								<i class="ni ni-single-02"></i>
								<span>Visualizar</span>
							</a>
							<a href="/usuario/editar" class="dropdown-item">
								<i class="ni ni-settings-gear-65"></i>
								<span>Editar</span>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		<!-- End Navbar -->
		<!-- Header -->
		<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
		</div>
		<div class="container-fluid mt--7">
			<!-- Table -->
			<div class="row">
				<div class="col">
					<div class="card shadow">
						<div class="card-header border-0">
							<h3 class="mb-0">Contatos</h3>
						</div>
						<div class="table-responsive">
							<table class="table align-items-center table-flush">
								<thead class="thead-light">
								<tr>
									<th scope="col">Nome</th>
									<th scope="col">Telefone</th>
									<th scope="col">Email</th>
									<th scope="col">Relacionados</th>
									<th scope="col">Notas</th>
									<th scope="col"></th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<th scope="row">
										<div class="media align-items-center">
											<a href="#" class="avatar rounded-circle mr-3">
												<img alt="Image placeholder" src="../../assets/img/theme/k_thumbs.png">
											</a>
											<div class="media-body">
												<span class="mb-0 text-sm">Kleber Fernando</span>
											</div>
										</div>
									</th>
									<td>
										(14) 99114-6621
									</td>
									<td>
										<span> canedokleberfilho@gmail.com </span>
									</td>
									<td>
										<div class="avatar-group">
<!--											<a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">-->
<!--												<img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle">-->
<!--											</a>-->
<!--											<a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">-->
<!--												<img alt="Image placeholder" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle">-->
<!--											</a>-->
										</div>
									</td>
									<td>
										<span> Gente boa, um cara muito bom! </span>
									</td>
									<td class="text-right">
										<div class="dropdown">
											<a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fas fa-ellipsis-v"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
												<a class="dropdown-item" href="#">Visualizar</a>
												<a class="dropdown-item" href="#">Editar</a>
												<a class="dropdown-item" href="#">Excluir</a>
											</div>
										</div>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
<!--						<div class="card-footer py-4">-->
<!--							<nav aria-label="...">-->
<!--								<ul class="pagination justify-content-end mb-0">-->
<!--									<li class="page-item disabled">-->
<!--										<a class="page-link" href="#" tabindex="-1">-->
<!--											<i class="fas fa-angle-left"></i>-->
<!--											<span class="sr-only">Previous</span>-->
<!--										</a>-->
<!--									</li>-->
<!--									<li class="page-item active">-->
<!--										<a class="page-link" href="#">1</a>-->
<!--									</li>-->
<!--									<li class="page-item">-->
<!--										<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>-->
<!--									</li>-->
<!--									<li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--									<li class="page-item">-->
<!--										<a class="page-link" href="#">-->
<!--											<i class="fas fa-angle-right"></i>-->
<!--											<span class="sr-only">Next</span>-->
<!--										</a>-->
<!--									</li>-->
<!--								</ul>-->
<!--							</nav>-->
<!--						</div>-->
					</div>
				</div>
			</div>
			<!-- Dark table -->
			<div class="row mt-5">
				<div class="col">
					<div class="card bg-default shadow">
						<div class="card-header bg-transparent border-0">
							<h3 class="text-white mb-0">Endereços</h3>
						</div>
						<div class="table-responsive">
							<table class="table align-items-center table-dark table-flush">
								<thead class="thead-dark">
								<tr>
									<th scope="col">Rua</th>
									<th scope="col">Número</th>
									<th scope="col">CEP</th>
									<th scope="col">Residentes</th>
									<th scope="col">Complemento</th>
									<th scope="col"></th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										Paulino Raphael
									</td>
									<td>
										2-54
									</td>
									<td>
									  17017-330
									</td>
									<td>
										<div class="avatar-group">
											<a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Kleber Fernando">
												<img alt="Image placeholder" src="../../assets/img/theme/k_thumbs.png" class="rounded-circle">
											</a>
										</div>
									</td>
									<td>
										Em frente a uma praça bem grande.
									</td>
									<td class="text-right">
										<div class="dropdown">
											<a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fas fa-ellipsis-v"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
												<a class="dropdown-item" href="#">Visualizar</a>
												<a class="dropdown-item" href="#">Editar</a>
												<a class="dropdown-item" href="#">Excluír</a>
											</div>
										</div>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer -->
			<footer class="footer">
				<div class="row align-items-center justify-content-xl-between">
					<div class="col-xl-12">
						<div class="copyright text-center text-xl-right text-muted">
							&copy; 2019 - Desenvolvido por<a href="https://github.com/kleberfh" class="font-weight-bold ml-1" target="_blank">Kleber Fernando</a> <i class="ni ni-favourite-28"></i>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<!--   Core   -->
	<script src="../../assets/js/plugins/jquery/dist/jquery.min.js"></script>
	<script src="../../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!--   Optional JS   -->
	<script src="../../assets/js/plugins/chart.js/dist/Chart.min.js"></script>
	<script src="../../assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
	<!--   Argon JS   -->
	<script src="../../assets/js/argon-dashboard.min.js?v=1.1.0"></script>
</body>
</html>
