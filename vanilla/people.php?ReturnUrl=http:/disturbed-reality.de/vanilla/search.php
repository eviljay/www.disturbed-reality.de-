﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de-de">
	<head>
		<title>disturbed-reality - Einloggen</title>
		<link rel="shortcut icon" href="/vanilla/themes/vanilla/styles/cloud6/favicon.ico" />
				<link rel="stylesheet" type="text/css" href="/vanilla/themes/vanilla/styles/cloud6/people.css" media="screen" />
				<link rel="stylesheet" type="text/css" href="/vanilla/extensions/Signatures/style.css" />
				<script type="text/javascript" src="/vanilla/js/global.js"></script></head>
	<body  onload="Focus('txtUsername');">
	<div id="SiteContainer"><div class="SiteContainer SignIn">
	<h1>disturbed-reality</h1><div id="Form" class="SignInForm">
	<fieldset><form id="frmSignIn" method="post" action="http://disturbed-reality.de/vanilla/people.php"><div><input type="hidden" name="ReturnUrl" value="http%3A%2F%2Fdisturbed-reality.de%2Fvanilla%2Fsearch.php" />
				<input type="hidden" name="PostBackAction" value="SignIn" />
				</div><ul>
	<li>
		<label for="txtUsername">Benutzername</label>
		<input id="txtUsername" type="text" name="Username" value="" class="Input" maxlength="20" />
	</li>
	<li>
		<label for="txtPassword">Passwort</label>
		<input id="txtPassword" type="password" name="Password" value="" class="Input" />
	</li>
	<li id="RememberMe">
		<label for="RememberMeID"><input type="checkbox" name="RememberMe" value="1"   id="RememberMeID" /> Mit diesem Browser angemeldet bleiben</label>
	</li>
</ul>
<div class="Submit"><input type="submit" name="btnSignIn" value="Anmelden" class="Button" /></div>
</form>
</fieldset>
<ul class="MembershipOptionLinks">
	<li class="ForgotPasswordLink"><a href="http://disturbed-reality.de/vanilla/people.php?PostBackAction=PasswordRequestForm">Passwort vergessen?</a></li>
	<li class="ApplyForMembershipLink"><a href="http://disturbed-reality.de/vanilla/people.php?PostBackAction=ApplyForm">Registrieren</a></li>
</ul>
</div></div>
<div class="Foot SignIn"><a href="http://lussumo.com">Lussumo Vanilla, Swell, and People</a> Copyright &copy; 2001-2006</div></body>
</html>