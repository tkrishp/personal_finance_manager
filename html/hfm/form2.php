<?php

require '/home/content/08/9868208/html/dblogin.php';

if (isset($_POST["subtype1"])) {

	$subtype1 = $_POST["subtype1"];
	
	//echo "onwer: " . $owner . ", location: " . $location . ", credit type: " . $credit_type . ", subtype1: " . $subtype1 . ", credit: " . $_POST["credit"] . ", debit: " . $_POST["debit"];
	if (!mysql_connect($db_host, $db_user, $db_pwd))
	    echo die("Can't connect to database");
	if (!mysql_select_db($database))
	    echo die("Can't select database");

	$qry = "SELECT DISTINCT TXN_SUBTYPE2 FROM HFM_TXN_TYPE WHERE TXN_SUBTYPE1 = '" . $subtype1 . "' ORDER BY TXN_SUBTYPE2";
	$result = mysql_query($qry);
	echo "<span class=\"graytitle\" id=\"gtitle_subcat\">Sub Category</span> <ul class=\"pageitem\" id=\"pageitem_subtype2\"> <li class=\"select\"> <select name=\"subtype2\" class=\"subtype2\" id=\"subtype2\">";
	
	if (!$result) {
			echo "<option value=\"\">Error!!!</option>";
	}
	else 
	{
		while($row = mysql_fetch_assoc($result))
		{
			echo "<OPTION VALUE=\"". $row["TXN_SUBTYPE2"] . "\">". $row["TXN_SUBTYPE2"] . "</OPTION>";
		}
		mysql_free_result($result);
	}
	
	echo "</select> <span class=\"arrow\"></span> </li> </ul>";
}

?>
