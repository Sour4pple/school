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
				<li><a href="liste.php">Liste</a></li>
				<li class="active"><a href="#">Suche</a></li>
			</ul>
		</div>	
		
		<div class="content">
			<form name="Suche" action="?" method="post">
			<h2>Suche</h2>
				<input type="text" name="search">
				<input type="submit" value="Los">
			</form>
		</div>
	</div>	
  </body>
</html>