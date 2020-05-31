<!DOCTYPE html>
<html lang="pl">

  <head>

     <meta charset="utf-8">
     <title>TOP Gry</title>

     <meta name="description" content="Strona o Grach">
     <meta name="keywords" content="Gry, Gry komputerowe, Ranking, Najlepsze gry, E-Sport">
     <meta name="author" content="Patryk Latkowski">
	 <link rel="stylesheet" href="static\css\jquery-ui.css">

     <link rel="stylesheet" href="static\css\style.css" type="text/css" />
	 <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin-ext" rel="stylesheet">
  <script src="static\js\jquery-3.2.1.min.js"></script>
  <script src="static\js\jquery-ui.js"></script>
  <script type="text/javascript" src="static\js\javascript.js"></script>
  
</head>
  <body>
  <a id="gora"></a>
	
	<div id="container">

			<div class="header">O grach słów kilka
			</div>
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
		
		<h1>Ankieta</h1>
		
			<div id="dialog" title="Reset">
			  <p>Dane zostały zresetowane!</p>
			</div>
			
		<div class="ankieta">
			<form action="mailto:lordpat73@gmail.com" onsubmit="form()" method="post">
				<p>Imię: <br /><input id="imie" type="text" name="imie" size="20" autofocus /><br /></p>
				<p>Nazwisko: <br /><input id="nazwisko" type="text" name="nazwisko" size="30" /><br /></p>
				<p>Płeć: <br />
				<input type="radio" id="plec1" name="plec"> Kobieta <br />
				<input type="radio" id="plec2" name="plec"> Mężczyzna</p>
				<p>Data: <br /><input type="text" id="datepicker"></p>
				<p>Województwo: <br />
				<select name="woj">
					<option selected> - </option>
					<option>Dolnośląskie</option>
					<option>Kujawsko-pomorskie</option>
					<option>Lubelskie</option>
					<option>Lubuskie</option>
					<option>Łódzkie</option>
					<option>Małopolskie</option>
					<option>Mazowieckie</option>
					<option>Opolskie</option>
					<option>Podkarpackie</option>
					<option>Podlaskie</option>
					<option>Pomorskie</option>
					<option>Śląskie</option>
					<option>Świętokrzyskie</option>
					<option>Warmińsko-mazurskie</option>
					<option>Wielkopolskie</option>
					<option>Zachodniopomorskie</option>
				</select></p>
				<p>
					Jakie typy gier lubisz?<br />
					<input type="checkbox" name="typ[]" value="strategiczne"> Strategiczne<br />
					<input type="checkbox" name="typ[]" value="strzelanki"> Strzelanki<br />
					<input type="checkbox" name="typ[]" value="RPG"> RPG<br />
					<input type="checkbox" name="typ[]" value="przygodowe"> Przygodowe<br />
					<input type="checkbox" name="typ[]" value="symulatory"> Symulatory<br />
					<input type="checkbox" name="typ[]" value="platformowki"> Platformówki<br />
				</p>
				<p>Ulubione gry: <br /> <textarea id="pole" name="ulub" cols="30" wrap="hard"></textarea></p>
				<p>Czy interesujesz się E-Sportem? <br />
				<input type="radio" name="sport"> Tak <br />
				<input type="radio" name="sport"> Nie</p>
				<p><input type="reset" value="Reset" id = "opener"><br />
				<input onclick="form();" type="submit" value="Wyślij">
				</p>
				<p id="wynik"></p>
			</form>
			<button onclick="zapisz()">Zapisz</button> <br />
			<button onclick="odczyt()">Wczytaj</button>
		</div>
		<br />
		<a href="#gora">Przejdź do Góry</a>
		
		</div>
		
		<div class="footer"> Patryk Latkowski E-Mail: <a href="mailto:s172004@student.pg.edu.pl">s172004@student.pg.edu.pl</a>
		</div>
		
	
	</div>

  </body>

</html>