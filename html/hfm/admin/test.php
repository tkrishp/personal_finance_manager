


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



	<div id="topbar">

		<div id="leftnav">

			<a href="/hfm/main.php"><img alt="home" src="/hfm/images/home.png" />Home</a>

			<a href="/hfm/admin_main.php">Back</a>

			<a href="/hfm/logout.php">Logout</a>

		</div>

	</div>

	<?php
		
		if ($_GET["update"] == "yes") {
			$char = "AUTO";
			if (isset($_POST[$char])) {
				echo "Auto is set!";
			}
			else {
				echo "Auto is not set!";
			}

			if (isset($_POST["HOMEIMPROVEMENT"])) {
				echo "HOME IMPROVEMENT is set!";
			}
			else {
				echo "HOME IMPROVEMENT is not set!";
			}
		}
		else {
			echo "Update not set!";
		}

	?>
	
	<div id="content">

		<form name="form1" action="/hfm/admin/test.php?update=yes" method="post">

			

			<fieldset>

				<span class="graytitle"> </span>

				<ul class="pageitem">

					<li class="checkbox"><span class="name">AUTO</span><input name="AUTO" type="checkbox"/></li>
					<li class="checkbox"><span class="name">ENTERTAINMENT</span><input name="ENTERTAINMENT" type="checkbox" checked="checked"/></li>
					<li class="checkbox"><span class="name">GROCERIES</span><input name="GROCERIES" type="checkbox" checked="checked"/></li>
					<li class="checkbox"><span class="name">HOME IMPROVEMENT</span><input name="HOMEIMPROVEMENT" type="checkbox" checked="checked"/></li>
					<li class="checkbox"><span class="name">INSURANCE</span><input name="INSURANCE" type="checkbox" checked="checked"/></li>
					<li class="checkbox"><span class="name">INTERNET</span><input name="INTERNET" type="checkbox" checked="checked"/></li>
					<li class="checkbox"><span class="name">MEDICAL</span><input name="MEDICAL" type="checkbox" checked="checked"/></li>
					<li class="checkbox"><span class="name">MISCELLANEOUS</span><input name="MISCELLANEOUS" type="checkbox" checked="checked"/></li>
					<li class="checkbox"><span class="name">PHARMACY</span><input name="PHARMACY" type="checkbox" checked="checked"/></li>
					<li class="checkbox"><span class="name">RENT</span><input name="RENT" type="checkbox" checked="checked"/></li>
					<li class="checkbox"><span class="name">RESTAURANT</span><input name="RESTAURANT" type="checkbox" checked="checked"/></li>
					<li class="checkbox"><span class="name">SPECIAL</span><input name="SPECIAL" type="checkbox" checked="checked"/></li>
					<li class="checkbox"><span class="name">TELECOMMUNICATION</span><input name="TELECOMMUNICATION" type="checkbox" checked="checked"/></li>
					<li class="checkbox"><span class="name">TRAVEL</span><input name="TRAVEL" type="checkbox" checked="checked"/></li>				

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

		