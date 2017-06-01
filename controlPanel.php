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
            var cont = 2;
            
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

            function geraForm(){
                var aux = "form" + cont;
                document.getElementById(aux).style.display = 'block';
                cont++;
            }
        </script>

        <?php
            function imprimeForms(){
                for($i = 1; $i <= 12; $i++){
                    
                    if($i == 1){
                        echo "<div id='form$i' style='display: block;'>";
                    }else{
                        echo "<div id='form$i' style='display: none;'>";
                    }    
                    echo "<div class='panel panel-default'>";
                    echo "<div class='panel-body'>";
                    echo "<div class='form-group'>";
                    if($i <= 5){
                        echo "<input type='text' class='form-control' placeholder='Nome do jogador $i' name='nome$i' required='required'>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<input type='text' class='form-control' placeholder='CPF' name='cpf$i' required='required'>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<input type='number' class='form-control' placeholder='N° da camisa' name='num$i' required='required'>";
                    }else{
                        echo "<input type='text' class='form-control' placeholder='Nome do jogador $i' name='nome$i'>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<input type='text' class='form-control' placeholder='CPF' name='cpf$i'>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<input type='number' class='form-control' placeholder='N° da camisa' name='num$i'>";
                    }
                    echo "</div>";                    
                    echo "</div>";                   
                    echo "</div>";                    
                    echo "</div>";                    
                }                
                
            }

        
            function getTimes(){
                // Seleciona todos as imagens
                $conn = @mysql_connect("localhost", "root", "") or die ("Problemas na conexão 1. " . mysql_error());
                $db = @mysql_select_db("secure_login", $conn) or die ("Problemas na conexão 2. " . mysql_error());

                $sql = mysql_query("SELECT emblema FROM times ORDER BY nome");
            
                $flag = true;                 
                
                while ($flag) {                   
                    echo "<ul class='list-inline'>";
                    for ($i=0; $i < 10; $i++) {
                        $imgs = mysql_fetch_object($sql);
                        if($imgs){ 
                            echo "<li>";
                                echo "<a href='#'><img style='margin: 5px; width:70px; height:70px; border: 2px solid #DDD ; border-radius: 3px; padding:5px;' src='emblemas/".$imgs->emblema."'/></a>";
                            echo "</li>";
                        }else{
                            $flag = false;
                        }
                    }                           
                    echo "</ul>";
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
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i> <?php echo htmlentities($_SESSION['username']); ?> <b class="caret"></b></a>
	                    <ul class="dropdown-menu">
	                        
	                        <li>
	                            <a href="includes/logout.php"><i class="fa fa-fw fa-power-off fa-lg"></i> Log Out</a>
	                        </li>
	                    </ul>
	                </li>
	            </ul>
	            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
	            <div class="collapse navbar-collapse navbar-ex1-collapse">
	                <ul class="nav navbar-nav side-nav">
	                    <li>
	                        <a onClick="visualizarForm('1');" href="#"><i class="fa fa-futbol-o fa-lg" aria-hidden="true"></i> Cadastrar Time</a>
	                    </li>
	                    <li>
	                        <a onClick="visualizarForm('2');" href="#"><i class="fa fa-users fa-lg" aria-hidden="true"></i> Atualizar estatísticas</a>
	                    </li>
	                    <li>
	                        <a onClick="visualizarForm('3');" href="#"><i class="fa fa-refresh fa-lg" aria-hidden="true"></i> Gerenciar conteúdo</a>
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
                            <div class="col-lg-6 col-lg-offset-3" style="padding-top: 10%; padding-botton: 10%">                            
                                <form enctype="multipart/form-data" method="post" action="includes/upload.php">				
                                    <img id="image" class="center-block" style="width:100px; height:100px; border: 2px solid #DDD ; border-radius: 3px; padding:5px;" src="img/emblema.png"/>				
                                    <br>
                                    <center>
                                        <label class="btn btn-info">
                                            Escolher emblema
                                            <input type="file" id="files" style="display: none;" name="emblema">    				
                                        </label>
                                    </center>												                            

                                    <h4 class="text-center">Dados do time</h4>
                                    <div class="form-group">													
                                        <input type="text" class="form-control" placeholder="Nome do time" name="nome">							
                                    </div>
                                    
                                    <div class="form-group">														
                                        <input type="text" class="form-control" placeholder="Nome do técnico" name="tecnico">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                          <option>1° Divisão</option>
                                          <option>2° Divisão</option>
                                          <option>3° Divisão</option>
                                          <option>Feminino</option>                                          
                                        </select>
                                    </div>
                                    <h4 class="text-center">Jogadores</h4>
                                    <?php
                                        imprimeForms();
                                    ?>
                                    <div onclick="geraForm();" class="btn btn-default btn-sm"><span class="fa fa-plus"></span></div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-info center-block" name="upload">
                                    </div>
                                </form>											                                
                            </div>                    
                        </div>
                    </div>
                </div><!-- /#page-content-wrapper -->
                <div id="2" style="display: none;">
                    <div class="container-fluid">
                        <div class="row">
                            <h3 class="text-center"><strong>Selecione o time</strong></h3>
                            <div class="col-md-10 col-md-offset-1 text-center" style="padding-top: 5%; padding-botton: 5%">        
                                <?php
                                    getTimes();
                                ?>
                            </div>
                        </div>
                    </div>
                </div><!-- /#page-content-wrapper -->
                <div id="3" style="display: none;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h1>Informações</h1>
                                <p>Esta área está em desenvolvimento.</p>

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
