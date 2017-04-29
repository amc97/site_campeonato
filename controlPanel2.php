<!DOCTYPE html>
<html lang="en">
    
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Painel de controle</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <script>
            function visualizarForm(opcao) {       
                if(opcao == '1') {                          
                    document.getElementById('1').style.display = 'block';
                    document.getElementById('2').style.display = 'none';
                    document.getElementById('3').style.display = 'none';
                }
                if(opcao == '2') {          
                    document.getElementById('1').style.display = 'none';
                    document.getElementById('2').style.display = 'block';
                    document.getElementById('3').style.display = 'none';       
                }
                if(opcao == '3') {          
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
                    <a href="#">
                        Painel de Controle
                    </a>
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
                    <a href="#">Sair</a>
                </li>           
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="1" style="display: block;">
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
    
</body>

</html>
