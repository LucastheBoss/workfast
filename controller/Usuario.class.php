<?php
if(!isset($_SESSION))
{
session_start();
}  
require_once "Db.class.php";

class Usuario{
	public $login;
	public $email;
	public $senha;
	public $servico;
	public $tipo_servico;
	public $nome_completo;
	public $cep;
	public $estado;
	public $cidade;
	public $telefone;
	public $foto_perfil;
	public $sobremim;

public function __construct(){
	if(isset($_POST['bdu']) == 'buscardadosusuario') $this->buscarDadosUsuario();
	if(isset($_POST['as']) == 'alterarservicos'){
		$this->setServico($_POST['servico']);
		$this->setTipoServico($_POST['tipo_servico']);
		$this->alterarServicos();
	} 
}

//GETTERS
public function getLogin(){
	return $this->login;
}
public function getEmail(){
	return $this->email;
}
public function getSenha(){
	return $this->senha;
}
public function getServico(){
	return $this->servico;
}
public function getNomeCompleto(){
	return $this->nome_completo;
}
public function getCep(){
	return $this->cep;
}
public function getEstado(){
	return $this->estado;
}
public function getCidade(){
	return $this->cidade;
}
public function getTelefone(){
	return $this->telefone;
}
public function getFoto_perfil(){
	return $this->foto_perfil;
}
public function getSobremim(){
	return $this->sobremim;
}
public function getTipoServico(){
	return $this->tipo_servico;
}


//SETTERS
public function setLogin($login){
	$this->login = $login;
}
public function setEmail($email){
	$this->email = strtolower($email);
}
public function setSenha($senha){
	$this->senha = $senha;
}
public function setServico($servico){
	$this->servico = $servico;
}
public function setNomeCompleto($nome_completo){
	$this->nome_completo = $nome_completo;
}
public function setCep($cep){
	$this->cep = $cep;
}public function setEstado($estado){
	$this->estado = $estado;
}
public function setCidade($cidade){
	$this->cidade = $cidade;
}
public function setTelefone($telefone){
	$this->telefone = $telefone;
}
public function setFoto_perfil($foto_perfil){
	$this->foto_perfil = $foto_perfil;
}
public function setSobremim($sobremim){
	$this->sobremim = $sobremim;
}
public function setTipoServico($tipo_servico){
	$this->tipo_servico = $tipo_servico;
}


// ========================================================================
//funcão para inserir dados do usuario no banco de dados
public function cadastrar(Usuario $usuario){
	if($usuario->validarLogin_Email($this->login, $this->email) == true){
		try{
			//montando o SQL

			$sql = "INSERT INTO tb_usuarios(usuario, email, senha, servico, nome_completo, cep, estado, cidade, telefone, foto_perfil,tipo_servico) VALUES ( '$this->login', '$this->email', '$this->senha', '$this->servico', '$this->nome_completo', '$this->cep', '$this->estado', '$this->cidade', $this->telefone, '$this->foto_perfil','$this->tipo_servico')";

			//Estamos pedindo ao PDO que prepare a sentença SQL
			$pre_sql = Db::getInstancia()->prepare($sql);

			// executar nosso SQL no banco de dados, retornando TRUE Em caso de sucesso ou FALSE em caso de falha.
			return $pre_sql->execute();
			return true;
		} catch(Exception $e){
			print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			return false;
		}
	}else{
		return false;
	}
}

// =======================================================================
//Função para selecionar os dados do usuario no banco de dados e verificar se existem
public function logar(){

	try{
		//montando o SQL
		$sql = "SELECT usuario, senha,id FROM tb_usuarios WHERE usuario = '{$this->getLogin()}' AND senha = '{$this->getSenha()}'";

		//Estamos pedindo ao PDO que prepare a sentença SQL
		$pre_sql = Db::getInstancia()->prepare($sql);


		$query = Db::getInstancia()->query($sql);



		//Retorno é um array associativo com os dados da tabela usuarios
		$return = $query->fetchAll(PDO::FETCH_ASSOC);

		//criando sessões com informações do usuario
		foreach ($return as $value) {
			if(isset($value['usuario']) == $this->getLogin() AND isset($value['senha']) == $this->getSenha()){

				$_SESSION['usuario'] = $value['usuario'];
				$_SESSION['id']      = $value['id'];       
				echo true;
			}else{
				echo false;
			}
		}

		// executar nosso SQL no banco de dados, retornando TRUE Em caso de sucesso ou FALSE em caso de falha.
		$pre_sql->execute();
		return true;

	} catch(Exception $e){
		print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
		return false;
	}
}
// =====================================================
// Buscar dados do Usuário
public function buscarDadosUsuario(){

	try{
		$sql = "SELECT * FROM tb_usuarios WHERE id = ".$_SESSION['id']."";

		$pre_sql = Db::getInstancia()->prepare($sql);

		$pre_sql->execute();

		$query = Db::getInstancia()->query($sql);

		$retorno = $query->fetchAll(PDO::FETCH_ASSOC);

		foreach($retorno as $key => $value){

			$dados = array(
				$value['nome_completo'],
				$value['telefone'],
				$value['cep'],
				$value['estado'],
				$value['cidade'],
				$value['data_cadastro'],
				$value['email'],
				$value['foto_perfil'],
				$value['sobre_mim'],
				$value['usuario'],
				$value['servico'],
				$value['tipo_servico']);
		}
		// Usando a função list para nomear os valores de $dados em ordem 
		list($nome_completo,$telefone,$cep,$estado,$cidade,$data_cadastro,$email,$foto_perfil,$sobre_mim,$servico,$tipo_servico) = $dados;

		echo json_encode($dados);

	}catch(Exception $e){
		print"Ocorreu um erro ao tentar executar esta ação, tente novamento mais tarde.";
		return false;
	}
}

// ===========================================================================
//Função para validar login e Email 
public function validarLogin_Email($login, $email){
	try{
		// montando sql
		$sql = "SELECT usuario, email FROM tb_usuarios WHERE usuario = '$login' || email = '$email'";

		//Estamos pedindo ao PDO que prepare a sentença SQL
		$pre_sql = Db::getInstancia()->prepare($sql);

		$pre_sql->execute();
		//Fazendo a consulta da query com o sql
		$query = Db::getInstancia()->query($sql);

		//Obtendo o retorno da query
		$retorno = $query->fetchAll(PDO::FETCH_ASSOC);

		foreach ($retorno as $value) {

			//Se a consulta retornar algum usuario
			if(isset($value['usuario'])){
				$usu = $value['usuario'];
				
			}else{
				return false;
			}

			//Se a consulta retornar algum email
			if(isset($value['email'])){
			$ema = $value['email'];

			}else{
				return false;
			}

			// Se Usuário ja esta cadastrado
			if($usu == $login){
				    echo "<br><strong>Usuário <font color=red>".$usu."</font> já existe</strong>";
					return false;
				}

			// Se Email ja esta cadastrado
			if($ema == $email){
				echo "<br><strong>Email <font color=red>".$ema."</font> já está cadastrado</strong>";
				return false;

			}		
		}
		return true;
	}catch(Exception $e){
		print "<strong>Ocorreu um erro ao tentar executar o Select na tabela Usuários, contate o admin do site e tente novamente mais tarde.</strong>";
		return false;
	}
}

// ===================================================================
// Função para alterar os dados do perfil
public function alterarPerfil(){
	try{
		
		$sql     = "UPDATE tb_usuarios SET nome_completo = '$this->nome_completo', email = '$this->email', sobre_mim = '$this->sobremim'";
		// Se existir um upload da foto
		if(isset($this->foto_perfil)){
		 $sql   .= ", foto_perfil ='$this->foto_perfil'";
		 }  
		$sql    .= "WHERE id = ".$_SESSION['id']."";

		$pre_sql = Db::getInstancia()->prepare($sql);

		$pre_sql->execute();

		header('Location:../../../view/perfil/pagina-perfil.php');
	}catch(Exception $e){
		print "<strong>Ocorreu um erro ao tentar executar a operação na tabela Usuários, contate o admin do site e tente novamente mais tarde.</strong>";
		return false;
		}
	}

// ===================================================================
// Função para alterar os Serviços do perfil
public function alterarServicos(){
	try{
		
		$sql = "UPDATE tb_usuarios SET servico = '$this->servico', tipo_servico = '$this->tipo_servico'  WHERE id = ".$_SESSION['id']."";

		$pre_sql = Db::getInstancia()->prepare($sql);

		$pre_sql->execute();

	}catch(Exception $e){
		print "<strong>Ocorreu um erro ao tentar executar a operação na tabela Usuários, contate o admin do site e tente novamente mais tarde.</strong>";
		return false;
		}
	}

// =======================================================
// Função para buscar a foto de perfil do usuario logado
public function buscarFoto_perfil($usuario){

	$sql = "SELECT foto_perfil FROM tb_usuarios WHERE usuario = '$usuario'";

	$pre_sql = Db::getInstancia()->prepare($sql);

	$pre_sql->execute();

	$query = Db::getInstancia()->query($sql);

	$retorno = $query->fetch(PDO::FETCH_ASSOC);

	 $foto = '../assets/img/foto_perfil/'.$retorno['foto_perfil'];
	 echo "<img src='".$foto."' id='imgPerfil' class='img-avatar-circle'>";
	 $_SESSION['foto_perfil'] = $retorno['foto_perfil'];
}
}

$usuario = new Usuario();
?>
