<?php	
	require '/home/content/08/9868208/html/dblogin.php';

	if (!mysql_connect($db_host, $db_user, $db_pwd))
	    echo die("Can't connect to database");
	if (!mysql_select_db($database))
	    echo die("Can't select database");

	$qry = "SELECT DISTINCT STATE FROM HFM_LOCATION WHERE CITY = '" . $_POST["location"] . "'";
	$result = mysql_query($qry);
	while($row = mysql_fetch_row($result))
	{
	    foreach($row as $cell)
	       $state = $cell;
	}

	$txn_date = $_POST["selectdate"];

	$sysdate = date("m/d/Y", strtotime($txn_date));
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
				'" . $_POST["owner"] . "', 
				'". $_POST["location"] . "',
				'" . $state . "',
				UPPER('". $_POST["cd"] . "'),
				UPPER('". $_POST["cd"] . "'),
				'". $_POST["carddtl"] . "',
				'". $_POST["subtype1"] . "',
				'". $_POST["subtype2"] . "',
				NULL,
				TRIM('". $_POST["amnt"] . "'),
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
	
	$result = mysql_query($insert_statement);
	
	if (!$result) {
		$msg = array(
				'error' => true, 
				'message' => 
					"<div id=\"content\">
						<ul class=\"pageitem\">
							<li class=\"textbox\">
								<span class=\"header\">Result: </span>" . $insert_statement . "Data Load - [FAIL]" . "
							</li>
						</ul>
					</div>" 
				);
	}
	else {
		$msg = array(
				'error' => false, 
				'message' => 
					"<div id=\"content\">
						<ul class=\"pageitem\">
							<li class=\"textbox\">
								<span class=\"header\">Result: </span>Data successfully loaded
							</li>
						</ul>
					</div>"				
				);

	}
	
	echo json_encode($msg);
?>
