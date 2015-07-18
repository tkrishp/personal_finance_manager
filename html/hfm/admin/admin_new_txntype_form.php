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
<link href="/hfm/pics/homescreen.gif" rel="apple-touch-icon" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="/hfm/css/style.css" rel="stylesheet" media="screen" type="text/css" />
<script src="/hfm/javascript/functions.js" type="text/javascript"></script>
<title>Home Finance Manager</title>
<link href="/hfm/pics/startup.png" rel="apple-touch-startup-image" />
<meta content="iPod,iPhone,Webkit,iWebkit,Website,Create,mobile,Tutorial,free" name="keywords" />
<meta content="Try out all the new features of iWebKit 5 with a simple touch of a finger and a smooth screen rotation!" name="description" />
</head>

<body>
	<div id="topbar">
		<div id="leftnav">
			<a href="/hfm/main.php"><img alt="home" src="/hfm/images/home.png" />Home</a>
			<a href="/hfm/admin_main.php">Back</a>
			<a href="/hfm/logout.php">Logout</a>
		</div>
	</div>

	<div id="content">
		<form name="form1" action="/hfm/admin/admin_new_txntype_dataload.php" method="post">
			
			<fieldset>
	
				<span class="graytitle">Enter Txn Type</span>
				<ul class="pageitem">
					<li class="bigfield">
						<input placeholder="New txn type" type="text" name="txntype" />
					</li>
				</ul>
				
				<span class="graytitle">Enter Txn Sub-Type</span>
				<ul class="pageitem">
					<li class="bigfield">
						<input placeholder="New txn sub-type" type="text" name="txnsubtype" />
					</li>
				</ul>
				
				<ul class="pageitem">				
					<li class="button">
						<input name="Submit input" type="submit" value="Submit" />
					</li>
	
				</ul>
				
			</fieldset>
		
		</form>	
	
	</div>

	<div id="content">
		<ul class="pageitem">			
		
			<li class="textbox">
				<span class="header">Other Options</span>
			</li>	
							
			<li class="menu">
				<a href="/hfm/admin_main.php">
					<img alt="wordpress" src="/hfm/thumbs/backarrow.png" />
					<span class="name">Go Back</span>
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
