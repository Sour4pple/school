<!DOCTYPE html>
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

  	 if (document.Formular.Vorname.value == "") {
     alert("Bitte Ihren Vornamen eingeben!");
     document.Formular.Vorname.focus();
     return false;
 	  }
  	 if (document.Formular.Nachname.value == "") {
     alert("Bitte Ihren Nachname eingeben!");
     document.Formular.Nachname.focus();
     return false;
 	  }
	 if (document.Formular.Geschlecht.value == "") {
     alert("Bitte Ihren Geschlecht eingeben!");
     document.Formular.Geschlecht.focus();
     return false;
 	  }
	}
	 </script>

  </head>
 
  <body>
	<div class="container">
		<div class="jumbotron">
			<div class="container">
				<h1>Just Some Motorcycles</h1>
			</div>
		</div>
		
		<div class="nav">
			<ul class="nav nav-tabs">
				<li role="presentation"><a href="index.php">Home</a></li>
				<li role="presentation"><a href="formular.php">Formular</a></li>
				<li role="presentation" class="active"><a href="#">Register</a></li>
			</ul>
		</div>	
		
		<div class="content">
			<?php
			if (isset($_GET["action"])) {
				echo "<div class='alert alert-success' role='alert'><b>Success</b> Entry has been created</div>";
			};
			?>
			
			<h2>Register</h2>
			<p>
			Writes and displays information into and from MySQL DB.
			</p>
			
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="well">
						<form name="Formular" action="write_data.php"
							method="post" onsubmit="return chkFormular()">
					
						<table>
							<tr><td width="100px">Vorname:</td><td><input type="text" name="Vorname"></td></tr>
							<tr><td>Nachname:  </td><td> <input type="text"  name="Nachname"></td></tr>
							<tr><td>Geschlecht: </td><td> <input type="radio" name="Geschlecht" value="female">W <input type="radio" name="Geschlecht" value="male">M</td></tr>
						</table>
						<hr>
						<input class="btn btn-success" type="submit" value="Absenden">
						<input class="btn btn-danger" type="reset" value="Abbrechen">
				
						</form>
					</div>
				</div>
					
				<div class="col-sm-6 col-md-8">
					<div class="well">
						<table width="100%">
							<tr width="100%" class="tableheader"><td width="5%">id</td><td width="40%">Vorname</td><td width="40%">Nachname</td><td width="15%">Geschlecht</td></tr>
							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "mydb";

								// Create connection
								$conn = new mysqli($servername, $username, $password, $dbname);
								// Check connection
								if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
								} 

								$sql = "SELECT id, firstname, lastname, gender FROM members";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["gender"]. "</td></tr>";
									}
								} else {
									echo "0 results";
								}
								$conn->close();
								
								
							?>
						
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>