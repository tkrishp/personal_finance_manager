<?php

require '/home/content/08/9868208/html/dblogin.php';

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
	
<?php


	if (!mysql_connect($db_host, $db_user, $db_pwd))
	    echo die("Can't connect to database");
	if (!mysql_select_db($database))
	    echo die("Can't select database");
	
	$select_statement = "SELECT COUNT(*) FROM HFM_TXN_TYPE WHERE TXN_SUBTYPE2 = UPPER('" . $_POST["txnsubtype"] . "')";
	
	$result1 = mysql_query($select_statement);
	
	while($row = mysql_fetch_row($result1))
	{
		foreach($row as $cell)
			if ($cell > 0) {
				$msg = "Txn Type Already Exists - Request Denied";
			}
			else {
				$insert_statement = "INSERT INTO HFM_TXN_TYPE (TXN_SUBTYPE1, TXN_SUBTYPE2) VALUES (UPPER('" . $_POST["txntype"] . "'), UPPER('" . $_POST["txnsubtype"] . "'))";
				$result2 = mysql_query($insert_statement);
				
				if (!$result2) {
					$msg = $insert_statement . "Data Load - [FAIL]";
				}
				else {
					$msg = "New TxnType successfully added";
				}				
			}
	}
	mysql_free_result($result1);	
?>


	<div id="topbar">
		<div id="leftnav">
			<a href="/hfm/main.php"><img alt="home" src="/hfm/images/home.png" />Home</a>
			<a href="/hfm/logout.php">Logout</a>
		</div>
	</div>

	<div id="content">
		<ul class="pageitem">
			<li class="textbox">
				<span class="header">Result</span> 
				<?php echo $msg ?>
				</li>
		</ul>
	</div>

	<div id="content">
		<ul class="pageitem">			
		
			<li class="textbox">
				<span class="header">Other Options</span>
			</li>	

			<li class="menu">
				<a href="/hfm/main.php">
					<img alt="wordpress" src="/hfm/thumbs/backarrow.png" />
					<span class="name">Home</span>
					<span class="arrow"></span>
				</a>
			</li>

			<li class="menu">
				<a href="/hfm/admin_main.php">
					<img alt="wordpress" src="/hfm/thumbs/backarrow.png" />
					<span class="name">Admin Main</span>
					<span class="arrow"></span>
				</a>
			</li>
			
			<li class="menu">
				<a href="/hfm/admin/admin_new_txntype_form.php">
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
