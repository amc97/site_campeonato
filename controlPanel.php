<?php
/**
 * Copyright (C) 2013 peredur.net
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel de controle</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">    
        <link href="css/simple-sidebar.css" rel="stylesheet">
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

            <div id="wrapper" class="toggled">

                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <li class="sidebar-brand">
                            <a onClick="visualizarForm('0');" href="#">Painel de Controle</a>
                        </li>
                        <li>
                            <a onClick="visualizarForm('1');" href="#">Cadastrar time</a>
                        </li>
                        <li>
                            <a onClick="visualizarForm('2');" href="#">Cadastrar jogadores</a>
                        </li>
                        <li>
                            <a onClick="visualizarForm('3');" href="#">Atualizar dados</a>
                        </li>                
                        <li>
                            <a href="includes/logout.php">Sair</a>
                        </li>           
                    </ul>
                </div>
                <!-- /#sidebar-wrapper -->
                
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
                </div><!-- /#page-content-wrapper -->

            </div>
            <!-- /#wrapper -->

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
