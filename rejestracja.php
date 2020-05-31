<?php
require '../../vendor/autoload.php';
require_once 'business.php';
use MongoDB\BSON\ObjectID;
session_start();

$db = get_db();

if (isset($_POST['rejestracja']))
{
	$login = $_POST['login'];
	$password = $_POST['pass'];
	$rpassword = $_POST['rpass'];
	
	$rlogin = $db->users->findOne(['login'=>$login]);
	
	if ($password !== $rpassword)
	{
		$zdanie = '<br/>Hasła nie są takie same!';
	} elseif ($rlogin !== null)
	{
		$zdanie = '<br/>Login jest już zajęty!';
	} else {
		$hash = password_hash($password, PASSWORD_DEFAULT);
		$user = [
			'login' => $login,
			'password' => $hash
			];
		add_user($user);
		header('Location: Galeria.php');
		exit;
	}
	
}

include 'views/rejestracja_view.php';
?> 