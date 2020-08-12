<?php
$file = fopen("file.txt", "a"); //öffnet das textfile und schreibt folgendes rein:
fwrite($file, "<tr><td>".$_POST["Artikel"]."</td>"); //beginnt eine neue Zeile, und schrieibt Artikel in ein Feld
fwrite($file, "<td>".$_POST["Bezeichnung"]."</td>"); //schrieibt Bezeichnung in ein Feld
fwrite($file, "<td>".$_POST["Lagerbestand"]."</td>"); //schrieibt Lagerbestand in ein Feld
fwrite($file, "<td>".$_POST["Rezept"]."</td>"); //schrieibt Rezept in ein Feld
fwrite($file, "<td>".$_POST["Krankenkasse"]."</td>"); //schrieibt Krankenkasse in ein Feld
fwrite($file, "<td>".$_POST["Produktgruppe"]."</td></tr>"."\r\n"); //schrieibt Bezeichnung in ein Feld und schliesst die Zeile, schreibt noch einen Umschlag

echo "Ihre Daten wurden erfolgreich gespeichert."; //feedback an den User
echo "<br><a href='index.php'>Zur&uuml;ck</a>"; //Link zurück
?>