<?php

// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username'])) {
header('Location: /hfm/main.php');
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="index,follow" name="robots" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="pics/homescreen.gif" rel="apple-touch-icon" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="css/style.css" rel="stylesheet" media="screen" type="text/css" />
<script src="javascript/functions.js" type="text/javascript"></script>
<title>Finance Assistant</title>
<link href="pics/startup.png" rel="apple-touch-startup-image" />
<meta content="iPod,iPhone,Webkit,iWebkit,Website,Create,mobile,Tutorial,free" name="keywords" />
<meta content="Try out all the new features of iWebKit 5 with a simple touch of a finger and a smooth screen rotation!" name="description" />
</head>

<body>

<div id="topbar">
	<div id="title">
		Finance Assisant</div>
</div>
<div id="tributton">
	<div class="links">
		<a id="pressed" href="#">Home</a><a href="/hfm/index.php">Changelog</a><a href="/hfm/index.php">About</a></div>
</div>
<div id="content">
	<ul class="pageitem">
		<li class="textbox"><span class="header"></span><p>
		Welcome!!!</p>
		</li>
	</ul>
	<form method="post" action="/hfm/validatelogin.php">
		<fieldset><span class="graytitle">Provide Login Information</span>
		<ul class="pageitem">
			<li class="bigfield"><input placeholder="Username" name="username" type="text" /></li>
			<li class="bigfield"><input placeholder="Password" name="password" type="password" /></li>
			<li class="button"><input name="login" type="submit" value="Login" /></li>			
		</ul>
		</fieldset>
	</form>	
</div>

</body>

</html>
