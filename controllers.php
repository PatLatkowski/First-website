<?php
require_once 'business.php';

function Index(&$model)
{
	if (isset($_POST['zaloguj']))
	{
		$login = $_POST['login'];
		$password = $_POST['pass'];
		
		$user = find_name($login);
		if($user !== null && password_verify($password, $user['password'])){
			session_regenerate_id();
			$_SESSION['user_id'] = $user['_id'];
			$_SESSION['login'] = $user['login'];
			return 'redirect:Index';
			exit;
		} else {
			$komunikat = "Logowanie nie powiodło się, błędne dane";
			$model['komunikat'] = $komunikat;
		}
	}

	if (isset($_POST['wyloguj']))
	{
		session_destroy();
		return 'redirect:Index';
		exit;
	}
	if (isset($_SESSION['user_id']))
	{
		$logowanie = '<div class="log">
		<form method="post">
		Witaj, <span style="color: green"> '.$_SESSION['login'].'</span><br />
		<input type="submit" value="Wyloguj się" name="wyloguj"/><br />
		</form>
		</div>';
		$model['logowanie'] = $logowanie;
	} else {
		$logowanie = '<div class="log">
			Logowanie:<br/>
			<form method="post">
			Login:<input type="text" name="login"/>
			Hasło:<input type="password" name="pass"/>
			<input type="submit" value="Zaloguj się" name="zaloguj"/><br />
			<a href="rejestracja">Nie masz konta? Zarejestruj się</a><br />
			'.$komunikat.'
			</form>
			</div>';
		$model['logowanie'] = $logowanie;
	}
	return 'Index_view';
}

function Ankieta(&$model)
{
	if (isset($_POST['zaloguj']))
	{
		$login = $_POST['login'];
		$password = $_POST['pass'];
		
		$user = find_name($login);
		if($user !== null && password_verify($password, $user['password'])){
			session_regenerate_id();
			$_SESSION['user_id'] = $user['_id'];
			$_SESSION['login'] = $user['login'];
			return 'redirect:Ankieta';
			exit;
		} else {
			$komunikat = "Logowanie nie powiodło się, błędne dane";
			$model['komunikat'] = $komunikat;
		}
	}

	if (isset($_POST['wyloguj']))
	{
		session_destroy();
		return 'redirect:Ankieta';
		exit;
	}
	if (isset($_SESSION['user_id']))
	{
		$logowanie = '<div class="log">
		<form method="post">
		Witaj, <span style="color: green"> '.$_SESSION['login'].'</span><br />
		<input type="submit" value="Wyloguj się" name="wyloguj"/><br />
		</form>
		</div>';
		$model['logowanie'] = $logowanie;
	} else {
		$logowanie = '<div class="log">
			Logowanie:<br/>
			<form method="post">
			Login:<input type="text" name="login"/>
			Hasło:<input type="password" name="pass"/>
			<input type="submit" value="Zaloguj się" name="zaloguj"/><br />
			<a href="rejestracja">Nie masz konta? Zarejestruj się</a><br />
			'.$komunikat.'
			</form>
			</div>';
		$model['logowanie'] = $logowanie;
	}
	return 'Ankieta_view';
}

function Sport(&$model)
{
	if (isset($_POST['zaloguj']))
	{
		$login = $_POST['login'];
		$password = $_POST['pass'];
		
		$user = find_name($login);
		if($user !== null && password_verify($password, $user['password'])){
			session_regenerate_id();
			$_SESSION['user_id'] = $user['_id'];
			$_SESSION['login'] = $user['login'];
			return 'redirect:Sport';
			exit;
		} else {
			$komunikat = "Logowanie nie powiodło się, błędne dane";
			$model['komunikat'] = $komunikat;
		}
	}

	if (isset($_POST['wyloguj']))
	{
		session_destroy();
		return 'redirect:Sport';
		exit;
	}
	if (isset($_SESSION['user_id']))
	{
		$logowanie = '<div class="log">
		<form method="post">
		Witaj, <span style="color: green"> '.$_SESSION['login'].'</span><br />
		<input type="submit" value="Wyloguj się" name="wyloguj"/><br />
		</form>
		</div>';
		$model['logowanie'] = $logowanie;
	} else {
		$logowanie = '<div class="log">
			Logowanie:<br/>
			<form method="post">
			Login:<input type="text" name="login"/>
			Hasło:<input type="password" name="pass"/>
			<input type="submit" value="Zaloguj się" name="zaloguj"/><br />
			<a href="rejestracja">Nie masz konta? Zarejestruj się</a><br />
			'.$komunikat.'
			</form>
			</div>';
		$model['logowanie'] = $logowanie;
	}
	return 'Sport_view';
}

