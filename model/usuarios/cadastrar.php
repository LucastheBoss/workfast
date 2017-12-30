<?php
require_once "../../controller/Usuario.class.php";





$login         = $_POST['usuario'];
$email         = $_POST['email'];
$servico       = $_POST['servico'];
$tipo_servico  = $_POST['tipoServico'];
$nome_completo = $_POST['nome_completo'];
$cep           = $_POST['cep'];
$estado        = $_POST['estado'];
$cidade        = $_POST['cidade'];
$telefone      = $_POST['telefone'];

//Tentando descobrir se a pessoa é mulher ou homem para definir foto inicial de perfil
$nome_separado = explode(" ", $nome_completo);
$letra_final_nome = substr($nome_separado[0], -1);

if($letra_final_nome == "a"){
	$foto_perfil   = "avatar2.jpg";
}else{
	$foto_perfil   = "avatar1.jpg";
}

        //Criptografando a senha em MD5(32 caracteres)
$senha         = md5($_POST['senha']);
$repetir_senha = md5($_POST['repetir_senha']);
        //formatando o cep sem o traço
$cep = str_replace("-", "", $cep);

        //formatando telefone
$telefone = str_replace("-","", $telefone);



$usuario = new Usuario();

$usuario->setLogin($login);
$usuario->setEmail($email);
$usuario->setServico($servico);
$usuario->setTipoServico($tipo_servico);
$usuario->SetNomeCompleto($nome_completo);
$usuario->SetCep($cep);
$usuario->setEstado($estado);
$usuario->setCidade($cidade);
$usuario->setTelefone($telefone);
$usuario->setFoto_perfil($foto_perfil);

//testar dps======================
if($repetir_senha == $senha){
	$usuario->setSenha($senha);
}

if($usuario->cadastrar($usuario) == true){
	return true;
}else{
	return false;
}


?>