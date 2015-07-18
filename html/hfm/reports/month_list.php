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
			<a href="/hfm/reports/summ_rep_mnthly.php">Back</a>
			<a href="/hfm/logout.php">Logout</a>
		</div>
	</div>

	
	<div id="content">
		
		<ul class="pageitem">		

			<li class="textbox">
				<span class="header">Choose a Month</span>
			</li>
					
			<li class="menu">
				<a href="/hfm/reports/bridge/dtl_rep_01_jan_val.php">
					<span class="name">January</span>
					<span class="arrow"></span>
				</a>
			</li>

			<li class="menu">
				<a href="/hfm/reports/bridge/dtl_rep_02_feb_val.php">
					<span class="name">February</span>
					<span class="arrow"></span>
				</a>
			</li>

			<li class="menu">
				<a href="/hfm/reports/bridge/dtl_rep_03_mar_val.php">
					<span class="name">March</span>
					<span class="arrow"></span>
				</a>
			</li>

			<li class="menu">
				<a href="/hfm/reports/bridge/dtl_rep_04_apr_val.php">
					<span class="name">April</span>
					<span class="arrow"></span>
				</a>
			</li>
			
			<li class="menu">
				<a href="/hfm/reports/bridge/dtl_rep_05_may_val.php">
					<span class="name">May</span>
					<span class="arrow"></span>
				</a>
			</li>
	
			<li class="menu">
				<a href="/hfm/reports/bridge/dtl_rep_06_jun_val.php">
					<span class="name">June</span>
					<span class="arrow"></span>
				</a>
			</li>
			
			<li class="menu">
				<a href="/hfm/reports/bridge/dtl_rep_07_jul_val.php">
					<span class="name">July</span>
					<span class="arrow"></span>
				</a>
			</li>

			<li class="menu">
				<a href="/hfm/reports/bridge/dtl_rep_08_aug_val.php">
					<span class="name">August</span>
					<span class="arrow"></span>
				</a>
			</li>

			<li class="menu">
				<a href="/hfm/reports/bridge/dtl_rep_09_sep_val.php">
					<span class="name">September</span>
					<span class="arrow"></span>
				</a>
			</li>

			<li class="menu">
				<a href="/hfm/reports/bridge/dtl_rep_10_oct_val.php">
					<span class="name">October</span>
					<span class="arrow"></span>
				</a>
			</li>

			<li class="menu">
				<a href="/hfm/reports/bridge/dtl_rep_11_nov_val.php">
					<span class="name">November</span>
					<span class="arrow"></span>
				</a>
			</li>

			<li class="menu">
				<a href="/hfm/reports/bridge/dtl_rep_12_dec_val.php">
					<span class="name">December</span>
					<span class="arrow"></span>
				</a>
			</li>

						
		</ul>
		
		<ul class="pageitem">			
		
			<li class="textbox">
				<span class="header">Other Options</span>
			</li>	
							
			<li class="menu">
				<a href="/hfm/reports/summ_rep_mnthly.php">
					<img alt="wordpress" src="/hfm/thumbs/backarrow.png" />
					<span class="name">Back To Summary Report</span>
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
