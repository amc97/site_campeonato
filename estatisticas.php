<!DOCTYPE html>
<html>
<head>
	<title>Estatísticas - CAMPEONATO MILAGRENSE DE FUTSAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrapUsuario/css/bootstrap.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<script src="bootstrapUsuario/js/jquery.js"></script>
	<script src="bootstrapUsuario/js/bootstrap.js"></script>
  <script src="bootstrapUsuario/js/bootstrap.min.js"></script>
</head>
<body>
    
    <script>
        function visualizarForm(opcao) {       
            if(opcao == '0') {                          
                document.getElementById('0').style.display = 'block';
                document.getElementById('1').style.display = 'none';
                document.getElementById('2').style.display = 'none';
                document.getElementById('3').style.display = 'none';
            }
            if(opcao == '1') {                          
                document.getElementById('0').style.display = 'none';
                document.getElementById('1').style.display = 'block';
                document.getElementById('2').style.display = 'none';
                document.getElementById('3').style.display = 'none';
            }
            if(opcao == '2') {          
                document.getElementById('0').style.display = 'none';
                document.getElementById('1').style.display = 'none';
                document.getElementById('2').style.display = 'block';
                document.getElementById('3').style.display = 'none';       
            }
            if(opcao == '3') {          
                document.getElementById('0').style.display = 'none';
                document.getElementById('1').style.display = 'none';
                document.getElementById('2').style.display = 'none';
                document.getElementById('3').style.display = 'block';       
            }
            if(opcao == '4') {                          
                document.getElementById('4').style.display = 'block';
                document.getElementById('5').style.display = 'none';
                document.getElementById('6').style.display = 'none';
                document.getElementById('7').style.display = 'none';
            }
            if(opcao == '5') {                          
                document.getElementById('4').style.display = 'none';
                document.getElementById('5').style.display = 'block';
                document.getElementById('6').style.display = 'none';
                document.getElementById('7').style.display = 'none';
            }
            if(opcao == '6') {          
                document.getElementById('4').style.display = 'none';
                document.getElementById('5').style.display = 'none';
                document.getElementById('6').style.display = 'block';
                document.getElementById('7').style.display = 'none';       
            }
            if(opcao == '7') {          
                document.getElementById('4').style.display = 'none';
                document.getElementById('5').style.display = 'none';
                document.getElementById('6').style.display = 'none';
                document.getElementById('7').style.display = 'block';       
            }
        }
    </script>

    
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
  <br><br><br><br><br>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">            
            <div class="panel panel-default">
                <legend class="text-center">Tabelas de classificação</legend>
                <div class="panel-body text-center">
                    <div class="col-xs-3"><button class="btn btn-success" onClick="visualizarForm('0');" href="#">1° Divisão</button></div>
                    <div class="col-xs-3"><button class="btn btn-info" onClick="visualizarForm('1');" href="#">2° Divisão</button></div>
                    <div class="col-xs-3"><button class="btn btn-warning" onClick="visualizarForm('2');" href="#">3° Divisão</button></div>
                    <div class="col-xs-3"><button class="btn btn-danger" onClick="visualizarForm('3');" href="#">Feminino</button></div>
                </div>
                <div id="0" class="row" style="display: block;">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="panel panel-default">
                                    <table class="table table-striped text-center">
                                        <tr><th class="text-center">Grupo A</th></tr>
                                        <tr>
                                            <th class="text-center">Equipe</th>
                                            <th class="text-center">Pts</th>
                                            <th class="text-center">J</th>
                                            <th class="text-center">V</th>
                                            <th class="text-center">E</th>
                                            <th class="text-center">D</th>
                                            <th class="text-center">GF</th>
                                            <th class="text-center">GC</th>
                                            <th class="text-center">SG</th>
                                        </tr>
                                        <tr>
                                            <td>U. JUVENTUDE</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>6</td>
                                            <td>2</td>
                                            <td>4</td>
                                        </tr>           
                                        <tr>
                                            <td>TAPEÇARIA</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>2</td>
                                            <td>2</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>GABOLAS</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>2</td>
                                            <td>2</td>
                                            <td>0</td>
                                        </tr><tr>
                                            <td>VILA REAL</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>6</td>
                                            <td>-4</td>
                                        </tr>  
                                    </table>
                                </div>
                                <div class="panel panel-default">
                                    <table class="table table-striped text-center">
                                    <tr><th class="text-center">Grupo B</th></tr>
                                    <tr>
                                        <th class="text-center">Equipe</th>
                                        <th class="text-center">Pts</th>
                                        <th class="text-center">J</th>
                                        <th class="text-center">V</th>
                                        <th class="text-center">E</th>
                                        <th class="text-center">D</th>
                                        <th class="text-center">GF</th>
                                        <th class="text-center">GC</th>
                                        <th class="text-center">SG</th>
                                    </tr>
                                    <tr>
                                        <td>AUF</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>5</td>
                                        <td>2</td>
                                        <td>3</td>
                                    </tr>           
                                    <tr>
                                        <td>S. CECÍLIA</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>CHELSEA</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>-1</td>
                                    </tr><tr>
                                        <td>FUTFLA</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>5</td>
                                        <td>-3</td>
                                    </tr>  
                                </table>
                                </div>
                                <div class="panel panel-default">
                                    <table class="table table-striped text-center">
                                    <tr><th class="text-center">Grupo C</th></tr>
                                    <tr>
                                        <th class="text-center">Equipe</th>
                                        <th class="text-center">Pts</th>
                                        <th class="text-center">J</th>
                                        <th class="text-center">V</th>
                                        <th class="text-center">E</th>
                                        <th class="text-center">D</th>
                                        <th class="text-center">GF</th>
                                        <th class="text-center">GC</th>
                                        <th class="text-center">SG</th>
                                    </tr>
                                    <tr>
                                        <td>MATSUBARA</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>14</td>
                                        <td>0</td>
                                        <td>14</td>
                                    </tr>           
                                    <tr>
                                        <td>BORUSSIA</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>14</td>
                                        <td>-14</td>
                                    </tr>
                                    <tr>
                                        <td>PALMEIRAS</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr><tr>
                                        <td>ROSÁRIO</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>  
                                </table>
                                </div>
                                <div class="panel panel-default">
                                    <table class="table table-striped text-center">
                                    <tr><th class="text-center">Grupo D</th></tr>
                                    <tr>
                                        <th class="text-center">Equipe</th>
                                        <th class="text-center">Pts</th>
                                        <th class="text-center">J</th>
                                        <th class="text-center">V</th>
                                        <th class="text-center">E</th>
                                        <th class="text-center">D</th>
                                        <th class="text-center">GF</th>
                                        <th class="text-center">GC</th>
                                        <th class="text-center">SG</th>
                                    </tr>
                                    <tr>
                                        <td>ARSENAL</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>           
                                    <tr>
                                        <td>CORINTHIANS</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>UNIFLA</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr><tr>
                                        <td>OITIS</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>  
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="1" class="row" style="display: none;">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="panel panel-default">
                                    <table class="table table-striped text-center">
                                        <tr><th class="text-center">Grupo A</th></tr>
                                        <tr>
                                            <th class="text-center">Equipe</th>
                                            <th class="text-center">Pts</th>
                                            <th class="text-center">J</th>
                                            <th class="text-center">V</th>
                                            <th class="text-center">E</th>
                                            <th class="text-center">D</th>
                                            <th class="text-center">GF</th>
                                            <th class="text-center">GC</th>
                                            <th class="text-center">SG</th>
                                        </tr>
                                        <tr>
                                            <td>U. MILAGRENSE</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                        </tr>           
                                        <tr>
                                            <td>EJC</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>BARCELONA</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>-1</td>
                                        </tr><tr>
                                            <td>U. BENEDITO</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>3</td>
                                            <td>-2</td>
                                        </tr>  
                                    </table>
                                </div>
                                <div class="panel panel-default">
                                    <table class="table table-striped text-center">
                                    <tr><th class="text-center">Grupo B</th></tr>
                                    <tr>
                                        <th class="text-center">Equipe</th>
                                        <th class="text-center">Pts</th>
                                        <th class="text-center">J</th>
                                        <th class="text-center">V</th>
                                        <th class="text-center">E</th>
                                        <th class="text-center">D</th>
                                        <th class="text-center">GF</th>
                                        <th class="text-center">GC</th>
                                        <th class="text-center">SG</th>
                                    </tr>
                                    <tr>
                                        <td>AUDAX</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>5</td>
                                        <td>1</td>
                                        <td>4</td>
                                    </tr>           
                                    <tr>
                                        <td>LIMOEIRO</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>JARAGUÁ</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>0</td>
                                    </tr><tr>
                                        <td>A. MILAGRENSE</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>5</td>
                                        <td>-4</td>
                                    </tr>  
                                </table>
                                </div>
                                <div class="panel panel-default">
                                    <table class="table table-striped text-center">
                                    <tr><th class="text-center">Grupo C</th></tr>
                                    <tr>
                                        <th class="text-center">Equipe</th>
                                        <th class="text-center">Pts</th>
                                        <th class="text-center">J</th>
                                        <th class="text-center">V</th>
                                        <th class="text-center">E</th>
                                        <th class="text-center">D</th>
                                        <th class="text-center">GF</th>
                                        <th class="text-center">GC</th>
                                        <th class="text-center">SG</th>
                                    </tr>
                                    <tr>
                                        <td>TOTTENHAM</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>2</td>
                                    </tr>           
                                    <tr>
                                        <td>CEARÁ</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>PSG</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>3</td>
                                        <td>-2</td>
                                    </tr><tr>
                                        <td>ARARAS</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>3</td>
                                        <td>-2</td>
                                    </tr>  
                                </table>
                                </div>
                                <div class="panel panel-default">
                                    <table class="table table-striped text-center">
                                    <tr><th class="text-center">Grupo D</th></tr>
                                    <tr>
                                        <th class="text-center">Equipe</th>
                                        <th class="text-center">Pts</th>
                                        <th class="text-center">J</th>
                                        <th class="text-center">V</th>
                                        <th class="text-center">E</th>
                                        <th class="text-center">D</th>
                                        <th class="text-center">GF</th>
                                        <th class="text-center">GC</th>
                                        <th class="text-center">SG</th>
                                    </tr>
                                    <tr>
                                        <td>SHAKHTAR</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>           
                                    <tr>
                                        <td>SKF</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>LIVERPOOL</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr><tr>
                                        <td>PONTE PRETA</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>  
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="2" class="row" style="display: none;">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="panel panel-default">
                                    <table class="table table-striped text-center">
                                        <tr><th class="text-center">Grupo A</th></tr>
                                        <tr>
                                            <th class="text-center">Equipe</th>
                                            <th class="text-center">Pts</th>
                                            <th class="text-center">J</th>
                                            <th class="text-center">V</th>
                                            <th class="text-center">E</th>
                                            <th class="text-center">D</th>
                                            <th class="text-center">GF</th>
                                            <th class="text-center">GC</th>
                                            <th class="text-center">SG</th>
                                        </tr>
                                        <tr>
                                            <td>CHELSEA B</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>5</td>
                                            <td>2</td>
                                            <td>3</td>
                                        </tr>           
                                        <tr>
                                            <td>RIVER PLAY</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>5</td>
                                            <td>4</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>BAYER</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>-3</td>
                                        </tr><tr>
                                            <td>GAF MILA</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>-3</td>
                                        </tr>  
                                    </table>
                                </div>
                                <div class="panel panel-default">
                                    <table class="table table-striped text-center">
                                    <tr><th class="text-center">Grupo B</th></tr>
                                    <tr>
                                        <th class="text-center">Equipe</th>
                                        <th class="text-center">Pts</th>
                                        <th class="text-center">J</th>
                                        <th class="text-center">V</th>
                                        <th class="text-center">E</th>
                                        <th class="text-center">D</th>
                                        <th class="text-center">GF</th>
                                        <th class="text-center">GC</th>
                                        <th class="text-center">SG</th>
                                    </tr>
                                    <tr>
                                        <td>MAMOEIRO</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>4</td>
                                        <td>1</td>
                                        <td>3</td>
                                    </tr>           
                                    <tr>
                                        <td>VELHO BARREIRO</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>15 DA RUA</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>-1</td>
                                    </tr><tr>
                                        <td>OKARIRI</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>-3</td>
                                    </tr>  
                                </table>
                                </div>
                                <div class="panel panel-default">
                                    <table class="table table-striped text-center">
                                    <tr><th class="text-center">Grupo C</th></tr>
                                    <tr>
                                        <th class="text-center">Equipe</th>
                                        <th class="text-center">Pts</th>
                                        <th class="text-center">J</th>
                                        <th class="text-center">V</th>
                                        <th class="text-center">E</th>
                                        <th class="text-center">D</th>
                                        <th class="text-center">GF</th>
                                        <th class="text-center">GC</th>
                                        <th class="text-center">SG</th>
                                    </tr>
                                    <tr>
                                        <td>FORA O BAILE</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>2</td>
                                    </tr>           
                                    <tr>
                                        <td>A. CATARINENSE</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>SÃO DOMINGOS</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>-1</td>
                                    </tr><tr>
                                        <td>SANTA RITA</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>3</td>
                                        <td>-2</td>
                                    </tr>  
                                </table>
                                </div>
                                <div class="panel panel-default">
                                    <table class="table table-striped text-center">
                                    <tr><th class="text-center">Grupo D</th></tr>
                                    <tr>
                                        <th class="text-center">Equipe</th>
                                        <th class="text-center">Pts</th>
                                        <th class="text-center">J</th>
                                        <th class="text-center">V</th>
                                        <th class="text-center">E</th>
                                        <th class="text-center">D</th>
                                        <th class="text-center">GF</th>
                                        <th class="text-center">GC</th>
                                        <th class="text-center">SG</th>
                                    </tr>
                                    <tr>
                                        <td>AFRICA</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>           
                                    <tr>
                                        <td>UNIMILF</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>TABOCAS JR</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr><tr>
                                        <td>TABAJARA</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>  
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="3" class="row" style="display: none;">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="panel panel-default">
                                    <table class="table table-striped text-center">
                                        <tr><th class="text-center">Grupo Único</th></tr>
                                        <tr>
                                            <th class="text-center">Equipe</th>
                                            <th class="text-center">Pts</th>
                                            <th class="text-center">J</th>
                                            <th class="text-center">V</th>
                                            <th class="text-center">E</th>
                                            <th class="text-center">D</th>
                                            <th class="text-center">GF</th>
                                            <th class="text-center">GC</th>
                                            <th class="text-center">SG</th>
                                        </tr>
                                        <tr>
                                            <td>ROSÁRIO</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>           
                                        <tr>
                                            <td>PROFISSIONALIZANTE</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>3</td>
                                            <td>-3</td>
                                        </tr>
                                        <tr>
                                            <td>MILAGRENSE</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr><tr>
                                            <td>CORAL</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>  
                                    </table>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <legend class="text-center">Artilheiros</legend>
                <div class="panel-body text-center">
                    <div class="col-xs-3"><button class="btn btn-success" onClick="visualizarForm('4');" href="#">1° Divisão</button></div>
                    <div class="col-xs-3"><button class="btn btn-info" onClick="visualizarForm('5');" href="#">2° Divisão</button></div>
                    <div class="col-xs-3"><button class="btn btn-warning" onClick="visualizarForm('6');" href="#">3° Divisão</button></div>
                    <div class="col-xs-3"><button class="btn btn-danger" onClick="visualizarForm('7');" href="#">Feminino</button></div>
                </div>
                <div id="4" class="row" style="display: block;">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="panel panel-default">
                                    <table class="table table-striped text-center">                                        
                                        <tr>
                                            <th class="text-center">Posição</th>
                                            <th class="text-center">Atleta</th>
                                            <th class="text-center">Equipe</th>
                                            <th class="text-center">Gols</th>                                            
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>José Carlos Pedro dos Santos</td>
                                            <td>Matsubara</td>
                                            <td>4</td>                                            
                                        </tr>  
                                        <tr>
                                            <td>2</td>
                                            <td>José Jallison Oliveira Silva</td>
                                            <td>Matsubara</td>
                                            <td>4</td>                                            
                                        </tr>  
                                        <tr>
                                            <td>3</td>
                                            <td>Eudimar Cabral dos Santos	</td>
                                            <td>U. Juventude</td>
                                            <td>2</td>                                            
                                        </tr>  
                                        <tr>
                                            <td>4</td>
                                            <td>Francisco Eudes da Silva	</td>
                                            <td>Tapeçaria</td>
                                            <td>2</td>                                            
                                        </tr>  
                                        <tr>
                                            <td>5</td>
                                            <td>Francisco Janilson Pessoa Feitosa</td>
                                            <td>Matsubara</td>
                                            <td>2</td>                                            
                                        </tr>  
                                    </table>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div id="5" class="row" style="display: none;">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="panel panel-default">
                                    <table class="table table-striped text-center">                                
                                        <tr>
                                            <th class="text-center">Posição</th>
                                            <th class="text-center">Atleta</th>
                                            <th class="text-center">Equipe</th>
                                            <th class="text-center">Gols</th>                                            
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Cícero Vinicius Leonardo	</td>
                                            <td>Audax</td>
                                            <td>2</td>                                            
                                        </tr>  
                                        <tr>
                                            <td>2</td>
                                            <td>Emanuel Casseano Monteiro	</td>
                                            <td>Audax</td>
                                            <td>2</td>                                            
                                        </tr>  
                                        <tr>
                                            <td>3</td>
                                            <td>Francisco Diogo Maia Azêvedo
                                            </td>
                                            <td>U. Milagrense</td>
                                            <td>2</td>                                            
                                        </tr>  
                                        <tr>
                                            <td>4</td>
                                            <td>Antônio Washington Teles de Sousa</td>
                                            <td>Barcelona</td>
                                            <td>1</td>                                            
                                        </tr>  
                                        <tr>
                                            <td>5</td>
                                            <td>Carlos ítalo Morais de Araújo</td>
                                            <td>EJC</td>
                                            <td>1</td>                                            
                                        </tr>  
                                    </table>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div id="6" class="row" style="display: none;">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="panel panel-default">
                                    <table class="table table-striped text-center">                                
                                        <tr>
                                            <th class="text-center">Posição</th>
                                            <th class="text-center">Atleta</th>
                                            <th class="text-center">Equipe</th>
                                            <th class="text-center">Gols</th>                                            
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Cícero Dário Ferreira Raimundo</td>
                                            <td>Fora o Baile</td>
                                            <td>3</td>                                            
                                        </tr>  
                                        <tr>
                                            <td>2</td>
                                            <td>Cícero Joel Tonheiro Ribeiro</td>
                                            <td>River Play</td>
                                            <td>2</td>                                            
                                        </tr>  
                                        <tr>
                                            <td>3</td>
                                            <td>Everton Moura da Silva	</td>
                                            <td>Velho Barreiro</td>
                                            <td>2</td>                                            
                                        </tr>  
                                        <tr>
                                            <td>4</td>
                                            <td>Fábio Araújo Claudino	</td>
                                            <td>River Play</td>
                                            <td>2</td>                                            
                                        </tr>  
                                        <tr>
                                            <td>5</td>
                                            <td>João Paulo Goes de Lima	</td>
                                            <td>Mamoeiro</td>
                                            <td>2</td>                                            
                                        </tr>  
                                    </table>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div id="7" class="row" style="display: none;">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="panel panel-default">
                                    <table class="table table-striped text-center">                                
                                        <tr>
                                            <th class="text-center">Posição</th>
                                            <th class="text-center">Atleta</th>
                                            <th class="text-center">Equipe</th>
                                            <th class="text-center">Gols</th>                                            
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Dyfane Iris dos Santos Silva	</td>
                                            <td>Rosário</td>
                                            <td>1</td>                                            
                                        </tr>  
                                        <tr>
                                            <td>2</td>
                                            <td>Sabrina da Silva Oliveira Matias	</td>
                                            <td>Rosário</td>
                                            <td>1</td>                                            
                                        </tr>  
                                        <tr>
                                            <td>3</td>
                                            <td>Tereza Andréia Pereira Silva	</td>
                                            <td>Rosário</td>
                                            <td>1</td>                                            
                                        </tr>                              
                                    </table>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
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