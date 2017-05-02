<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Painel de Controle</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
	<?php if (login_check($mysqli) == true) : ?>
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
            }

            function logout(){

            }
        </script>

        <?php
            function imprimeForms(){
                for($i = 1; $i <= 12; $i++){
                    echo "<div class='row'>";
                    if($i < 10){
                        echo "0$i - ";
                    }else{
                        echo "$i - ";
                    }                
                    echo "<div class='form-group'>";
                    echo "<input type='text' class='form-control' placeholder='Nome'>";
                    echo "</div>";
                    echo "<div class='form-group'>";
                    echo "<input type='date' class='form-control'>";
                    echo "</div>";
                    echo "<div class='form-group'>";
                    echo "<input type='text' class='form-control' placeholder='CPF'>";
                    echo "</div>";
                    echo "</div>";
                    echo "<br>";
                }
                echo "<br>";
                echo "<div class='form-group'>";
                echo "<input type='submit' class='btn btn-info center-block'>";
                echo "</div>";
            }

            function imprimeTimes(){
                for($i = 1; $i <= 20; $i++){
                    echo"<option>Time $i</option>";
                }
            }

        ?>

	    <div id="wrapper">

	        <!-- Navigation -->
	        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a onClick="visualizarForm('0');" class="navbar-brand" href="controlPanel.php">PAINEL DE CONTROLE</a>
	            </div>
	            <!-- Top Menu Items -->
	            <ul class="nav navbar-right top-nav">
	                
	                <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo htmlentities($_SESSION['username']); ?> <b class="caret"></b></a>
	                    <ul class="dropdown-menu">
	                        
	                        <li>
	                            <a href="includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
	                        </li>
	                    </ul>
	                </li>
	            </ul>
	            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
	            <div class="collapse navbar-collapse navbar-ex1-collapse">
	                <ul class="nav navbar-nav side-nav">
	                    <li>
	                        <a onClick="visualizarForm('1');" href="#"><i class="fa fa-fw fa-dashboard"></i> Cadastrar Time</a>
	                    </li>
	                    <li>
	                        <a onClick="visualizarForm('2');" href="#"><i class="fa fa-fw fa-bar-chart-o"></i> Cadastrar Jogadores</a>
	                    </li>
	                    <li>
	                        <a onClick="visualizarForm('3');" href="#"><i class="fa fa-fw fa-table"></i> Atualizar Dados</a>
	                    </li>
	                    
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	        </nav>

	        <div id="page-wrapper">
	        	<div id="0" style="display:block;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-3 text-center" style="padding-top: 10%; padding-botton: 10%">
                                <h2><strong>Bem vindo <?php echo htmlentities($_SESSION['username']); ?>!</strong></h2>
                                <p style="font-size: 20px;">
                                    Você como administrador pode cadastrar times e jogadores, e atualizar informações dos mesmos, como total de gols, faltas, dentre outros itens.<br><br>
                                    Tenha um bom trabalho!
                                </p>
                            </div>                        
                        </div>
                    </div>
                </div>
                
                <!-- Page Content -->
                <div id="1" style="display: none;">
                    <div class="container-fluid">
                        <div class="row">                    
                            <div class="col-lg-4 col-lg-offset-4" style="padding-top: 10%; padding-botton: 10%">                            
                                <form enctype="multipart/form-data" method="post" action="">                        							

                                    <img id="image" class="center-block" style="width:100px; height:100px; border: 2px solid #DDD ; border-radius: 3px; padding:5px;" src="img/emblema.png"/>																			
                                    <br>

                                    <center><label class="btn btn-info">
                                        Escolher emblema
                                        <input type="file" id="files" style="display: none;">    				
                                    </label></center>												                            

                                    <h4 class="text-center">Dados do time</h4>
                                    <div class="form-group">													
                                        <input type="text" class="form-control" placeholder="Nome do time">									
                                    </div>
                                    <div class="form-group">														
                                        <input type="text" class="form-control" placeholder="Técnico">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-info center-block">
                                    </div>
                                </form>											                                
                            </div>                    
                        </div>
                    </div>
                </div><!-- /#page-content-wrapper -->
                <div id="2" style="display: none;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1" style="padding-top: 5%; padding-botton: 20%">                            
                                <center>
                                <form enctype="multipart/form-data" method="post" action="" class="form-inline">
                                    <h4 class="text-center">Selecione o time</h4>
                                    <select class="form-control">
                                        <?php imprimeTimes() ?>
                                    </select>
                                    <br><br>
                                    <h4 class="text-center">Dados dos jogadores</h4>

                                    <?php imprimeForms() ?>                                                                                               <br><br><br>         
                                </form>
                                </center>										                                
                            </div>
                        </div>
                    </div>
                </div><!-- /#page-content-wrapper -->
                <div id="3" style="display: none;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1>Testanto 3</h1>
                                <p>cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc
                                cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc
                                cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc
                                cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc
                                cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc
                                cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc</p>

                            </div>
                        </div>
                    </div>
                </div>	            

	        </div>
	        <!-- /#page-wrapper -->

	    </div>
	    <!-- /#wrapper -->

	    <!-- jQuery -->
	    <script src="js/jquery.js"></script>

	    <!-- Bootstrap Core JavaScript -->
	    <script src="js/bootstrap.min.js"></script>

	    <!-- Morris Charts JavaScript -->
	    <script src="js/plugins/morris/raphael.min.js"></script>
	    <script src="js/plugins/morris/morris.min.js"></script>
	    <script src="js/plugins/morris/morris-data.js"></script>

	    <script type="text/javascript">
            document.getElementById("files").onchange = function () {
                var reader = new FileReader();

                reader.onload = function (e) {
                // get loaded data and render thumbnail.
                document.getElementById("image").src = e.target.result;		                        
              };
                // read the image file as a data URL.
                reader.readAsDataURL(this.files[0]);
            };
        </script>
	<?php else : ?>
        <p>
        	<span class="error">Você não está autorizado a acessar essa página.</span> Por favor faça <a href="index.php">login</a>.
        </p>
   	<?php endif; ?>
</body>

</html>
