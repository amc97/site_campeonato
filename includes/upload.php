<?php
$conn = @mysql_connect("localhost", "root", "") or die ("Problemas na conexão 1. " . mysql_error());
$db = @mysql_select_db("secure_login", $conn) or die ("Problemas na conexão 2. " . mysql_error());

// Conexão com o banco de dados
 
// Se o usuário clicou no botão cadastrar efetua as ações
if (isset($_POST['upload'])) {
	
	// Recupera os dados dos campos	
	//$thumb = $_FILES["thumb"];
    
    $imagem = $_FILES["emblema"];
    $nome = $_POST['nome'];
    $tecnico = $_POST['tecnico'];
	
	// Se a foto estiver sido selecionada
	if (!empty($imagem["name"])) {				
 
		$error = array();
 
    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp|jpg)$/", $imagem["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 		
 
		// Se não houver nenhum erro
		if (count($error) == 0) {
		
			// Pega extensão da imagem
			//preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $thumb["name"], $extThu);
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $extImg);
 
        	// Gera um nome único para as imagem
            //$nome_thumb = md5(uniqid(time())) . "." . $extThu[1];
        	$nome_imagem = md5(uniqid(time())) . "." . $extImg[1];
 
        	// Caminho de onde ficará as imagem
            //$caminho_thumb = "fotos/" . $nome_thumb;
        	$caminho_imagem = "../emblemas/" . $nome_imagem;
 
			// Faz o upload das imagens para seu respectivo caminho
            //move_uploaded_file($thumb["tmp_name"], $caminho_thumb);
			move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
		
			// Insere os dados no banco
            $sql = mysql_query("INSERT INTO times(nome, emblema, tecnico) VALUES ('$nome','$nome_imagem', '$tecnico')") or die("Erro " .mysql_error());
            //or die("Algo deu errado ao cadastrar o time. Tente novamente. " . mysql_error());
		
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