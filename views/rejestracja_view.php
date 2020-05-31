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
		
		<div class="content">
			<div class="rejestr">
			
			<h1>Rejestracja:</h1>
			<form method="post">
			<p>Login:<input type="text" name="login" required /></p>
			<p>Hasło:<input type="password" name="pass" required /></p>
			<p>Powtórz hasło:<input type="password" name="rpass" required /></p>
			<input type="submit" value="Zarejestruj" name="rejestracja"/><br />
			</form> 
			<?= $zdanie ?>
			
			</div>
		</div>
		
		<div class="footer"> Patryk Latkowski E-Mail: <a href="mailto:s172004@student.pg.edu.pl">s172004@student.pg.edu.pl</a>
		</div>
		
	
	</div>

  </body>

</html>