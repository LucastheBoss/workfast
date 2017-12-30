<?php
require_once '../../../controller/Usuario.class.php';
	$usuario = new Usuario();


	//RECEBENDO DADOS DO FORMULARIO
	$nome_completo = $_POST['nome_completo'];
	$email         = $_POST['email'];
	$login         = $_SESSION['usuario'];

	//SALVANDO A IMAGEM DO PERFIL NO DIRETORIO
	//se existir o arquivo e não dar erro
	if(isset($_FILES['arquivo']['name']) && $_FILES['arquivo']['error'] == 0){

		$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
		$nome_img = $_FILES['arquivo']['name'];
		$tamanho = $_FILES['arquivo']['size'];
		//pega extensao da imagem
		$extensao = pathinfo($nome_img, PATHINFO_EXTENSION);

		//converte extensao para minusculo
		$extensao = strtolower($extensao);

		//extensoes permitidas
		if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
			// Cria um nome único para esta imagem
        	// Evita que duplique as imagens no servidor.
        	// Evita nomes com acentos, espaços e caracteres não alfanuméricos
        	$novoNome = uniqid ( time () ) . '.' . $extensao;

        	// Concatena a pasta com o nome
        	$destino = '../../../view/assets/img/foto_perfil/'.$novoNome;

        	// tenta mover o arquivo para o destino
	        move_uploaded_file ( $arquivo_tmp, $destino );	           	            
	        $usuario->setFoto_perfil($novoNome);
		}


	}
	
	//VALIDANDO SOBRE MIM

	$sobremim = $_POST['sobremim'];	

	$usuario->setSobremim($sobremim);
	$usuario->setNomeCompleto($nome_completo);
	$usuario->setEmail($email);
	$usuario->setLogin($login);
	

	if($usuario->alterarPerfil($usuario)){	}
?>