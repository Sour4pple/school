<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Lagerverwaltung</title>
	<meta name="author" content="Tim Buehler">
	<link href="style.css" rel="stylesheet">
  </head>
 
  <body>
	<div class="container">
		<h1>Lagerverwaltung</h1>
		
		<div>
			<ul class="nav nav-tabs">
				<li><a href="index.php">Erfassen</a></li>
				<li class="active"><a href="#">Liste</a></li>
				<li><a href="suche.php">Suche</a></li>
			</ul>
		</div>	
		
		<div class="content">
			<h2>Liste</h2>
					
			<?php
				//Zeichnet Tabelle und Erste Zeile
				echo '<table class="Liste">';
				echo '<tr class="Title lightblue" width="100%">';
				echo '<td width="15%">Artikel-NR</td>';
				echo '<td width="25%">Artikel-Bezeichnung</td>';
				echo '<td width="15%">Lagerbestand</td>';
				echo '<td width="15%">Rezept</td>';
				echo '<td width="15%">KK Kosten-übernahme</td>';
				echo '<td width="15%">Gruppe</td>';
				echo '</tr>';
				
			$myfile = fopen("file.txt", "r") or die("Unable to open file!"); //öffnet file
					$data = fread($myfile,filesize("file.txt")); //File in var speichern
					echo $data;	//Filevar ausgeben
				fclose($myfile); // File schliesen

			echo'</table>'; //tabellenende
			?>
				
			
		</div>
	</div>	
  </body>
</html>