function ME(&$model)
{
	if (isset($_POST['zaloguj']))
	{
		$login = $_POST['login'];
		$password = $_POST['pass'];
		
		$user = find_name($login);
		if($user !== null && password_verify($password, $user['password'])){
			session_regenerate_id();
			$_SESSION['user_id'] = $user['_id'];
			$_SESSION['login'] = $user['login'];
			return 'redirect:ME';
			exit;
		} else {
			$komunikat = "Logowanie nie powiodło się, błędne dane";
			$model['komunikat'] = $komunikat;
		}
	}

	if (isset($_POST['wyloguj']))
	{
		session_destroy();
		return 'redirect:ME';
		exit;
	}
	if (isset($_SESSION['user_id']))
	{
		$logowanie = '<div class="log">
		<form method="post">
		Witaj, <span style="color: green"> '.$_SESSION['login'].'</span><br />
		<input type="submit" value="Wyloguj się" name="wyloguj"/><br />
		</form>
		</div>';
		$model['logowanie'] = $logowanie;
	} else {
		$logowanie = '<div class="log">
			Logowanie:<br/>
			<form method="post">
			Login:<input type="text" name="login"/>
			Hasło:<input type="password" name="pass"/>
			<input type="submit" value="Zaloguj się" name="zaloguj"/><br />
			<a href="rejestracja">Nie masz konta? Zarejestruj się</a><br />
			'.$komunikat.'
			</form>
			</div>';
		$model['logowanie'] = $logowanie;
	}
	return 'ME_view';
}

function W3(&$model)
{
	if (isset($_POST['zaloguj']))
	{
		$login = $_POST['login'];
		$password = $_POST['pass'];
		
		$user = find_name($login);
		if($user !== null && password_verify($password, $user['password'])){
			session_regenerate_id();
			$_SESSION['user_id'] = $user['_id'];
			$_SESSION['login'] = $user['login'];
			return 'redirect:W3';
			exit;
		} else {
			$komunikat = "Logowanie nie powiodło się, błędne dane";
			$model['komunikat'] = $komunikat;
		}
	}

	if (isset($_POST['wyloguj']))
	{
		session_destroy();
		return 'redirect:W3';
		exit;
	}
	if (isset($_SESSION['user_id']))
	{
		$logowanie = '<div class="log">
		<form method="post">
		Witaj, <span style="color: green"> '.$_SESSION['login'].'</span><br />
		<input type="submit" value="Wyloguj się" name="wyloguj"/><br />
		</form>
		</div>';
		$model['logowanie'] = $logowanie;
	} else {
		$logowanie = '<div class="log">
			Logowanie:<br/>
			<form method="post">
			Login:<input type="text" name="login"/>
			Hasło:<input type="password" name="pass"/>
			<input type="submit" value="Zaloguj się" name="zaloguj"/><br />
			<a href="rejestracja">Nie masz konta? Zarejestruj się</a><br />
			'.$komunikat.'
			</form>
			</div>';
		$model['logowanie'] = $logowanie;
	}
	return 'W3_view';
}

function DL(&$model)
{
	if (isset($_POST['zaloguj']))
	{
		$login = $_POST['login'];
		$password = $_POST['pass'];
		
		$user = find_name($login);
		if($user !== null && password_verify($password, $user['password'])){
			session_regenerate_id();
			$_SESSION['user_id'] = $user['_id'];
			$_SESSION['login'] = $user['login'];
			return 'redirect:DL';
			exit;
		} else {
			$komunikat = "Logowanie nie powiodło się, błędne dane";
			$model['komunikat'] = $komunikat;
		}
	}

	if (isset($_POST['wyloguj']))
	{
		session_destroy();
		return 'redirect:DL';
		exit;
	}
	if (isset($_SESSION['user_id']))
	{
		$logowanie = '<div class="log">
		<form method="post">
		Witaj, <span style="color: green"> '.$_SESSION['login'].'</span><br />
		<input type="submit" value="Wyloguj się" name="wyloguj"/><br />
		</form>
		</div>';
		$model['logowanie'] = $logowanie;
	} else {
		$logowanie = '<div class="log">
			Logowanie:<br/>
			<form method="post">
			Login:<input type="text" name="login"/>
			Hasło:<input type="password" name="pass"/>
			<input type="submit" value="Zaloguj się" name="zaloguj"/><br />
			<a href="rejestracja">Nie masz konta? Zarejestruj się</a><br />
			'.$komunikat.'
			</form>
			</div>';
		$model['logowanie'] = $logowanie;
	}
	return 'DL_view';
}

