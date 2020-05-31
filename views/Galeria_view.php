<!DOCTYPE html>
<html lang="pl">

  <head>

     <meta charset="utf-8">
     <title>TOP Gry</title>

     <meta name="description" content="Strona o Grach">
     <meta name="keywords" content="Gry, Gry komputerowe, Ranking, Najlepsze gry, E-Sport">
     <meta name="author" content="Patryk Latkowski">

     <link rel="stylesheet" href="static\css\style.css" type="text/css" />
	 <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin-ext" rel="stylesheet">

  </head>
  <body>
	<div id="container">
	
		<div class="header"> O grach słów kilka</div>
		
		<div class="menu">
			<ol>
				<li><a href="index">Strona główna</a></li>
				<li>TOP 3
					<ul>
						<li><a href="ME">Mass Effect</a></li>
						<li><a href="W3">Wiedzmin 3</a></li>
						<li><a href="DL">Dying Light</a></li>
					</ul>
				</li>
				<li><a href="Sport">E-Sport</a></li>
				<li><a href="Ankieta">Ankieta</a></li>
				<li><a href="Galeria">Galeria</a></li>
			</ol>
		</div>
		
		<?= $logowanie ?>

		
		<div class="content">
		
		<h1>Galeria</h1>
		
		<div class="opis">
		Upload Grafiki
		<form method="post" enctype="multipart/form-data">
			Tytuł:<input type="text" name="tytul"/><br />
			Autor:<input type="text" name="autor"/><br />
			Znak wodny:<input type="text" name="znak"/><br />
			<input type="hidden" name="id"/>
			<input type="file" name="zdjecie"/><br />
			<input type="submit" value="Wyślij"/><br />
			<a href="wyszukiwarka">Wyszukiwarka Grafik</a><br />
			<?= $zdanie ?>
		</form>
		</div>
		
		
		<div class="galeria">
			<?php foreach ($pictures as $picture): ?>
					<?= '<div class="gal"><a target="_blank" href="images/water/'.$picture['name'].'"><img src="images/mini/' .$picture['name']. '" /></a><br/>';?>
					<?= 'Autor: '.$picture['autor'].'<br/>' ?>
					<?= 'Tytul: '.$picture['tytul'].'</div>' ?>
			<?php endforeach ?>
		<div style="clear:both"></div>
		<form method="post">
		<input type="submit" value="Wyczyść galerie" name="wyczysc"/>
		</form>
		</div>
		</div>
		<div class="footer"> Patryk Latkowski E-Mail: <a href="mailto:s172004@student.pg.edu.pl">s172004@student.pg.edu.pl</a>
		</div>
		
	
	</div>

  </body>

</html>