﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Motorcycles</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/stylesheet.css" rel="stylesheet">
		<script type="text/javascript">
	
	function chkFormular () {
	 var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	 var telformat = /^(0|\+41\s?)[0-9]{2}\s?[1-9][0-9]{2}\s?[0-9]{2}\s?[0-9]{2}$/;
  	 if (document.Formular.Name.value == "") {
     alert("Bitte Ihren Namen eingeben!");
     document.Formular.Name.focus();
     return false;
  	}
  	 if (document.Formular.Vorname.value == "") {
     alert("Bitte Ihren Vornamen eingeben!");
     document.Formular.Vorname.focus();
     return false;
 	  }
  	 if (document.Formular.Strasse.value == "") {
     alert("Bitte Ihre Strasse eingeben!");
     document.Formular.Strasse.focus();
     return false;
  	 }
  	 if (document.Formular.Ort.value == "") {
     alert("Bitte Ihren Wohnort eingeben!");
     document.Formular.Ort.focus();
     return false;
  	}
  	 if (document.Formular.PLZ.value == "") {
     alert("Bitte Ihre PLZ eingeben!");
     document.Formular.PLZ.focus();
     return false;
  	}
  	if (document.Formular.Mail.value == "") {
    alert("Bitte Ihre E-Mail-Adresse eingeben!");
    document.Formular.Mail.focus();
    return false;
  }
  if (document.Formular.Tel.value == "") {
    alert("Bitte Ihre Telefon Nummer eingeben!");
    document.Formular.Tel.focus();
    return false;
  }
    if (!document.Formular.Tel.value.match(telformat)) {
    alert("Keine Telefon Nummer!");
    document.Formular.Tel.focus();
    return false;
  }
 	

  if (!document.Formular.Mail.value.match(mailformat)) {
    alert("Keine E-Mail-Adresse!");
    document.Formular.Mail.focus();
    return false;
  }
  var chkZ = 1;
  for (i = 0; i < document.Formular.PLZ.value.length; ++i)
    if (document.Formular.PLZ.value.charAt(i) < "0" ||
        document.Formular.PLZ.value.charAt(i) > "9")
      chkZ = -1;
  if (chkZ == -1) {
    alert("PLZ keine Zahl!");
    document.Formular.PLZ.focus();
    return false;
  }
  
  
}
</script>
  </head>
 
  <body>
	<div class="example">
	<div class="container">
		<div class="jumbotron">
			<div class="container">
				<h1>Just Some Motorcycles</h1>
			</div>
		</div>
		
		<div class="nav">
			<ul class="nav nav-tabs">
				<li role="presentation"><a href="index.php">Home</a></li>
				<li role="presentation" class="active"><a href="#">Formular</a></li>
				<li role="presentation"><a href="register.php">Register</a></li>
			</ul>
		</div>	
		
		<div class="content">
			<h2>Formular</h2>
			<p>
			Writing information into .txt file
			</p>
				<div class="well">
					<form name="Formular" action="save.php"
					method="post" onsubmit="return chkFormular()">
					
					<table>
						<tr><td width="100px">Name:</td><td><input type="text" name="Name"></td></tr>
						<tr><td>Vorname: </td><td>    <input type="text" name="Vorname"></td></tr>
						<tr><td>Strasse: </td><td> <input type="text"  name="Strasse"></td></tr>
						<tr><td>Ort: </td><td>  <input type="text" name="Ort"></td></tr>
						<tr><td>PLZ: </td><td> <input type="text"  name="PLZ"></td></tr>
						<tr><td>E-Mail: </td><td> <input type="text"  name="Mail"></td></tr>
						<tr><td>Tel: </td><td> <input type="text"  name="Tel"></td></tr>
					</table>
					<hr>
					<table>
						<tr><td width="100px">Motorrad: </td><td> <select  name="Motorrad">
								<option value="Yamaha">Yamaha</option>
							</select></td></tr>
						<tr><td>Modell:  </td><td>  <select  name="Modell">
								<option value="XJ6">XJ6</option>
								<option value="WR250x">WR250x</option>
								<option value="FZ8n">FZ8n</option>
							</select></td></tr>
						<tr><td>Farbe:  </td><td>  <select  name="Farbe">
								<option value="Schwarz">Schwarz</option>
								<option value="Blau">Blau</option>
								<option value="Grau">Grau</option>
								<option value="Weiss">Weiss</option>
							</select></td></tr>
					</table>
					<hr>
					<input class="btn btn-success" type="submit" value="Absenden">
					<input class="btn btn-danger" type="reset" value="Abbrechen">
				
				</form>
			</div>
		</div>
	</div>	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</div>
  </body>
</html>