function Galeria(&$model)
{
$db = get_db();
$pictures = $db->pictures->find();
$model['pictures'] = $pictures;

if (isset($_POST['zaloguj']))
{
	$login = $_POST['login'];
	$password = $_POST['pass'];
	
	$user = find_name($login);
	if($user !== null && password_verify($password, $user['password'])){
		session_regenerate_id();
		$_SESSION['user_id'] = $user['_id'];
		$_SESSION['login'] = $user['login'];
		return 'redirect:Galeria';
		exit;
	} else {
		$komunikat = "Logowanie nie powiodło się, błędne dane";
		$model['komunikat'] = $komunikat;
	}
}

if (isset($_POST['wyloguj']))
{
	session_destroy();
	return 'redirect:Galeria';
	exit;
}

if (isset($_POST['wyczysc']))
{
	remove_gal($pictures);
	return 'redirect:Galeria';
}
	

if (isset($_SESSION['user_id']))
{
	$logowanie = '<div class="log">
	<form method="post">
	Witaj, <span style="color: green"> '.$_SESSION['login'].'</span><br />
	<input type="submit" value="Wyloguj się" name="wyloguj"/><br />
	</form>
	</div>';
	$model['logowanie'] = $logowanie;
} else {
	$logowanie = '<div class="log">
		Logowanie:<br/>
		<form method="post">
		Login:<input type="text" name="login"/>
		Hasło:<input type="password" name="pass"/>
		<input type="submit" value="Zaloguj się" name="zaloguj"/><br />
		<a href="rejestracja">Nie masz konta? Zarejestruj się</a><br />
		'.$komunikat.'
		</form>
		</div>';
	$model['logowanie'] = $logowanie;
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
		$model['zdanie'] = $zdanie;
	}
	if(($mime_type !== 'image/jpeg') && ($mime_type !== 'image/png'))
	{
		$zdanie = $zdanie."Niepoprawny format";
		$model['zdanie'] = $zdanie;
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
		$zdanie = "Upload przebiegł pomyślnie!\n";
		$model['zdanie'] = $zdanie;}
		
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
		return 'redirect:Galeria';
        exit;
		
	}
}
	return 'Galeria_view';
}

function rejestracja(&$model)
{
	if (isset($_POST['rejestracja']))
{
	$login = $_POST['login'];
	$password = $_POST['pass'];
	$rpassword = $_POST['rpass'];
	
	$rlogin = find_name($login);
	
	if ($password !== $rpassword)
	{
		$zdanie = '<br/>Hasła nie są takie same!';
		$model['zdanie'] = $zdanie;
	} elseif ($rlogin !== null)
	{
		$zdanie = '<br/>Login jest już zajęty!';
		$model['zdanie'] = $zdanie;
	} else {
		$hash = password_hash($password, PASSWORD_DEFAULT);
		$user = [
			'login' => $login,
			'password' => $hash
			];
		add_user($user);
		return 'redirect:Galeria';
		exit;
	}
	
}
	return 'rejestracja_view';
}

function wyszukiwarka(&$model)
{
	if (isset($_POST['zaloguj']))
	{
		$login = $_POST['login'];
		$password = $_POST['pass'];
		
		$user = find_name($login);
		if($user !== null && password_verify($password, $user['password'])){
			session_regenerate_id();
			$_SESSION['user_id'] = $user['_id'];
			$_SESSION['login'] = $user['login'];
			return 'redirect:wyszukiwarka';
			exit;
		} else {
			$komunikat = "Logowanie nie powiodło się, błędne dane";
			$model['komunikat'] = $komunikat;
		}
	}

	if (isset($_POST['wyloguj']))
	{
		session_destroy();
		return 'redirect:wyszukiwarka';
		exit;
	}
	if (isset($_SESSION['user_id']))
	{
		$logowanie = '<div class="log">
		<form method="post">
		Witaj, <span style="color: green"> '.$_SESSION['login'].'</span><br />
		<input type="submit" value="Wyloguj się" name="wyloguj"/><br />
		</form>
		</div>';
		$model['logowanie'] = $logowanie;
	} else {
		$logowanie = '<div class="log">
			Logowanie:<br/>
			<form method="post">
			Login:<input type="text" name="login"/>
			Hasło:<input type="password" name="pass"/>
			<input type="submit" value="Zaloguj się" name="zaloguj"/><br />
			<a href="rejestracja">Nie masz konta? Zarejestruj się</a><br />
			'.$komunikat.'
			</form>
			</div>';
		$model['logowanie'] = $logowanie;
	}
	
	return 'wyszukiwarka_view';
}