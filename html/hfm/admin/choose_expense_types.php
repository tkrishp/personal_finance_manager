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

<title>Home Finance Manager
</title>
<link href="/hfm/pics/startup.png" rel="apple-touch-startup-image" />
<meta content="iPod,iPhone,Webkit,iWebkit,Website,Create,mobile,Tutorial,free" name="keywords" />
<meta content="Try out all the new features of iWebKit 5 with a simple touch of a finger and a smooth screen rotation!" name="description" />
</head>

<body>
<?php

	$owner = $_POST["owner"];
	$_SESSION["owner"] = $owner;
	$location = $_POST["location"];
	$_SESSION["location"] = $location;
	$credit_type = $_POST["credit"] = "credit" ? "CREDIT" : "DEBIT";
	$_SESSION["credit_type"] = $credit_type;
	$subtype1 = $_POST["subtype1"];
	$_SESSION["subtype1"] = $subtype1;

	//echo "onwer: " . $owner . ", location: " . $location . ", credit type: " . $credit_type . ", subtype1: " . $subtype1 . ", credit: " . $_POST["credit"] . ", debit: " . $_POST["debit"];
	if (!mysql_connect($db_host, $db_user, $db_pwd))
	    echo die("Can't connect to database"  . mysql_error());
	if (!mysql_select_db($database))
	    echo die("Can't select database");			
?>

	<div id="topbar">
		<div id="leftnav">
			<a href="/hfm/main.php"><img alt="home" src="/hfm/images/home.png" />Home</a>
			<a href="/hfm/admin_main.php">Back</a>
			<a href="/hfm/logout.php">Logout</a>
		</div>
	</div>
	
	<div id="content">
		<form name="form1" action="/hfm/admin/choose_expense_types.php?update=yes" method="post">


		<?php
			if ($_GET["update"] == "yes") {
					$qry = "SELECT DISTINCT TXN_SUBTYPE1 FROM HFM_TXN_TYPE ORDER BY TXN_SUBTYPE1";
					$result = mysql_query($qry);
					if (!$result) {
							echo "<option value=\"\">Error!!!</option>";
					}
					else {
						while($row = mysql_fetch_assoc($result))
						{
							$expensetype = str_replace(" ", "", $row["TXN_SUBTYPE1"]);
							
							if (isset($_POST[$expensetype])) {
								$upd_qry = "UPDATE HFM_TXN_TYPE SET REPORT_FLAG = \"Y\" WHERE TXN_SUBTYPE1 = '" . $row["TXN_SUBTYPE1"] . "'";
							}
							else {
								$upd_qry = "UPDATE HFM_TXN_TYPE SET REPORT_FLAG = \"N\" WHERE TXN_SUBTYPE1 = '" . $row["TXN_SUBTYPE1"] . "'";
							}
							
							$upd_result = mysql_query($upd_qry);
							
							if (!$upd_result) {
								$err_flag = "Y";
								$err_msg = $expensetype . $err_msg;
							}				
						}
						
						if ($err_flag == "Y") {
							$msg = "Errors encountered while saving; contact administrator";
						}
						else {
							$msg = "Changes saved";
						}
						mysql_free_result($result);
					}
			}
		?>		
			<fieldset>

				<?php
					if ($_GET["update"] == "yes") {
						echo "<ul class=\"pageitem\">";
						echo "<li class=\"textbox\"><span class=\"header\"></span><p>" . $msg . "</p>";
						echo "</li>";
						echo "</ul>";
						$msg = "";
					}
				?>
	
				<span class="graytitle"> </span>
				<ul class="pageitem">
					<?php
						$qry = "SELECT DISTINCT TXN_SUBTYPE1, REPORT_FLAG FROM HFM_TXN_TYPE ORDER BY TXN_SUBTYPE1";
						$result = mysql_query($qry);
						if (!$result) {
								echo "<option value=\"\">Error!!!</option>";
						}
						else {
							while($row = mysql_fetch_assoc($result))
							{
								echo "<li class=\"checkbox\">";
								if ($row["REPORT_FLAG"] == 'Y') {
									echo "<span class=\"name\">".$row["TXN_SUBTYPE1"]."</span><input name=\"".str_replace(" ", "", $row["TXN_SUBTYPE1"])."\" type=\"checkbox\" checked=\"checked\"/>";
								}
								else {
									echo "<span class=\"name\">".$row["TXN_SUBTYPE1"]."</span><input name=\"".str_replace(" ", "", $row["TXN_SUBTYPE1"])."\" type=\"checkbox\"/>";
								}
								echo "</li>";
							}
							mysql_free_result($result);
						}
					?>
				</ul>
				
				<ul class="pageitem">				
					<li class="button">
						<input name="Submit input" type="submit" value="Save" />
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
		