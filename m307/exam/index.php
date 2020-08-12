<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MP307</title>
	<meta name="author" content="Tim Buehler">

	<link href="style.css" rel="stylesheet">
		<script type="text/javascript">
	function chkFormular () { //Checkt das Formular auf fehlerhafte eingaben

  	 if (document.Formular.Bezeichnung.value == "") { //überprüft Feld Bezeichnung auf Leereingabe
     alert("Bitte eine Bezeichnung eingeben!");
     document.Formular.Bezeichnung.focus();
     return false;
  	 }
	 if (document.Formular.Rezept.value == "") { //überprüft Feld Rezept auf Leereingabe
     alert("Bitte ein Rezept eingeben!"); 
     return false;
  	 }
	 if (document.Formular.Produktgruppe.value == "") { //überprüft Feld Produktgruppe auf Leereingabe
     alert("Bitte eine Produktgruppe eingeben!");
     document.Formular.Produktgruppe.focus();
     return false;
  	 }
	 
	 //if (var isnum = /^\d+$/.test(document.Formular.Lagerbestand.value == $true)){
	 //alert("Bitte eine Lagerbestand eingeben!");
	 //document.Formular.Lagerbestand.focus();
	 //return false;
	 //}
	 //
	 //if (document.Formular.Krankenkasse.value == ""){
	 //	 document.Formular.Krankenkasse.value == "Nein"
	 //}
  
}
</script>
  </head>
  <body class="lightblue">
	<div class="container">
		<h1>Lagerverwaltung</h1>
		<div>
			<ul class="nav">
				<li class="active"><a href="#">Erfassen</a></li>
				<li><a href="liste.php">Liste</a></li>
				<li><a href="suche.php">Suche</a></li>
			</ul>
		</div>	
		
		<div class="content">
			<h2>Erfassen</h2>
				<form name="Formular" action="save.php"
				method="post" onsubmit="return chkFormular()"
				class="erfassen">
				
				<table>
					<tr><td width="120px"></td><td width="400px">* obligatorische Felder</td></tr>
					<tr><td>Artikel-Nr:</td><td><input type="text" name="Artikel" id="Artikel-Nr"></td></tr>
					<tr><td>Bezeichnung: *</td><td><input type="text" name="Bezeichnung" id="Bezeichnung"></td></tr>
					<tr><td>Lagerbestand:</td><td> <input type="text"  name="Lagerbestand" id="Lagerbestand"></td></tr>
				</table>
				<br>
				<table>
					<tr><td width="120px">Rezept: *</td><td>
						<input type="radio" name="Rezept" value="Rezeptfrei">rezeptfrei<br>
						<input type="radio" name="Rezept" value="Rezeptpflichtig">rezeptpflichtig<br>
						<input type="radio" name="Rezept" value="Verschaerft">Verschärft rezeptpflichtig<br>
					</td></tr>
				</table>
				<br>
				<table>
					<tr><td width="120px">Krankenkasse:</td><td><input type="checkbox" name="Krankenkasse" value="Ja">Kostenübernahme</td></tr>
				</table>
				<br>
				<table>
					<tr><td width="120px">Produktgruppe: *</td><td>  <select name="Produktgruppe">
							<option value=""><i>Bitte wählen</option>
							<option value="Aufbauepreparat">Aufbauepreparat</option>
							<option value="Medikament">Medikament</option>
							<option value="Pflege">Pflege</option>
							<option value="Sanitaetsartikel">Sanitätsartikel</option>
							<option value="Schoenheit">Schönheit</option>
							<option value="Andere">Andere</option>
						</select></td></tr>
				</table>
				<br>
				<table>
					<tr><td width="120px">
					<input type="reset" value="Zurücksetzen"></td>
					<td><input type="submit" value="Speichern"></td></tr>
				</table>
			</form>
		</div>
	</div>	
  </body>
</html>