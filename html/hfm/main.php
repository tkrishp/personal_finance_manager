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
<script src="javascript/functions.js" type="text/javascript"></script>
<title>Home Finance Manager
</title>
<link href="pics/startup.png" rel="apple-touch-startup-image" />
<meta content="iPod,iPhone,Webkit,iWebkit,Website,Create,mobile,Tutorial,free" name="keywords" />
<meta content="Try out all the new features of iWebKit 5 with a simple touch of a finger and a smooth screen rotation!" name="description" />
</head>

<body>

	<div id="topbar">
		<div id="leftnav">
			<a href="/hfm/main.php"><img alt="home" src="/hfm/images/home.png" />Home</a>
			<a href="/hfm/logout.php">Logout</a>
		</div>
	</div>
	
	<div id="content">
	
		<span class="graytitle">Available Features</span>
		
		<ul class="pageitem">
		
			<li class="textbox">
				<span class="header">Home Finance Manager</span>
				<p>Please &quot;choose&quot; an option below</p>
			</li>
			
			<li class="menu">
				<a href="/hfm/form1.php">
					<img alt="list" src="/hfm/thumbs/plugin.png" />
					<span class="name">Data Entry</span>
					<span class="arrow"></span>
				</a>
			</li>
			
			<li class="menu">
				<a href="/hfm/main.php">
					<img alt="wordpress" src="/hfm/thumbs/start.png" />
					<span class="name">Grids</span>
					<span class="arrow"></span>
				</a>
			</li>
			
			<li class="menu">
				<a href="/hfm/reports/summ_rep_12mnth_val.php">
					<img alt="music" src="/hfm/thumbs/other.png" />
					<span class="name">Reports</span>
					<span class="arrow"></span>
				</a>
			</li>
			
			<li class="menu">
				<a href="/hfm/admin_main.php">
					<img alt="store" src="/hfm/thumbs/accessibility.png" />
					<span class="name">Admin</span><span class="arrow"></span>
				</a>
			</li>
			
			<li class="menu">
				<a href="/hfm/main.php">
					<img alt="wordpress" src="/hfm/thumbs/voice.png" />
					<span class="name">Go Home</span>
					<span class="arrow"></span>
				</a>
			</li>
			
			<li class="menu">
				<a href="/hfm/logout.php">
					<img alt="wordpress" src="/hfm/thumbs/logout.png" />
					<span class="name">Logout</span>
					<span class="arrow"></span>
				</a>
			</li>
			
		</ul>
		
	</div>

</body>

</html>
