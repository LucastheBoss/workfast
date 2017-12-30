<?php
require_once "../../controller/Usuario.class.php";

$user = $_POST['usuario_login'];
$senha   = md5($_POST['senha_login']); 

$usuario = new Usuario();
$usuario->setLogin($user);
$usuario->setSenha($senha);

if($usuario->logar() == true){
	return true;

}else{
	return false;
}	


?>