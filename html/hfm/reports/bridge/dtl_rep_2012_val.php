<?php
 
// Inialize session
session_start();
 
$_SESSION['dtl_rep_yr_num'] = 2012;
// Jump to secured page
header('Location: /hfm/reports/month_list.php');
?>
 