<?php
require '../../vendor/autoload.php';
require_once 'business.php';
use MongoDB\BSON\ObjectID;
session_start();

$db = get_db();
$pictures = $db->pictures->find();

if (isset($_POST['zaloguj']))
{
	$login = $_POST['login'];
	$password = $_POST['pass'];
	
	$user = $db->users->findOne(['login'=>$login]);
	if($user !== null && password_verify($password, $user['password'])){
		session_regenerate_id();
		$_SESSION['user_id'] = $user['_id'];
		$_SESSION['login'] = $user['login'];
		header('Location: Galeria.php');
		exit;
	} else {
		$komunikat = "Logowanie nie powiodło się, błędne dane";
	}
}

if (isset($_POST['wyloguj']))
{
	session_destroy();
	header('Location: Galeria.php');
	exit;
}

if (isset($_POST['wyczysc']))
{
	remove_gal($pictures);
}
	

if (isset($_SESSION['user_id']))
{
	$logowanie = '<div class="log">
	<form method="post">
	Witaj, <span style="color: green"> '.$_SESSION['login'].'</span><br />
	<input type="submit" value="Wyloguj się" name="wyloguj"/><br />
	</form>
	</div>';
} else {
$logowanie = '<div class="log">
	Logowanie:<br/>
	<form method="post">
	Login:<input type="text" name="login"/>
	Hasło:<input type="text" name="pass"/>
	<input type="submit" value="Zaloguj się" name="zaloguj"/><br />
	<a href="rejestracja.php">Nie masz konta? Zarejestruj się</a><br />
	'.$komunikat.'
	</form>
	</div>';
}

$file_name = $_FILES['zdjecie']['name'];
$max_rozmiar = 1024*1024;
if (is_uploaded_file($_FILES['zdjecie']['tmp_name'])) {
	$finfo = finfo_open(FILEINFO_MIME_TYPE);
	$filename = $_FILES['zdjecie']['tmp_name'];
	$mime_type = finfo_file($finfo, $filename);
	if(($_FILES['zdjecie']['size']) > $max_rozmiar)
	{
		$zdanie = $zdanie."Plik jest za duży (Max 1MB)";
	}
	if(($mime_type !== 'image/jpeg') && ($mime_type !== 'image/png'))
	{
		$zdanie = $zdanie."Niepoprawny format";
	}
	if($zdanie == null)
	{
		$picture = [
			'tytul' => $_POST['tytul'],
			'autor' => $_POST['autor'],
			'name' => $file_name
			];
		
		add_pic($picture);
		
		$upload_dir= '/var/www/dev/src/web/images/';
		$file = $_FILES['zdjecie'];
		$target = $upload_dir. $file_name;
		$tmp_path= $file['tmp_name'];
		if(move_uploaded_file($tmp_path, $target)){
		$zdanie = "Upload przebiegł pomyślnie!\n";}
		
		$znak = $_POST['znak'];
		if($mime_type === 'image/jpeg')
		$im = imagecreatefromjpeg($target);
		if($mime_type === 'image/png')
		$im = imagecreatefrompng($target);
		
		$width = imagesx($im);
		$height = imagesy($im);
		$width_min = 200;
		$height_min = 125;
		$im_min = imagecreatetruecolor($width_min, $height_min);
		imagecopyresampled($im_min, $im, 0, 0, 0, 0, $width_min , $height_min, $width  , $height);
		if($mime_type === 'image/jpeg')
		imagejpeg($im_min, 'images/mini/' . $file_name);
		if($mime_type === 'image/png')
		imagepng($im_min, 'images/mini/' . $file_name);
	
		$stamp = imagecreatetruecolor(100, 40);
		imagefilledrectangle($stamp, 9, 9, 90, 30, 0xFFFFFF);
		imagestring($stamp, 3, 10, 15, $znak, 0x0000FF);

		$marge_right = 10;
		$marge_bottom = 10;
		$sx = imagesx($stamp);
		$sy = imagesy($stamp);
		
		imagecopymerge($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp), 80);
		
		if($mime_type === 'image/jpeg')
		imagejpeg($im, 'images/water/' . $file_name);
		if($mime_type === 'image/png')
		imagepng($im, 'images/water/' . $file_name);
	
		imagedestroy($im);
		header('Location: galeria.php');
        exit;
		
	}
}

include 'views/Galeria_view.php';
?> 
