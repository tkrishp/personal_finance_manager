<?php
 
// Inialize session
session_start();
 
$_SESSION['summ_rep_num_of_wks'] = 12;
// Jump to secured page
header('Location: /hfm/reports/summ_rep_wkly.php');

 
?>
 