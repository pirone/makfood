<?php
include_once 'lib/helpers/auth.php';

if(!isset($_SESSION)){
	session_start();
}

if (!isLogado()) {
	header('Location: ./index.php#login');
	die;
} 