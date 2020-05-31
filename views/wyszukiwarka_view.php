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
	 
	<script>
	function showHint(str) {
		if (str.length == 0) { 
			document.getElementById("pict").innerHTML = "";
			return;
		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("pict").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "gethint.php?q=" + str, true);
			xmlhttp.send();
		}
	}
	</script>

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
		
		<h1>Wyszukiwarka Grafik</h1>
		
		<form> 
		Szukaj: <input type="text" onkeyup="showHint(this.value)">
		</form>
		Pasujące: 
		<div class="galeria">
		<div class="gal" id="pict"></div>
		<div style="clear:both"></div>
		</div>
		
		</div>
		
		<div class="footer"> Patryk Latkowski E-Mail: <a href="mailto:s172004@student.pg.edu.pl">s172004@student.pg.edu.pl</a>
		</div>
		
	
	</div>

  </body>

</html>