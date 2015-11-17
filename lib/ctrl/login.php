<?php
session_start();
include_once '../helpers/dbconnect.php';
include '../helpers/auth.php';


function carregaUsuario($username, $password) {	
	$db = new PDO('mysql:host=localhost;dbname=makfood;charset=utf8', 'root', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	return $db;
	
	$stmt = $db->prepare("SELECT nome FROM usuario WHERE email=? AND senha = SHA1(?)"); 
	$stmt->bindParam(1,$username); 
	$stmt->bindParam(2,$password); 
	$stmt->execute();
	$number_of_rows = $stmt->fetchColumn();
	
	return $stmt !== false && $number_of_rows > 0 ? $stmt->fetch(PDO::FETCH_BOTH) : null;
}

header('Content-type: text/plain');
if (!isLogado()) {	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$usuario = carregaUsuario($username, $password);
	if ($usuario != null) {
		$_SESSION['logado'] = true;
		$_SESSION['nome'] = $usuario['nome'];
		echo '1';
	} else {
		echo '0';
	}
}