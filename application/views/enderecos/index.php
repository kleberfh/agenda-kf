<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Endereços - Agenda Kleber Fernando</title>
	<!-- Favicon -->
    <link href="../assets/img/theme/k_thumbs-nobg.png" rel="icon" type="image/png">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- Icons -->
	<link href="../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
	<link href="../assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link href="../assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>
<body>
	<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
		<div class="container-fluid">
            <a class="navbar-brand pt-0" href="/agenda-kf">
                <img src="../assets/img/theme/k_thumbs.png" class="navbar-brand-img" alt="...">
            </a>
			<div class="collapse navbar-collapse" id="sidenav-collapse-main">
				<ul class="navbar-nav">
                    <li class="nav-item">
                        <a class=" nav-link " href="/agenda-kf"> <i class="ni ni-bullet-list-67 text-primary"></i> Todos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/agenda-kf/index.php/contatos">
                            <i class="ni ni-single-02 text-yellow"></i> Contatos
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" href="/agenda-kf/index.php/enderecos">
                            <i class="ni ni-pin-3 text-red"></i> Endereços
                        </a>
                    </li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="main-content">
		<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
			<div class="container-fluid">
				<form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
					<div class="form-group mb-0">
						<div class="input-group input-group-alternative">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-search"></i></span>
							</div>
							<input class="form-control" placeholder="Buscar endereço..." type="text">
						</div>
					</div>
				</form>
			</div>
		</nav>
		<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
		</div>
		<div class="container-fluid mt--7">
			<div class="row">
				<div class="col">
					<div class="card bg-default shadow">
						<div class="card-header bg-transparent border-0">
                            <div class="row align-items-center justify-content-between">
                                <h3 class="text-white mb-0">Endereços</h3>
                                <a href="#" class="btn btn-md col-md-auto btn-primary justify-content-end">
                                    <i class="fas fa-plus"></i>
                                    <span>Novo endereço</span>
                                </a>
                            </div>
						</div>
						<div class="table-responsive">
                            <table class="table align-items-center table-dark table-flush">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Rua</th>
                                    <th scope="col">Número</th>
                                    <th scope="col">CEP</th>
                                    <!--									<th scope="col">Residentes</th>-->
                                    <th scope="col">Complemento</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($enderecos as $endereco) {
                                    echo(
                                        '<tr>'.
                                        '<th scope="row">
                                                    <div class="mb-0 text-sm">'.
                                        $endereco->rua
                                        .'</div>
                                                </th>
                                                <th>
                                                    <span>'.$endereco->numero.'</span>
                                                </th>
                                                <th>
                                                    <span>'.$endereco->cep.'</span>
                                                </th>
                                                <th>
                                                    <span>'.$endereco->complemento.'</span>
                                                </th>
                                                '
                                        .'</tr>'
                                    );
                                }
                                ?>
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
	<script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
	<script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!--   Optional JS   -->
	<script src="../assets/js/plugins/chart.js/dist/Chart.min.js"></script>
	<script src="../assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
	<!--   Argon JS   -->
	<script src="../assets/js/argon-dashboard.min.js?v=1.1.0"></script>
</body>
</html>
