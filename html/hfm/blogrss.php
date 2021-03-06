<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: /hfm/index.php');
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
<script src="javascipt/functions.js" type="text/javascript"></script>
<title>iWebKit Demo - Embed RSS feeds into your iPhone website.</title>
<meta content="iPod,iPhone,Webkit,iWebkit,Website,Create,mobile,Tutorial,free" name="Keywords" />
<meta content="Add any rss feed right to your iPhone website. It automaticly gets formatted to fit the width of the page." name="description" />
</head>

<body>

<div id="topbar">
	<div id="leftnav">
		<a href="/hfm/main.php"><img alt="home" src="/hfm/images/home.png" /></a>
			<a href="/hfm/logout.php">Logout</a></div>
</div>


<div id="content">
	<span class="graytitle">Apple's Hot news</span>	
	<?php include("php/rss.php");?>
</div>
<div id="footer">
	<!-- Support iWebKit by sending us traffic; please keep this footer on your page, consider it a thank you for my work :-) -->
	<a class="noeffect" href="http://snippetspace.com">iPhone site powered by iWebKit</a></div>
</body>
</html>
