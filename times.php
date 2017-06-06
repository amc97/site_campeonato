<?php
include_once 'includes/functions.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Times - CAMPEONATO MILAGRENSE DE FUTSAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrapUsuario/css/bootstrap.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<script src="bootstrapUsuario/js/jquery.js"></script>
	<script src="bootstrapUsuario/js/bootstrap.js"></script>
  <script src="bootstrapUsuario/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>  
    </div>
    
    <a class="navbar-brand" href="#">CAMPEONATO MILAGRENSE DE FUTSAL</a>
    
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><br><br></li>
      </ul>
    </div>

    <div style="background-color: #282525">
      <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav nav-pills nav-justified">
          <li></li>
          <li></li>
          <li><a href="index.php">HOME</a></li>
          <li><a href="times.php">TIMES</a></li>
          <li><a href="estatisticas.php">ESTATÍSTICAS</a></li>
          <li><a href="#">GALERIA</a></li>
          <li></li>
          <li></li>
          </li>
        </ul>
      </div>
    </div>
  </nav>  
  <br><br><br><br>

  <div id="2" style="display: block;">
    <div class="container-fluid">
      <div class="row">
          <h3 class="text-center"><strong>Selecione o time</strong></h3>
          <div class="col-md-10 col-md-offset-1 text-center" style="padding-top: 1%; padding-bottom: 1%;">  
              <?php
                getTimes('divisao 1', '1° Divisão');
                getTimes('divisao 2', '2° Divisão');
                getTimes('divisao 3', '3° Divisão');
                getTimes('feminino', 'Feminino');
              ?>
          </div>
      </div>
    </div>
  </div>

  <br>


  <div class="row rowRodape">
    <div class="col-md-4">
      <img width="40%" src="img/logo.png">
    </div>
    <div class="col-md-4 text-center">
      <br>
      Governo Municipal de Milagres | 2017
    </div>

    <div class="col-md-4 text-right">
      SIGA-NOS NAS REDES SOCIAIS<br>
      <a href="http://www.milagres.ce.gov.br" title="Site" target="_blank" class="btn btn-default btn-sm"><span class="fa fa-globe"></span></a>
      <a href="https://www.facebook.com/governodemilagres.ce/" title="Facebook" target="_blank" class="btn btn-default btn-sm"><span class="fa fa-facebook"></span></a>
      <a href="https://www.instagram.com/gov.milagres/" title="Instagram" target="_blank" class="btn btn-default btn-sm"><span class="fa fa-instagram"></span></a>
      <a href="#" title="Twitter" class="btn btn-default btn-sm"><span class="fa fa-twitter"></span></a>
      <a href="#" title="Youtube" class="btn btn-default btn-sm"><span class="fa fa-youtube"></span></a>
    </div>
  </div>
</body>
</html>