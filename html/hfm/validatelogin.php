<?php

require '/home/content/08/9868208/html/dblogin.php';

// Inialize session
session_start();

if (!mysql_connect($db_host, $db_user, $db_pwd))
   echo die("Can't connect to database" . mysql_error());
if (!mysql_select_db($database))
   echo die("Can't select database");			

$qry = "SELECT * 
				FROM HFM_USR 
				WHERE (USR_NAME = '" . mysql_real_escape_string($_POST['username']) . "') 
				and (PASSWD = '" . mysql_real_escape_string(md5($_POST['password'])) . "')";

// Retrieve username and password from database according to user's input
$login = mysql_query($qry);

// Check username and password match
if (mysql_num_rows($login) == 1) {
// Set username session variable
$_SESSION['username'] = $_POST['username'];
// Jump to secured page
header('Location: /hfm/main.php');

}
else {
// Jump to login page
header('Location: /hfm/index.php');

}

?>

