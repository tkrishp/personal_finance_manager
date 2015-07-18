<!DOCTYPE html>
<html>
	<head>
	<title>Dashboard Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>

  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
	var data;

    function drawChart() {
      data = new google.visualization.DataTable();

      data.addColumn('string', 'Category');
      data.addColumn('number', 'Total Amount');

		data.addRows(12);

		data.setValue(0,0, 'RENT');data.setValue(0,1, 1157);
		data.setValue(1,0, 'TRAVEL');data.setValue(1,1, 1059);
		data.setValue(2,0, 'AUTO');data.setValue(2,1, 1003);
		data.setValue(3,0, 'HOME IMPROVEMENT');data.setValue(3,1, 334);
		data.setValue(4,0, 'GROCERIES');data.setValue(4,1, 312);
		data.setValue(5,0, 'MISCELLANEOUS');data.setValue(5,1, 293);
		data.setValue(6,0, 'MEDICAL');data.setValue(6,1, 273);
		data.setValue(7,0, 'TELECOMMUNICATION');data.setValue(7,1, 193);
		data.setValue(8,0, 'PHARMACY');data.setValue(8,1, 163);
		data.setValue(9,0, 'RESTAURANT');data.setValue(9,1, 119);
		data.setValue(10,0, 'INTERNET');data.setValue(10,1, 73);
		data.setValue(11,0, 'INSURANCE');data.setValue(11,1, 54);

      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
      chart.draw
      (
				data,
				{
					width: 472,
					height: 350,
					title: 'Total expenses for APRIL 2012 are: $5041',
					backgroundColor: '#F9FC67',
					chartArea:
					{
						left: 40,
						right: 20,
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
	}

  </script>

</head>
<body>

<div data-role="page" data-theme="d">

	<div data-role="header">
		<div data-role="navbar">
			<ul>
				<li><a href="collapsible.php" data-icon="home" data-transition="flip">Summary</a></li>
				<li><a href="#" data-icon="back">Back</a></li>
				<li><a href="#" data-icon="gear">Setup</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /header -->

	<div class="ui-grid-a" >
		<div class="ui-block-a">
			<div class="ui-bar">
				<div class="ui-bar-e" style="height:400px">
					<div data-role="fieldcontain">
						<fieldset data-role="controlgroup" data-type="horizontal">

							<select name="select-choice-month" id="select-choice-month" data-mini="true">
								<option>Month</option>
								<option value="jan">January</option>
							<!-- etc. -->
							</select>

							<select name="select-choice-day" id="select-choice-day" data-mini="true">
								<option>Day</option>
								<option value="1">1</option>
							<!-- etc. -->
							</select>

							<select name="select-choice-year" id="select-choice-year" data-mini="true">
								<option>Year</option>
								<option value="2011">2011</option>
								<!-- etc. -->
							</select>

							<div id="chart_div"></div>
						</fieldset>
					</div>



				</div>
			</div>
		</div>
		<div class="ui-block-b">
			<div class="ui-bar">
				<div class="ui-bar-e" style="height:400px">
					Block B
				</div>
			</div>
		</div>

		<div class="ui-block-a">
			<div class="ui-bar">
				<div class="ui-bar-e" style="height:400px">
					Block C
				</div>
			</div>
		</div>

		<div class="ui-block-b">
			<div class="ui-bar">
				<div class="ui-bar-e" style="height:400px">
					Block D
				</div>
			</div>
		</div>
	</div><!-- /grid-b -->


	<div class="ui-grid-a" >
		<div class="ui-bar">
			<div class="ui-block-a">
				<div class="ui-bar-e" style="height:400px">
					Block A1
				</div>
			</div>
			<div class="ui-block-b">
				<div class="ui-bar-e" style="height:400px">
					Block B1
				</div>
			</div>
		</div>
	</div>

	<div class="ui-grid-a" >
		<div class="ui-bar">
			<div class="ui-block-a">
				<div class="ui-bar-e" style="height:600px; width:200px">
					Block D1
				</div>
			</div>
			<div class="ui-block-b">
				<div class="ui-bar-e" style="height:600px; width:600px">
					Block D1
				</div>
			</div>
		</div>

	</div><!-- /grid-b -->


	<div data-role="content">
		<p>Content here!</p>
		<div id="chart_div"></div>

		<a href="collapsible.php" data-role="button" data-transition="flip" data-mini="true">Link button</a>

	</div><!-- /content -->

	<div data-role="footer">
		<div data-role="navbar">
			<ul>
				<li><a href="#" data-icon="grid">Summary</a></li>
				<li><a href="#" data-icon="star">Favs</a></li>
				<li><a href="#" data-icon="gear">Setup</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->


</div><!-- /page -->

</body>
</html>
