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
	 <script src="static\js\jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="static\js\javascript.js"></script>
	 
  </head>
  <body>
	
	<div id="container">
	
		<div class="header">O grach słów kilka
		</div>
		
		<div class="menu">
			<ol>
				<li><a href="Index">Strona główna</a></li>
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
		
		<h1>Strona Główna</h1>
		
		<div class="anim">
			<p>Strona poświęcona tematyce gier komputerowych</p>
		</div>
		
		<div class="pic2">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			width="100%" height="50%" viewBox="0 0 100 70" enable-background="new 0 0 100 59" xml:space="preserve">
		<g id="pad">
			<path d="M97.901,18l-0.003,0.001C96.896,7.895,88.372,0,78,0c-3.855,0-7.444,1.11-10.498,3H32.498C29.444,1.11,25.855,0,22,0
				C11.628,0,3.104,7.895,2.102,18.001L2.099,18C1.751,22.175,0,50.691,0,51c0,4.418,3.581,8,8,8c18.377,0,25.943-15.686,28.666-24
				h26.668C66.057,43.314,73.623,59,92,59c4.419,0,8-3.582,8-8C100,50.691,98.249,22.175,97.901,18z M22,32c-6.629,0-12-5.373-12-12
				S15.371,8,22,8s12,5.373,12,12S28.629,32,22,32z M78,32c-6.629,0-12-5.373-12-12S71.371,8,78,8s12,5.373,12,12S84.629,32,78,32z"/>
			<polygon points="31,17 25,17 25,11 19,11 19,17 13,17 13,23 19,23 19,29 25,29 25,23 31,23 " fill="#090"/>
			<path d="M78,16c0,2.21-1.79,4-4,4c-2.205,0-4-1.79-4-4s1.795-4,4-4C76.21,12,78,13.79,78,16z" fill="#090"/>
			<path d="M86,24c0,2.21-1.79,4-4,4c-2.205,0-4-1.79-4-4s1.795-4,4-4C84.21,20,86,21.79,86,24z" fill="#090"/>
		</g>
		</svg>

		</div>
		<div id="abc" class="info">
			<p>Strona przygotowana w ramach projektu z HiH</p>
			<p id="tekst">Strona w całości poświęcona grom komputerowym. Znajdziesz na niej subiektywny ranking gier, przybliżenie terminu "E-Sport" oraz jego CSowej sceny, a także krótką ankietę mającą na celu zbadanie upodobań osób odwiedzających stronę</p>
			<input type="submit" value="Zmień wygląd" onclick="zm()"/>
			<input type="submit" value="Wstaw" onclick="po()"/>
			<input type="submit" value="Usuń (jQuery)" onclick="us()"/>
		</div>

	</div>
		
	<div class="footer"> Patryk Latkowski E-Mail: <a href="mailto:s172004@student.pg.edu.pl">s172004@student.pg.edu.pl</a>
	</div>
		
	
	</div>

  </body>

</html>