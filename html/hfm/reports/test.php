
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
			padding:10px;
			background-image:url('/hfm/images/home.png');
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
      
			data.addRows(6);
			
			data.setValue(0,0, 'APR');
			data.setValue(0, 1, 1169.9);
			
			data.setValue(1,0, 'MAY');
			data.setValue(1,1, 1296);
			
			data.setValue(2,0, 'JUN');
			data.setValue(2,1, 933);
			
			data.setValue(3,0, 'JUL');
			data.setValue(3,1, 1494);
			
			data.setValue(4,0, 'AUG');
			data.setValue(4,1, 150);
			
			data.setValue(5,0, 'SEP');
			data.setValue(5,1, 809);
			
      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
      chart.draw(data, {width: 600, height: 400, title: 'Monthly Expenses',
                        hAxis: {title: 'Month', titleTextStyle: {color: 'red'}}
                       });
    }
	</script>
</head>

<body>

	<div id="topbar">
		<div id="leftnav">
			<a href="/hfm/main.php"><img alt="home" src="/hfm/images/home.png" /></a>
				<a href="/hfm/logout.php">Logout</a></div>
	</div>
	
	<div id ="graph">
		<div id="content">
			<div id="chart_div"></div>
		</div>
	</div>
	
</body>

</html>
