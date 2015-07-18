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
<script src="javascript/functions.js" type="text/javascript"></script>
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

	$qry = "SELECT DISTINCT STATE FROM HFM_LOCATION WHERE CITY = '" . $_SESSION["location"] . "'";
	$result = mysql_query($qry);
	while($row = mysql_fetch_row($result))
	{
	    foreach($row as $cell)
	       $state = $cell;
	}

	$txn_date = $_POST["txndate"];

	$insert_statement = "INSERT INTO HFM_ORDER_DTL
												(OWNER, 
												CITY, 
												STATE, 
												TXN_TYPE, 
												CARD_TYPE, 
												LAST4, 
												TXN_SUBTYPE1, 
												TXN_SUBTYPE2, 
												TXN_SUBTYPE3, 
												AMOUNT, 
												SYSDATE,
												YEAR_NUM,
												MONTH_NUM,
												MONTH_NAME,
												WEEK_NUM,
												WEEK_DAY,
												DAY_IN_YEAR,
												WEEK_IN_YEAR,
												QUARTER,
												CMNTS
											)
											VALUES (
											'" . $_SESSION["owner"] . "', 
											'". $_SESSION["location"] . "',
											'" . $state . "',
											'". $_SESSION["credit_type"] . "',
											'". $_SESSION["credit_type"] . "',
											'". $_POST["carddtl"] . "',
											'". $_SESSION["subtype1"] . "',
											'". $_POST["subtype2"] . "',
											NULL,
											TRIM('". $_POST["amount"] . "'),
											'". $sysdate . "',  
											EXTRACT(YEAR FROM STR_TO_DATE( '". $sysdate . "', '%m/%d/%Y' )), 
											MONTH(STR_TO_DATE( '". $sysdate . "', '%m/%d/%Y' )),
											UPPER(MONTHNAME(STR_TO_DATE( '". $sysdate . "',  '%m/%d/%Y' ))),
											DAYOFWEEK(STR_TO_DATE( '". $sysdate . "',  '%m/%d/%Y' )),
											UPPER(DAYNAME(STR_TO_DATE( '". $sysdate . "',  '%m/%d/%Y' ))),
											DAYOFYEAR(STR_TO_DATE( '". $sysdate . "',  '%m/%d/%Y' )),
											WEEKOFYEAR(STR_TO_DATE( '". $sysdate . "',  '%m/%d/%Y' )),
											QUARTER(STR_TO_DATE( '". $sysdate . "',  '%m/%d/%Y' )),
											TRIM('". $_POST["cmnts"] . "')
											)";
	/*
	$result = mysql_query($insert_statement);
	
	if (!$result) {
		$msg = $insert_statement . "Data Load - [FAIL]";
	}
	else {
		$msg = "Data successufully loaded";
	}
	*/
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
				<a href="/hfm/admin/choose_expense_types.php">
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
		