<?php
 
// Inialize session
session_start();
 
$_SESSION['dtl_rep_mon_num'] = 6;
// Jump to secured page
header('Location: /hfm/reports/analyze_a_month_report.php');
?>
 