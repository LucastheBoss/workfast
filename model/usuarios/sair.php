<?php

session_start();

session_unset($_SESSION['usuario']);
session_unset($_SESSION['nome_completo']);

header('Location:../../index.php');

?>