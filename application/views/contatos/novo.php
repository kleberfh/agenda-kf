<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Novo contato - Agenda Kleber Fernando</title>
  <!-- Favicon -->
  <link href="../../assets/img/theme/k_thumbs-nobg.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="../../assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../../assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <a class="navbar-brand pt-0" href="/agenda-kf">
            <img src="../../assets/img/theme/k_thumbs.png" class="navbar-brand-img" alt="...">
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
    </div>
  </nav>
  <div class="main-content">
    <div class="header pb-2 pt-5 pt-lg-8 d-flex align-items-center">
      <span class="mask bg-gradient-default opacity-8"></span>
    </div>
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-12">
                  <h3 class="mb-0">Novo contato</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <?php echo form_open('contatos/incluir') ?>
                <h6 class="heading-small text-muted mb-4">Dados do contato</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control form-control-alternative" placeholder="Fulano da Silva">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="telefone">Telefone</label>
                        <input type="text" id="telefone" name="telefone" class="form-control form-control-alternative" placeholder="(12) 3456-7890">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="email">Email</label>
                            <input type="email" id="email" name="email"  class="form-control form-control-alternative" placeholder="fulano@email.com">
                        </div>
                    </div>
                  </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="notas">Comentário</label>
                                <textarea id="notas" name="notas" rows="4" class="form-control form-control-alternative" placeholder="Fulano é um cara legal..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4" />
                <div class="row">
                    <div class="col">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-auto"></div>
                            <button type="submit" class="col-md-2 btn btn-default justify-content-end">Salvar contato</button>
                        </div>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core   -->
  <script src="../../assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="../../assets/js/argon-dashboard.min.js?v=1.1.0"></script>
</body>

</html>