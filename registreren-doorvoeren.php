<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="style.css" rel="stylesheet" type="text/css">
		<title>Registreren</title>
	</head>

	<body>		

		<div id="cont">
			<div id="contlogoservice">
				<img src="plaatjes/logo.png" onclick="location.href='index.html';" style="cursor:pointer;" alt="logo"/>
				<div id="servicemenu">
					<a href="klantenservice.html">Klantenservice</a>
					<a href="contact.html">Contact</a>
					<a href="account.html">Account</a>
				</div>
			</div>		
			
			<div id="menu">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="overview.html">Boormachines</a></li>
					<li><a href="overview.html">Schroevendraaiers</a></li>
					<li><a href="overview.html">Moersleutels</a></li>
					<li><a href="overview.html">Hamers</a></li>
					<li><a href="overview.html">Tangen</a></li>
					<li><a href="overview.html">Zagen</a></li>
					<li><a href="overview.html">Moeren en bouten</a></li>
				</ul>
			</div>
		
			<div id="winkelwagen">
				 <br>
				<form method="post" action="inloggen.php">
					<input id="llnr" name="llnr" type="text" value="gebruikersnaam" onfocus="if(this.value == 'gebruikersnaam') {this.value = '';}"><br>
					<input id="wachtwoord" name="wachtwoord" type="password" onfocus="if(this.value == 'wachtwoord') {this.value = '';}" value="wachtwoord">
					<input type="submit" class="button" value="Inloggen" name="submit"><br>
				</form>
				<li><a href="registreren.php">Registereren</a></li>
			</div>
				
			<div id="container">
				<div id="container2">
					
					Het registreren is niet gelukt want de website werkt nog niet....
					
				</div>
			</div>
			<div id="banner">
				<img src="plaatjes/banner.gif" onclick="location.href='overview.html';" style="cursor:pointer;" alt="logo"/>
			</div>
		</div>
	</body>
</html>