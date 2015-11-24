<?php
function isLogado() {
	return isset ( $_SESSION ['logado'] );
}
function get_username() {
	return $_SESSION ['nome'];
}
function get_userid() {
	return $_SESSION ['idusuario'];
}


