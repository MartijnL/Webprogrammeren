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
				
					<div id="hoofdtitel"><h1>Registreren</h1></div>   
					<form method="post" action="registreren-doorvoeren.php" id="registreren">					
						<TABLE CELLSPACING="2" CELLPADDING="2" BORDER="0">
							<TR>
							<TD><label for="gebruikersnaam">Gebruikersnaam:</label></TD>
							<TD><input id="gebruikersnaam" name="gebruikersnaam" type="text"><br></TD>
							</TR>
				
							<TR>
							<TD><label for="wachtwoord">Wachtwoord:</label></TD>
							<TD><input id="wachtwoord" name="wachtwoord" type="password"><br></TD>
							</TR>
							
							<TR>
							<TD><label for="voornaam">Voornaam:</label></TD>
							<TD><input id="voornaam" name="voornaam" type="text"><br></TD>
							</TR>
							
							<TR>
							<TD><label for="tussenvoegsel">Tussenvoegsel</label></TD>
							<TD><input id="tussenvoegsel" name="tussenvoegsel" type="text"><br></TD>
							</TR>
				
							<TR>
							<TD><label for="achternaam">Achternaam</label></TD>
							<TD><input id="achernaam" name="achternaam" type="text"><br></TD>
							</TR>
							
							<TR>
							<TD><label for="email">E-mail:</label></TD>
							<TD><input id="email" name="email" type="text"><br></TD>
							</TR>
							
							<TR>
							<TD><label for="straat">Straat:</label></TD>
							<TD><input id="straat" name="straat" type="text"><br></TD>
							</TR>
							
							<TR>
							<TD><label for="huisnummer">Huisnummer:</label></TD>
							<TD><input id="huisnummer" name="huisnummer" type="text"><br></TD>
							</TR>
							
							<TR>
							<TD><label for="postcode">Postcode:</label></TD>
							<TD><input id="postcode" name="postcode" type="text"><br></TD>
							</TR>
							
							<TR>
							<TD><label for="plaats">Plaats:</label></TD>
							<TD><input id="plaats" name="plaats" type="text"><br></TD>
							</TR>
							
							<TR>
							<TD><label for="telefoon">Telefoon:</label></TD>
							<TD><input id="telefoon" name="telefoon" type="text"><br></TD>
							</TR>
						</TABLE><input type="submit" class="button" name="submit" value="Registreer">
						
					</form>				
				</div>
			</div>
			<div id="banner">
				<img src="plaatjes/banner.gif" onclick="location.href='overview.html';" style="cursor:pointer;" alt="logo"/>
			</div>
		</div>
	</body>
</html>