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
<link href="pics/homescreen.gif" rel="apple-touch-icon" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="css/style.css" rel="stylesheet" media="screen" type="text/css" />
<script src="/hfm/javascript/functions.js" type="text/javascript"></script>
<script src="/hfm/javascript/jquery.js" type="text/javascript"></script>
<script src="/hfm/javascript/jq_func.js" type="text/javascript"></script>
<title>Home Finance Manager
</title>
<link href="pics/startup.png" rel="apple-touch-startup-image" />
<meta content="iPod,iPhone,Webkit,iWebkit,Website,Create,mobile,Tutorial,free" name="keywords" />
<meta content="Try out all the new features of iWebKit 5 with a simple touch of a finger and a smooth screen rotation!" name="description" />
</head>

<body>
<?php
	
	if (!mysql_connect($db_host, $db_user, $db_pwd))
	    echo die("Can't connect to database");
	if (!mysql_select_db($database))
	    echo die("Can't select database");			
?>

	<div id="topbar">
		<div id="leftnav">
			<a href="/hfm/main.php"><img alt="home" src="/hfm/images/home.png" />Home</a>
			<a href="/hfm/main.php">Back</a>
			<a href="/hfm/logout.php">Logout</a>
		</div>
	</div>

	<div id="content">
		<form name="form1" action="" method="post">
			
			<fieldset>
				<span class="graytitle" id="gtitle_header">Provide following information</span>
				<p></p>
				<p></p>
					
				<span class="graytitle">Owner</span>
				<ul class="pageitem">
					<li class="select">
						<select name="owner" id="owner">
								<?php
									$qry = 'SELECT DISTINCT OWNER_NAME FROM HFM_OWNER ORDER BY OWNER_NAME DESC';
									$result = mysql_query($qry);
									if (!$result) {
									    echo die("Query to show fields from table failed");
									}
									while($row = mysql_fetch_row($result))
									{
									    foreach($row as $cell)
									        echo "<OPTION VALUE=\"$cell\">$cell</OPTION>";
									}
									mysql_free_result($result);
								?>
						</select>	
						<span class="arrow"></span> 
					</li>
				</ul>
		
				<span class="graytitle">Location</span>
				<ul class="pageitem">
					<li class="select">
						<select name="location" id="location">
								<?php
									$qry = 'SELECT DISTINCT CITY FROM HFM_LOCATION ORDER BY CITY';
									$result = mysql_query($qry);
									if (!$result) {
									    echo die("Query to show fields from table failed");
									}
									while($row = mysql_fetch_row($result))
									{
									    foreach($row as $cell) {
                                                                                if (strcmp($cell, "SUNNYVALE") == 0) {
                                                                                  echo "<OPTION VALUE=\"$cell\" selected>$cell</OPTION>";
                                                                                }
                                                                                else {
									          echo "<OPTION VALUE=\"$cell\">$cell</OPTION>"; 
                                                                                }
                                                                            }
									}
									mysql_free_result($result);
								?>
						</select>	
						<span class="arrow"></span> 
					</li>
				</ul>
									
				<span class="graytitle">Expense Date</span>
				<ul class="pageitem">
					<li class="select">
						<input id="selectdate" name="selectdate" type="date"></input>
				</ul>

				<span class="graytitle">Category</span>
				<ul class="pageitem">
					<li class="select">
						<select name="subtype1" class="subtype1" id="subtype1">
								<?php
									$qry = 'SELECT DISTINCT TXN_SUBTYPE1 FROM HFM_TXN_TYPE ORDER BY TXN_SUBTYPE1';
									$result = mysql_query($qry);
									if (!$result) {
									    echo die("Query to show fields from table failed");
									}
									while($row = mysql_fetch_row($result))
									{
									    foreach($row as $cell)
									        echo "<OPTION VALUE=\"$cell\">$cell</OPTION>";
									}
									mysql_free_result($result);
								?>
						</select>	
						<span class="arrow"></span> 
					</li>
				</ul>
				
				<span class="graytitle" id="gtitle_cmnts">Comments</span>
				<ul class="pageitem">
					<li class="textbox"><span class="header"></span>
					<textarea name="cmnts" id="cmnts" rows="4"></textarea></li>
				</ul>

				<span class="graytitle">Expense Amount</span>
				<ul class="pageitem">
					<li class="bigfield">
						<input placeholder="99999.99" id="amnt" type="text" name="amnt" />
					</li>
				</ul>				
				
				<ul class="pageitem" id="pageitem_button">
					<li class="button" >
						<input name="submit" id="id_btn" type="submit" value="Save" />
					</li>
				
				</ul>

				<span class="graytitle">Credit/Debit</span>
				<ul class="pageitem">
					<li class="select">
					<select name="cd" id="cd">
						<option value="credit">Credit</option>
						<option value="debit">Debit</option>
						<option value="cash">Cash</option>
					</select>
					<span class="arrow"></span>
				</ul>

				<span class="graytitle">Card Details</span>
				<ul class="pageitem">
					<li class="select">
						<select name="carddtl" id="carddtl">
							<OPTION VALUE="Main">Main</OPTION>
						</select>	
						<span class="arrow"></span> 
					</li>
				</ul>
				
			</fieldset>
		
		</form>	
	
	</div>
	
	<div id="wait">
		<img src="/hfm/pics/wait_icon_indicatorbig2.gif" value="Loading..." />
	</div>
	
	<div id="content">
		<ul class="pageitem">			
		
			<li class="textbox">
				<span class="header">Other Options</span>
			</li>	
							
			<li class="menu" id="menu_addnew_id">
				<a href="/hfm/form1.php">
					<img alt="wordpress" src="/hfm/thumbs/backarrow.png" />
					<span class="name">Add Another Expense</span>
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