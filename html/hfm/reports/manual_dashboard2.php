<html>
<head>
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta content="index,follow" name="robots" />
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<link href="/dev/hfm/pics/homescreen.gif" rel="apple-touch-icon" />
	<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
	<link href="/dev/hfm/css/style.css" rel="stylesheet" media="screen" type="text/css" />
 
	<style media="screen" type="text/css">
	
		#graph {
			margin:0px 10px 10px 20px;
			padding:0px;
		}
	
	</style>
 
	<script src="/dev/hfm/javascript/functions.js" type="text/javascript"></script>
	<title>Home Finance Manager</title>
	<link href="/dev/hfm/pics/startup.png" rel="apple-touch-startup-image" />
	<meta content="iPod,iPhone,Webkit,iWebkit,Website,Create,mobile,Tutorial,free" name="keywords" />
	<meta content="Try out all the new features of iWebKit 5 with a simple touch of a finger and a smooth screen rotation!" name="description" />

<script type="text/javascript">
function sendAlert()
{
var x = document.getElementById("charttype");
if (x.value == "pie") {
  alert('Pie chart');
}
else if (x.value == "column") {
  alert('Column chart');
}

}

function upperCase()
{
var x=document.getElementById("fname");
x.value=x.value.toUpperCase();
}
</script>

  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript">

    google.load("visualization", "1", {packages:["corechart"]});
	
    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Order Type');
      data.addColumn('number', 'Expenses');
      
		data.addRows(12);data.setValue(0,0, 'RENT');data.setValue(0,1, 1294);data.setValue(1,0, 'TRAVEL');data.setValue(1,1, 940);data.setValue(2,0, 'AUTO');data.setValue(2,1, 831);data.setValue(3,0, 'ENTERTAINMENT');data.setValue(3,1, 548);data.setValue(4,0, 'MEDICAL');data.setValue(4,1, 464);data.setValue(5,0, 'HOME IMPROVEMENT');data.setValue(5,1, 453);data.setValue(6,0, 'GROCERIES');data.setValue(6,1, 235);data.setValue(7,0, 'RESTAURANT');data.setValue(7,1, 221);data.setValue(8,0, 'TELECOMMUNICATION');data.setValue(8,1, 125);data.setValue(9,0, 'PHARMACY');data.setValue(9,1, 72);data.setValue(10,0, 'MISCELLANEOUS');data.setValue(10,1, 69);data.setValue(11,0, 'INTERNET');data.setValue(11,1, 65);
      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
      chart.draw
      (
				data, 
				{
					width: 450,
					height: 300,
					title: 'Total expenses for MARCH 2012 are: $5317',
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
					width: 450,
					height: 300,
					title: 'Total expenses for MARCH 2012 are: $5317',
					backgroundColor: 'white',
					is3D: true,
					legend: 'right',
					chartArea:
					{
						left:20,
						right:20,
						width:"90%",
						height:"75%"
					}
				}
			);
						
    }

    google.setOnLoadCallback(drawChart);
	
  </script>
  
</head>
<body>

	<div id="topbar">
		<div id="leftnav">
			<a href="/dev/hfm/main.php"><img alt="home" src="/dev/hfm/images/home.png" />Home</a>
			<a href="/dev/hfm/reports/month_list.php">Back</a>
			<a href="/dev/hfm/logout.php">Logout</a>
		</div>
	</div>

		<span class="graytitle">Chart Type</span>
		<ul class="pageitem">
			<li class="select">
			<select name="charttype" onblur="alert('hello!');">
				<option value="pie">Pie Chart</option>
				<option value="column">Column Chart</option>
			</select>
		<span class="arrow"></span>
		</ul>

	
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
				<a href="/dev/hfm/reports/expense_list.php">
					<img alt="wordpress" src="/dev/hfm/images/icon7.png" />
					<span class="name">Analyze an Expense</span>
					<span class="arrow"></span>
				</a>
			</li>
			
			<li class="menu">
				<a href="/dev/hfm/reports/summ_rep_mnthly.php">
					<img alt="wordpress" src="/dev/hfm/images/icon6.png" />
					<span class="name">Back to Summary Report</span>
					<span class="arrow"></span>
				</a>
			</li>
 
			<li class="menu">
				<a href="/dev/hfm/reports/month_list.php">
					<img alt="wordpress" src="/dev/hfm/thumbs/backarrow.png" />
					<span class="name">Go Back</span>
					<span class="arrow"></span>
				</a>
			</li>
			
			<li class="menu">
				<a href="/dev/hfm/logout.php">
					<img alt="wordpress" src="/dev/hfm/thumbs/logout.png" />
					<span class="name">Logout</span>
					<span class="arrow"></span>
				</a>
			</li>
		</ul>
	</div>	</body>
</html>

