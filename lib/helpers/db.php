<?php

class DB {

	private $PDO;

	public function getPDO() {
		return $this->PDO;
	}

	public function __construct($host, $user, $pswd, $dbName) {
		try {
			$this->PDO = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $user, $pswd);
			$this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NAMED);
		} catch (PDOException $e) {
			die('Não possível conectar ao banco. Motivo: '.$e->getMessage());
		}
	}

	public function query($sql, $params = array()) {
		try {
			$statement = $this->PDO->prepare($sql);
			$statement->execute($params);
			return $statement;
		} catch (PDOException $e) {
			die('Erro ao executar a query. Motivo: '.$e->getMessage());
		}
	}

	public function disconnect() {
		$this->PDO = null;
	}

}