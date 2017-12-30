<?php
$reg_succes = isset($_GET['reg_success'])? $_GET['reg_success'] : 0;



?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>WorkFast</title>
    <meta name="description" content="Material Style Theme">
    <link rel="shortcut icon" href="view/assets/img/favicon.png?v=3">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="view/assets/css/preload.min.css">
    <link rel="stylesheet" href="view/assets/css/plugins.min.css">
    <link rel="stylesheet" href="view/assets/css/style.light-blue-500.min.css">
    <!-- facebook login -->
    <script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
    
    <!--[if lt IE 9]>
        <script src="view/assets/js/html5shiv.min.js"></script>
        <script src="view/assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
      
    <div class="ms-site-container" id="modal">
      <!-- Modal -->
      
      <div class="modal modal-primary" id="ms-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header d-block shadow-2dp no-pb">
              <button type="button" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
              </button>
              <div class="modal-title text-center">
                <span class="ms-logo ms-logo-white ms-logo-sm mr-1">W</span>
                <h3 class="no-m ms-site-title">Work
                  <span>Fast</span>
                </h3>
              </div>
              <div class="modal-header-tabs">
                <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-primary" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a href="#ms-login-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="nav-link active withoutripple">
                      <i class="zmdi zmdi-account"></i> Login</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a href="#ms-recovery-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                      <i class="zmdi zmdi-key"></i>Esqueci</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a href="#ms-recovery-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                      <i class="zmdi zmdi-key"></i>Facebook</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="modal-body">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active show" id="ms-login-tab">
                  <form  method="post" ajax="true" id="formLogin">
                    <fieldset>
                      <div class="form-group label-floating">
                        <label id="cadastro_efetuado"></label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-account"></i>
                          </span>
                          <label class="control-label" for="ms-form-user">Usuario</label>
                          <input type="text" name="usuario_login" id="ms-form-user" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass">Senha</label>
                          <input type="password" name="senha_login" id="ms-form-pass" class="form-control"> </div>
                          <label id="validalogin"></label>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <div class="form-group no-mt">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> Lembrar-me </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <button id="logar" type="submit" class="btn btn-raised btn-primary pull-right">Logar</button>
                        </div>
                          <strong><font color="red"><span id="nao_existe_login"></span></font></strong>
                      </div>
                    </fieldset>
                  </form>
                  <div class="text-center">
                    <h3>Logar com</h3>
                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-facebook">
                      <i class="zmdi zmdi-facebook"></i> Facebook</a>
                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-twitter">
                      <i class="zmdi zmdi-twitter"></i> Twitter</a>
                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-google">
                      <i class="zmdi zmdi-google"></i> Google</a>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
                  <fieldset>
                    <div class="form-group label-floating">
                      <h3> Recuperar Senha </h3>
                      <div class="input-group">
                        <span class="input-group-addon">
                          
                          <i class="zmdi zmdi-account"></i>
                        </span>
                        <label class="control-label" for="ms-form-user">Usuário</label>
                        <input type="text" id="ms-form-user" class="form-control"> </div>
                    </div>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="zmdi zmdi-email"></i>
                        </span>
                        <label class="control-label" for="ms-form-email">Email</label>
                        <input type="email" id="ms-form-email" class="form-control"> </div>
                    </div>
                    <button class="btn btn-raised btn-block btn-primary">Enviar Senha</button>
                  </fieldset>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <header class="ms-header ms-header-dark">

        <!--ms-header-dark-->
        <div class="container container-full">
          <div class="ms-title">
            <a href="index.html">
              <!-- <img src="view/assets/img/demo/logo-header.png" alt=""> -->
              <span class="ms-logo animated zoomInDown animation-delay-5">W</span>

              <h1 class="animated fadeInRight animation-delay-6">Work
                <span>Fast</span>
              </h1>
            </a>
          </div>
          <div class="header-right">
            <div class="share-menu">
              <ul class="share-menu-list">
                <li class="animated fadeInRight animation-delay-3">
                  <a href="javascript:void(0)" class="btn-circle btn-google">
                    <i class="zmdi zmdi-google"></i>
                  </a>
                </li>
                <li class="animated fadeInRight animation-delay-2">
                  <a href="javascript:void(0)" class="btn-circle btn-facebook">
                    <i class="zmdi zmdi-facebook"></i>
                  </a>
                </li>
                <li class="animated fadeInRight animation-delay-1">
                  <a href="javascript:void(0)" class="btn-circle btn-twitter">
                    <i class="zmdi zmdi-twitter"></i>
                  </a>
                </li>
              </ul>
              <a href="javascript:void(0)" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7">
                <i class="zmdi zmdi-share"></i>
              </a>
            </div>
            <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#ms-account-modal">
              <i class="zmdi zmdi-account"></i>
            </a>
            <form class="search-form animated zoomInDown animation-delay-9">
              <input id="search-box" type="text" class="search-input" placeholder="Search..." name="q" />
              <label for="search-box">
                <i class="zmdi zmdi-search"></i>
              </label>
            </form>
            <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary ms-toggle-left animated zoomInDown animation-delay-10">
              <i class="zmdi zmdi-menu"></i>
            </a>
          </div>
        </div>
      </header>
      <nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-white">
        <div class="container container-full">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
              <!-- <img src="view/assets/img/demo/logo-navbar.png" alt=""> -->
              <span class="ms-logo ms-logo-sm">W</span>
              <span class="ms-title">Work
                <strong>Fast</strong>
              </span>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="ms-navbar">
            <ul class="navbar-nav">
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="home">Serviços
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li class="ms-tab-menu">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs ms-tab-menu-left" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" href="#tab-general" data-hover="tab" data-toggle="tab" role="tab">
                          <i class="zmdi zmdi-home"></i> Serviços Domésticos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#tab-landing" data-hover="tab" data-toggle="tab" role="tab">
                          <i class="zmdi zmdi-desktop-windows"></i> Design e Tecnologia</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#tab-revolution" data-hover="tab" data-toggle="tab" role="tab">
                          <i class="zmdi zmdi-panorama-horizontal"></i> Eventos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#tab-shop" data-hover="tab" data-toggle="tab" role="tab">
                          <i class="zmdi zmdi-store"></i> Reformas</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#tab-profile" data-hover="tab" data-toggle="tab" role="tab">
                          <i class="zmdi zmdi-account"></i> Consultoria</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#tab-blog" data-hover="tab" data-toggle="tab" role="tab">
                          <i class="zmdi zmdi-edit"></i> Aulas </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#tab-magazine" data-hover="tab" data-toggle="tab" role="tab">
                          <i class="zmdi zmdi-flip"></i> Autos </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#tab-app" data-hover="tab" data-toggle="tab" role="tab">
                          <i class="zmdi zmdi-smartphone-iphone"></i> Assistência Técnica</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#tab-ads" data-hover="tab" data-toggle="tab" role="tab">
                          <i class="zmdi zmdi-search"></i> Moda e Beleza </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#tab-saude" data-hover="tab" data-toggle="tab" role="tab">
                          <i class="zmdi zmdi-search"></i> Saúde </a>
                      </li>
                    </ul>
                    <!-- Tab serviços domesticos -->
                    <div class="tab-content ms-tab-menu-right">
                      <div class="tab-pane active" id="tab-general" role="tabpanel">
                        <ul class="ms-tab-menu-right-container">
                          <li class="disable">
                            <a href="index.html">Para a Casa</a>
                          </li>
                          <li>
                            <a href="home-generic-2.html">DIARISTA</a>
                          </li>
                          <li>
                            <a href="home-generic-3.html">LIMPEZA DE PISCINA</a>
                          </li>
                          <li>
                            <a href="home-generic-4.html">PASSADEIRA</a>
                          </li>
                          <li>
                            <a href="home-generic-5.html">TAPECEIRO</a>
                          </li>
                          <li class="disable">
                            <a href="home-generic-6.html">Para a Família</a>
                          </li>
                          <li>
                            <a href="home-generic-7.html">BABÁ</a>
                          </li>
                          <li>
                            <a href="home-generic-7.html">COZINHEIRA</a>
                          </li>
                          <li>
                            <a href="home-generic-7.html">MOTORISTA</a>
                          </li>
                          <li class="disable">
                            <a href="home-generic-7.html">Para os Pets</a>
                          </li>
                          <li>
                            <a href="home-generic-7.html">ADESTRADOR DE CÃES</a>
                          </li>
                          <li>
                            <a href="home-generic-7.html">PASSEADOR DE CÃES</a>
                          </li>
                          
                        </ul>
                      </div>
                      <!-- tab design e tecnologia -->
                      <div class="tab-pane" id="tab-landing" role="tabpanel">
                        <ul class="ms-tab-menu-right-container">
                          <li class="disable">
                            <a href="home-landing.html">Tecnologia</a>
                          </li>
                          <li>
                            <a href="home-landing2.html">APPS PARA SMARTPHONE</a>
                          </li>
                          <li>
                            <a href="home-landing4.html">DESENVOLVIMENTO DE SITES</a>
                          </li>
                          <li>
                            <a href="home-landing3.html">MARKETING DIGITAL</a>
                          </li>
                          <li class="disable">
                            <a href="home-cv3.html">Gráfica</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">CONVITES</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">CRIAÇÃO DE LOGOS</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">MATERIAIS PROMOCIONAIS</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">PRODUÇÃO GRÁFICA</a>
                          </li>
                          <li class="disable">
                            <a href="javascript:void(0)">Áudio/ Visual</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">ANIMAÇÃO MOTION</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">ÁUDIO E VÍDEO</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">EDIÇÃO DE FOTOS</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">FOTOGRAFIA</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">ILUSTRAÇÃO</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">MODELAGEM 2D E 3D</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">WEB DESIGN</a>
                          </li>
                        </ul>
                      </div>
                      <!-- tab eventos -->
                      <div class="tab-pane" id="tab-revolution" role="tabpanel">
                        <ul class="ms-tab-menu-right-container">
                          <li class="disable">
                            <a  href="home-revolution.html">Equipe e Suporte
                            </a>
                          </li>
                          <li>
                            <a  href="home-revolution2.html">ASSESSOR DE EVENTOS
                            </a>
                          </li>
                          <li>
                            <a  href="home-revolution3.html">EQUIPAMENTO DE EVENTOS
                            </a>
                          </li>
                          <li>
                            <a href="home-revolution4.html">GARÇONS E COPEIRAS</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">RECEPCIONISTAS</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">SEGURANÇAS</a>
                          </li>
                          <li class="disable">
                            <a href="home-cv4.html">Comes e bebes</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">BARTENDER</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">BUFFET COMPLETO</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">CHURRASQUEIRO</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">CONFEITEIRA</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">Música e animação</a>
                          </li><li>
                            <a href="home-cv4.html">ANIMAÇÃO DE FESTAS</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">BANDAS E CANTORES</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">DJS</a>
                          </li>
                          <li class="disable">
                            <a href="home-cv4.html">Serviços Complementares</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">BRINDES E LEMBRANCINHAS</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">CONVITES</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">DECORAÇÃO</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">EDIÇÃO DE FOTOS</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">FOTOGRAFIA</a>
                          </li>
                        </ul>
                      </div>
                      <!-- tab reformas -->
                      <div class="tab-pane" id="tab-shop" role="tabpanel">
                        <ul class="ms-tab-menu-right-container">
                          <li class="disable">
                            <a href="home-shop.html">Reformas</a>
                          </li>
                          <li>
                            <a href="home-shop2.html">ARQUITETOS</a>
                          </li>
                          <li>
                            <a href="home-shop.html">ENGENHEIRO</a>
                          </li>
                          <li>
                            <a href="home-shop.html">LIMPEZA PÓS OBRA</a>
                          </li>
                          <li>
                            <a href="home-shop.html">PEDREIRO</a>
                          </li>
                          <li>
                            <a href="home-shop.html">TERRAPLANAGEM</a>
                          </li>
                          <li class="disable">
                            <a href="home-shop.html">Reformas e Reparos</a>
                          </li>
                          <li>
                            <a href="home-shop.html">ELETRICISTA</a>
                          </li>
                          <li>
                            <a href="home-shop.html">ENCANADOR</a>
                          </li>
                          <li>
                            <a href="home-shop.html">GESSO E DRYWALL</a>
                          </li>
                          <li>
                            <a href="home-shop.html">SERRALHEIRA E SOLDA</a>
                          </li>
                          <li>
                            <a href="home-shop.html">VIDRACEIRO</a>
                          </li>
                          <li class="disable">
                            <a href="home-shop.html">Serviços Gerais</a>
                          </li>
                          <li>
                            <a href="home-shop.html">AUTOMAÇÃO RESIDENCIAL</a>
                          </li>
                          <li>
                            <a href="home-shop.html">CHAVEIRO</a>
                          </li>
                          <li>
                            <a href="home-shop.html">DESENTUPIDOR</a>
                          </li>
                          <li>
                            <a href="home-shop.html">DETETIZADOR</a>
                          </li>
                          <li>
                            <a href="home-shop.html">IMPERMEBILIZADOR</a>
                          </li>
                          <li>
                            <a href="home-shop.html">MARCENEIRO</a>
                          </li>
                          <li>
                            <a href="home-shop.html">MARIDO DE ALUGUEL</a>
                          </li>
                          <li>
                            <a href="home-shop.html">MUDANÇAS E CARRETO</a>
                          </li>
                          <li>
                            <a href="home-shop.html">SEGURANÇA ELETRÔNICA</a>
                          </li>
                          <li>
                            <a href="home-shop.html">TAPECEIRO</a>
                          </li>
                          <li class="disable">
                            <a href="home-shop.html">Para a Casa</a>
                          </li>
                          <li>
                            <a href="home-shop.html">DECORADOR</a>
                          </li>
                          <li>
                            <a href="home-shop.html">JARDINAGEM</a>
                          </li>
                          <li>
                            <a href="home-shop.html">MONTADOR DE MÓVEIS</a>
                          </li>
                          <li>
                            <a href="home-shop.html">PAISAGISTA</a>
                          </li>
                          <li>
                            <a href="home-shop.html">PISCINA</a>
                          </li>
                        </ul>
                      </div>
                      <!-- tab consultoria -->
                      <div class="tab-pane" id="tab-profile" role="tabpanel">
                        <ul class="ms-tab-menu-right-container">
                          <li class="disable">
                            <a href="home-cv.html">MÍDIA</a>
                          </li>
                          <li>
                            <a href="home-cv2.html">ASSESSORIA DE IMPRENSA</a>
                          </li>
                          <li>
                            <a href="home-cv3.html">PESQUISA EM GERAL</a>
                          </li>
                          <li>
                            <a href="home-cv4.html">PRODUÇÃO DE CONTEÚDO</a>
                          </li>
                          <li>
                            <a href="home-shop.html">TRADUTORES</a>
                          </li>
                          <li class="disable">
                            <a href="home-shop.html">Negócios</a>
                          </li>
                          <li>
                            <a href="home-shop.html">AUXÍLIO ADMINISTRATIVO</a>
                          </li>
                          <li>
                            <a href="home-shop.html">CONTADOR</a>
                          </li>
                          <li>
                            <a href="home-shop.html">DIGITALIZAR DOCUMENTOS</a>
                          </li>
                          <li>
                            <a href="home-shop.html">ECONOMIA E FINANÇAS</a>
                          </li>
                          <li>
                            <a href="home-shop.html">SEGURANÇA DO TRABALHO</a>
                          </li>
                          <li class="disable">
                            <a href="home-shop.html">Jurídico</a>
                          </li>
                          <li>
                            <a href="home-shop.html">ADVOGADO</a>
                          </li>
                          <li class="disable">
                            <a href="home-shop.html">Pessoal</a>
                          </li>
                          <li>
                            <a href="home-shop.html">CONSULTORIA ESPECIALIZADA</a>
                          </li>
                          <li>
                            <a href="home-shop.html">CONSULTOR PESSOAL</a>
                          </li>
                          <li>
                            <a href="home-shop.html">DETETIVE PARTICULAR</a>
                          </li>
                        </ul>
                      </div>
                      <!-- tab Aulas -->
                      <div class="tab-pane" id="tab-blog" role="tabpanel">
                        <ul class="ms-tab-menu-right-container">
                          <li class="disable">
                            <a href="home-blog.html">Bem-Estar</a>
                          </li>
                          <li>
                            <a href="home-blog2.html">ARTES E ARTESANATOS</a>
                          </li>
                          <li>
                            <a href="home-shop.html">AULAS DE DANÇA</a>
                          </li>
                          <li>
                            <a href="home-shop.html">BEM-ESTAR</a>
                          </li>
                          <li>
                            <a href="home-shop.html">ESPORTES</a>
                          </li>
                          <li>
                            <a href="home-shop.html">LUTAS</a>
                          </li>
                          <li class="disable">
                            <a href="home-shop.html">Acadêmicos</a>
                          </li>
                          <li>
                            <a href="home-shop.html">AULAS DE IDIOMAS</a>
                          </li>
                          <li>
                            <a href="home-shop.html">AULAS PARTICULARES</a>
                          </li>
                          <li>
                            <a href="home-shop.html">CONCURSOS</a>
                          </li>
                          <li>
                            <a href="home-shop.html">INFORMÁTICA</a>
                          </li>
                          <li>
                            <a href="home-shop.html">MÚSICA</a>
                          </li>
                        </ul>
                      </div>
                      <!-- tab autos -->
                      <div class="tab-pane" id="tab-magazine" role="tabpanel">
                        <ul class="ms-tab-menu-right-container">
                          <li class="disable">
                            <a href="home-magazine.html">Auto Elétrica</a>
                          </li>
                          <li>
                            <a href="home-shop.html">ALARME AUTOMOTIVO</a>
                          </li>
                          <li>
                            <a href="home-shop.html">AR CONDICIONADO</a>
                          </li>
                          <li>
                            <a href="home-shop.html">AUTO ELÉTRICA</a>
                          </li>
                          <li>
                            <a href="home-shop.html">SOM AUTOMOTIVO</a>
                          </li>
                          <li class="disable">
                            <a href="home-shop.html">Funilaria e Pintura</a>
                          </li>
                          <li>
                            <a href="home-shop.html">HIGIENIZAÇÃO E POLIMETRO</a>
                          </li>
                          <li>
                            <a href="home-shop.html">MARTELINHO DE OURO</a>
                          </li>
                          <li>
                            <a href="home-shop.html">PINTURA</a>
                          </li>
                          <li class="disable">
                            <a href="home-shop.html">Vidraçaria Automotiva</a>
                          </li>
                          <li>
                            <a href="home-shop.html">INSULFILM</a>
                          </li>
                          <li>
                            <a href="home-shop.html">VIDRAÇARIA AUTOMOTIVA</a>
                          </li>
                          <li class="disable">
                            <a href="home-shop.html">Mecânica</a>
                          </li>
                          <li>
                            <a href="home-shop.html">BORRACHARIA</a>
                          </li>
                          <li>
                            <a href="home-shop.html">GUINCHO</a>
                          </li>
                          <li>
                            <a href="home-shop.html">MECÂNICA GERAL</a>
                          </li>      
                        </ul>
                      </div>
                      <!-- tab assistencia tecninca -->
                      <div class="tab-pane" id="tab-app" role="tabpanel">
                        <ul class="ms-tab-menu-right-container">
                          <li class="disable">
                            <a href="home-app.html">Aparelhos Eletrônicos</a>
                          </li>
                          <li>
                            <a href="home-shop.html">APARELHO DE SOM</a>
                          </li>
                          <li>
                            <a href="home-shop.html">AR CONDICIONADO</a>
                          </li>
                          <li>
                            <a href="home-shop.html">CÂMERA</a>
                          </li>
                          <li>
                            <a href="home-shop.html">DVD / BLU-RAY</a>
                          </li>
                          <li>
                            <a href="home-shop.html">HOME THEATER</a>
                          </li>
                          <li>
                            <a href="home-shop.html">TELEVISÃO</a>
                          </li>
                          <li>
                            <a href="home-shop.html">VIDEO GAME</a>
                          </li>
                          <li class="disable">
                            <a href="home-shop.html">Eletrodomésticos</a>
                          </li>
                          <li>
                            <a href="home-shop.html">FOGÃO E COOKTOP</a>
                          </li>
                          <li>
                            <a href="home-shop.html">GELADEIRA E FREEZER</a>
                          </li>
                          <li>
                            <a href="home-shop.html">LAVA LOUÇA</a>
                          </li>
                          <li>
                            <a href="home-shop.html">MÁQUINA DE LAVAR</a>
                          </li>
                          <li>
                            <a href="home-shop.html">MICROONDAS</a>
                          </li>
                          <li class="disable">
                            <a href="home-shop.html">Informática e Telefonia</a>
                          </li>
                          <li>
                            <a href="home-shop.html">CABEAMENTO DE REDES</a>
                          </li>
                          <li>
                            <a href="home-shop.html">CELULAR</a>
                          </li>
                          <li>
                            <a href="home-shop.html">COMPUTADOR DESKTOP</a>
                          </li>
                          <li>
                            <a href="home-shop.html">IMPRESSORA</a>
                          </li>
                          <li>
                            <a href="home-shop.html">NOTEBOOK</a>
                          </li>
                          <li>
                            <a href="home-shop.html">TABLET</a>
                          </li>
                          <li>
                            <a href="home-shop.html">TELEFONE FIXO</a>
                          </li>
                          <li>
                            <a href="home-shop.html">TELEFONIA PABX</a>
                          </li>
                        </ul>
                      </div>
                      <!-- moda e beleza -->
                      <div class="tab-pane" id="tab-ads" role="tabpanel">
                        <ul class="ms-tab-menu-right-container">
                          <li class="disable">
                            <a href="home-class.html">Beleza</a>
                          </li>
                          <li>
                            <a href="home-class.html">CABELEREIRO</a>
                          </li>
                          <li>
                            <a href="home-class.html">DEPILAÇÃO</a>
                          </li>
                          <li>
                            <a href="home-class.html">DESIGN DE SOBRANCELHAS</a>
                          </li>
                          <li>
                            <a href="home-class.html">ESTETICISTAS</a>
                          </li>
                          <li>
                            <a href="home-class.html">MAQUIADORES</a>
                          </li>
                          <li>
                            <a href="home-class.html">MANICURE E PEDICURE</a>
                          </li>
                          <li class="disable">
                            <a href="home-class.html">Estilo</a>
                          </li>
                          <li>
                            <a href="home-class.html">CORTE E COSTURA</a>
                          </li>
                          <li>
                            <a href="home-class.html">PERSONAL STYLIST</a>
                          </li>
                          <li>
                            <a href="home-class.html">SAPATEIRO</a>
                          </li>
                          <li class="disable">
                            <a href="home-class.html">Artes e Magia</a>
                          </li>
                          <li>
                            <a href="home-class.html">ARTESANATO</a>
                          </li>
                          <li>
                            <a href="home-class.html">ESOTÉRICO</a>
                          </li>
                        </ul>
                      </div>
                      <!-- TAB Saude -->
                      <div class="tab-pane" id="tab-saude" role="tabpanel">
                        <ul class="ms-tab-menu-right-container">
                          <li class="disable">
                            <a href="home-class.html">Para o Corpo</a>
                          </li>
                          <li>
                            <a href="home-class.html">COZINHEIRA</a>
                          </li>
                          <li>
                            <a href="home-class.html">FISIOTERAPEUTA</a>
                          </li>
                          <li>
                            <a href="home-class.html">FONODIÓLOGO</a>
                          </li>
                          <li>
                            <a href="home-class.html">NUTRICIONISTA</a>
                          </li>
                          <li>
                            <a href="home-class.html">QUIROPRÁTICO</a>
                          </li>
                          <li class="disable">
                            <a href="home-class.html">Para a Mente</a>
                          </li>
                          <li>
                            <a href="home-class.html">PSICÓLOGO</a>
                          </li>
                          <li class="disable">
                            <a href="home-class.html">Para a Família</a>
                          </li>
                          <li>
                            <a href="home-class.html">ACOMPANHANTE DE IDOSOS</a>
                          </li>
                          <li>
                            <a href="home-class.html">ENFERMEIRA</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li><!--
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="page">Pages
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-item has_children">About us &amp; Team</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li>
                        <a class="dropdown-item" href="page-about.html">About us Option 1</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-about2.html">About us Option 2</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-about3.html">About us Option 3</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-about4.html">About us Option 4</a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item" href="page-team.html">Our Team Option 1</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-team2.html">Our Team Option 2</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children dropdown-item">Form</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="page-contact.html">Contact Option 1</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-contact2.html">Contact Option 2</a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item" href="page-login_register.html">Login &amp; Register</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-login.html">Login Full</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-login2.html">Login Integrated</a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item" href="page-login_register2.html">Register Option 1</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-register2.html">Register Option 2</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children dropdown-item">Profiles</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li>
                        <a class="dropdown-item" href="page-profile.html">User Profile Option 1</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pagina-perfil.html">User Profile Option 2</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children dropdown-item">Error</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li>
                        <a class="dropdown-item" href="page-404.html">Error 404 Full Page</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-404_2.html">Error 404 Integrated</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-500.html">Error 500 Full Page</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-500_2.html">Error 500 Integrated</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children dropdown-item">Bussiness &amp; Products</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li>
                        <a class="dropdown-item" href="page-testimonial.html">Testimonials</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-clients.html">Our Clients</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-product.html">Products</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-services.html">Services</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children dropdown-item">Pricing</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li>
                        <a class="dropdown-item" href="page-pricing.html">Pricing Box</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-pricing2.html">Pricing Box 2</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-princing_table.html">Pricing Mega Table</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children dropdown-item">FAQ &amp; Support</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li>
                        <a class="dropdown-item" href="page-support.html">Support Center</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-faq.html">FAQ Option 1</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-faq2.html">FAQ Option 2</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children dropdown-item">Coming Soon</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li>
                        <a class="dropdown-item" href="page-coming.html">Coming Soon Option 1</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-coming2.html">Coming Soon Option 2</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-coming3.html">Coming Soon Option 3</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children dropdown-item">Timeline</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li>
                        <a class="dropdown-item" href="page-timeline_left.html">Timeline Left</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-timeline_left2.html">Timeline Left 2</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="page-timeline.html">Timeline Center</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children dropdown-item">Email Templates</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li>
                        <a class="dropdown-item with-badge" href="page-email.html">Email Template 1
                          <span class="badge badge-success text-right">1.2</span>
                        </a>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item with-badge" href="page-email2.html">Email Template 2
                          <span class="badge badge-success text-right">1.2</span>
                        </a>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a class="dropdown-item" href="page-all.html" class="dropdown-link">All Pages</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown dropdown-megamenu-container">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="component">UI Elements
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-megamenu animated fadeIn animated-2x">
                  <li class="container">
                    <div class="row">
                      <div class="col-sm-3 megamenu-col">
                        <div class="megamenu-block animated fadeInLeft animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-bold"></i> Bootstrap CSS</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-typography.html">
                                <i class="fa fa-font"></i> Typography</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-headers.html">
                                <i class="fa fa-header"></i> Headers</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-dividers.html">
                                <i class="fa fa-arrows-h"></i> Dividers</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-blockquotes.html">
                                <i class="fa fa-quote-right"></i> Blockquotes</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-forms.html">
                                <i class="fa fa-check-square-o"></i> Forms
                                <span class="badge badge-info pull-right">
                                  <i class="zmdi zmdi-long-arrow-up no-mr"></i> 1.5</span>
                              </a>
                            </li>
                            <li>
                              <a class="withripple" href="component-tables.html">
                                <i class="fa fa-table"></i> Tables</a>
                            </li>
                          </ul>
                        </div>
                        <div class="megamenu-block animated fadeInLeft animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-hand-o-up"></i> Buttons</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-basic-buttons.html">
                                <i class="fa fa-arrow-circle-right"></i> Basic Buttons</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-buttons-components.html">
                                <i class="fa fa-arrow-circle-right"></i> Buttons Components</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-social-buttons.html">
                                <i class="fa fa-arrow-circle-right"></i> Social Buttons
                                <span class="badge badge-info pull-right">
                                  <i class="zmdi zmdi-long-arrow-up no-mr"></i> 1.3</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-sm-3 megamenu-col">
                        <div class="megamenu-block animated fadeInLeft animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-list-alt"></i> Basic Components</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-panels.html">
                                <i class="zmdi zmdi-view-agenda"></i> Panels</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-alerts.html">
                                <i class="zmdi zmdi-info"></i> Alerts &amp; Wells</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-badges.html">
                                <i class="zmdi zmdi-tag"></i> Badges &amp; Badges Pills</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-lists.html">
                                <i class="zmdi zmdi-view-list"></i> Lists</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-thumbnails.html">
                                <i class="zmdi zmdi-image-o"></i> Thumbnails</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-carousels.html">
                                <i class="zmdi zmdi-view-carousel"></i> Carousels</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-modals.html">
                                <i class="zmdi zmdi-window-maximize"></i> Modals</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-tooltip.html">
                                <i class="zmdi zmdi-pin-help"></i> Tooltip &amp; Popover</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-progress-bars.html">
                                <i class="zmdi zmdi-view-headline"></i> Progress Bars</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-pagination.html">
                                <i class="zmdi zmdi-n-2-square"></i> Pagination</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-dropdowns.html">
                                <i class="fa fa-info"></i> Dropdowns</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-sm-3 megamenu-col">
                        <div class="megamenu-block animated fadeInRight animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="zmdi zmdi-folder-star-alt"></i> Extra Components</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-cards.html">
                                <i class="zmdi zmdi-card-membership"></i> Cards</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-composite-cards.html">
                                <i class="zmdi zmdi-card-giftcard"></i> Composite Cards</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-counters.html">
                                <i class="zmdi zmdi-n-6-square"></i> Counters</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-audio-video.html">
                                <i class="zmdi zmdi-play-circle"></i> Audio &amp; Video</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-masonry.html">
                                <i class="zmdi zmdi-view-dashboard"></i> Masonry Layer</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-snackbar.html">
                                <i class="zmdi zmdi-notifications-active"></i> SnackBar
                                <span class="badge badge-success pull-right">1.2</span>
                              </a>
                            </li>
                            <li>
                              <a class="withripple" href="component-lightbox.html">
                                <i class="zmdi zmdi-collection-image-o"></i> Lightbox
                                <span class="badge badge-success pull-right">1.5</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="megamenu-block animated fadeInRight animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="zmdi zmdi-tab"></i> Collapses &amp; Tabs</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-collapses.html">
                                <i class="zmdi zmdi-view-day"></i> Collapses</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-horizontal-tabs.html">
                                <i class="zmdi zmdi-tab"></i> Horitzontal Tabs</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-vertical-tabs.html">
                                <i class="zmdi zmdi-menu"></i> Vertical Tabs</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-sm-3 megamenu-col">
                        <div class="megamenu-block animated fadeInRight animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-briefcase"></i> Icons</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-icons-basic.html">
                                <i class="fa fa-arrow-circle-right"></i> Basic Icons</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-icons-fontawesome.html">
                                <i class="fa fa-arrow-circle-right"></i> Font Awesome</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-icons-iconic.html">
                                <i class="fa fa-arrow-circle-right"></i> Material Design Iconic</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-icons-glyphicons.html">
                                <i class="fa fa-arrow-circle-right"></i> Glyphicons</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-icons-ionicons.html">
                                <i class="fa fa-arrow-circle-right"></i> Ionicons
                                <span class="badge badge-success pull-right">2.0</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="megamenu-block animated fadeInRight animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-area-chart"></i> Charts</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-charts-circle.html">
                                <i class="zmdi zmdi-chart-donut"></i> Circle Charts</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-charts-bar.html">
                                <i class="fa fa-bar-chart"></i> Bars Charts</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-charts-line.html">
                                <i class="fa fa-line-chart"></i> Line Charts</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-charts-more.html">
                                <i class="fa fa-pie-chart"></i> More Charts</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="blog">Blog
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="blog-sidebar.html">
                      <i class="zmdi zmdi-view-compact"></i> Blog Sidebar 1</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="blog-sidebar2.html">
                      <i class="zmdi zmdi-view-compact"></i> Blog Sidebar 2</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="blog-masonry.html">
                      <i class="zmdi zmdi-view-dashboard"></i> Blog Masonry 1</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="blog-masonry2.html">
                      <i class="zmdi zmdi-view-dashboard"></i> Blog Masonry 2</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="blog-full.html">
                      <i class="zmdi zmdi zmdi-view-stream"></i> Blog Full Page 1</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="blog-full2.html">
                      <i class="zmdi zmdi zmdi-view-stream"></i> Blog Full Page 2</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li>
                    <a class="dropdown-item" href="blog-post.html">
                      <i class="zmdi zmdi-file-text"></i> Blog Post 1</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="blog-post2.html">
                      <i class="zmdi zmdi-file-text"></i> Blog Post 2</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-8" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="portfolio">Portfolio
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="portfolio-filters_sidebar.html">
                      <i class="zmdi zmdi-view-compact"></i> Portfolio Sidebar Filters</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="portfolio-filters_topbar.html">
                      <i class="zmdi zmdi-view-agenda"></i> Portfolio Topbar Filters</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="portfolio-filters_sidebar_fluid.html">
                      <i class="zmdi zmdi-view-compact"></i> Portfolio Sidebar Fluid</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="portfolio-filters_topbar_fluid.html">
                      <i class="zmdi zmdi-view-agenda"></i> Portfolio Topbar Fluid</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="portfolio-cards.html">
                      <i class="zmdi zmdi-card-membership"></i> Porfolio Cards</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="portfolio-masonry.html">
                      <i class="zmdi zmdi-view-dashboard"></i> Porfolio Masonry</a>
                  </li>
                  <li>
                    <a class="dropdown-item with-badge" href="portfolio-gallery.html">
                      <i class="zmdi zmdi-apps"></i> Picture Gallery
                      <span class="badge badge-success text-right">1.5</span>
                    </a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li>
                    <a class="dropdown-item" href="portfolio-item.html">
                      <i class="zmdi zmdi-collection-item-1"></i> Portfolio Item 1</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="portfolio-item2.html">
                      <i class="zmdi zmdi-collection-item-2"></i> Portfolio Item 2</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-9" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="ecommerce">E-Commerce
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="ecommerce-filters.html">E-Commerce Sidebar</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="ecommerce-filters-full.html">E-Commerce Sidebar Full</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="ecommerce-filters-full2.html">E-Commerce Topbar Full</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li>
                    <a class="dropdown-item" href="ecommerce-item.html">E-Commerce Item</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="ecommerce-cart.html">E-Commerce Cart</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu">
            <i class="zmdi zmdi-menu"></i>
          </a>
        </div>-->
        <!-- container -->
      </nav>
      <div class="ms-hero ms-hero-material">
        <span class="ms-hero-bg"></span>
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-7">
              <div id="carousel-hero" class="carousel slide carousel-fade" data-ride="carousel" data-interval="8000">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <div class="carousel-caption">
                      <div class="ms-hero-material-text-container">
                        <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                          <h1 class="animated fadeInLeft animation-delay-15 font-smoothing">A
                            <strong> MAIOR PLATAFORMA</strong> De Contratação de Serviços da Região</h1>
                          <h2 class="animated fadeInLeft animation-delay-18">O Jeito mais
                            <span class="color-warning">ESPERTO</span> de Contratar Um Serviço.</h2>
                        </header>
                        <ul class="ms-hero-material-list">
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-18">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp">
                                <i class="zmdi zmdi-airplane"></i>
                              </span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-19">Orçamento grátis e seguro.</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-20">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp">
                                <i class="zmdi zmdi-bike"></i>
                              </span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-21">Profissionais Avaliados.</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-22">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp">
                                <i class="zmdi zmdi-album"></i>
                              </span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-23">Fale o que precisa, receba até 3 orçamentos, escolha o melhor.</div>
                          </li>
                        </ul>
                        <div class="ms-hero-material-buttons text-right">
                          <div class="ms-hero-material-buttons text-right">
                            <a href="view/usuarios/registrar/page-register2.php" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2">
                              <i class=""></i> Criar Uma Conta</a>
                          </div>
                        </div>
                      </div>
                      <!-- ms-hero-material-text-container -->
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="carousel-caption">
                      <div class="ms-hero-material-text-container">
                        <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                          <h1 class="animated fadeInLeft animation-delay-15">Lorem Ipsum
                            <strong>dolor</strong> sit amet</h1>
                          <h2 class="animated fadeInLeft animation-delay-18">Illo, fugit sit
                            <span class="color-warning">nesciunt cum rerum</span> .</h2>
                        </header>
                        <ul class="ms-hero-material-list">
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-18">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-info shadow-3dp">
                                <i class="zmdi zmdi-city"></i>
                              </span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-19">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, fugit sit nesciunt cum rerum iusto.</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-20">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-royal shadow-3dp">
                                <i class="zmdi zmdi-cake"></i>
                              </span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-21">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi laborum dignissimos fuga maxime facere.</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-22">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp">
                                <i class="zmdi zmdi-coffee"></i>
                              </span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-23">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sequi est repudianda.</div>
                          </li>
                        </ul>
                        <div class="ms-hero-material-buttons text-right">
                          <div class="ms-hero-material-buttons text-right">
                            <a href="javascript:void(0);" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2">
                              <i class="zmdi zmdi-settings"></i> Personalize</a>
                            <a href="javascript:void(0);" class="btn btn-success btn-raised animated fadeInRight animation-delay-24">
                              <i class="zmdi zmdi-download"></i> Download</a>
                          </div>
                        </div>
                      </div>
                      <!-- ms-hero-material-text-container -->
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="carousel-caption">
                      <div class="ms-hero-material-text-container">
                        <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                          <h1 class="animated fadeInLeft animation-delay-15">Commitment of
                            <strong>monthly updates</strong>.</h1>
                          <h2 class="animated fadeInLeft animation-delay-18">There will soon be a version for
                            <span class="color-warning">Bootstrap 4</span>.</h2>
                        </header>
                        <ul class="ms-hero-material-list">
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-18">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp">
                                <i class="zmdi zmdi-cutlery"></i>
                              </span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-19">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, fugit sit nesciunt cum rerum iusto.</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-20">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-info shadow-3dp">
                                <i class="zmdi zmdi-dns"></i>
                              </span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-21">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi laborum dignissimos fuga maxime facere.</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-22">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp">
                                <i class="zmdi zmdi-compass"></i>
                              </span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-23">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sequi est repudianda.</div>
                          </li>
                        </ul>
                        <div class="ms-hero-material-buttons text-right">
                          <a href="javascript:void(0);" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2">
                            <i class="zmdi zmdi-settings"></i> Personalize</a>
                          <a href="javascript:void(0);" class="btn btn-success btn-raised animated fadeInRight animation-delay-24">
                            <i class="zmdi zmdi-download"></i> Download</a>
                        </div>
                      </div>
                      <!-- ms-hero-material-text-container -->
                    </div>
                  </div>
                  <div class="carousel-controls">
                    <!-- Controls -->
                    <a class="left carousel-control animated zoomIn animation-delay-30" href="#carousel-hero" role="button" data-slide="prev">
                      <i class="zmdi zmdi-chevron-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control animated zoomIn animation-delay-30" href="#carousel-hero" role="button" data-slide="next">
                      <i class="zmdi zmdi-chevron-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-hero" data-slide-to="0" class="animated fadeInUpBig animation-delay-27 active"></li>
                      <li data-target="#carousel-hero" data-slide-to="1" class="animated fadeInUpBig animation-delay-28"></li>
                      <li data-target="#carousel-hero" data-slide-to="2" class="animated fadeInUpBig animation-delay-29"></li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-5">
              <div class="ms-hero-img animated zoomInUp animation-delay-30">
                <img src="view/assets/img/demo/mock-imac-material2.png" alt="" class="img-fluid">
                <div id="carousel-hero-img" class="carousel carousel-fade slide" data-ride="carousel" data-interval="3000">
                  <!-- Indicators -->
                  <ol class="carousel-indicators carousel-indicators-hero-img">
                    <li data-target="#carousel-hero-img" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-hero-img" data-slide-to="1"></li>
                    <li data-target="#carousel-hero-img" data-slide-to="2"></li>
                  </ol>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="ms-hero-img-slider carousel-item active">
                      <img src="view/assets/img/demo/hero1.png" alt="" class="img-fluid"> </div>
                    <div class="ms-hero-img-slider carousel-item">
                      <img src="view/assets/img/demo/hero3.png" alt="" class="img-fluid"> </div>
                    <div class="ms-hero-img-slider carousel-item">
                      <img src="view/assets/img/demo/hero2.png" alt="" class="img-fluid"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- container -->
      </div>
      <!-- ms-hero ms-hero-black -->
      <div class="container mt-4">
        <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">O que é o WorkFast?</h2>
        <p class="lead text-center aco wow fadeInDown animation-delay-5 mw-800 center-block mb-4"> WorkFast é a mais nova plataforma de contratação da região Sul Fluminense.
          <span class="color-primary">Conectamos</span> profissionais com pessoas solicitando serviço, atendendo com qualidade, facilidade e rapidez todos os tipos de necessidades.</p>
        <div class="row">
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-4">
            <div class="text-center card-block">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg color-info">
                <i class="zmdi zmdi-cloud-outline"></i>
              </span>
              <h4 class="color-info">Faça seu pedido</h4>
              <p class="">Fale o que precisa. É rápido e de graça!</p>
              <a href="javascript:void(0)" class="btn btn-info btn-raised">Ver mais</a>
            </div>
          </div>
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-8">
            <div class="text-center card-block">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg color-warning">
                <i class="zmdi zmdi-desktop-mac"></i>
              </span>
              <h4 class="color-warning"> Receba até 3 orçamentos</h4>
              <p class="">Profissionais avaliados entram em contato com você em instantes!</p>
              <a href="javascript:void(0)" class="btn btn-warning btn-raised">Ver mais</a>
            </div>
          </div>
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-10">
            <div class="text-center card-block">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg color-success">
                <i class="zmdi zmdi-download"></i>
              </span>
              <h4 class="color-success">Escolha o melhor</h4>
              <p class="">Negocie direto com eles. Fácil como nunca foi antes!</p>
              <a href="javascript:void(0)" class="btn btn-success btn-raised">Ver mais</a>
            </div>
          </div>
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-6">
            <div class="text-center card-block">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg  color-danger">
                <i class="zmdi zmdi-flower-alt"></i>
              </span>
              <h4 class="color-danger">Qualifique o serviço</h4>
              <p class="">Faça uma avaliação do serviço, isso beneficia a todos!</p>
              <a href="javascript:void(0)" class="btn btn-danger btn-raised">Ver mais</a>
            </div>
          </div>
        </div>
      </div>
      <!-- container -->
      <div class="wrap wrap-mountain mt-6">
        <div class="container">
          <h1 class="text-center text-light mb-6 wow fadeInDown animation-delay-5">Você é um
            <strong>Profissional</strong> ? </h1>
          <div class="row">
            <div class="col-lg-6 order-lg-2 mb-4  center-block">
              <img src="view/assets/img/demo/mock.png" alt="" class="img-fluid center-block wow zoomIn animation-delay-12 "> </div>
            <div class="col-lg-6 order-lg-1 pr-6">
              <p class="wow fadeInLeft animation-delay-6">O WorkFast já recebe muitos pedidos de clientes procurando profissionais como você..</p>
              <p class="wow fadeInLeft animation-delay-7">Porque não cadastrar e conseguir um serviço de uma forma como nunca viu antes?</p>
              <p class="wow fadeInLeft animation-delay-8">Profissionais buscam crescimento e aprimoramento na carreira. Com a queda no número de contratações, a disputa por uma vaga no mercado de trabalho ficou ainda mais acirrada e é necessário se destacar entre os concorrentes. Para conseguir contornar essas dificuldades é preciso inovar e entender que hoje a tecnologia é essencial para isso!</p>
              <div class="text-center">
                <a href="javascript:void(0)" class="btn btn-warning btn-raised mr-1 wow flipInX animation-delay-14">
                  <i class="zmdi zmdi-chart-donut"></i> Cadastrar meus serviços </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-6">
        <h1 class="font-light"><strong>Dicas antes de contratar</strong></h1>
        <p class="lead color-primary">— Esteja sempre disposto a ler e aprender. </p>
        <div class="panel panel-light panel-flat">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-tabs-transparent indicator-primary nav-tabs-full nav-tabs-5" role="tablist">
            <li class="nav-item wow fadeInDown animation-delay-6" role="presentation">
              <a href="#windows" aria-controls="windows" role="tab" data-toggle="tab" class="nav-link withoutripple">
                <i class="zmdi zmdi-windows"></i>
                <span class="d-none d-md-inline">Saiba o que espera</span>
              </a>
            </li>
            <li class="nav-item wow fadeInDown animation-delay-4" role="presentation">
              <a href="#macos" aria-controls="macos" role="tab" data-toggle="tab" class="nav-link withoutripple active">
                <i class="zmdi zmdi-apple"></i>
                <span class="d-none d-md-inline">Negocie</span>
              </a>
            </li>
            <li class="nav-item wow fadeInDown animation-delay-2" role="presentation">
              <a href="#linux" aria-controls="linux" role="tab" data-toggle="tab" class="nav-link withoutripple">
                <i class="fa fa-linux"></i>
                <span class="d-none d-md-inline">Confira a qualidade</span>
              </a>
            </li>
            <li class="nav-item wow fadeInDown animation-delay-4" role="presentation">
              <a href="#android" aria-controls="android" role="tab" data-toggle="tab" class="nav-link withoutripple">
                <i class="zmdi zmdi-android"></i>
                <span class="d-none d-md-inline">Fique atento</span>
              </a>
            </li>
            <li class="nav-item wow fadeInDown animation-delay-6" role="presentation">
              <a href="#ios" aria-controls="ios" role="tab" data-toggle="tab" class="nav-link withoutripple">
                <i class="zmdi zmdi-smartphone-iphone"></i>
                <span class="d-none d-md-inline">WorkFast a seu favor</span>
              </a>
            </li>
          </ul>
          <div class="panel-body">
            <!-- Tab panes -->
            <div class="tab-content mt-4">
              <div role="tabpanel" class="tab-pane fade" id="windows">
                <div class="row">
                  <div class="col-lg-6 order-lg-2">
                    <img src="view/assets/img/demo/mock4.png" alt="" class="img-fluid animated zoomIn animation-delay-8"> </div>
                  <div class="col-lg-6 order-lg-1">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Saiba o que você espera para o serviço</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Antes de começar a buscar por profissionais, você deve pensar nas expectativas que espera para o serviço solicitado.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">Existem no mercado centenas de opções para todos os trabalhos, por isso é necessário ter foco na hora da busca. Saiba exatamente o que quer e evite desperdícios de tempo e energia.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> Mais informações</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Ação aqui </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane active show fade" id="macos">
                <div class="row">
                  <div class="col-lg-6">
                    <img src="view/assets/img/demo/mock2.png" alt="" class="img-fluid wow animated zoomIn animation-delay-8"> </div>
                  <div class="col-lg-6">
                    <h3 class="text-normal wow animated fadeInUp animation-delay-4">Negocie, mas saiba valorizar</h3>
                    <p class="lead lead-md  wow animated fadeInUp animation-delay-6">Alguns serviços costumam ter um valor acima do esperado, o que pode assustar. </p>
                    <p class="lead lead-md wow animated fadeInUp animation-delay-7">Considere que o profissional inclui nesse valor o risco e o tempo que será gasto para um serviço bem realizado, além do esforço, tempo, estudo e dinheiro que investiu para se capacitar!</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised wow animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> Mais informações</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 wow animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Ação aqui </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="linux">
                <div class="row">
                  <div class="col-lg-6 order-lg-2">
                    <img src="view/assets/img/demo/mock5.png" alt="" class="img-fluid animated zoomIn animation-delay-8"> </div>
                  <div class="col-lg-6 order-lg-1">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Confira a qualidade antes de contratar</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Procure sempre conhecer o resultado final antes de contratar o serviço.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">Ter um bom diálogo e conhecer o trabalho do profissional antes de contratar é essencial. Os profissionais do WorkFast possuem um perfil, você pode analisar e decidir se vai contratar ou não, sem compromisso nenhum!</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> Mais Informações</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Ações aqui </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="android">
                <div class="row">
                  <div class="col-lg-6">
                    <img src="view/assets/img/demo/mock6.png" alt="" class="img-fluid animated zoomIn animation-delay-8"> </div>
                  <div class="col-lg-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Preste atenção no que está sendo oferecido</h3>
                    <p class="lead lead-md  animated fadeInUp animation-delay-6">Leia atentamente as propostas e confira exatamente o que o serviço inclui na hora de contratar.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7"> Saiba também o que não está incluso, pois há grandes chances de ser algo importante e que deverá contratar à parte.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> Mais informações</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Ação aqui </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="ios">
                <div class="row">
                  <div class="col-lg-6 order-lg-2">
                    <img src="view/assets/img/demo/mock3.png" alt="" class="img-fluid animated zoomIn animation-delay-8"> </div>
                  <div class="col-lg-6 order-lg-1">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Use nosso site a seu favor</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Dependendo do serviço, planejar envolve buscar referências e pesquisar. Nosso site contém muitas dicas e informções para que conheça as tendências e os trabalhos de que precisa.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">Por isso, o WorkFast é sem dúvidas ideal para encontrar opções e ter recomendações de quem já tem experiências no que precisa.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- panel -->
      </div>
      <!-- container -->
      <!-- retirei o container com os planos -->
      <!--container -->
      <div class="wrap wrap-danger mt-6">
        <h2 class="text-center no-m">O que nossos clientes dizem</h2>
        <div id="carousel-example-generic" class="carousel carousel-cards carousel-fade slide" data-ride="carousel" data-interval="7000">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-2 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="view/assets/img/demo/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Muito bom o site, consegui contratar um profissional para alguns serviços na minha casa!. Sempre que precisar, já sei onde procurar!</p>
                          <footer>Rafael Cardoso, Valença RJ.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-3 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="view/assets/img/demo/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Realmente o site facilita muito a nossa vida. Uma maneira rápida e fácil de encontrar profissionais. Parabéns a quem teve essa idéia!</p>
                          <footer>Mariana Oliveira, Barra do Pirai RJ.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-4 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="view/assets/img/demo/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Estava precisando que realizassem um serviço no meu trabalho. Recebi muitas propostas, sem dúvida escolhi a melhor!</p>
                          <footer>Thiago Freitas, Vassouras RJ.</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!--
            <div class="carousel-item">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-2 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="view/assets/img/demo/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-3 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="view/assets/img/demo/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-4 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="view/assets/img/demo/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-2 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="view/assets/img/demo/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-3 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="view/assets/img/demo/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-4 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="view/assets/img/demo/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>-->
          <!-- Controls --><!--
          <a class="left carousel-control-prev btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="zmdi zmdi-arrow-left"></i>
          </a>
          <a class="right carousel-control-next btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="zmdi zmdi-arrow-right"></i>
          </a>
        </div>
      </div>
      <div class="container mt-6">
        <h2 class="text-center color-primary mb-4">Our Latest Works</h2>
        <div class="owl-dots"></div>
        <div class="owl-carousel owl-theme">
          <div class="card animation-delay-6">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="view/assets/img/demo/port4.jpg" alt="..." class="img-fluid">
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card card-dark-inverse animation-delay-8">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="view/assets/img/demo/port24.jpg" alt="..." class="img-fluid">
              </a>
            </div>
            <div class="card-block">
              <h3 class="">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-10">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="view/assets/img/demo/port7.jpg" alt="..." class="img-fluid">
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-6">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="view/assets/img/demo/port8.jpg" alt="..." class="img-fluid">
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card card-dark-inverse animation-delay-8">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="view/assets/img/demo/port9.jpg" alt="..." class="img-fluid">
              </a>
            </div>
            <div class="card-block">
              <h3 class="">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-10">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="view/assets/img/demo/port5.jpg" alt="..." class="img-fluid">
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-6">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="view/assets/img/demo/port11.jpg" alt="..." class="img-fluid">
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card card-dark-inverse animation-delay-8">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="view/assets/img/demo/port3.jpg" alt="..." class="img-fluid">
              </a>
            </div>
            <div class="card-block">
              <h3 class="">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-10">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="view/assets/img/demo/port14.jpg" alt="..." class="img-fluid">
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <aside class="ms-footbar">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 ms-footer-col">
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Sitemap</h3>
                <ul class="list-unstyled ms-icon-list three_cols">
                  <li>
                    <a href="index.html">
                      <i class="zmdi zmdi-home"></i> Home</a>
                  </li>
                  <li>
                    <a href="page-blog.html">
                      <i class="zmdi zmdi-edit"></i> Blog</a>
                  </li>
                  <li>
                    <a href="page-blog.html">
                      <i class="zmdi zmdi-image-o"></i> Portafolio</a>
                  </li>
                  <li>
                    <a href="portfolio-filters_sidebar.html">
                      <i class="zmdi zmdi-case"></i> Works</a>
                  </li>
                  <li>
                    <a href="page-timeline_left2.html">
                      <i class="zmdi zmdi-time"></i> Timeline</a>
                  </li>
                  <li>
                    <a href="page-pricing.html">
                      <i class="zmdi zmdi-money"></i> Pricing</a>
                  </li>
                  <li>
                    <a href="page-about.html">
                      <i class="zmdi zmdi-favorite-outline"></i> About Us</a>
                  </li>
                  <li>
                    <a href="page-team2.html">
                      <i class="zmdi zmdi-accounts"></i> Our Team</a>
                  </li>
                  <li>
                    <a href="page-services.html">
                      <i class="zmdi zmdi-face"></i> Services</a>
                  </li>
                  <li>
                    <a href="page-faq2.html">
                      <i class="zmdi zmdi-help"></i> FAQ</a>
                  </li>
                  <li>
                    <a href="page-login2.html">
                      <i class="zmdi zmdi-lock"></i> Login</a>
                  </li>
                  <li>
                    <a href="page-contact.html">
                      <i class="zmdi zmdi-email"></i> Contact</a>
                  </li>
                </ul>
              </div>
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Subscribe</h3>
                <p class="">Lorem ipsum Amet fugiat elit nisi anim mollit minim labore ut esse Duis ullamco ad dolor veniam velit.</p>
                <form>
                  <div class="form-group label-floating mt-2 mb-1">
                    <div class="input-group ms-input-subscribe">
                      <label class="control-label" for="ms-subscribe">
                        <i class="zmdi zmdi-email"></i> Email Adress</label>
                      <input type="email" id="ms-subscribe" class="form-control"> </div>
                  </div>
                  <button class="ms-subscribre-btn" type="button">Subscribe</button>
                </form>
              </div>
            </div>
            <div class="col-lg-5 col-md-7 ms-footer-col ms-footer-alt-color">
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title text-center mb-2">Last Articles</h3>
                <div class="ms-footer-media">
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="view/assets/img/demo/p75.jpg" alt="..."> </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="javascript:void(0)">Lorem ipsum dolor sit expedita cumque amet consectetur adipisicing repellat</a>
                      </h4>
                      <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> August 18, 2016</span>
                        <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">Design</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="view/assets/img/demo/p75.jpg" alt="..."> </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="javascript:void(0)">Labore ut esse Duis consectetur expedita cumque ullamco ad dolor veniam velit</a>
                      </h4>
                      <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> August 18, 2016</span>
                        <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">News</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="view/assets/img/demo/p75.jpg" alt="..."> </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="javascript:void(0)">voluptates deserunt ducimus expedita cumque quaerat molestiae labore</a>
                      </h4>
                      <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> August 18, 2016</span>
                        <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">Productivity</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-5 ms-footer-col ms-footer-text-right">
              <div class="ms-footbar-block">
                <div class="ms-footbar-title">
                  <span class="ms-logo ms-logo-white ms-logo-sm mr-1">W</span>
                  <h3 class="no-m ms-site-title">Work
                    <span>Fast</span>
                  </h3>
                </div>
                <address class="no-mb">
                  <p>
                    <i class="color-danger-light zmdi zmdi-pin mr-1"></i> 795 Folsom Ave, Suite 600</p>
                  <p>
                    <i class="color-warning-light zmdi zmdi-map mr-1"></i> San Francisco, CA 94107</p>
                  <p>
                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                    <a href="mailto:joe@example.com">example@domain.com</a>
                  </p>
                  <p>
                    <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+34 123 456 7890 </p>
                  <p>
                    <i class="color-success-light fa fa-fax mr-1"></i>+34 123 456 7890 </p>
                </address>
              </div>
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Social Media</h3>
                <div class="ms-footbar-social">
                  <a href="javascript:void(0)" class="btn-circle btn-facebook">
                    <i class="zmdi zmdi-facebook"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-twitter">
                    <i class="zmdi zmdi-twitter"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-youtube">
                    <i class="zmdi zmdi-youtube-play"></i>
                  </a>
                  <br>
                  <a href="javascript:void(0)" class="btn-circle btn-google">
                    <i class="zmdi zmdi-google"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-instagram">
                    <i class="zmdi zmdi-instagram"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-github">
                    <i class="zmdi zmdi-github"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
      <footer class="ms-footer">
        <div class="container">
          <p>Copyright &copy; WorkFast 2017</p>
        </div>-->
      </footer>
      <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
          <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
      </div>
    </div>
    <!-- ms-site-container -->
    <div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
      <div class="sb-slidebar-container">
        <header class="ms-slidebar-header">
          <div class="ms-slidebar-login">
            <a href="javascript:void(0)" class="withripple">
              <i class="zmdi zmdi-account"></i> Login</a>
            <a href="javascript:void(0)" class="withripple">
              <i class="zmdi zmdi-account-add"></i> Register</a>
          </div>
          <div class="ms-slidebar-title">
            <form class="search-form">
              <input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q" />
              <label for="search-box-slidebar">
                <i class="zmdi zmdi-search"></i>
              </label>
            </form>
            <div class="ms-slidebar-t">
              <span class="ms-logo ms-logo-sm">M</span>
              <h3>Material
                <span>Style</span>
              </h3>
            </div>
          </div>
        </header>
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
          <li class="card" role="tab" id="sch1">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc1" aria-expanded="false" aria-controls="sc1">
              <i class="zmdi zmdi-home"></i> Home </a>
            <ul id="sc1" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch1">
              <li>
                <a href="index.html">Default Home</a>
              </li>
              <li>
                <a href="home-generic-2.html">Home Black Slider</a>
              </li>
              <li>
                <a href="home-landing.html">Home Landing Intro</a>
              </li>
              <li>
                <a href="home-landing3.html">Home Landing Video</a>
              </li>
              <li>
                <a href="home-shop.html">Home Shop 1</a>
              </li>
            </ul>
          </li>
          <li class="card" role="tab" id="sch2">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc2" aria-expanded="false" aria-controls="sc2">
              <i class="zmdi zmdi-desktop-mac"></i> Pages </a>
            <ul id="sc2" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch2">
              <li>
                <a href="page-about.html">About US</a>
              </li>
              <li>
                <a href="page-team.html">Our Team</a>
              </li>
              <li>
                <a href="page-product.html">Products</a>
              </li>
              <li>
                <a href="page-services.html">Services</a>
              </li>
              <li>
                <a href="page-faq.html">FAQ</a>
              </li>
              <li>
                <a href="page-timeline_left.html">Timeline</a>
              </li>
              <li>
                <a href="page-contact.html">Contact Option</a>
              </li>
              <li>
                <a href="page-login.html">Login</a>
              </li>
              <li>
                <a href="page-pricing.html">Pricing</a>
              </li>
              <li>
                <a href="page-coming.html">Coming Soon</a>
              </li>
            </ul>
          </li>
          <li class="card" role="tab" id="sch4">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc4" aria-expanded="false" aria-controls="sc4">
              <i class="zmdi zmdi-edit"></i> Blog </a>
            <ul id="sc4" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch4">
              <li>
                <a href="blog-sidebar.html">Blog Sidebar 1</a>
              </li>
              <li>
                <a href="blog-sidebar2.html">Blog Sidebar 2</a>
              </li>
              <li>
                <a href="blog-masonry.html">Blog Masonry 1</a>
              </li>
              <li>
                <a href="blog-masonry2.html">Blog Masonry 2</a>
              </li>
              <li>
                <a href="blog-full.html">Blog Full Page 1</a>
              </li>
              <li>
                <a href="blog-full2.html">Blog Full Page 2</a>
              </li>
              <li>
                <a href="blog-post.html">Blog Post 1</a>
              </li>
              <li>
                <a href="blog-post2.html">Blog Post 2</a>
              </li>
            </ul>
          </li>
          <li class="card" role="tab" id="sch5">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc5" aria-expanded="false" aria-controls="sc5">
              <i class="zmdi zmdi-shopping-basket"></i> E-Commerce </a>
            <ul id="sc5" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch5">
              <li>
                <a href="ecommerce-filters.html">E-Commerce Sidebar</a>
              </li>
              <li>
                <a href="ecommerce-filters-full.html">E-Commerce Sidebar Full</a>
              </li>
              <li>
                <a href="ecommerce-filters-full2.html">E-Commerce Topbar Full</a>
              </li>
              <li>
                <a href="ecommerce-item.html">E-Commerce Item</a>
              </li>
              <li>
                <a href="ecommerce-cart.html">E-Commerce Cart</a>
              </li>
            </ul>
          </li>
          <li class="card" role="tab" id="sch6">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc6" aria-expanded="false" aria-controls="sc6">
              <i class="zmdi zmdi-collection-image-o"></i> Portfolio </a>
            <ul id="sc6" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch6">
              <li>
                <a href="portfolio-filters_sidebar.html">Portfolio Sidebar Filters</a>
              </li>
              <li>
                <a href="portfolio-filters_topbar.html">Portfolio Topbar Filters</a>
              </li>
              <li>
                <a href="portfolio-filters_sidebar_fluid.html">Portfolio Sidebar Fluid</a>
              </li>
              <li>
                <a href="portfolio-filters_topbar_fluid.html">Portfolio Topbar Fluid</a>
              </li>
              <li>
                <a href="portfolio-cards.html">Porfolio Cards</a>
              </li>
              <li>
                <a href="portfolio-masonry.html">Porfolio Masonry</a>
              </li>
              <li>
                <a href="portfolio-item.html">Portfolio Item 1</a>
              </li>
              <li>
                <a href="portfolio-item2.html">Portfolio Item 2</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="link" href="component-typography.html">
              <i class="zmdi zmdi-view-compact"></i> UI Elements</a>
          </li>
          <li>
            <a class="link" href="page-all.html">
              <i class="zmdi zmdi-link"></i> All Pages</a>
          </li>
        </ul>
        <div class="ms-slidebar-social ms-slidebar-block">
          <h4 class="ms-slidebar-block-title">Social Links</h4>
          <div class="ms-slidebar-social">
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-facebook">
              <i class="zmdi zmdi-facebook"></i>
              <span class="badge-pill badge-pill-pink">12</span>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-twitter">
              <i class="zmdi zmdi-twitter"></i>
              <span class="badge-pill badge-pill-pink">4</span>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-google">
              <i class="zmdi zmdi-google"></i>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-instagram">
              <i class="zmdi zmdi-instagram"></i>
              <div class="ripple-container"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  <script src="view/assets/js/plugins.min.js"></script>
  <script src="view/assets/js/app.min.js"></script>
  <script src="view/assets/js/index.js"></script>    
  </body>
  
  <script type="text/javascript" src="view/assets/js/inicio.js"></script>
</html>