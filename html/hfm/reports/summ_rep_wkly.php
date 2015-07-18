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

	<style media="screen" type="text/css">
	
		#graph {
			margin:0px 10px 10px 20px;
			padding:0px;
		}
	
	</style>

	<script src="/hfm/javascript/functions.js" type="text/javascript"></script>
	<title>Home Finance Manager</title>
	<link href="/hfm/pics/startup.png" rel="apple-touch-startup-image" />
	<meta content="iPod,iPhone,Webkit,iWebkit,Website,Create,mobile,Tutorial,free" name="keywords" />
	<meta content="Try out all the new features of iWebKit 5 with a simple touch of a finger and a smooth screen rotation!" name="description" />

  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Week');
      data.addColumn('number', 'Expenses');
      
			<?php
				$db_host = 'tulcdb.db.8308713.hostedresource.com';
				$db_user = 'tulcdb';
				$db_pwd = 'Password2011';
				$database = 'tulcdb';
				
				$numofweeks = $_SESSION['summ_rep_num_of_wks'];
				
				$year = date("Y");
				$sysdate = date("m/d/Y", time());
				
				if (!mysql_connect($db_host, $db_user, $db_pwd))
				    echo die("Can't connect to database");
				if (!mysql_select_db($database))
				    echo die("Can't select database");
			
				$qry = "SELECT a.WEEK_IN_YEAR AS WEEK_IN_YEAR, SUM(a.AMOUNT) AS AMT
								FROM HFM_ORDER_DTL a
								WHERE a.YEAR_NUM = " . $year . "
								AND a.WEEK_IN_YEAR <= WEEKOFYEAR(STR_TO_DATE( '". $sysdate . "',  '%m/%d/%Y' )) 
								AND a.WEEK_IN_YEAR >= WEEKOFYEAR(STR_TO_DATE( '". $sysdate . "',  '%m/%d/%Y' )) - " . $numofweeks . " 
								GROUP BY a.WEEK_IN_YEAR
								ORDER BY CONVERT(a.WEEK_IN_YEAR, SIGNED) ASC";
				
				$numofweeks = $numofweeks + 1;
				echo "data.addRows(" . $numofweeks . ");";
				
				$result = mysql_query($qry);
				$fields_num = mysql_num_fields($result);			

				$rowcount = 0;
				$colcount = 0;
				
				while($row = mysql_fetch_row($result))
				{	
					$colcount = 0;
					
					foreach($row as $cell) {
						
						if ($colcount == 0) {
				   		echo "data.setValue(" . $rowcount . "," . $colcount . ", '" . $cell . "');";
				   	}
				   	
				   	if ($colcount == 1) {
				   		echo "data.setValue(" . $rowcount . "," . $colcount . ", " . $cell . ");";
				   	}
				   	
				   	$colcount++;
				 
				 	} // foreach ends
				 
				 	$rowcount++;
				
				} // while ends
			?>

      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
      chart.draw
      (
				data, 
				{
					width: 425,
					height: 300,
					title: 'Weekly Expenses',
					backgroundColor: 'white',
					chartArea:
					{
						left:40,
						right:40,
						width:"90%",
						height:"65%"
					},					
	        hAxis: 
	        {
	        	title:'Week', 
        		titleTextStyle: 
        		{
        			color: 'red'
        		}
	        }
				}
			);
    }
  </script>
</head>

<body>
	
	<div id="topbar">
		<div id="leftnav">
			<a href="/hfm/main.php"><img alt="home" src="/hfm/images/home.png" />Home</a>
			<a href="/hfm/summ_rep_options_wkly.php">Back</a>
			<a href="/hfm/logout.php">Logout</a>
		</div>
	</div>

	<div id="graph">
		<div id="content">
		    <div id="chart_div"></div>
		</div>
	</div>

	<div id="content">
		
		<ul class="pageitem">		
				
			<li class="textbox">
				<span class="header">Other Options</span>
			</li>	
							
			<li class="menu">
				<a href="/hfm/summ_rep_options_wkly.php">
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