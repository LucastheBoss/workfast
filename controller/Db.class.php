<?php

class Db{

	public static $instancia;

	//define automaticamente os valores quando a classe é instanciada
	private function __construct(){
	}

	// instanciar a conecção ao banco de Dados
	public static function getInstancia(){

		//verifica se a mesma já possui uma instância criada em memória, caso contrário ele irá iniciar o processo de criação
		if (!isset(self::$instancia)) {

			self::$instancia = new PDO("mysql:host=localhost;dbname=workfast","root","", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

			self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instancia->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
		}

		return self::$instancia;
	}

}

?>