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

    function drawChart() {

      var data = new google.visualization.DataTable();

      data.addColumn('string', 'Expense Type');
      data.addColumn('number', 'Expenses');


			<?php

				$subtype1 = $_POST["subtype1"];
				$_SESSION["subtype1"] = $subtype1;
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

				$qry = "SELECT COUNT(DISTINCT a.TXN_SUBTYPE2)
						FROM HFM_ORDER_DTL a
						WHERE a.YEAR_NUM = " . $year . "
						AND a.MONTH_NUM = " . $prc_month . "
						AND a.TXN_SUBTYPE1 = '" . $subtype1 . "'";

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
						AND a.TXN_SUBTYPE1 = '". $subtype1 . "'";

								//echo $qry;

				$result = mysql_query($qry);
				while($row = mysql_fetch_row($result))
				{
					foreach($row as $cell) {
						$expense_total = $cell;
					}
				}

				$qry = "SELECT a.TXN_SUBTYPE2 AS ORDER_TYPE, SUM(CONVERT(a.AMOUNT, SIGNED)) AS AMT
						FROM HFM_ORDER_DTL a
						WHERE a.YEAR_NUM = " . $year . "
						AND a.MONTH_NUM = " . $prc_month . "
						AND a.TXN_SUBTYPE1 = '" . $subtype1 . "'
						GROUP BY a.TXN_SUBTYPE2
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
					width: 450,
					height: 300,
					title: 'Month: <?php echo $mnthname . " " . $year; ?>, Expense Type: <?php echo $subtype1; ?>, Total: $<?php echo $expense_total; ?>',
					backgroundColor: 'white',
					chartArea:
					{
						left:40,
						right:40,
						width:"95%",
						height:"60%"
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
					width: 450,
					height: 300,
					title: 'Month: <?php echo $mnthname . " " . $year; ?>, Expense Type: <?php echo $subtype1; ?>, Total: $<?php echo $expense_total; ?>',
					backgroundColor: 'white',
					is3D: true,
					legend: 'right',
					chartArea:
					{
						left:40,
						right:40,
						width:"95%",
						height:"60%"
					}
				}
			);

    }
  </script>

  <script type="text/javascript">
    google.load("visualization", "1", {packages:["table"]});
    google.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Expense');
      data.addColumn('string', 'Date');
      data.addColumn('string', 'Amount');
      data.addColumn('string', 'Comments');

			<?php
				$subtype1 = $_POST["subtype1"];
				$_SESSION["subtype1"] = $subtype1;
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

				$qry = "SELECT COUNT(*)
						FROM HFM_ORDER_DTL a
						WHERE a.YEAR_NUM = " . $year . "
						AND a.MONTH_NUM = " . $prc_month . "
						AND a.TXN_SUBTYPE1 = '" . $subtype1 . "'";

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
						AND a.TXN_SUBTYPE1 = '". $subtype1 . "'";

								//echo $qry;

				$result = mysql_query($qry);
				while($row = mysql_fetch_row($result))
				{
					foreach($row as $cell) {
						$expense_total = $cell;
					}
				}

				$qry = "SELECT a.TXN_SUBTYPE2 AS ORDER_TYPE, a.SYSDATE AS ORD_DATE,
						CONVERT(a.AMOUNT, SIGNED) AS AMNT,
						CMNTS
						FROM HFM_ORDER_DTL a
						WHERE a.YEAR_NUM = " . $year . "
						AND a.MONTH_NUM = " . $prc_month . "
						AND a.TXN_SUBTYPE1 = '" . $subtype1 . "'
						ORDER BY STR_TO_DATE(a.SYSDATE, '%m/%d/%Y'), a.TXN_SUBTYPE2";
				//echo $qry;
				echo "data.addRows(" . $txn_count . ");";

				$result = mysql_query($qry);
				$fields_num = mysql_num_fields($result);

				$rowcount = 0;
				$colcount = 0;

				while($row = mysql_fetch_row($result))
				{
					$colcount = 0;

					foreach($row as $cell) {
				   	echo "data.setCell(" . $rowcount . "," . $colcount . ", '" . $cell . "');";
				   	$colcount++;
				 	} // foreach ends

				 	$rowcount++;

				} // while ends
			?>

      var chart = new google.visualization.Table(document.getElementById('gridchart_div'));
      chart.draw
      (
				data,
				{
					width: 450,
				}
			);
    }
  </script>

  <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    var tabledata;

    function drawChart() {
      tabledata = new google.visualization.DataTable();
      tabledata.addColumn('string', 'Month');
      tabledata.addColumn('number', 'Amount');

			<?php
				$subtype1 = $_POST["subtype1"];
				$_SESSION["subtype1"] = $subtype1;
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

				$qry = "SELECT COUNT(DISTINCT CONCAT(a.MONTH_NAME, '-', a.YEAR_NUM))
						FROM HFM_ORDER_DTL a
						WHERE STR_TO_DATE(a.SYSDATE, '%m/%d/%Y') >= DATE_ADD(LAST_DAY(DATE(DATE_ADD(SYSDATE(), INTERVAL -13 MONTH))), INTERVAL 1 DAY)
						AND STR_TO_DATE(a.SYSDATE, '%m/%d/%Y') <= LAST_DAY(DATE(SYSDATE()))
						AND a.TXN_SUBTYPE1 = '" . $subtype1 . "'";

				$result = mysql_query($qry);
				while($row = mysql_fetch_row($result))
				{
					foreach($row as $cell) {
						$txn_count = $cell;
					}
				}

				$qry = "SELECT SUM(CONVERT(a.AMOUNT, SIGNED)) AS AMT
						FROM HFM_ORDER_DTL a
						WHERE
						STR_TO_DATE(a.SYSDATE, '%m/%d/%Y') >= DATE_ADD(LAST_DAY(DATE(DATE_ADD(SYSDATE(), INTERVAL -13 MONTH))), INTERVAL 1 DAY)
						AND STR_TO_DATE(a.SYSDATE, '%m/%d/%Y') <= LAST_DAY(DATE(SYSDATE()))
						AND a.TXN_SUBTYPE1 = '". $subtype1 . "'";

				//echo $qry;

				$result = mysql_query($qry);
				while($row = mysql_fetch_row($result))
				{
					foreach($row as $cell) {
						$expense_total = $cell;
					}
				}

				$expense_avg = number_format($expense_total / 12, 2, '.', '');

				$qry = "SELECT CONCAT(b.MONTH_NAME_SHORT, '-', a.YEAR_NUM) PERIOD, SUM(CONVERT(a.AMOUNT, SIGNED)) AS AMT
						FROM HFM_ORDER_DTL a,
						HFM_MONTH b
						WHERE
						STR_TO_DATE(a.SYSDATE, '%m/%d/%Y') >= DATE_ADD(LAST_DAY(DATE(DATE_ADD(SYSDATE(), INTERVAL -13 MONTH))), INTERVAL 1 DAY)
						AND STR_TO_DATE(a.SYSDATE, '%m/%d/%Y') <= LAST_DAY(DATE(SYSDATE()))
						AND a.TXN_SUBTYPE1 = '" . $subtype1 . "'
						AND a.MONTH_NUM = b.MONTH_NUM
						GROUP BY PERIOD
						ORDER BY CONVERT(a.YEAR_NUM, SIGNED) ASC, CONVERT(a.MONTH_NUM, SIGNED) ASC";

				echo "tabledata.addRows(" . $txn_count . ");";

				$result = mysql_query($qry);
				$fields_num = mysql_num_fields($result);

				$rowcount = 0;
				$colcount = 0;

				while($row = mysql_fetch_row($result))
				{
					$colcount = 0;

					foreach($row as $cell) {

						if ($colcount == 0) {
				   		echo "tabledata.setValue(" . $rowcount . "," . $colcount . ", '" . $cell . "');";
				   	}

				   	if ($colcount == 1) {
				   		echo "tabledata.setValue(" . $rowcount . "," . $colcount . ", " . $cell . ");";
				   	}

				   	$colcount++;

				 	} // foreach ends

				 	$rowcount++;

				} // while ends
			?>

      var chart = new google.visualization.ColumnChart(document.getElementById('expense_per_month_chart'));
      chart.draw
      (
				tabledata,
				{
					width: 450,
					height: 300,
					title: '12 Month Total: $<?php echo $expense_total; ?>, Average per month: $<?php echo $expense_avg; ?>',
					backgroundColor: 'white',
					chartArea:
					{
						left:40,
						right:40,
						width:"95%",
						height:"60%"
					},
	        hAxis:
	        {
	        	title:'Monthly Expense for <?php echo $subtype1; ?>',
        		titleTextStyle:
        		{
        			color: 'red'
        		}
	        }
				}
			);
    }
  </script>

  <script type="text/javascript">
    google.load("visualization", "1", {packages:["table"]});
    google.setOnLoadCallback(drawTable);

    function drawTable() {

    		<?php

				$qry = "SELECT CONCAT(b.MONTH_NAME_SHORT, '-', a.YEAR_NUM) PERIOD, SUM(CONVERT(a.AMOUNT, SIGNED)) AS AMT
						FROM HFM_ORDER_DTL a,
						HFM_MONTH b
						WHERE
						STR_TO_DATE(a.SYSDATE, '%m/%d/%Y') >= DATE_ADD(LAST_DAY(DATE(DATE_ADD(SYSDATE(), INTERVAL -13 MONTH))), INTERVAL 1 DAY)
						AND STR_TO_DATE(a.SYSDATE, '%m/%d/%Y') <= LAST_DAY(DATE(SYSDATE()))
						AND a.TXN_SUBTYPE1 = '" . $subtype1 . "'
						AND a.MONTH_NUM = b.MONTH_NUM
						GROUP BY PERIOD
						ORDER BY CONVERT(a.YEAR_NUM, SIGNED) DESC, CONVERT(a.MONTH_NUM, SIGNED) DESC";


				$result = mysql_query($qry);
				$fields_num = mysql_num_fields($result);

				$rowcount = 0;
				$colcount = 0;

				while($row = mysql_fetch_row($result))
				{
					$colcount = 0;

					foreach($row as $cell) {

						if ($colcount == 0) {
				   		echo "tabledata.setValue(" . $rowcount . "," . $colcount . ", '" . $cell . "');";
				   	}

				   	if ($colcount == 1) {
				   		echo "tabledata.setValue(" . $rowcount . "," . $colcount . ", " . $cell . ");";
				   	}

				   	$colcount++;

				 	} // foreach ends

				 	$rowcount++;

				} // while ends
			?>


      var chart = new google.visualization.Table(document.getElementById('tablechart_div'));
      chart.draw
      (
				tabledata,
				{
					width: 450,
				}
			);

    }
  </script>


</head>

<body>
	<div id="topbar">
		<div id="leftnav">
			<a href="/hfm/main.php"><img alt="home" src="/hfm/images/home.png" />Home</a>
			<a href="/hfm/reports/expense_list.php">Back</a>
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
		    <div id="gridchart_div"></div>
		</div>
	</div>

	<div id="content">
		<div id="graph">
			<div id="content">
			    <div id="expense_per_month_chart"></div>
			</div>
		</div>
	</div>

	<div id="content">
		<div id="graph">
			<div id="content">
			    <div id="tablechart_div"></div>
			</div>
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
					<span class="name">Change the Expense Type</span>
					<span class="arrow"></span>
				</a>
			</li>

			<li class="menu">
				<a href="/hfm/reports/analyze_a_month_report.php">
					<img alt="wordpress" src="/hfm/images/icon5.png" />
					<span class="name">Back to Detail Report</span>
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
				<a href="/hfm/reports_main.php">
					<img alt="wordpress" src="/hfm/thumbs/backarrow.png" />
					<span class="name">Reports Home</span>
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