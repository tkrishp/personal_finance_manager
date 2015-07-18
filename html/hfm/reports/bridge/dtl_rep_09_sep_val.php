<?php
 
// Inialize session
session_start();
 
$_SESSION['dtl_rep_mon_num'] = 9;
// Jump to secured page
header('Location: /hfm/reports/analyze_a_month_report.php');
?>
 