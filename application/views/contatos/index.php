<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contatos - Agenda Kleber Fernando</title>
	<!-- Favicon -->
<!--    <link href="../assets/img/theme/k_thumbs-nobg.png" rel="icon" type="image/png">-->
    <link href="<?php echo base_url('assets/img/theme/k_thumbs-nobg.png')?>" rel="icon" type="image/png">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- Icons -->
	<link href="<?php echo base_url('assets/js/plugins/nucleo/css/nucleo.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" />
	<!-- CSS Files -->
	<link href="<?php echo base_url('assets/css/argon-dashboard.css?v=1.1.0') ?>" rel="stylesheet" />
</head>
<body>
	<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
		<div class="container-fluid">
            <a class="navbar-brand pt-0" href="/agenda-kf">
                <img src="<?php echo base_url('assets/img/theme/k_thumbs.png') ?>" class="navbar-brand-img" alt="...">
            </a>
			<div class="collapse navbar-collapse" id="sidenav-collapse-main">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class=" nav-link" href="/agenda-kf"> <i class="ni ni-bullet-list-67 text-primary"></i> Todos
						</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link active" href="/agenda-kf/index.php/contatos">
							<i class="ni ni-single-02 text-yellow"></i> Contatos
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="/agenda-kf/index.php/enderecos">
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
                <?php echo form_open('contatos/buscar', array('class' => 'navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto')) ?>
					<div class="form-group mb-0">
						<div class="input-group input-group-alternative">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-search"></i></span>
							</div>
							<input class="form-control" placeholder="Buscar contato..." type="text" name="query">
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
					<div class="card shadow">
						<div class="card-header border-0">
                            <div class="row align-items-center justify-content-between">
                                <h3 class="mb-0 col-md-auto">Contatos</h3>
                                <a href="contatos/novo" class="btn btn-md col-md-auto btn-info justify-content-end">
                                    <i class="fas fa-plus"></i>
                                    <span>Novo contato</span>
                                </a>
                            </div>
						</div>
						<div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <!--									<th scope="col">Foto</th>-->
                                    <th scope="col">Nome</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Email</th>
                                    <!--									<th scope="col">Relacionados</th>-->
                                    <th scope="col">Notas</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($contatos as $key => $contato) {
                                    echo(
                                        '<tr>'.
                                        '<td scope="row">
                                                    <div class="mb-0 text-sm">'.
                                        $contato->nome
                                        .'</div>
                                                </td>
                                                <td>
                                                    <span>'.$contato->telefone.'</span>
                                                </td>
                                                <td>
                                                    <span>'.$contato->email.'</span>
                                                </td>
                                                <td>
                                                    <span>'.$contato->notas.'</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" role="button" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                      <a class="dropdown-item" href="contatos/alterar/'.$contato->id.'">Editar</a>
                                                      <a class="dropdown-item text-red" href="contatos/excluir/'.$contato->id.'">Excluir</a>
                                                    </div>
                                                  </div>
                                                </td>
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
	<script src="<?php echo base_url('assets/js/plugins/jquery/dist/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
	<!--   Optional JS   -->
	<script src="<?php echo base_url('assets/js/plugins/chart.js/dist/Chart.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/chart.js/dist/Chart.extension.js') ?>"></script>
	<!--   Argon JS   -->
	<script src="<?php echo base_url('assets/js/argon-dashboard.min.js?v=1.1.0') ?>"></script>
</body>
</html>
