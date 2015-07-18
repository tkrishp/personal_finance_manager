<?php
 
// Inialize session
session_start();
 
$_SESSION['summ_rep_num_of_mnths'] = 2;
// Jump to secured page
header('Location: /hfm/reports/summ_rep_mnthly.php');

 
?>
 