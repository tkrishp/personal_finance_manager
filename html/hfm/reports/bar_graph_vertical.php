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
      data.addColumn('string', 'Month');
      data.addColumn('number', 'Expenses');
      
			<?php
				require '/hfm/dblogin.php';
			
				if (!mysql_connect($db_host, $db_user, $db_pwd))
				    echo die("Can't connect to database");
				if (!mysql_select_db($database))
				    echo die("Can't select database");
			
				$qry = "SELECT b.MONTH_NAME_SHORT AS MONTH_NAME_SHORT, SUM(a.AMOUNT) AS AMT, a.MONTH_NUM AS MONTH_NUM
								FROM HFM_ORDER_DTL a,
								HFM_MONTH b
								WHERE a.MONTH_NAME = b.MONTH_NAME
								AND a.MONTH_NUM < 13
								AND a.MONTH_NUM > 0
								GROUP BY a.MONTH_NUM, b.MONTH_NAME_SHORT
								ORDER BY a.MONTH_NUM ASC";
			
				echo "data.addRows(12);";
				
				$result = mysql_query($qry);
				$fields_num = mysql_num_fields($result);			

				$rowcount = 0;
				$colcount = 0;
				
				while($row = mysql_fetch_row($result))
				{	/*
					echo "data.setValue(" . $incr . ", 0, '" . $row['MONTH_NAME_SHORT'] . "');";
					echo "data.setValue(" . $incr . ", 1, " . $row['AMT'] . ");"; */

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
					title: 'Monthly Expenses',
					backgroundColor: '#E1EEF4',
					chartArea:
					{
						left:40,
						right:40,
						width:"90%",
						height:"65%"
					},					
	        hAxis: 
	        {
	        	title:'Month', 
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
			<a href="/hfm/main.php"><img alt="home" src="/hfm/images/home.png" /></a>
				<a href="/hfm/logout.php">Logout</a></div>
	</div>

	<div id="graph">
		<div id="content">
		    <div id="chart_div"></div>
		</div>
	</div>

</body>

</html>