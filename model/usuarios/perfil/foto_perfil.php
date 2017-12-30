<?php

require_once '../../controller/Usuario.class.php';

$user = $_SESSION['usuario'];

$usuario = new Usuario();

$usuario->setLogin($user);
$usuario->buscarFoto_perfil($user);
