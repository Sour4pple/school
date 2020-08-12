<?php
$file = fopen("file.txt", "a");
fwrite($file, "Name: ".$_POST["Name"]."\r\n");
fwrite($file, "Vorname: ".$_POST["Vorname"]."\r\n");
fwrite($file, "Strasse: ".$_POST["Strasse"]."\r\n");
fwrite($file, "Ort: ".$_POST["Ort"]."\r\n");
fwrite($file, "PLZ: ".$_POST["PLZ"]."\r\n");
fwrite($file, "E-Mail: ".$_POST["Mail"]."\r\n");
fwrite($file, "Tel: ".$_POST["Tel"]."\r\n");
fwrite($file, "Motorrad: ".$_POST["Motorrad"]."\r\n");
fwrite($file, "Modell: ".$_POST["Modell"]."\r\n");
fwrite($file, "Farbe: ".$_POST["Farbe"]."\r\n");

echo "Ihre Daten wurden erfolgreich gespeichert.";
//echo '<br><button><a href="index.html">Zur&uuml;ck</a></button>';
//echo "<br><button><a href='index.html'>Zur&uuml;ck</a></button>";
// korrektur 24.05.15 wal 
echo "<br><a href='index.html'>Zur&uuml;ck</a>";
//header('Location:index.html');
?>