<?php
function isLogado() {
	return isset($_SESSION['logado']);
}

function get_username() {
	echo $_SESSION['nome'];
}

function  get_userid(){
	echo $_SESSION['idusuario'];
}

