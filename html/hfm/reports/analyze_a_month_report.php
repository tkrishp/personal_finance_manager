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
	var data;

    function drawChart() {
      data = new google.visualization.DataTable();

      data.addColumn('string', 'Category');
      data.addColumn('number', 'Total Amount');

			<?php
			

				//echo "Session month: " . $_SESSION['dtl_rep_mon_num'];

				$prc_month = $_SESSION['dtl_rep_mon_num'];

				$year = $_SESSION['dtl_rep_yr_num'];

				if (!mysql_connect($db_host, $db_user, $db_pwd))
				    echo die("Can't connect to database");
				if (!mysql_select_db($database))
				    echo die("Can't select database");

				//echo "Month: ". $prc_month;

				$qry = "SELECT DISTINCT MONTH_NAME
						FROM HFM_MONTH
						WHERE MONTH_NUM = " . $prc_month . "";
				//echo $qry;
				$result = mysql_query($qry);
				while($row = mysql_fetch_row($result))
				{
					foreach($row as $cell) {
						$mnthname = $cell;
					}
				}

				$qry = "SELECT COUNT(DISTINCT a.TXN_SUBTYPE1)
						FROM HFM_ORDER_DTL a
						WHERE a.YEAR_NUM = " . $year . "
						AND a.MONTH_NUM = " . $prc_month . "
						AND a.TXN_SUBTYPE1 IN (SELECT DISTINCT TXN_SUBTYPE1 FROM HFM_TXN_TYPE WHERE REPORT_FLAG = 'Y')
						";
						//echo $qry;

				$result = mysql_query($qry);
				while($row = mysql_fetch_row($result))
				{
					foreach($row as $cell) {
						$txn_count = $cell;
					}
				}

				$qry = "SELECT SUM(CONVERT(a.AMOUNT, SIGNED)) AS AMT
								FROM HFM_ORDER_DTL a
								WHERE a.YEAR_NUM = " . $year . "
								AND a.MONTH_NUM = " . $prc_month . "
								AND a.TXN_SUBTYPE1 IN (SELECT DISTINCT TXN_SUBTYPE1 FROM HFM_TXN_TYPE WHERE REPORT_FLAG = 'Y')
								";

				$result = mysql_query($qry);
				while($row = mysql_fetch_row($result))
				{
					foreach($row as $cell) {
						$mnthly_total = $cell;
					}
				}

				$qry = "SELECT a.TXN_SUBTYPE1 AS ORDER_TYPE, SUM(CONVERT(a.AMOUNT, SIGNED)) AS AMT
								FROM HFM_ORDER_DTL a
								WHERE a.YEAR_NUM = " . $year . "
								AND a.MONTH_NUM = " . $prc_month . "
								AND a.TXN_SUBTYPE1 IN (SELECT DISTINCT TXN_SUBTYPE1 FROM HFM_TXN_TYPE WHERE REPORT_FLAG = 'Y')
								GROUP BY a.TXN_SUBTYPE1
								ORDER BY SUM(CONVERT(a.AMOUNT, SIGNED)) DESC";

				echo "data.addRows(" . $txn_count . ");";

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
					title: 'Total expenses for <?php echo $mnthname. " " . $year; ?> are: $<?php echo $mnthly_total; ?>',
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
	        	title:'Expense Type',
        		titleTextStyle:
        		{
        			color: 'red'
        		}
	        }
				}
			);


      var chart = new google.visualization.PieChart(document.getElementById('piechart_div'));
      chart.draw
      (
				data,
				{
					width: 425,
					height: 300,
					title: 'Total expenses for <?php echo $mnthname. " " . $year; ?> are: $<?php echo $mnthly_total; ?>',
					backgroundColor: 'white',
					is3D: true,
					legend: 'right',
					chartArea:
					{
						left:40,
						right:40,
						width:"90%",
						height:"65%"
					}
				}
			);

      var chart = new google.visualization.Table(document.getElementById('tablechart_div'));
      chart.draw
      (
				data,
				{
					width: 425,
				}
			);

    }
  </script>

  <script type="text/javascript">
    google.load("visualization", "1", {packages:["table"]});
    google.setOnLoadCallback(drawTable);

    function drawTable() {

      var chart = new google.visualization.Table(document.getElementById('tablechart_div'));
      chart.draw
      (
				data,
				{
					width: 425,
				}
			);

    }
  </script>

</head>

<body>

	<div id="topbar">
		<div id="leftnav">
			<a href="/hfm/main.php"><img alt="home" src="/hfm/images/home.png" />Home</a>
			<a href="/hfm/reports/month_list.php">Back</a>
			<a href="/hfm/logout.php">Logout</a>
		</div>
	</div>

	<div id="graph">
		<div id="content">
		    <div id="chart_div"></div>
		</div>
	</div>


	<div id="graph">
		<div id="content">
		    <div id="piechart_div"></div>
		</div>
	</div>

	<div id="graph">
		<div id="content">
		    <div id="tablechart_div"></div>
		</div>
	</div>

	<div id="content">

		<ul class="pageitem">

			<li class="textbox">
				<span class="header">Other Options</span>
			</li>

			<li class="menu">
				<a href="/hfm/reports/expense_list.php">
					<img alt="wordpress" src="/hfm/images/icon7.png" />
					<span class="name">Analyze an Expense</span>
					<span class="arrow"></span>
				</a>
			</li>

			<li class="menu">
				<a href="/hfm/reports/summ_rep_mnthly.php">
					<img alt="wordpress" src="/hfm/images/icon6.png" />
					<span class="name">Back to Summary Report</span>
					<span class="arrow"></span>
				</a>
			</li>

			<li class="menu">
				<a href="/hfm/reports/month_list.php">
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