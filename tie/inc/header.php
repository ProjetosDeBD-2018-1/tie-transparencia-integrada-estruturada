<!DOCTYPE hmtl>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
        
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/chart_tab_fix.css">
        <!-- <link href="css/inicialPage.css" rel="stylesheet"> -->
      
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo BASEURL; ?>js/lib/jquery-3.3.1.slim.min.js"></script>
        <script src="<?php echo BASEURL; ?>js/lib/popper.min.js"></script>
        <script src="<?php echo BASEURL; ?>js/lib/bootstrap.min.js"></script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        
        <title>Tie - Transparencia Integrada Estruturada</title>
    </head>

    <body style="background-color:#939292;">
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">            
                
            <!--"navbar-brand" É A LOGO A ESQUENA NA NAVBAR-->
            <a class="navbar-brand" href="<?php echo BASEURL; ?>index.php">
                <img src="<?php echo BASEURL; ?>icons/LOGO.png" width="30" height="30" class="d-inline-block align-top" alt="Logo"> TIE
            </a>

            <!--BOTÃO ONDE TODOS OS ITENS FICAM OCULTOS. SÓ É MOSTRADO NA DEFINIÇÃO DO "navbar-expand-lg" REALIXADA ANTERIORMENTE-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--LISTA COM OS ITENS DO NAVBAR. "mr-auto" ALINHA OS ITENS A ESQUERDA-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Consultas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item <?php if(basename($_SERVER['SCRIPT_FILENAME'])=='consulta_1.php'){echo'active';}?>" href="<?php if(basename($_SERVER['SCRIPT_FILENAME'])=='consulta_1.php'){echo'#';}else{echo BASEURL . 'view/consulta_1.php';}?>">
                            Listar Convênios com Pontos fora da Curva
                        </a>
                        <a class="dropdown-item <?php if(basename($_SERVER['SCRIPT_FILENAME'])=='consulta_2.php'){echo'active';}?>" href="<?php if(basename($_SERVER['SCRIPT_FILENAME'])=='consulta_2.php'){echo'#';}else{echo BASEURL . 'view/consulta_2.php';}?>">
                            Listar Convênios com Pontos fora da Curva (Com os Parlamentares Identificados)
                        </a>
                        <a class="dropdown-item <?php if(basename($_SERVER['SCRIPT_FILENAME'])=='consulta_3.php'){echo'active';}?>" href="<?php if(basename($_SERVER['SCRIPT_FILENAME'])=='consulta_3.php'){echo'#';}else{echo BASEURL . 'view/consulta_3.php';}?>">
                            Listar Quantidade de Emendas com mais de Uma Proposta
                        </a>
                    </div>
                  </li>
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Pesquisa" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisa</button>
                </form> -->
              </div>
        </nav>
    <div>