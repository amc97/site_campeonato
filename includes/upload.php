<?php
// Conexão com o banco de dados
$conn = @mysql_connect("localhost", "root", "") or die ("Problemas na conexão 1. " . mysql_error());
$db = @mysql_select_db("secure_login", $conn) or die ("Problemas na conexão 2. " . mysql_error());

 
// Se o usuário clicou no botão cadastrar efetua as ações
if (isset($_POST['upload'])) {
	
	// Recupera os dados do time	    
    $imagem = $_FILES["emblema"];
    $nome = $_POST['nome'];
    $tecnico = $_POST['tecnico'];
    $divisao = $_POST['divisao'];
	
	// Se o emblema estiver sido selecionado
	if (!empty($imagem["name"])) {				
 
		$error = array();
 
    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp|jpg)$/", $imagem["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 		
 
		// Se não houver nenhum erro
		if (count($error) == 0) {
		
			// Pega extensão da imagem			
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $extImg);
 
        	// Gera um nome único para as imagem            
        	$nome_imagem = md5(uniqid(time())) . "." . $extImg[1];
 
        	// Caminho de onde ficará as imagem            
        	$caminho_imagem = "../emblemas/" . $nome_imagem;
 
			// Faz o upload das imagens para seu respectivo caminho            
			move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
		
			// Cadastra o time no banco
            $sql = mysql_query("INSERT INTO times(nome, emblema, tecnico, divisao) VALUES ('$nome','$nome_imagem', '$tecnico', '$divisao')") or die("Erro " .mysql_error());            
		   
            // Lê os jogadores cadastrados
            for($i = 0; $i < 12; $i++){
                $jogador = "nome$i";
                $cpf_jogador = "cpf$i";
                $num_camisa = "num$i";
                // Se os campos não estiverem vazios cadastra os jogadores
                if(isset($_POST[$jogador]) && isset($_POST[$cpf_jogador]) && isset($_POST[$num_camisa])){
                    if($_POST[$jogador] != "" && $_POST[$cpf_jogador] != "" && $_POST[$num_camisa] != ""){
                        $sql = mysql_query("INSERT INTO jogador(nome, cpf, numero, nome_time) VALUES ('$_POST[$jogador]', '$_POST[$cpf_jogador]', '$_POST[$num_camisa]', '$nome')");
                    }
                }
            }
            
			if ($sql){                
                header('Location: ../controlPanel.php');                
            }else{
                echo "<h2>Erro no cadastro</h2>";
            }
            
            
            
            
            
			// Se os dados forem inseridos com sucesso
		}
	
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo "<h3 style='text-align: center'>$erro</h3><br />";
			}
		}
	}
}
?>